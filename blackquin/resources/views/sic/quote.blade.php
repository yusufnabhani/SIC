@extends('layouts.site')

@section('title', 'Get a Quote')
@section('meta', 'Request a quotation from PT Samudra International Commerce.')

@section('content')
<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Get a quote</div>
        <h1>Tell us what you need.<br><span class="accent">We'll prepare a quotation.</span></h1>
        <p>Share your product, volume and destination — our export team will respond with pricing and availability.</p>
    </div>
</section>

<section class="section">
    <div class="sic-container" style="max-width:720px;">
        @if(session('success'))
            <div style="background:#eef7ee;border:1px solid #bfe3bf;color:#2c662d;padding:14px 18px;margin-bottom:24px;">{{ session('success') }}</div>
        @endif
        <form class="form-card" method="POST" action="{{ route('quote.store') }}">
            @csrf
            <div class="form-row">
                <div class="field"><label>Full name *</label><input type="text" name="name" value="{{ old('name') }}" required></div>
                <div class="field"><label>Business email *</label><input type="email" name="email" value="{{ old('email') }}" required></div>
            </div>
            <div class="form-row">
                <div class="field"><label>Company *</label><input type="text" name="company" value="{{ old('company') }}" required></div>
                <div class="field"><label>Product of interest</label><input type="text" name="product" value="{{ old('product') }}"></div>
            </div>
            <div class="field"><label>Your requirements *</label><textarea name="message" rows="5" required>{{ old('message') }}</textarea></div>
            <button type="submit" class="btn btn-amber">Request a quotation &#8599;</button>
        </form>
    </div>
</section>
@endsection
