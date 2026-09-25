@extends('layouts.site')

@section('title', 'Our Approach')
@section('meta', 'How PT Samudra International Commerce sources, processes and delivers.')

@section('content')
<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Our approach</div>
        <h1>From trusted origins<br>to <span class="accent">export-ready supply.</span></h1>
        <p>Direct sourcing, selected in-house processing, quality control and professional export coordination form one connected approach.</p>
    </div>
</section>

<section class="section">
    <div class="sic-container grid-3">
        <div class="step-card">
            <div class="step-num">01</div>
            <h3>Source &amp; process</h3>
            <p>We work directly with Indonesian growers, cooperatives and supply partners, and prepare selected ingredients in the forms buyers need.</p>
        </div>
        <div class="step-card">
            <div class="step-num">02</div>
            <h3>Check &amp; document</h3>
            <p>Every batch is reviewed for product quality, and we coordinate the documentation required for smooth, compliant export.</p>
        </div>
        <div class="step-card">
            <div class="step-num">03</div>
            <h3>Partner &amp; deliver</h3>
            <p>We align on specification, destination and commercial terms with each buyer, and stay involved through delivery.</p>
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
