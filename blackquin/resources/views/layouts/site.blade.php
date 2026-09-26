<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title') &mdash; {{ $setting->title ?? 'Samudra International Commerce' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta')">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="shortcut icon" href="{{ asset('images/sic/logo.png') }}" type="image/png">
    <link href="{{ asset('css/libs/fontawesome.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="sic">

    <header class="sic-header">
        <div class="sic-header__inner">
            <a class="sic-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/sic/logo.png') }}" alt="{{ $setting->title ?? 'Samudra International Commerce' }}">
            </a>

            <nav class="sic-nav" id="sicNav">
                @foreach(($menus ?? []) as $item)
                    <li class="{{ request()->fullUrlIs($item->link) ? 'active' : '' }}" style="list-style:none;">
                        <a href="{{ $item->link }}">{{ $item->name }}</a>
                    </li>
                @endforeach
            </nav>

            <div class="sic-header__actions">
                <a href="{{ route('quote') }}" class="btn btn-amber">Get a quote <span>&#8599;</span></a>
                <button class="sic-burger" id="sicBurger" aria-label="Menu"><span></span><span></span><span></span></button>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="sic-footer">
        <div class="sic-container">
            <div class="sic-footer__grid">
                <div>
                    <img class="footer-logo" src="{{ asset('images/sic/logo.png') }}" alt="{{ $setting->title ?? 'Samudra International Commerce' }}">
                    <p>{{ $headerfooter->footer_col1_subtitle ?? "Connecting Indonesia's natural excellence with the world through trusted sourcing and lasting partnerships." }}</p>
                    <div class="social">
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h5>Discover</h5>
                    <ul>
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('products.index') }}">Our products</a></li>
                        <li><a href="{{ route('insights.index') }}">Insights</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Let&rsquo;s connect</h5>
                    <ul>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('quote') }}">Request a quote</a></li>
                        <li><a href="{{ route('faq') }}">FAQs</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Based in Indonesia. Connected globally.</h5>
                    <p style="margin-bottom:14px;">{{ $setting->address ?? 'Menara Karya, 28th Floor, Jl. HR Rasuna Said, Jakarta 12950' }}</p>
                    <p style="margin-bottom:0;">{{ $setting->contact ?? 'info@samudrainternationalcommerce.com' }}</p>
                </div>
            </div>
            <div class="sic-footer__bottom">
                <span>&copy; {{ date('Y') }} PT Samudra International Commerce</span>
                <span>Indonesian origins. Global possibilities.</span>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <script>
        document.getElementById('sicBurger')?.addEventListener('click', function () {
            document.getElementById('sicNav').classList.toggle('is-open');
        });
    </script>
    @stack('scripts')
</body>
</html>
