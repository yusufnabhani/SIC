@extends('layouts.site')

@section('title', 'Insights')
@section('meta', $blogsettings->meta_description ?? 'Stories about Indonesian origins, product quality and the relationships that make international trade work.')

@section('content')
<div class="sic-breadcrumb">
    <div class="sic-container"><a href="{{ route('home') }}">Home</a> / {{ $blogsettings->breadcrumbs_anchor ?? 'Insights' }}</div>
</div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Insights</div>
        <h1>{{ $blogsettings->hero_title_line1 ?? 'Perspectives from' }}<br><span class="accent">{{ $blogsettings->hero_title_line2 ?? 'the source.' }}</span></h1>
        <p>{{ $blogsettings->hero_description ?? 'Stories about Indonesian origins, product quality and the relationships that make international trade work.' }}</p>
    </div>
</section>

@php $featured = $posts->first(); $rest = $posts->slice(1); @endphp

@if($featured)
<section class="section-tight">
    <div class="sic-container">
        <div class="grid-2" style="display:grid;grid-template-columns:1fr 1fr;gap:0;background:var(--sic-blue-tint);">
            <div><img src="{{ $featured->photo ? asset('images/media/' . $featured->photo->file) : asset('images/sic/home_img9_409x264.png') }}" alt="{{ $featured->title }}" style="width:100%;height:100%;object-fit:cover;"></div>
            <div style="padding:48px;display:flex;flex-direction:column;justify-content:center;">
                <div class="eyebrow">Featured insight</div>
                <h2 class="section-title" style="font-size:28px;margin-bottom:14px;">{{ $featured->title }}</h2>
                <p style="color:var(--sic-text-muted);margin-bottom:20px;">{{ \Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags(str_replace(['<', '</'], [' <', ' </'], $featured->body)))), 140) }}</p>
                <a href="{{ url('/post/' . $featured->slug) }}" class="link-arrow">Read the story &#8599;</a>
            </div>
        </div>
    </div>
</section>
@endif

<section class="section">
    <div class="sic-container">
        <div class="section-head"><h2 class="section-title">Latest perspectives</h2><span style="color:var(--sic-text-muted);font-size:14px;">From the Samudra journal</span></div>
        <div class="grid-3">
            @forelse($rest as $post)
                <a class="insight-card" href="{{ url('/post/' . $post->slug) }}">
                    <div class="insight-card__img"><img src="{{ $post->photo ? asset('images/media/' . $post->photo->file) : asset('images/sic/home_img10_409x264.png') }}" alt="{{ $post->title }}"></div>
                    <div class="insight-card__meta"><span>{{ optional($post->category)->name ?? 'Insights' }}</span><span>{{ $post->created_at->format('d M Y') }}</span></div>
                    <h3>{{ $post->title }}</h3>
                    <span class="link-arrow">Read story &#8599;</span>
                </a>
            @empty
                <p style="color:var(--sic-text-muted);">More stories coming soon.</p>
            @endforelse
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
