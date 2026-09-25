@extends('layouts.site')

@section('title', 'Careers')
@section('meta', 'Explore opportunities to help connect Indonesian producers and international businesses.')

@section('content')
<div class="sic-breadcrumb"><div class="sic-container"><a href="{{ route('home') }}">Home</a> / Careers</div></div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Careers</div>
        <h1>Grow with purpose.<br><span class="accent">Connect with the world.</span></h1>
        <p>Explore opportunities to help connect Indonesian producers and international businesses.</p>
    </div>
</section>

<section class="section">
    <div class="sic-container">
        <div style="display:flex;gap:28px;flex-wrap:wrap;margin-bottom:40px;border-bottom:1px solid var(--sic-border);padding-bottom:20px;">
            <span style="font-weight:700;color:var(--sic-navy);border-bottom:2px solid var(--sic-amber);padding-bottom:6px;">All departments</span>
            <span style="color:var(--sic-text-muted);">Information Technology</span>
            <span style="color:var(--sic-text-muted);">Marketing</span>
            <span style="color:var(--sic-text-muted);">Sales</span>
            <span style="color:var(--sic-text-muted);">Office Management</span>
        </div>
        <div style="text-align:center;padding:60px 20px;">
            <div style="color:var(--sic-amber);font-size:24px;margin-bottom:16px;">&#8599;</div>
            <div class="eyebrow" style="justify-content:center;">Future opportunities</div>
            <h2 class="section-title" style="margin-bottom:14px;">No open positions at the moment.</h2>
            <p style="color:var(--sic-text-muted);max-width:460px;margin:0 auto 28px;">There are currently no published vacancies. Please check back for future opportunities.</p>
            <a href="{{ route('about') }}" class="btn btn-amber">Get to know Samudra &#8599;</a>
        </div>
    </div>
</section>
@endsection
