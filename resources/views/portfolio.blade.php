@extends('layouts.app')

@section('title', 'Portfolio - SUKI Interior Design')

@section('content')

{{-- ═══ Page Header ═══ --}}
<section class="page-header">
    <div class="container">
        <span class="section-tag" data-aos="fade-down">Portfolio</span>
        <h1 data-aos="fade-up">Karya <span class="text-gradient">Terbaik</span> Kami</h1>
        <p data-aos="fade-up" data-aos-delay="100">Jelajahi koleksi proyek desain interior yang telah kami selesaikan</p>
    </div>
</section>

{{-- ═══ Portfolio Filter & Grid ═══ --}}
<section class="section">
    <div class="container">
        {{-- Filter Buttons --}}
        <div class="portfolio-filters" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">Semua</button>
            @foreach($categories as $category)
            <button class="filter-btn" data-filter="{{ $category }}">{{ ucwords(str_replace('_', ' ', $category)) }}</button>
            @endforeach
        </div>

        {{-- Portfolio Grid --}}
        <div class="portfolio-masonry" id="portfolioGrid">
            @foreach($projects as $index => $project)
            <div class="portfolio-masonry-item" data-category="{{ $project->category }}" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                <div class="portfolio-card">
                    <div class="portfolio-card-img">
                        <img src="{{ $project->image }}" alt="{{ $project->title }}" loading="lazy">
                    </div>
                    <div class="portfolio-card-overlay">
                        <span class="portfolio-card-category">{{ ucwords(str_replace('_', ' ', $project->category)) }}</span>
                        <h3>{{ $project->title }}</h3>
                        <div class="portfolio-card-meta">
                            @if($project->client_name)
                            <span><i class="fas fa-user"></i> {{ $project->client_name }}</span>
                            @endif
                            @if($project->location)
                            <span><i class="fas fa-map-marker-alt"></i> {{ $project->location }}</span>
                            @endif
                        </div>
                        <p>{{ Str::limit($project->description, 100) }}</p>
                        <button class="btn btn-sm btn-outline portfolio-detail-btn" 
                                data-title="{{ $project->title }}"
                                data-description="{{ $project->description }}"
                                data-image="{{ $project->image }}"
                                data-client="{{ $project->client_name }}"
                                data-location="{{ $project->location }}"
                                data-category="{{ ucwords(str_replace('_', ' ', $project->category)) }}">
                            <i class="fas fa-expand"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ Portfolio Modal ═══ --}}
<div class="modal-overlay" id="portfolioModal">
    <div class="modal-content">
        <button class="modal-close" id="modalClose"><i class="fas fa-times"></i></button>
        <div class="modal-body">
            <div class="modal-image">
                <img src="" alt="" id="modalImage">
            </div>
            <div class="modal-info">
                <span class="portfolio-card-category" id="modalCategory"></span>
                <h2 id="modalTitle"></h2>
                <p id="modalDescription"></p>
                <div class="modal-meta">
                    <div><i class="fas fa-user"></i> <span id="modalClient"></span></div>
                    <div><i class="fas fa-map-marker-alt"></i> <span id="modalLocation"></span></div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top:1.5rem">
                    <i class="fas fa-paper-plane"></i> Ingin Desain Serupa?
                </a>
            </div>
        </div>
    </div>
</div>

{{-- ═══ CTA ═══ --}}
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="zoom-in">
            <h2>Tertarik dengan <span class="text-gradient">Desain Kami</span>?</h2>
            <p>Konsultasikan proyek impian Anda sekarang dan dapatkan konsultasi gratis!</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-paper-plane"></i> Mulai Proyek
                </a>
                <a href="https://wa.me/6285174455228?text=Halo%20SUKI%2C%20saya%20tertarik%20dengan%20desain%20di%20portfolio%20Anda." class="btn btn-whatsapp btn-lg" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
