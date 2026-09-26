@extends('layouts.site')

@section('title', 'FAQ')
@section('meta', 'Find answers about our products, sourcing and quotation process.')

@section('content')
<div class="sic-breadcrumb"><div class="sic-container"><a href="{{ route('home') }}">Home</a> / Frequently asked questions</div></div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">{{ $pagesetting->faq_hero_eyebrow ?? 'Frequently asked questions' }}</div>
        <h1>{{ $pagesetting->faq_hero_title_line1 ?? 'A little clarity.' }}<br><span class="accent">{{ $pagesetting->faq_hero_title_accent ?? 'A confident next step.' }}</span></h1>
        <p>{{ $pagesetting->faq_hero_description ?? 'Find answers about our products, sourcing and quotation process.' }}</p>
    </div>
</section>

<section class="section">
    <div class="sic-container two-col" style="align-items:flex-start;">
        <div>
            <h2 class="section-title" style="font-size:26px;margin-bottom:12px;">{{ $pagesetting->faq_side_title ?? 'How can we help?' }}</h2>
            <p style="color:var(--sic-text-muted);margin-bottom:24px;">{{ $pagesetting->faq_side_description ?? "Can't find the answer you need? Talk to our export team about your requirements." }}</p>
            <a href="{{ route('contact') }}" class="btn btn-amber">{{ $pagesetting->faq_side_buttontext ?? 'Contact our team' }} &#8599;</a>
        </div>
        <div>
            @php
                $faqItems = ($faqs ?? collect())->count() ? $faqs : collect([
                    (object) ['question' => 'What products does Samudra supply?', 'answer' => 'We supply Indonesian coffee, spices and botanicals — including cassia cinnamon, cloves, pepper, nutmeg, turmeric and more. See the full catalog on Our Products.'],
                    (object) ['question' => 'Can I request a sample?', 'answer' => 'Yes. Samples can be arranged for most products — let us know the destination and required quantity when you request a quotation.'],
                    (object) ['question' => 'Can packaging be customized?', 'answer' => 'We support custom packaging (bag size, liner, labeling) for qualifying order volumes.'],
                    (object) ['question' => 'What export documents are available?', 'answer' => 'Standard documentation includes Certificate of Origin, phytosanitary certificate, and commercial invoice/packing list. Halal certification is available for applicable products.'],
                    (object) ['question' => 'How do I get pricing and order information?', 'answer' => 'Submit a request through Get a Quote with your product, volume and destination, and our export team will respond with pricing.'],
                    (object) ['question' => 'Where is Samudra based?', 'answer' => 'Our office is in South Jakarta, Indonesia, with a warehouse in Cikuya, Solear, Tangerang, Banten.'],
                ]);
            @endphp
            @foreach($faqItems as $i => $faq)
                <details class="faq-item" @if($i === 0) open @endif>
                    <summary><span><span class="faq-num">{{ sprintf('%02d', $i + 1) }}</span>{{ $faq->question }}</span><span>+</span></summary>
                    <p>{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

<section class="section-dark">
    <div class="sic-container cta-banner">
        <h2>{{ $headerfooter->typed_title ?? 'Your next great ingredient starts with a conversation.' }}</h2>
        <a href="{{ route('quote') }}" class="btn btn-amber">{{ $headerfooter->typed_buttontext ?? 'Talk to our export team' }} &#8599;</a>
    </div>
</section>
@endsection
