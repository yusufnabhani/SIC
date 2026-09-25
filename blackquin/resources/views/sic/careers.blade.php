@extends('layouts.site')

@section('title', 'Careers')
@section('meta', 'Careers at PT Samudra International Commerce.')

@section('content')
<section class="page-hero">
    <div class="sic-container">
        <div class="eyebrow">Careers</div>
        <h1>Build the bridge<br><span class="accent">between land and world.</span></h1>
        <p>We're not currently advertising open roles, but we're always glad to hear from people who care about Indonesian agriculture and global trade.</p>
    </div>
</section>

<section class="section">
    <div class="sic-container" style="max-width:640px;">
        <p style="margin-bottom:24px;">Interested in working with us? Send your CV and a short introduction to our team and we'll keep it on file for future openings.</p>
        <a href="{{ route('contact') }}" class="btn btn-navy">Get in touch &#8599;</a>
    </div>
</section>
@endsection
