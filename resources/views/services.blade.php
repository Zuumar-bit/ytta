@extends('layouts.app')

@section('title', 'Layanan - SUKI Interior Design')

@section('content')

{{-- ═══ Page Header ═══ --}}
<section class="page-header">
    <div class="container">
        <span class="section-tag" data-aos="fade-down">Layanan Kami</span>
        <h1 data-aos="fade-up">Solusi Desain Interior <span class="text-gradient">Terlengkap</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">Layanan profesional dari konsep hingga realisasi untuk setiap kebutuhan ruang Anda</p>
    </div>
</section>

{{-- ═══ Services List ═══ --}}
<section class="section">
    <div class="container">
        <div class="services-detail-grid">
            @foreach($services as $index => $service)
            <div class="service-detail-card" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                <div class="service-detail-icon">
                    <i class="fas {{ $service->icon }}"></i>
                    <span class="service-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                </div>
                <h3>{{ $service->title }}</h3>
                <p>{{ $service->description }}</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Konsultasi desain gratis</li>
                    <li><i class="fas fa-check"></i> Visualisasi 3D</li>
                    <li><i class="fas fa-check"></i> Material premium</li>
                    <li><i class="fas fa-check"></i> Garansi kualitas</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline btn-sm">
                    Konsultasi <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ Why Choose Us ═══ --}}
<section class="section section-dark">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Mengapa SUKI</span>
            <h2 class="section-title">Keunggulan <span class="text-gradient">Kami</span></h2>
        </div>

        <div class="why-grid">
            <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="why-icon"><i class="fas fa-palette"></i></div>
                <h4>Desain Original</h4>
                <p>Setiap desain kami unik dan dibuat khusus sesuai karakter dan kebutuhan klien</p>
            </div>
            <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="why-icon"><i class="fas fa-gem"></i></div>
                <h4>Material Terbaik</h4>
                <p>Kami hanya menggunakan material berkualitas tinggi dari supplier terpercaya</p>
            </div>
            <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="why-icon"><i class="fas fa-clock"></i></div>
                <h4>Tepat Waktu</h4>
                <p>Komitmen kami untuk menyelesaikan setiap proyek sesuai jadwal yang disepakati</p>
            </div>
            <div class="why-card" data-aos="fade-up" data-aos-delay="400">
                <div class="why-icon"><i class="fas fa-handshake"></i></div>
                <h4>After Sales Service</h4>
                <p>Layanan purna jual dan garansi untuk memastikan kepuasan jangka panjang</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══ Pricing ═══ --}}
<section class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Paket Harga</span>
            <h2 class="section-title">Investasi untuk <span class="text-gradient">Ruang Sempurna</span></h2>
            <p class="section-desc">Pilih paket yang sesuai dengan kebutuhan dan budget Anda</p>
        </div>

        <div class="pricing-grid">
            <div class="pricing-card" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-header">
                    <h3>Essential</h3>
                    <div class="pricing-price">
                        <span class="pricing-currency">Rp</span>
                        <span class="pricing-amount">5</span>
                        <span class="pricing-unit">jt / ruang</span>
                    </div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> Konsultasi desain</li>
                    <li><i class="fas fa-check"></i> Layout & denah</li>
                    <li><i class="fas fa-check"></i> Mood board</li>
                    <li><i class="fas fa-check"></i> 2x Revisi</li>
                    <li class="pricing-disabled"><i class="fas fa-times"></i> 3D Rendering</li>
                    <li class="pricing-disabled"><i class="fas fa-times"></i> Pengawasan proyek</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline">Pilih Paket</a>
            </div>

            <div class="pricing-card pricing-popular" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-badge">Populer</div>
                <div class="pricing-header">
                    <h3>Professional</h3>
                    <div class="pricing-price">
                        <span class="pricing-currency">Rp</span>
                        <span class="pricing-amount">12</span>
                        <span class="pricing-unit">jt / ruang</span>
                    </div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> Konsultasi desain</li>
                    <li><i class="fas fa-check"></i> Layout & denah</li>
                    <li><i class="fas fa-check"></i> Mood board</li>
                    <li><i class="fas fa-check"></i> 5x Revisi</li>
                    <li><i class="fas fa-check"></i> 3D Rendering</li>
                    <li><i class="fas fa-check"></i> Pengawasan proyek</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary">Pilih Paket</a>
            </div>

            <div class="pricing-card" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-header">
                    <h3>Premium</h3>
                    <div class="pricing-price">
                        <span class="pricing-currency">Rp</span>
                        <span class="pricing-amount">25</span>
                        <span class="pricing-unit">jt / ruang</span>
                    </div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> Full service desain</li>
                    <li><i class="fas fa-check"></i> Unlimited revisi</li>
                    <li><i class="fas fa-check"></i> 3D + VR Tour</li>
                    <li><i class="fas fa-check"></i> Pengadaan material</li>
                    <li><i class="fas fa-check"></i> Pengawasan penuh</li>
                    <li><i class="fas fa-check"></i> After-sales service</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline">Pilih Paket</a>
            </div>
        </div>
    </div>
</section>

{{-- ═══ CTA ═══ --}}
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="zoom-in">
            <h2>Butuh Paket <span class="text-gradient">Custom</span>?</h2>
            <p>Kami siap menyesuaikan layanan dengan kebutuhan spesifik Anda</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-paper-plane"></i> Hubungi Kami
                </a>
                <a href="https://wa.me/6285174455228?text=Halo%20SUKI%2C%20saya%20ingin%20mengetahui%20paket%20custom%20desain%20interior." class="btn btn-whatsapp btn-lg" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
