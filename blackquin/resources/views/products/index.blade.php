@extends('layouts.site')

@section('title', 'Our Products')
@section('meta', 'Discover coffee, spices and botanicals from PT Samudra International Commerce.')

@section('content')
<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Our products</div>
        <h1>Indonesian excellence.<br><span class="accent">In every ingredient.</span></h1>
        <p>Discover coffee, spices and botanicals for your business. Select a product to explore its origin, available forms and specifications.</p>
    </div>
</section>

<section class="section">
    <div class="sic-container">
        <div style="display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap;margin-bottom:36px;border-bottom:1px solid var(--sic-border);padding-bottom:20px;">
            <div style="display:flex;gap:28px;flex-wrap:wrap;">
                <a href="{{ route('products.index') }}" style="font-weight:700;color:{{ !$activeCategory ? 'var(--sic-navy)' : 'var(--sic-text-muted)' }};border-bottom:{{ !$activeCategory ? '2px solid var(--sic-amber)' : 'none' }};padding-bottom:6px;">All products</a>
                <a href="{{ route('products.index', ['category' => 'coffee_cocoa']) }}" style="font-weight:700;color:{{ $activeCategory === 'coffee_cocoa' ? 'var(--sic-navy)' : 'var(--sic-text-muted)' }};border-bottom:{{ $activeCategory === 'coffee_cocoa' ? '2px solid var(--sic-amber)' : 'none' }};padding-bottom:6px;">Coffee &amp; cocoa</a>
                <a href="{{ route('products.index', ['category' => 'spices']) }}" style="font-weight:700;color:{{ $activeCategory === 'spices' ? 'var(--sic-navy)' : 'var(--sic-text-muted)' }};border-bottom:{{ $activeCategory === 'spices' ? '2px solid var(--sic-amber)' : 'none' }};padding-bottom:6px;">Spices</a>
                <a href="{{ route('products.index', ['category' => 'botanicals']) }}" style="font-weight:700;color:{{ $activeCategory === 'botanicals' ? 'var(--sic-navy)' : 'var(--sic-text-muted)' }};border-bottom:{{ $activeCategory === 'botanicals' ? '2px solid var(--sic-amber)' : 'none' }};padding-bottom:6px;">Botanicals</a>
            </div>
            <form method="GET" style="display:flex;">
                <input type="text" name="q" value="{{ $search }}" placeholder="Search ingredients..." style="border:1px solid var(--sic-border);padding:10px 14px;min-width:220px;">
            </form>
        </div>

        @if($products->isEmpty())
            <p style="color:var(--sic-text-muted);">No products found.</p>
        @else
            <div class="grid-3">
                @foreach($products as $product)
                    <a class="product-card" href="{{ route('products.show', $product->slug) }}">
                        <div class="product-card__img">
                            <span class="product-card__badge">{{ \App\Models\Product::categoryLabel($product->category) }}</span>
                            <img src="{{ $product->image ? asset('images/sic/' . $product->image) : asset('images/sic/coffee.png') }}" alt="{{ $product->name }}">
                        </div>
                        <h3>{{ $product->name }} <span>&#8599;</span></h3>
                        <p class="muted">{{ $product->botanical_name }}</p>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</section>

<section class="section-dark">
    <div class="sic-container cta-banner">
        <h2>Your next great ingredient starts with a conversation.</h2>
        <a href="{{ route('quote') }}" class="btn btn-amber">Talk to our export team &#8599;</a>
    </div>
</section>
@endsection
