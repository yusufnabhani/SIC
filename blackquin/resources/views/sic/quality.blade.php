@extends('layouts.site')

@section('title', 'Quality & Compliance')
@section('meta', 'A practical quality system for Indonesian agricultural products moving into international markets.')

@section('content')
<div class="sic-breadcrumb"><div class="sic-container"><a href="{{ route('home') }}">Home</a> / Quality &amp; compliance</div></div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">{{ $pagesetting->quality_hero_eyebrow ?? 'Quality & compliance' }}</div>
        <h1>{{ $pagesetting->quality_hero_title_line1 ?? 'Confidence is built' }}<br><span class="accent">{{ $pagesetting->quality_hero_title_accent ?? 'in the details.' }}</span></h1>
        <p>{{ $pagesetting->quality_hero_description ?? 'A practical quality system for Indonesian agricultural products moving into international markets.' }}</p>
    </div>
</section>

<section class="section">
    <div class="sic-container two-col">
        <div>
            <div class="eyebrow">{{ $pagesetting->quality_system_eyebrow ?? 'Our quality system' }}</div>
            <h2 class="section-title" style="margin-bottom:16px;">{{ $pagesetting->quality_system_title ?? 'Care from source to shipment.' }}</h2>
            <p style="color:var(--sic-text-muted);margin-bottom:12px;">{{ $pagesetting->quality_system_description1 ?? 'Quality grading, visual inspection and product specifications help us prepare ingredients for buyers. Source and handling details support traceability through the supply chain.' }}</p>
            <p style="color:var(--sic-text-muted);">{{ $pagesetting->quality_system_description2 ?? 'Our team prepares export documentation appropriate to the product and destination, including Commercial Invoice, Packing List, Certificate of Origin and Bill of Lading or Air Waybill where applicable.' }}</p>
        </div>
        <img src="{{ asset('images/sic/about_img3_409x409.png') }}" alt="Quality system">
    </div>
</section>

<section class="section-dark">
    <div class="sic-container">
        <div class="eyebrow">{{ $pagesetting->quality_pillars_eyebrow ?? 'Four pillars' }}</div>
        <h2 class="section-title" style="margin-bottom:40px;">{{ $pagesetting->quality_pillars_title ?? 'A structured approach to reliable supply.' }}</h2>
        <div class="grid-4">
            <div class="num-card"><div class="num">01</div><h3>{{ $pagesetting->quality_pillar1_title ?? 'Quality grading' }}</h3><p>{{ $pagesetting->quality_pillar1_description ?? 'Physical and visual inspection against agreed product requirements.' }}</p></div>
            <div class="num-card"><div class="num">02</div><h3>{{ $pagesetting->quality_pillar2_title ?? 'Traceability' }}</h3><p>{{ $pagesetting->quality_pillar2_description ?? 'Visibility from supply origin through preparation and delivery.' }}</p></div>
            <div class="num-card"><div class="num">03</div><h3>{{ $pagesetting->quality_pillar3_title ?? 'Export documents' }}</h3><p>{{ $pagesetting->quality_pillar3_description ?? 'Coordination of required trade papers for the shipment and destination.' }}</p></div>
            <div class="num-card"><div class="num">04</div><h3>{{ $pagesetting->quality_pillar4_title ?? 'Halal compliance' }}</h3><p>{{ $pagesetting->quality_pillar4_description ?? 'Applicable halal documentation for relevant products and markets.' }}</p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="sic-container two-col">
        <div>
            <div class="eyebrow">{{ $pagesetting->quality_partnership_eyebrow ?? 'Partnership advantage' }}</div>
            <h2 class="section-title" style="margin-bottom:16px;">{{ $pagesetting->quality_partnership_title ?? 'Quality. Supply. Commercial clarity.' }}</h2>
            <p style="color:var(--sic-text-muted);margin-bottom:24px;">{{ $pagesetting->quality_partnership_description ?? 'Our catalog presents export-grade products, supply reliability, competitive pricing, a structured trading process and long-term partnership as the reasons buyers work with SIC.' }}</p>
            <a href="{{ route('quote') }}" class="btn btn-amber">{{ $pagesetting->quality_partnership_buttontext ?? 'Request product details' }} &#8599;</a>
        </div>
        <img src="{{ asset('images/sic/home_img7_1282x583.png') }}" alt="Indonesian spices">
    </div>
</section>
@endsection
