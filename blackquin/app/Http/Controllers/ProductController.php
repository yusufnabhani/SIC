<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Setting;
use App\Models\HeaderFooterSetting;
use Illuminate\Http\Request;

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
}
