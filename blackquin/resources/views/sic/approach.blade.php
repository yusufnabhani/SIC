@extends('layouts.site')

@section('title', 'Our Approach')
@section('meta', 'A sourcing and supply process designed around consistency, traceability and collaboration.')

@section('content')
<div class="sic-breadcrumb"><div class="sic-container"><a href="{{ route('home') }}">Home</a> / Our approach</div></div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Our approach</div>
        <h1>From origin to delivery.<br><span class="accent">Built on trust.</span></h1>
        <p>A sourcing and supply process designed around consistency, traceability and collaboration.</p>
    </div>
</section>

<section class="section">
    <div class="sic-container">
        <div class="section-head">
            <div><div class="eyebrow">How we work</div><h2 class="section-title">A clear path from grower to global buyer.</h2></div>
            <p style="max-width:360px;color:var(--sic-text-muted);">Our 2026 company profile describes an integrated approach to sourcing, processing and export coordination.</p>
        </div>
        <div class="grid-4">
            <div class="step-card"><div class="step-num">01</div><h3>Direct sourcing</h3><p>We work with farmers, cooperatives and verified suppliers to support authenticity and responsible trading.</p></div>
            <div class="step-card"><div class="step-num">02</div><h3>In-house processing</h3><p>For selected products such as turmeric, ginger and galangal, we process dried slices and powders to meet export requirements.</p></div>
            <div class="step-card"><div class="step-num">03</div><h3>Standardized handling</h3><p>Selection, processing and inspection follow defined product specifications and quality parameters.</p></div>
            <div class="step-card"><div class="step-num">04</div><h3>Export preparation</h3><p>We coordinate the documentation and shipping arrangements needed for international trade.</p></div>
        </div>
    </div>
</section>

<section class="section section-tint">
    <div class="sic-container two-col">
        <img src="{{ asset('images/sic/about_img2_409x409.png') }}" alt="In-house processing">
        <div>
            <div class="eyebrow">Value added in Indonesia</div>
            <h2 class="section-title" style="margin-bottom:16px;">Closer to the product. Closer to the details.</h2>
            <p style="color:var(--sic-text-muted);margin-bottom:12px;">Processing selected rhizomes into dried slices and powders gives us more control over product form, consistency and buyer specifications.</p>
            <p style="color:var(--sic-text-muted);margin-bottom:24px;">Our trade team discusses grade, packaging, destination and delivery requirements with each partner. FOB and CIF terms may be available depending on the transaction.</p>
            <a href="{{ route('quality') }}" class="btn btn-amber">Explore quality &amp; compliance &#8599;</a>
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
