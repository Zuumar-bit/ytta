@extends('layouts.app')

@section('title', 'Tentang Kami - SUKI Interior Design')

@section('content')

{{-- ═══ Page Header ═══ --}}
<section class="page-header">
    <div class="container">
        <span class="section-tag" data-aos="fade-down">Tentang Kami</span>
        <h1 data-aos="fade-up">Studio Desain Interior <span class="text-gradient">Premium</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">Mengenal lebih dekat SUKI dan perjalanan kami dalam menciptakan ruang yang menginspirasi</p>
    </div>
</section>

{{-- ═══ Story Section ═══ --}}
<section class="section">
    <div class="container">
        <div class="about-story-grid">
            <div class="about-story-content" data-aos="fade-right">
                <span class="section-tag">Cerita Kami</span>
                <h2 class="section-title">Dari Passion Menjadi <span class="text-gradient">Profesi</span></h2>
                <p>Didirikan pada tahun 2011, SUKI Interior Design bermula dari sebuah passion sederhana: menciptakan ruang yang tidak hanya indah dilihat, tetapi juga menyenangkan untuk ditinggali.</p>
                <p>Selama lebih dari satu dekade, kami telah bertransformasi menjadi salah satu studio desain interior terdepan di Indonesia. Dengan tim yang terdiri dari desainer berpengalaman, arsitek, dan project manager profesional, kami telah menyelesaikan lebih dari 250 proyek di seluruh Indonesia.</p>
                <p>Filosofi kami sederhana: setiap ruang memiliki cerita yang unik, dan tugas kami adalah menceritakannya melalui desain yang personal, fungsional, dan timeless.</p>
            </div>
            <div class="about-story-image" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=600" alt="SUKI Studio" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- ═══ Vision & Mission ═══ --}}
<section class="section section-dark">
    <div class="container">
        <div class="vm-grid">
            <div class="vm-card" data-aos="fade-up" data-aos-delay="100">
                <div class="vm-icon"><i class="fas fa-eye"></i></div>
                <h3>Visi</h3>
                <p>Menjadi studio desain interior nomor satu di Asia Tenggara yang dikenal karena inovasi desain, kualitas eksekusi, dan kepuasan klien yang luar biasa.</p>
            </div>
            <div class="vm-card" data-aos="fade-up" data-aos-delay="200">
                <div class="vm-icon"><i class="fas fa-bullseye"></i></div>
                <h3>Misi</h3>
                <p>Menghadirkan solusi desain interior yang menggabungkan keindahan estetika dengan fungsionalitas optimal, menggunakan material terbaik dan teknologi terkini.</p>
            </div>
            <div class="vm-card" data-aos="fade-up" data-aos-delay="300">
                <div class="vm-icon"><i class="fas fa-heart"></i></div>
                <h3>Nilai</h3>
                <p>Kreativitas tanpa batas, integritas dalam setiap proyek, komitmen terhadap kualitas, dan dedikasi penuh untuk kepuasan setiap klien kami.</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══ Stats ═══ --}}
<section class="section stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-icon"><i class="fas fa-project-diagram"></i></div>
                <span class="stat-number" data-count="250">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Proyek Selesai</span>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-icon"><i class="fas fa-smile"></i></div>
                <span class="stat-number" data-count="200">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Klien Bahagia</span>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-icon"><i class="fas fa-award"></i></div>
                <span class="stat-number" data-count="15">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Penghargaan</span>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-icon"><i class="fas fa-users"></i></div>
                <span class="stat-number" data-count="25">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Tim Profesional</span>
            </div>
        </div>
    </div>
</section>

{{-- ═══ Team Section ═══ --}}
<section class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">Tim Kami</span>
            <h2 class="section-title">Para <span class="text-gradient">Kreator</span> di Balik SUKI</h2>
            <p class="section-desc">Tim profesional yang berdedikasi untuk mewujudkan ruang impian Anda</p>
        </div>

        <div class="team-grid">
            @foreach($team as $index => $member)
            <div class="team-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="team-photo">
                    <div class="team-avatar">{{ strtoupper(substr($member->name, 0, 1)) }}</div>
                </div>
                <div class="team-info">
                    <h3>{{ $member->name }}</h3>
                    <span class="team-position">{{ $member->position }}</span>
                    <p>{{ $member->bio }}</p>
                    <div class="team-socials">
                        @if($member->instagram)
                        <a href="{{ $member->instagram }}" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        @endif
                        @if($member->linkedin)
                        <a href="{{ $member->linkedin }}" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ CTA ═══ --}}
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="zoom-in">
            <h2>Ingin Bergabung dengan <span class="text-gradient">Tim Kami</span>?</h2>
            <p>Kami selalu mencari talenta kreatif yang bersemangat dalam dunia desain interior.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-envelope"></i> Hubungi Kami
            </a>
        </div>
    </div>
</section>

@endsection
