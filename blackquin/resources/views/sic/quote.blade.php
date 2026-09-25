@extends('layouts.site')

@section('title', 'Get a Quote')
@section('meta', 'Share what you are looking for. Our export team will help you find the right product and supply solution.')

@section('content')
<div class="sic-breadcrumb"><div class="sic-container"><a href="{{ route('home') }}">Home</a> / Request a quotation</div></div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Request a quotation</div>
        <h1>Your requirements.<br><span class="accent">Our sourcing expertise.</span></h1>
        <p>Share what you are looking for. Our export team will help you find the right product and supply solution.</p>
    </div>
</section>

<section class="section">
    <div class="sic-container two-col" style="align-items:flex-start;">
        <div>
            <div class="eyebrow">Built around your business</div>
            <h2 class="section-title" style="margin-bottom:28px;">A clear path from inquiry to partnership.</h2>
            <div style="margin-bottom:24px;"><div class="step-num" style="margin-bottom:4px;">01</div><div style="font-weight:700;margin-bottom:4px;">Tell us what you need</div><div style="color:var(--sic-text-muted);font-size:14px;">Product, volume and destination.</div></div>
            <div style="margin-bottom:24px;"><div class="step-num" style="margin-bottom:4px;">02</div><div style="font-weight:700;margin-bottom:4px;">Align on the details</div><div style="color:var(--sic-text-muted);font-size:14px;">Specifications, packaging and availability.</div></div>
            <div style="margin-bottom:24px;"><div class="step-num" style="margin-bottom:4px;">03</div><div style="font-weight:700;margin-bottom:4px;">Plan your supply</div><div style="color:var(--sic-text-muted);font-size:14px;">A quotation tailored to your requirements.</div></div>
            <div style="border-left:2px solid var(--sic-amber);padding-left:16px;margin-top:32px;">
                <div style="color:var(--sic-text-muted);font-size:14px;margin-bottom:4px;">Prefer a conversation?</div>
                <a href="{{ route('contact') }}" class="link-arrow">Contact our export team &#8599;</a>
            </div>
        </div>

        <div class="form-card">
            @if(session('success'))
                <div style="background:#eef7ee;border:1px solid #bfe3bf;color:#2c662d;padding:14px 18px;margin-bottom:20px;">{{ session('success') }}</div>
            @endif
            <h3 style="margin-bottom:6px;">Request details</h3>
            <p style="color:var(--sic-text-muted);font-size:13px;margin-bottom:24px;">Fields marked * are required.</p>
            <form method="POST" action="{{ route('quote.store') }}">
                @csrf
                <div class="form-row">
                    <div class="field"><label>Full name *</label><input type="text" name="name" value="{{ old('name') }}" placeholder="Your full name" required></div>
                    <div class="field"><label>Business email *</label><input type="email" name="email" value="{{ old('email') }}" placeholder="you@company.com" required></div>
                </div>
                <div class="form-row">
                    <div class="field"><label>Company *</label><input type="text" name="company" value="{{ old('company') }}" placeholder="Company name" required></div>
                    <div class="field"><label>Destination country *</label><input type="text" name="destination" value="{{ old('destination') }}" placeholder="e.g. Netherlands" required></div>
                </div>
                <div class="form-row">
                    <div class="field">
                        <label>Product *</label>
                        <select name="product" required>
                            <option value="">Select a product</option>
                            @foreach($products ?? [] as $product)
                                <option value="{{ $product->name }}" @selected(old('product') === $product->name)>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field"><label>Estimated quantity *</label><input type="text" name="quantity" value="{{ old('quantity') }}" placeholder="e.g. 5 metric tons" required></div>
                </div>
                <div class="form-row">
                    <div class="field"><label>Phone number</label><input type="text" name="phone" value="{{ old('phone') }}" placeholder="Include country code"></div>
                    <div class="field"><label>Preferred product form</label><input type="text" name="form" value="{{ old('form') }}" placeholder="Whole, powder, fresh..."></div>
                </div>
                <div class="field"><label>Specifications &amp; packaging requirements *</label><textarea name="message" rows="4" placeholder="Tell us a little about your requirements..." required>{{ old('message') }}</textarea></div>
                <button type="submit" class="btn btn-amber" style="margin-top:8px;">Submit quote request &#8599;</button>
            </form>
        </div>
    </div>
</section>
@endsection
