@extends('layouts.site')

@section('title', 'Sitemap')
@section('meta', 'All pages on the PT Samudra International Commerce website.')

@section('content')
<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Sitemap</div>
        <h1>Every page,<br><span class="accent">one place.</span></h1>
    </div>
</section>

<section class="section">
    <div class="sic-container" style="max-width:720px;">
        <h3 style="margin-bottom:16px;">Company</h3>
        <ul style="list-style:none;padding:0;margin:0 0 36px;">
            <li style="margin-bottom:10px;"><a href="{{ route('home') }}">Home</a></li>
            <li style="margin-bottom:10px;"><a href="{{ route('about') }}">About us</a></li>
            <li style="margin-bottom:10px;"><a href="{{ route('approach') }}">Our approach</a></li>
            <li style="margin-bottom:10px;"><a href="{{ route('quality') }}">Quality &amp; compliance</a></li>
            <li style="margin-bottom:10px;"><a href="{{ route('careers') }}">Careers</a></li>
        </ul>

        <h3 style="margin-bottom:16px;">Products</h3>
        <ul style="list-style:none;padding:0;margin:0 0 36px;">
            <li style="margin-bottom:10px;"><a href="{{ route('products.index') }}">All products</a></li>
            @foreach($products as $product)
                <li style="margin-bottom:10px;"><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></li>
            @endforeach
        </ul>

        <h3 style="margin-bottom:16px;">Connect</h3>
        <ul style="list-style:none;padding:0;margin:0;">
            <li style="margin-bottom:10px;"><a href="{{ route('insights.index') }}">Insights</a></li>
            <li style="margin-bottom:10px;"><a href="{{ route('contact') }}">Contact</a></li>
            <li style="margin-bottom:10px;"><a href="{{ route('quote') }}">Request a quote</a></li>
            <li style="margin-bottom:10px;"><a href="{{ route('faq') }}">FAQs</a></li>
        </ul>
    </div>
</section>
@endsection
