<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SUKI Interior Design - Studio desain interior premium yang menghadirkan ruang impian Anda menjadi kenyataan.">
    <meta name="keywords" content="desain interior, interior design, SUKI, dekorasi rumah, renovasi">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SUKI - Interior Design Studio')</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- AOS Animate on Scroll --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    {{-- App CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('styles')
</head>
<body>

    {{-- ═══ Navigation ═══ --}}
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="nav-logo">
                <span class="logo-icon"><i class="fas fa-gem"></i></span>
                <span class="logo-text">SUKI</span>
            </a>

            <ul class="nav-menu" id="navMenu">
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a></li>
                <li><a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Layanan</a></li>
                <li><a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a></li>
            </ul>

            <a href="{{ route('contact') }}" class="nav-cta">Konsultasi Gratis</a>

            <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    {{-- ═══ Main Content ═══ --}}
    <main>
        @yield('content')
    </main>

    {{-- ═══ Footer ═══ --}}
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <a href="{{ route('home') }}" class="footer-logo">
                        <span class="logo-icon"><i class="fas fa-gem"></i></span>
                        <span class="logo-text">SUKI</span>
                    </a>
                    <p>Studio desain interior premium yang menghadirkan ruang impian Anda menjadi kenyataan dengan sentuhan elegan dan modern.</p>
                    <div class="footer-socials">
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h4>Navigasi</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('services') }}">Layanan</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('contact') }}">Kontak</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="{{ route('services') }}">Desain Ruang Tamu</a></li>
                        <li><a href="{{ route('services') }}">Desain Dapur</a></li>
                        <li><a href="{{ route('services') }}">Desain Kamar Tidur</a></li>
                        <li><a href="{{ route('services') }}">Desain Kantor</a></li>
                        <li><a href="{{ route('services') }}">Konsultasi</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Kontak Kami</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Sudirman No. 123, Jakarta</li>
                        <li><i class="fas fa-phone"></i> +62 851 7445 5228</li>
                        <li><i class="fas fa-envelope"></i> zuumar54@gmail.com</li>
                        <li><i class="fas fa-clock"></i> Sen - Sab: 09:00 - 18:00</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} SUKI Interior Design. All rights reserved.</p>
                <p>Crafted with <i class="fas fa-heart" style="color:var(--gold)"></i> for beautiful spaces</p>
            </div>
        </div>
    </footer>

    {{-- ═══ WhatsApp Floating Button ═══ --}}
    <a href="https://wa.me/6285174455228?text=Halo%20SUKI%2C%20saya%20tertarik%20dengan%20layanan%20desain%20interior%20Anda." class="wa-float" target="_blank" rel="noopener" aria-label="Chat via WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span class="wa-tooltip">Chat via WhatsApp</span>
    </a>

    {{-- ═══ Back to Top ═══ --}}
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </button>

    {{-- AOS JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    {{-- App JS --}}
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')
</body>
</html>
