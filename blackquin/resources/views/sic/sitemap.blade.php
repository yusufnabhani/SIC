@extends('layouts.site')

@section('title', 'Sitemap')
@section('meta', 'One brand. Every touchpoint. All pages on the PT Samudra International Commerce website.')

@section('content')
<div class="sic-breadcrumb"><div class="sic-container"><a href="{{ route('home') }}">Home</a> / Sitemap</div></div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Sitemap</div>
        <h1>One brand.<br><span class="accent">Every touchpoint.</span></h1>
        <p>Every page on the Samudra International Commerce website, in one place.</p>
    </div>
</section>

<section class="section-tight">
    <div class="sic-container" style="display:flex;gap:40px;flex-wrap:wrap;padding-bottom:28px;border-bottom:1px solid var(--sic-border);">
        <div style="display:flex;align-items:center;gap:12px;"><span style="width:36px;height:36px;border-radius:50%;background:var(--sic-navy);display:inline-block;"></span><div><div style="font-weight:700;">Samudra Blue</div><div style="font-size:12px;color:var(--sic-text-muted);">#1b3b5a</div></div></div>
        <div style="display:flex;align-items:center;gap:12px;"><span style="width:36px;height:36px;border-radius:50%;background:var(--sic-amber);display:inline-block;"></span><div><div style="font-weight:700;">Samudra Gold</div><div style="font-size:12px;color:var(--sic-text-muted);">#e1a13b</div></div></div>
        <div style="display:flex;align-items:center;gap:12px;"><span style="width:36px;height:36px;border-radius:50%;background:#fff;border:1px solid var(--sic-border);display:inline-block;"></span><div><div style="font-weight:700;">White</div><div style="font-size:12px;color:var(--sic-text-muted);">#ffffff</div></div></div>
    </div>
</section>

<section class="section">
    <div class="sic-container grid-4">
        <div>
            <h3 style="font-size:18px;margin-bottom:20px;">Company</h3>
            <ul style="list-style:none;padding:0;margin:0;">
                <li style="margin-bottom:14px;"><a href="{{ route('home') }}">Home &#8599;</a></li>
                <li style="margin-bottom:14px;"><a href="{{ route('about') }}">About us &#8599;</a></li>
                <li style="margin-bottom:14px;"><a href="{{ route('approach') }}">Our approach &#8599;</a></li>
                <li style="margin-bottom:14px;"><a href="{{ route('quality') }}">Quality &amp; compliance &#8599;</a></li>
                <li style="margin-bottom:14px;"><a href="{{ route('careers') }}">Careers &#8599;</a></li>
                <li style="margin-bottom:14px;"><a href="{{ route('contact') }}">Contact &#8599;</a></li>
            </ul>
        </div>
        <div>
            <h3 style="font-size:18px;margin-bottom:20px;">Products</h3>
            <ul style="list-style:none;padding:0;margin:0;">
                <li style="margin-bottom:14px;"><a href="{{ route('products.index') }}">Product catalog &#8599;</a></li>
                @foreach($products as $product)
                    <li style="margin-bottom:14px;"><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }} &#8599;</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <h3 style="font-size:18px;margin-bottom:20px;">Insights</h3>
            <ul style="list-style:none;padding:0;margin:0;">
                <li style="margin-bottom:14px;"><a href="{{ route('insights.index') }}">Journal &#8599;</a></li>
                @foreach(\App\Models\Post::orderBy('created_at', 'desc')->get() as $post)
                    <li style="margin-bottom:14px;"><a href="{{ url('/post/' . $post->slug) }}">{{ $post->title }} &#8599;</a></li>
                @endforeach
                <li style="margin-bottom:14px;"><a href="{{ route('faq') }}">Frequently asked questions &#8599;</a></li>
            </ul>
        </div>
        <div>
            <h3 style="font-size:18px;margin-bottom:20px;">Let&rsquo;s connect</h3>
            <ul style="list-style:none;padding:0;margin:0;">
                <li style="margin-bottom:14px;"><a href="{{ route('quote') }}">Request a quote &#8599;</a></li>
                <li style="margin-bottom:14px;"><a href="{{ route('contact') }}">Contact us &#8599;</a></li>
                <li style="margin-bottom:14px;"><a href="{{ route('faq') }}">FAQs &#8599;</a></li>
            </ul>
        </div>
    </div>
</section>
@endsection
