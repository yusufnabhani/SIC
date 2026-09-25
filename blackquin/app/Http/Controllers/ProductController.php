<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Menu;
use App\Models\Product;
use App\Models\ProductForm;
use App\Models\Setting;
use App\Models\HeaderFooterSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected function baseData()
    {
        $currentLang = session()->has('lang')
            ? Language::where('code', session()->get('lang'))->first()
            : Language::where('is_default', 1)->first();

        $lang_id = $currentLang->id;

        return [
            'currentLang' => $currentLang,
            'langs' => Language::all(),
            'menus' => Menu::orderBy('order')->get(),
            'setting' => Setting::find($lang_id),
            'headerfooter' => HeaderFooterSetting::find($lang_id),
        ];
    }

    public function index(Request $request)
    {
        $data = $this->baseData();

        $query = Product::orderBy('order');
        if ($request->filled('category')) {
            $query->where('category', $request->get('category'));
        }
        if ($request->filled('q')) {
            $query->where('name', 'like', '%' . $request->get('q') . '%');
        }

        $data['products'] = $query->get();
        $data['activeCategory'] = $request->get('category');
        $data['search'] = $request->get('q');

        return view('products.index', $data);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $data = $this->baseData();
        $data['product'] = $product;
        $data['related'] = Product::where('id', '!=', $product->id)
            ->where('category', $product->category)
            ->inRandomOrder()->limit(3)->get();

        if ($data['related']->count() < 3) {
            $more = Product::where('id', '!=', $product->id)
                ->whereNotIn('id', $data['related']->pluck('id'))
                ->inRandomOrder()->limit(3 - $data['related']->count())->get();
            $data['related'] = $data['related']->merge($more);
        }

        return view('products.show', $data);
    }

    // ---------------- Admin CRUD ----------------

    public function admin_index()
    {
        $products = Product::orderBy('order')->get();
        return view('products.admin-index', compact('products'));
    }

    public function admin_create()
    {
        return view('products.admin-create');
    }

    public function admin_store(Request $request)
    {
        $request->merge(['slug' => $request->input('slug') ?: Str::slug($request->input('name'))]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'category' => 'required|in:coffee_cocoa,spices,botanicals',
            'botanical_name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'origin' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        $validated['order'] = $validated['order'] ?: ((Product::max('order') ?? 0) + 1);

        Product::create($validated);

        return redirect()->route('product.index')->with('product_success', 'Product created successfully!');
    }

    public function admin_edit(Product $product)
    {
        $product->load('forms');
        return view('products.admin-edit', compact('product'));
    }

    public function admin_update(Request $request, Product $product)
    {
        $request->merge(['slug' => $request->input('slug') ?: Str::slug($request->input('name'))]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'category' => 'required|in:coffee_cocoa,spices,botanicals',
            'botanical_name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'origin' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        $product->update($validated);

        return back()->with('product_success', 'Product updated successfully!');
    }

    public function delete_product(Request $request)
    {
        if ($request->filled('delete_all') && !empty($request->checkbox_array)) {
            Product::whereIn('id', $request->checkbox_array)->delete();
            return back()->with('product_success', 'Product/s deleted successfully!');
        }
        return back();
    }

    public function storeForm(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'origin' => 'nullable|string|max:255',
            'processing' => 'nullable|string|max:255',
            'screen' => 'nullable|string|max:255',
            'grade' => 'nullable|string|max:255',
            'moisture' => 'nullable|string|max:255',
            'defect_standard' => 'nullable|string|max:255',
            'packaging' => 'nullable|string|max:255',
        ]);

        $validated['order'] = ($product->forms()->max('order') ?? 0) + 1;
        $product->forms()->create($validated);

        return back()->with('product_success', 'Specification form added.');
    }

    public function deleteForm(ProductForm $form)
    {
        $product = $form->product;
        $form->delete();
        return redirect()->route('product.edit', $product)->with('product_success', 'Specification form removed.');
    }
}
