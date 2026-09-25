@extends('layouts.site')

@section('title', 'Contact')
@section('meta', $contactsetting->meta_description ?? "Tell us what your business needs. Let's explore what we can source together.")

@section('content')
<div class="sic-breadcrumb">
    <div class="sic-container"><a href="{{ route('home') }}">Home</a> / {{ $contactsetting->breadcrumbs_anchor ?? 'Contact' }}</div>
</div>

<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Contact</div>
        <h1>{{ $contactsetting->hero_title_line1 ?? 'Great partnerships' }}<br><span class="accent">{{ $contactsetting->hero_title_line2 ?? 'start here.' }}</span></h1>
        <p>{{ $contactsetting->hero_description ?? "Tell us what your business needs. Let's explore what we can source together." }}</p>
    </div>
</section>

<section class="section">
    <div class="sic-container two-col" style="align-items:flex-start;">
        <div>
            <div class="eyebrow">{{ $contactsetting->side_kicker ?? 'Get in touch' }}</div>
            <h2 class="section-title" style="margin-bottom:28px;">{{ $contactsetting->side_title_line1 ?? 'Indonesia, to' }}<br>{{ $contactsetting->side_title_line2 ?? 'wherever you are.' }}</h2>

            <div style="border-top:1px solid var(--sic-border);padding-top:18px;margin-bottom:18px;">
                <div style="font-size:11px;text-transform:uppercase;letter-spacing:0.08em;color:var(--sic-text-muted);margin-bottom:6px;">Email us</div>
                <a href="mailto:{{ $contactsetting->mailto ?? 'info@samudrainternationalcommerce.com' }}" style="font-weight:700;color:var(--sic-navy);">{!! strip_tags($contactsetting->box_html1 ?? 'info@samudrainternationalcommerce.com') !!} &#8599;</a>
            </div>
            <div style="border-top:1px solid var(--sic-border);padding-top:18px;margin-bottom:18px;">
                <div style="font-size:11px;text-transform:uppercase;letter-spacing:0.08em;color:var(--sic-text-muted);margin-bottom:6px;">Call us</div>
                <div style="font-weight:700;">{!! strip_tags($contactsetting->box_html2 ?? '+62 823 7953 5398') !!} &#8599;</div>
            </div>
            <div style="border-top:1px solid var(--sic-border);padding-top:18px;margin-bottom:18px;">
                <div style="font-size:11px;text-transform:uppercase;letter-spacing:0.08em;color:var(--sic-text-muted);margin-bottom:6px;">Our office</div>
                <div style="font-weight:700;">{!! $contactsetting->box_html3 ?? 'Menara Karya, 28th Floor<br>Jl. HR Rasuna Said Block X-5, Kav 1-2<br>South Jakarta, Indonesia 12950' !!}</div>
            </div>
            <div style="border-top:1px solid var(--sic-border);padding-top:18px;margin-bottom:18px;">
                <div style="font-size:11px;text-transform:uppercase;letter-spacing:0.08em;color:var(--sic-text-muted);margin-bottom:6px;">Warehouse</div>
                <div style="font-weight:700;">{!! $contactsetting->warehouse_address ?? 'Jl. Raya Taman Adiyasa No. 6, Blok J No. 4<br>Cikuya, Solear, Tangerang, Banten 15730' !!}</div>
            </div>
            <div style="border-top:1px solid var(--sic-border);padding-top:18px;margin-bottom:24px;">
                <div style="font-size:11px;text-transform:uppercase;letter-spacing:0.08em;color:var(--sic-text-muted);margin-bottom:6px;">Business hours</div>
                <div>{{ $contactsetting->hours_line1 ?? 'Monday–Friday · 08:00–17:00 WIB' }}</div>
                <div>{{ $contactsetting->hours_line2 ?? 'Saturday–Sunday · By appointment' }}</div>
            </div>
            <a href="{{ $contactsetting->map_link ?? '#' }}" class="link-arrow">View office location &#8599;</a>
        </div>

        <div class="form-card">
            @if(session('success'))
                <div style="background:#eef7ee;border:1px solid #bfe3bf;color:#2c662d;padding:14px 18px;margin-bottom:20px;">{{ session('success') }}</div>
            @endif
            <h3 style="margin-bottom:6px;">{{ $contactsetting->form_title ?? "Let's have a conversation." }}</h3>
            <p style="color:var(--sic-text-muted);font-size:13px;margin-bottom:24px;">Fields marked * are required.</p>
            <form method="POST" action="{{ route('contactPost') }}">
                @csrf
                <div class="form-row">
                    <div class="field"><label>{{ $contactsetting->form_input_name ?? 'Full name' }} *</label><input type="text" name="name" value="{{ old('name') }}" placeholder="Your full name" required></div>
                    <div class="field"><label>{{ $contactsetting->form_input_email ?? 'Business email' }} *</label><input type="email" name="email" value="{{ old('email') }}" placeholder="you@company.com" required></div>
                </div>
                <div class="form-row">
                    <div class="field"><label>{{ $contactsetting->form_input_budget ?? 'Company' }} *</label><input type="text" name="budget" value="{{ old('budget') }}" placeholder="Company name" required></div>
                    <div class="field"><label>{{ $contactsetting->form_input_phone ?? 'Phone number' }} *</label><input type="text" name="phone" value="{{ old('phone') }}" placeholder="Include country code" required></div>
                </div>
                <div class="field"><label>{{ $contactsetting->form_message ?? 'Your message' }} *</label><textarea name="comment" rows="5" placeholder="Tell us a little about your requirements..." required>{{ old('comment') }}</textarea></div>
                <button type="submit" class="btn btn-amber" style="margin-top:8px;">{{ $contactsetting->button_text ?? 'Send message' }} &#8599;</button>
            </form>
        </div>
    </div>
</section>
@endsection
