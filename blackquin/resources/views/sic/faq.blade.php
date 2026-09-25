@extends('layouts.site')

@section('title', 'FAQ')
@section('meta', 'Frequently asked questions about sourcing from PT Samudra International Commerce.')

@section('content')
<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">FAQ</div>
        <h1>Questions, <span class="accent">answered.</span></h1>
        <p>Everything buyers usually ask before their first order.</p>
    </div>
</section>

<section class="section" style="max-width:820px;margin:0 auto;">
    <div class="sic-container">
        @php
            $faqs = [
                ['Which product forms can I request?', 'Each product page lists the available forms (grades, processing and packaging) we currently offer. If you need a form not listed, contact our export team directly.'],
                ['Can I request a sample?', 'Yes. Samples can be arranged for most products — let us know the destination and required quantity when you request a quotation.'],
                ['Can packaging be customized?', 'We support custom packaging (bag size, liner, labeling) for qualifying order volumes. Discuss your specification with our team.'],
                ['What export documents are available?', 'Standard export documentation includes Certificate of Origin, phytosanitary certificate, and commercial invoice/packing list. Halal certification is available for applicable products.'],
                ['What are your minimum order quantities?', 'MOQs vary by product and form. Share your target volume when requesting a quote and we will confirm feasibility.'],
                ['Which regions do you export to?', 'We regularly ship to buyers across Asia, Europe, the Middle East and North America.'],
            ];
        @endphp
        @foreach($faqs as $i => $faq)
            <details class="faq-item" @if($i === 0) open @endif>
                <summary><span><span class="faq-num">{{ sprintf('%02d', $i + 1) }}</span>{{ $faq[0] }}</span><span>+</span></summary>
                <p>{{ $faq[1] }}</p>
            </details>
        @endforeach
    </div>
</section>
@endsection
