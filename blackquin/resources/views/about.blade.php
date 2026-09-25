@extends('layouts.site')

@section('title', 'About Us')
@section('meta', $aboutsetting->meta_description ?? "Connecting Indonesia's agricultural heritage with the possibilities of global trade.")

@section('content')
<div class="sic-breadcrumb">
    <div class="sic-container"><a href="{{ route('home') }}">Home</a> / {{ $aboutsetting->breadcrumbs_anchor ?? 'About Samudra' }}</div>
</div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">About Samudra</div>
        <h1>{{ $aboutsetting->hero_title_line1 ?? 'Rooted in our origins.' }}<br><span class="accent">{{ $aboutsetting->hero_title_line2 ?? 'Invested in your future.' }}</span></h1>
        <p>{{ $aboutsetting->hero_description ?? "Connecting Indonesia's agricultural heritage with the possibilities of global trade." }}</p>
    </div>
</section>

{{-- STORY --}}
<section class="section">
    <div class="sic-container two-col">
        <div>
            <div class="eyebrow">{{ $aboutsetting->about_subtitle ?? 'Our story' }}</div>
            <h2 class="section-title" style="margin-bottom:20px;">{!! nl2br(e($aboutsetting->about_title ?? 'A bridge between land and opportunity.')) !!}</h2>
            @foreach(explode("\n", $aboutsetting->about_description ?? "PT Samudra International Commerce is an Indonesian trading, sourcing and processing company bringing coffee, spices and botanicals to international markets. We work with farmers, cooperatives and supply partners to help buyers source with confidence.\nFor selected agricultural products, including turmeric, ginger and galangal, we carry out our own processing to produce dried slices and powders. Our approach combines responsible sourcing, quality control and export coordination.") as $para)
                @if(trim($para))<p style="margin-bottom:16px;color:var(--sic-text-muted);">{{ trim($para) }}</p>@endif
            @endforeach
            <a href="{{ $aboutsetting->about_buttonlink ?? route('products.index') }}" class="btn btn-amber" style="margin-top:12px;">{{ $aboutsetting->about_buttontext ?? 'Explore our portfolio' }} &#8599;</a>
        </div>
        <img src="{{ $aboutsetting->about_image ? asset('images/sic/' . $aboutsetting->about_image) : asset('images/sic/about_img1_601x510.png') }}" alt="Samudra International Commerce">
    </div>
</section>

{{-- VISION & MISSION --}}
<section class="section section-tint">
    <div class="sic-container">
        <div class="section-head">
            <div>
                <div class="eyebrow">{{ $aboutsetting->vision_kicker ?? 'Vision & mission' }}</div>
                <h2 class="section-title">{{ $aboutsetting->vision_title ?? 'Growing Indonesian value in global markets.' }}</h2>
            </div>
            <p style="max-width:360px;color:var(--sic-text-muted);">{{ $aboutsetting->vision_description ?? 'Our ambition combines international reach with enduring value for producers, employees and surrounding communities.' }}</p>
        </div>

        <div style="background:var(--sic-navy);color:#fff;padding:32px 40px;display:flex;gap:24px;align-items:center;flex-wrap:wrap;margin-bottom:32px;">
            <div style="font-weight:800;font-size:13px;text-transform:uppercase;letter-spacing:0.08em;color:var(--sic-amber);white-space:nowrap;">{{ $aboutsetting->vision_label ?? 'Our vision' }}</div>
            <div style="font-size:20px;font-family:'Manrope',sans-serif;font-weight:600;line-height:1.4;">{{ $aboutsetting->vision_statement ?? 'To become a leading global agribusiness in premium Indonesian agricultural products through integrated trading and value added manufacturing.' }}</div>
        </div>

        <div class="grid-4" style="margin-bottom:32px;">
            <div class="num-card"><div class="num">01</div><h3>{{ $aboutsetting->value1_title ?? 'Source responsibly' }}</h3><p>{{ $aboutsetting->value1_description ?? 'Develop premium products through partnerships with farmers and local suppliers.' }}</p></div>
            <div class="num-card"><div class="num">02</div><h3>{{ $aboutsetting->value2_title ?? 'Create more value' }}</h3><p>{{ $aboutsetting->value2_description ?? 'Build efficient, hygienic and integrated processing operations.' }}</p></div>
            <div class="num-card"><div class="num">03</div><h3>{{ $aboutsetting->value3_title ?? 'Serve global buyers' }}</h3><p>{{ $aboutsetting->value3_description ?? 'Deliver dependable products, professional service and lasting partnerships.' }}</p></div>
            <div class="num-card"><div class="num">04</div><h3>{{ $aboutsetting->value4_title ?? 'Support communities' }}</h3><p>{{ $aboutsetting->value4_description ?? 'Promote sustainable practices that benefit people and preserve resources.' }}</p></div>
        </div>

        <div style="display:flex;gap:16px;flex-wrap:wrap;">
            <a href="{{ route('approach') }}" class="btn btn-outline-navy">Explore our approach &#8599;</a>
            <a href="{{ route('quality') }}" class="btn btn-outline-navy">Quality &amp; compliance &#8599;</a>
        </div>
    </div>
</section>

{{-- WHAT WE BELIEVE --}}
<section class="section-dark">
    <div class="sic-container">
        <div class="eyebrow">{{ $aboutsetting->beliefs_kicker ?? 'What we believe' }}</div>
        <h2 class="section-title" style="margin-bottom:40px;">{{ $aboutsetting->beliefs_title ?? 'Trade begins with products. Partnership begins with trust.' }}</h2>
        <div class="grid-4">
            <div class="num-card"><div class="num">01</div><h3>{{ $aboutsetting->belief1_title ?? 'Direct sourcing' }}</h3><p>{{ $aboutsetting->belief1_description ?? 'Relationships with growers, cooperatives and trusted supply partners.' }}</p></div>
            <div class="num-card"><div class="num">02</div><h3>{{ $aboutsetting->belief2_title ?? 'Consistent quality' }}</h3><p>{{ $aboutsetting->belief2_description ?? 'Careful product selection, handling and preparation.' }}</p></div>
            <div class="num-card"><div class="num">03</div><h3>{{ $aboutsetting->belief3_title ?? 'Transparency' }}</h3><p>{{ $aboutsetting->belief3_description ?? 'Clear communication from inquiry to shipment.' }}</p></div>
            <div class="num-card"><div class="num">04</div><h3>{{ $aboutsetting->belief4_title ?? 'Long-term thinking' }}</h3><p>{{ $aboutsetting->belief4_description ?? 'A shared commitment to sustainable business relationships.' }}</p></div>
        </div>
    </div>
</section>

{{-- LEADERSHIP --}}
<section class="section">
    <div class="sic-container">
        <div class="section-head">
            <div>
                <div class="eyebrow">{{ $aboutsetting->leadership_kicker ?? 'Our leadership' }}</div>
                <h2 class="section-title">{{ $aboutsetting->member_title_section ?? 'People behind the partnerships.' }}</h2>
            </div>
            <p style="max-width:360px;color:var(--sic-text-muted);">{{ $aboutsetting->leadership_description ?? 'A shared focus on dependable supply, meaningful relationships and lasting value.' }}</p>
        </div>
        <div class="grid-3">
            @foreach($members as $member)
                <div class="team-card">
                    <img src="{{ $member->photo ? asset('images/media/' . $member->photo->file) : asset('images/sic/leader_diah_bardiah.png') }}" alt="{{ $member->name }}">
                    <h4>{{ $member->name }}</h4>
                    <div class="role">{{ $member->position }}</div>
                </div>
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
