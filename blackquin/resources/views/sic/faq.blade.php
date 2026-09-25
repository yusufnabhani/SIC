@extends('layouts.site')

@section('title', 'FAQ')
@section('meta', 'Find answers about our products, sourcing and quotation process.')

@section('content')
<div class="sic-breadcrumb"><div class="sic-container"><a href="{{ route('home') }}">Home</a> / Frequently asked questions</div></div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Frequently asked questions</div>
        <h1>A little clarity.<br><span class="accent">A confident next step.</span></h1>
        <p>Find answers about our products, sourcing and quotation process.</p>
    </div>
</section>

<section class="section">
    <div class="sic-container two-col" style="align-items:flex-start;">
        <div>
            <h2 class="section-title" style="font-size:26px;margin-bottom:12px;">How can we help?</h2>
            <p style="color:var(--sic-text-muted);margin-bottom:24px;">Can't find the answer you need? Talk to our export team about your requirements.</p>
            <a href="{{ route('contact') }}" class="btn btn-amber">Contact our team &#8599;</a>
        </div>
        <div>
            @php
                $faqs = [
                    ['What products does Samudra supply?', 'We supply Indonesian coffee, spices and botanicals — including cassia cinnamon, cloves, pepper, nutmeg, turmeric and more. See the full catalog on Our Products.'],
                    ['Can I request a sample?', 'Yes. Samples can be arranged for most products — let us know the destination and required quantity when you request a quotation.'],
                    ['Can packaging be customized?', 'We support custom packaging (bag size, liner, labeling) for qualifying order volumes.'],
                    ['What export documents are available?', 'Standard documentation includes Certificate of Origin, phytosanitary certificate, and commercial invoice/packing list. Halal certification is available for applicable products.'],
                    ['How do I get pricing and order information?', 'Submit a request through Get a Quote with your product, volume and destination, and our export team will respond with pricing.'],
                    ['Where is Samudra based?', 'Our office is in South Jakarta, Indonesia, with a warehouse in Cikuya, Solear, Tangerang, Banten.'],
                ];
            @endphp
            @foreach($faqs as $i => $faq)
                <details class="faq-item" @if($i === 0) open @endif>
                    <summary><span><span class="faq-num">{{ sprintf('%02d', $i + 1) }}</span>{{ $faq[0] }}</span><span>+</span></summary>
                    <p>{{ $faq[1] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

<section class="section-dark">
    <div class="sic-container cta-banner">
        <h2>Your next great ingredient starts with a conversation.</h2>
        <a href="{{ route('quote') }}" class="btn btn-amber">Talk to our export team &#8599;</a>
    </div>
</section>
@endsection
