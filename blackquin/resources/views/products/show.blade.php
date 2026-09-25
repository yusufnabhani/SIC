@extends('layouts.site')

@section('title', $product->name)
@section('meta', $product->description)

@section('content')
<div class="sic-breadcrumb">
    <div class="sic-container">
        <a href="{{ route('home') }}">Home</a> / <a href="{{ route('products.index') }}">Our products</a> / {{ $product->name }}
    </div>
</div>

<section class="section-tight">
    <div class="sic-container two-col">
        <div style="position:relative;">
            <img src="{{ $product->image ? asset('images/sic/' . $product->image) : asset('images/sic/coffee.png') }}" alt="{{ $product->name }}" style="border-radius:10px;width:100%;aspect-ratio:4/3.4;object-fit:cover;">
            <span style="position:absolute;bottom:16px;left:16px;background:rgba(255,255,255,0.92);color:var(--sic-navy);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.06em;padding:8px 14px;">Indonesian origin</span>
        </div>
        <div>
            <div class="eyebrow">{{ \App\Models\Product::categoryLabel($product->category) }}</div>
            <h1 style="font-size:44px;margin-bottom:6px;">{{ $product->name }}</h1>
            @if($product->botanical_name)
                <p style="font-style:italic;color:var(--sic-text-muted);margin-bottom:18px;">{{ $product->botanical_name }}</p>
            @endif
            <p style="margin-bottom:24px;">{{ $product->description }}</p>

            @if($product->origin)
            <div style="border-top:1px solid var(--sic-border);padding-top:16px;margin-bottom:16px;">
                <div style="font-size:11px;text-transform:uppercase;letter-spacing:0.08em;color:var(--sic-text-muted);margin-bottom:6px;">Origin</div>
                <div style="font-weight:700;">{{ $product->origin }}</div>
            </div>
            @endif

            @if($product->forms->count())
            <div style="border-top:1px solid var(--sic-border);padding-top:16px;margin-bottom:24px;">
                <div style="font-weight:700;margin-bottom:10px;">Available forms</div>
                <div style="display:flex;gap:10px;flex-wrap:wrap;">
                    @foreach($product->forms as $form)
                        <span style="border:1px solid var(--sic-border);padding:8px 14px;font-size:13px;">{{ $form->name }}</span>
                    @endforeach
                </div>
            </div>
            @endif

            <a href="{{ route('quote') }}?product={{ urlencode($product->name) }}" class="btn btn-amber">Request a quotation &#8599;</a>
        </div>
    </div>
</section>

@if($product->forms->count())
<section class="section section-tint">
    <div class="sic-container two-col" style="align-items:flex-start;">
        <div>
            <div class="eyebrow">Catalog specifications</div>
            <h2 class="section-title" style="margin-bottom:18px;">Find the right form for your application.</h2>
            <p style="color:var(--sic-text-muted);">Review product-specific specifications. Confirm current batch details with our export team.</p>
        </div>
        <div class="form-card" style="padding:32px;background:#fff;">
            @foreach($product->forms as $form)
                <h4 style="margin-bottom:16px;">{{ $form->name }}</h4>
                <table style="width:100%;border-collapse:collapse;margin-bottom:{{ !$loop->last ? '32px' : '0' }};">
                    @foreach(['Origin' => $form->origin, 'Processing' => $form->processing, 'Screen' => $form->screen, 'Grade' => $form->grade, 'Moisture' => $form->moisture, 'Defect standard' => $form->defect_standard, 'Packaging' => $form->packaging] as $label => $value)
                        @if($value)
                        <tr style="border-bottom:1px solid var(--sic-border);">
                            <td style="padding:10px 0;color:var(--sic-text-muted);font-size:14px;">{{ $label }}</td>
                            <td style="padding:10px 0;text-align:right;font-weight:600;">{{ $value }}</td>
                        </tr>
                        @endif
                    @endforeach
                </table>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="section">
    <div class="sic-container" style="max-width:820px;">
        <div class="section-head"><h2 class="section-title">A few things to know.</h2><a href="{{ route('faq') }}" class="link-arrow">All FAQs &#8599;</a></div>
        @php
            $pfaqs = [
                ['Which product forms can I request?', 'The forms listed above reflect what we currently offer for this product. Need something else? Ask our export team.'],
                ['Can I request a sample?', 'Yes — let us know your destination and required quantity when requesting a quotation.'],
                ['Can packaging be customized?', 'Custom packaging is available for qualifying order volumes.'],
                ['What export documents are available?', 'Certificate of Origin, phytosanitary certificate and Halal certification (where applicable) can be provided.'],
            ];
        @endphp
        @foreach($pfaqs as $i => $faq)
            <details class="faq-item">
                <summary><span><span class="faq-num">{{ sprintf('%02d', $i + 1) }}</span>{{ $faq[0] }}</span><span>+</span></summary>
                <p>{{ $faq[1] }}</p>
            </details>
        @endforeach
    </div>
</section>

@if($related->count())
<section class="section section-tint">
    <div class="sic-container">
        <div class="section-head"><h2 class="section-title">Discover more ingredients.</h2><a href="{{ route('products.index') }}" class="link-arrow">View all products &#8599;</a></div>
        <div class="grid-3">
            @foreach($related as $r)
                <a class="product-card" href="{{ route('products.show', $r->slug) }}">
                    <div class="product-card__img">
                        <span class="product-card__badge">{{ \App\Models\Product::categoryLabel($r->category) }}</span>
                        <img src="{{ $r->image ? asset('images/sic/' . $r->image) : asset('images/sic/coffee.png') }}" alt="{{ $r->name }}">
                    </div>
                    <h3>{{ $r->name }} <span>&#8599;</span></h3>
                    <p class="muted">{{ $r->botanical_name }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="section-dark">
    <div class="sic-container cta-banner">
        <h2>Your next great ingredient starts with a conversation.</h2>
        <a href="{{ route('quote') }}" class="btn btn-amber">Talk to our export team &#8599;</a>
    </div>
</section>
@endsection
