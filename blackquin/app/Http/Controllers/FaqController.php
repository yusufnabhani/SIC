<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('order')->get();
        return view('faq.faq-index', compact('faqs'));
    }

    public function create()
    {
        return view('faq.faq-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'order' => 'nullable|integer',
        ]);

        $validated['order'] = $validated['order'] ?: ((Faq::max('order') ?? 0) + 1);

        Faq::create($validated);

        return redirect()->route('faq.index')->with('faq_success', 'FAQ created successfully!');
    }

    public function edit(Faq $faq)
    {
        return view('faq.faq-edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'order' => 'nullable|integer',
        ]);

        $faq->update($validated);

        return back()->with('faq_success', 'FAQ updated successfully!');
    }

    public function delete_faq(Request $request)
    {
        if ($request->filled('delete_all') && !empty($request->checkbox_array)) {
            Faq::whereIn('id', $request->checkbox_array)->delete();
            return back()->with('faq_success', 'FAQ/s deleted successfully!');
        }
        return back();
    }
}
