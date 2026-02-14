@extends('layouts.app')

@section('title', 'SUKI - Interior Design Studio Premium')

@section('content')

{{-- ═══ Hero Section ═══ --}}
<section class="hero" id="hero">
    <div class="hero-bg">
        <div class="hero-overlay"></div>
    </div>
    <div class="container hero-content">
        <div class="hero-badge" data-aos="fade-down" data-aos-delay="100">
            <i class="fas fa-star"></i> Premium Interior Design Studio
        </div>
        <h1 data-aos="fade-up" data-aos-delay="200">
            Wujudkan Ruang<br>
            <span class="text-gradient">Impian Anda</span>
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="300">
            Kami menghadirkan solusi desain interior eksklusif yang menggabungkan estetika modern dengan kenyamanan fungsional untuk setiap ruang Anda.
        </p>
        <div class="hero-buttons" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('portfolio') }}" class="btn btn-primary">
                <i class="fas fa-eye"></i> Lihat Portfolio
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline">
                <i class="fas fa-paper-plane"></i> Konsultasi Gratis
            </a>
        </div>
        <div class="hero-stats" data-aos="fade-up" data-aos-delay="500">
            <div class="stat-item">
                <span class="stat-number" data-count="250">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Proyek Selesai</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number" data-count="15">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Tahun Pengalaman</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number" data-count="98">0</span><span class="stat-suffix">%</span>
                <span class="stat-label">Klien Puas</span>
            </div>
        </div>
    </div>
    <div class="hero-scroll">
        <a href="#services-section"><i class="fas fa-chevron-down"></i></a>
    </div>
</section>

{{-- ═══ Services Section ═══ --}}
<section class="section services-section" id="services-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Layanan Kami</span>
            <h2 class="section-title">Solusi Desain Interior <span class="text-gradient">Lengkap</span></h2>
            <p class="section-desc">Dari konsep hingga realisasi, kami menyediakan layanan desain interior komprehensif untuk setiap kebutuhan ruang Anda</p>
        </div>

        <div class="services-grid">
            @foreach($services as $index => $service)
            <div class="service-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="service-icon">
                    <i class="fas {{ $service->icon }}"></i>
                </div>
                <h3>{{ $service->title }}</h3>
                <p>{{ Str::limit($service->description, 120) }}</p>
                <a href="{{ route('services') }}" class="service-link">
                    Selengkapnya <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ About Preview ═══ --}}
<section class="section about-preview">
    <div class="container">
        <div class="about-preview-grid">
            <div class="about-preview-images" data-aos="fade-right">
                <div class="about-img-main">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=600" alt="SUKI Interior Design Studio" loading="lazy">
                </div>
                <div class="about-img-accent">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=400" alt="Design Process" loading="lazy">
                </div>
                <div class="about-experience-badge">
                    <span class="exp-number">15+</span>
                    <span class="exp-text">Tahun<br>Pengalaman</span>
                </div>
            </div>

            <div class="about-preview-content" data-aos="fade-left">
                <span class="section-tag">Tentang SUKI</span>
                <h2 class="section-title">Menghadirkan <span class="text-gradient">Keindahan</span> dalam Setiap Detail</h2>
                <p>SUKI Interior Design adalah studio desain interior premium yang berdiri sejak 2011. Kami percaya bahwa setiap ruang memiliki potensi untuk menjadi karya seni fungsional yang mencerminkan kepribadian penghuninya.</p>
                <div class="about-features">
                    <div class="about-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Desain Custom & Personal</span>
                    </div>
                    <div class="about-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Material Premium Berkualitas</span>
                    </div>
                    <div class="about-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Tim Desainer Berpengalaman</span>
                    </div>
                    <div class="about-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Garansi Kepuasan Klien</span>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-right"></i> Tentang Kami
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ═══ Portfolio Section ═══ --}}
<section class="section portfolio-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Portfolio</span>
            <h2 class="section-title">Proyek <span class="text-gradient">Terbaru</span> Kami</h2>
            <p class="section-desc">Jelajahi koleksi proyek desain interior terbaik yang telah kami kerjakan</p>
        </div>

        <div class="portfolio-grid">
            @foreach($projects->take(6) as $index => $project)
            <div class="portfolio-item {{ $index === 0 || $index === 3 ? 'portfolio-wide' : '' }}" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <img src="{{ $project->image }}" alt="{{ $project->title }}" loading="lazy">
                <div class="portfolio-overlay">
                    <span class="portfolio-category">{{ ucwords(str_replace('_', ' ', $project->category)) }}</span>
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->location }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center" data-aos="fade-up" style="margin-top:3rem">
            <a href="{{ route('portfolio') }}" class="btn btn-outline">
                Lihat Semua Portfolio <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

{{-- ═══ Process Section ═══ --}}
<section class="section process-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Proses Kerja</span>
            <h2 class="section-title">Bagaimana Kami <span class="text-gradient">Bekerja</span></h2>
        </div>

        <div class="process-timeline">
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="process-number">01</div>
                <div class="process-content">
                    <h3>Konsultasi</h3>
                    <p>Diskusi mendalam tentang kebutuhan, gaya, dan budget Anda</p>
                </div>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="process-number">02</div>
                <div class="process-content">
                    <h3>Konsep Desain</h3>
                    <p>Pembuatan mood board, layout, dan visualisasi 3D</p>
                </div>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="process-number">03</div>
                <div class="process-content">
                    <h3>Pengerjaan</h3>
                    <p>Eksekusi desain dengan pengawasan ketat dan material terbaik</p>
                </div>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="process-number">04</div>
                <div class="process-content">
                    <h3>Serah Terima</h3>
                    <p>Final touch dan penyerahan ruang impian Anda yang sempurna</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ Testimonials Section ═══ --}}
<section class="section testimonials-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Testimoni</span>
            <h2 class="section-title">Apa Kata <span class="text-gradient">Klien</span> Kami</h2>
        </div>

        <div class="testimonials-slider" id="testimonialSlider">
            <div class="testimonials-track">
                @foreach($testimonials as $testimonial)
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                    <p class="testimonial-text">"{{ $testimonial->content }}"</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">
                            {{ strtoupper(substr($testimonial->client_name, 0, 1)) }}
                        </div>
                        <div>
                            <h4>{{ $testimonial->client_name }}</h4>
                            <span>{{ $testimonial->client_role }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="testimonial-controls">
                <button class="testimonial-btn" id="prevTestimonial" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
                <div class="testimonial-dots" id="testimonialDots"></div>
                <button class="testimonial-btn" id="nextTestimonial" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

{{-- ═══ CTA Section ═══ --}}
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="zoom-in">
            <h2>Siap Mewujudkan <span class="text-gradient">Ruang Impian</span> Anda?</h2>
            <p>Konsultasikan kebutuhan desain interior Anda dengan tim ahli kami. Gratis dan tanpa kewajiban!</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-paper-plane"></i> Hubungi Kami
                </a>
                <a href="https://wa.me/6285174455228?text=Halo%20SUKI%2C%20saya%20ingin%20konsultasi%20desain%20interior." class="btn btn-whatsapp btn-lg" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
