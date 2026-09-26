@extends('layouts.site')

@section('title', 'Home')
@section('meta', $homesetting->meta_description ?? "Exceptional Indonesian coffee, spices and botanicals.")

@section('content')

{{-- HERO --}}
<section class="sic-hero">
    <div class="sic-container">
        <div class="sic-hero__grid">
            <div>
                <div class="lede">{{ $homesetting->hero_kicker ?? 'Rooted in Indonesia. Ready for the world.' }}</div>
                <h1>{{ $homesetting->hero_title_line1 ?? 'From our land.' }}<br>{{ $homesetting->hero_title_line2 ?? 'To your world.' }}</h1>
                <p class="desc">{{ $homesetting->hero_description ?? 'Exceptional Indonesian coffee, spices, and botanicals. Responsibly sourced. Thoughtfully delivered.' }}</p>
                <div class="sic-hero__actions">
                    <a href="{{ $homesetting->hero_button1_link ?? route('products.index') }}" class="btn btn-amber">{{ $homesetting->hero_button1_text ?? 'Explore our products' }} &#8599;</a>
                    <a href="{{ $homesetting->hero_button2_link ?? route('about') }}" class="btn btn-outline-light">{{ $homesetting->hero_button2_text ?? 'Discover Samudra' }}</a>
                </div>
            </div>
            <div>
                <img src="{{ $homesetting->hero_image ? asset('images/sic/' . $homesetting->hero_image) : asset('images/sic/home_img1_749x662.png') }}" alt="Indonesian coffee, spices and botanicals">
            </div>
        </div>

        <div class="value-strip">
            <div class="value-card">
                <div><div class="value-card__icon"><i class="fas fa-location-arrow" style="color:#fff;"></i></div><div class="value-card__title">{{ $homesetting->value1_title ?? 'Direct sourcing network' }}</div></div>
            </div>
            <div class="value-card">
                <div><div class="value-card__icon"><i class="fas fa-award" style="color:#fff;"></i></div><div class="value-card__title">{{ $homesetting->value2_title ?? 'Consistent product quality' }}</div></div>
            </div>
            <div class="value-card">
                <div><div class="value-card__icon"><i class="fas fa-shield-alt" style="color:#fff;"></i></div><div class="value-card__title">{{ $homesetting->value3_title ?? 'Transparent partnership' }}</div></div>
            </div>
            <div class="value-card">
                <div><div class="value-card__icon"><i class="fas fa-handshake" style="color:#fff;"></i></div><div class="value-card__title">{{ $homesetting->value4_title ?? 'Long-term commitment' }}</div></div>
            </div>
        </div>
    </div>
</section>

{{-- PRODUCT PORTFOLIO --}}
<section class="section">
    <div class="sic-container">
        <div class="section-head">
            <div>
                <div class="eyebrow">Our product portfolio</div>
                <h2 class="section-title">Nature&rsquo;s finest.<br>Selected with purpose.</h2>
            </div>
            <a href="{{ route('products.index') }}" class="link-arrow">View all products &#8599;</a>
        </div>
        <div class="grid-3">
            @forelse($featuredProducts as $product)
                <a class="product-card" href="{{ route('products.show', $product->slug) }}">
                    <div class="product-card__img">
                        <span class="product-card__badge">Indonesian origin</span>
                        <img src="{{ $product->image ? asset('images/sic/' . $product->image) : asset('images/sic/coffee.png') }}" alt="{{ $product->name }}">
                    </div>
                    <h3>{{ $product->name }} <span>&#8599;</span></h3>
                    <p class="muted">{{ $product->botanical_name }}</p>
                </a>
            @empty
                <p style="color:var(--sic-text-muted);">Products coming soon.</p>
            @endforelse
        </div>
    </div>
</section>

{{-- STORY / VIDEO --}}
<section class="section section-tint">
    <div class="sic-container">
        <div class="section-head">
            <div>
                <div class="eyebrow">{{ $homesetting->story_kicker ?? 'Inside Samudra' }}</div>
                <h2 class="section-title">{{ $homesetting->story_title ?? 'See the story behind the source.' }}</h2>
            </div>
            <p style="max-width:360px;color:var(--sic-text-muted);">{{ $homesetting->story_description ?? 'Take a closer look at the ingredients, people, and partnerships that connect Indonesia with the world.' }}</p>
        </div>
        <a href="{{ $homesetting->story_video_link ?? '#' }}" target="_blank" class="story-media" style="background-image:url('{{ $homesetting->story_image ? asset('images/sic/' . $homesetting->story_image) : asset('images/sic/home_img7_1282x583.png') }}');">
            <div class="story-media__content">
                <div class="play-btn"><i class="fas fa-play"></i></div>
                <div style="font-weight:700;font-size:18px;">From Indonesia to the world</div>
                <div style="font-size:13px;opacity:0.8;margin-top:6px;">Watch on YouTube</div>
            </div>
        </a>
    </div>
</section>

{{-- PARTNERSHIP --}}
<section class="section">
    <div class="sic-container two-col">
        <img src="{{ $homesetting->partner_image ? asset('images/sic/' . $homesetting->partner_image) : asset('images/sic/home_img8_601x510.png') }}" alt="More than an export partner">
        <div>
            <div class="eyebrow">{{ $homesetting->partner_kicker ?? 'More than an export partner' }}</div>
            <h2 class="section-title" style="margin-bottom:16px;">{{ $homesetting->partner_title ?? 'Good products. Even better partnerships.' }}</h2>
            <p style="color:var(--sic-text-muted);margin-bottom:8px;">{{ $homesetting->partner_description ?? 'We connect trusted Indonesian farmers, cooperatives and producers with businesses around the world. With care at every step, from responsible sourcing to export preparation.' }}</p>
            <div class="mini-points">
                <div><div class="pt-label">{{ $homesetting->partner_point1_title ?? 'Close to the source' }}</div><div class="pt-desc">{{ $homesetting->partner_point1_text ?? "Built on relationships with Indonesia's growing communities." }}</div></div>
                <div><div class="pt-label">{{ $homesetting->partner_point2_title ?? 'Focused on your business' }}</div><div class="pt-desc">{{ $homesetting->partner_point2_text ?? 'Clear specifications and a collaborative approach to sourcing.' }}</div></div>
            </div>
            <a href="{{ $homesetting->partner_buttonlink ?? route('about') }}" class="link-arrow" style="display:inline-block;margin-top:24px;">{{ $homesetting->partner_buttontext ?? 'Get to know Samudra' }} &#8599;</a>
        </div>
    </div>
</section>

{{-- INSIGHTS --}}
<section class="section section-tint">
    <div class="sic-container">
        <div class="section-head">
            <div>
                <div class="eyebrow">{{ $homesetting->insights_kicker ?? 'From origin to opportunity' }}</div>
                <h2 class="section-title">A closer look at our world.</h2>
            </div>
            <a href="{{ route('insights.index') }}" class="link-arrow">Explore insights &#8599;</a>
        </div>
        <div class="grid-3">
            @php $fallbackImgs = ['home_img9_409x264.png','home_img10_409x264.png','home_img11_409x264.png']; @endphp
            @forelse($latestPosts as $i => $post)
                <a class="insight-card" href="{{ url('/post/' . $post->slug) }}">
                    <div class="insight-card__img"><img src="{{ $post->photo ? asset('images/media/' . $post->photo->file) : asset('images/sic/' . $fallbackImgs[$i % 3]) }}" alt="{{ $post->title }}"></div>
                    <div class="insight-card__meta"><span>{{ optional($post->category)->name ?? 'Insights' }}</span><span>{{ $post->created_at->format('d M Y') }}</span></div>
                    <h3>{{ $post->title }}</h3>
                    <span class="link-arrow">Read story &#8599;</span>
                </a>
            @empty
                @foreach([
                    ['Coffee & origin', 'The world drinks coffee every day.', 'home_img9_409x264.png'],
                    ['Export & import', 'Most import problems start before the shipment.', 'home_img10_409x264.png'],
                    ['Quality & sourcing', 'Spices are easy to grow. Hard to standardize.', 'home_img11_409x264.png'],
                ] as $fallback)
                    <a class="insight-card" href="{{ route('insights.index') }}">
                        <div class="insight-card__img"><img src="{{ asset('images/sic/' . $fallback[2]) }}" alt="{{ $fallback[1] }}"></div>
                        <div class="insight-card__meta"><span>{{ $fallback[0] }}</span></div>
                        <h3>{{ $fallback[1] }}</h3>
                        <span class="link-arrow">Read story &#8599;</span>
                    </a>
                @endforeach
            @endforelse
        </div>
    </div>
</section>

{{-- PROCESS --}}
<section class="section">
    <div class="sic-container">
        <div class="section-head">
            <div>
                <div class="eyebrow">{{ $homesetting->process_kicker ?? 'How we deliver' }}</div>
                <h2 class="section-title">{{ $homesetting->process_title ?? 'From trusted origins to export-ready supply.' }}</h2>
            </div>
            <p style="max-width:360px;color:var(--sic-text-muted);">{{ $homesetting->process_description ?? 'Direct sourcing, selected in-house processing, quality control and professional export coordination form one connected approach.' }}</p>
        </div>
        <div class="grid-3">
            <div class="step-card">
                <div class="step-num">01</div>
                <h3>{{ $homesetting->step1_title ?? 'Source & process' }}</h3>
                <p>{{ $homesetting->step1_description ?? 'Work with Indonesian growers and prepare selected ingredients in the forms buyers need.' }}</p>
                <a href="{{ $homesetting->step1_linkurl ?? route('approach') }}">{{ $homesetting->step1_linktext ?? 'Our approach' }} &#8599;</a>
            </div>
            <div class="step-card">
                <div class="step-num">02</div>
                <h3>{{ $homesetting->step2_title ?? 'Check & document' }}</h3>
                <p>{{ $homesetting->step2_description ?? 'Review product quality and coordinate the documentation needed for the trade.' }}</p>
                <a href="{{ $homesetting->step2_linkurl ?? route('quality') }}">{{ $homesetting->step2_linktext ?? 'Quality & compliance' }} &#8599;</a>
            </div>
            <div class="step-card">
                <div class="step-num">03</div>
                <h3>{{ $homesetting->step3_title ?? 'Partner & deliver' }}</h3>
                <p>{{ $homesetting->step3_description ?? 'Align on the specification, destination and commercial terms with each buyer.' }}</p>
                <a href="{{ $homesetting->step3_linkurl ?? route('quote') }}">{{ $homesetting->step3_linktext ?? 'Start a conversation' }} &#8599;</a>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section-dark">
    <div class="sic-container cta-banner">
        <h2>{{ $homesetting->cta_title_line1 ?? "Let's grow together." }}<br>{{ $homesetting->cta_title_line2 ?? 'Your next great ingredient starts with a conversation.' }}</h2>
        <a href="{{ $homesetting->cta_buttonlink ?? route('quote') }}" class="btn btn-amber">{{ $homesetting->cta_buttontext ?? 'Talk to our export team' }} &#8599;</a>
    </div>
</section>

@endsection
