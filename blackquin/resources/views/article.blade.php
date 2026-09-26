@extends('layouts.site')

@section('title', $post->title)
@section('meta', $post->meta_description)

@section('content')
<div class="sic-breadcrumb">
    <div class="sic-container"><a href="{{ route('home') }}">Home</a> / <a href="{{ route('insights.index') }}">Insights</a> / {{ optional($post->category)->name ?? 'Insights' }}</div>
</div>

<section class="page-hero" style="padding-bottom:32px;">
    <div class="sic-container">
        <div class="eyebrow">{{ optional($post->category)->name ?? 'Insights' }}</div>
        <h1 style="font-size:38px;">{{ $post->title }}</h1>
        <div style="display:flex;gap:20px;margin-top:20px;font-size:12px;text-transform:uppercase;letter-spacing:0.06em;color:rgba(255,255,255,0.6);">
            <span>Samudra Journal</span><span>{{ $post->created_at->format('d F Y') }}</span>
        </div>
    </div>
</section>

<img src="{{ $post->photo ? asset('images/media/' . $post->photo->file) : asset('images/sic/home_img9_409x264.png') }}" alt="{{ $post->title }}" style="width:100%;max-height:520px;object-fit:cover;">

<section class="section">
    <div class="sic-container" style="max-width:780px;">
        <div style="font-size:17px;line-height:1.8;color:var(--sic-text-muted);">
            {!! $post->body !!}
        </div>
        <a href="{{ route('insights.index') }}" class="link-arrow" style="display:inline-block;margin-top:32px;">&larr; Back to insights</a>
    </div>
</section>

@if($related->count())
<section class="section section-tint">
    <div class="sic-container">
        <div class="section-head"><h2 class="section-title">Keep exploring.</h2></div>
        <div class="grid-3">
            @foreach($related as $r)
                <a class="insight-card" href="{{ url('/post/' . $r->slug) }}">
                    <div class="insight-card__img"><img src="{{ $r->photo ? asset('images/media/' . $r->photo->file) : asset('images/sic/home_img10_409x264.png') }}" alt="{{ $r->title }}"></div>
                    <div class="insight-card__meta"><span>{{ optional($r->category)->name ?? 'Insights' }}</span><span>{{ $r->created_at->format('d M Y') }}</span></div>
                    <h3>{{ $r->title }}</h3>
                    <span class="link-arrow">Read story &#8599;</span>
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
