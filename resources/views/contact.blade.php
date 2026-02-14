@extends('layouts.app')

@section('title', 'Kontak - SUKI Interior Design')

@section('content')

{{-- ═══ Page Header ═══ --}}
<section class="page-header">
    <div class="container">
        <span class="section-tag" data-aos="fade-down">Kontak</span>
        <h1 data-aos="fade-up">Hubungi <span class="text-gradient">Kami</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">Siap membantu mewujudkan ruang impian Anda. Hubungi kami sekarang!</p>
    </div>
</section>

{{-- ═══ Contact Section ═══ --}}
<section class="section">
    <div class="container">
        <div class="contact-grid">
            {{-- Contact Form --}}
            <div class="contact-form-wrap" data-aos="fade-right">
                <h2>Kirim Pesan</h2>
                <p>Isi formulir di bawah ini dan kami akan menghubungi Anda secepatnya</p>

                @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
                @endif

                <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Nama Lengkap <span class="required">*</span></label>
                            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required value="{{ old('name') }}">
                            @error('name') <span class="form-error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" id="email" name="email" placeholder="email@contoh.com" required value="{{ old('email') }}">
                            @error('email') <span class="form-error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="phone">No. Telepon</label>
                            <input type="tel" id="phone" name="phone" placeholder="0851 7445 5228" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label for="service_type">Jenis Layanan</label>
                            <select id="service_type" name="service_type">
                                <option value="">Pilih Layanan</option>
                                @foreach($services as $service)
                                <option value="{{ $service->title }}" {{ old('service_type') == $service->title ? 'selected' : '' }}>{{ $service->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek <span class="required">*</span></label>
                        <input type="text" id="subject" name="subject" placeholder="Subjek pesan Anda" required value="{{ old('subject') }}">
                        @error('subject') <span class="form-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan <span class="required">*</span></label>
                        <textarea id="message" name="message" rows="5" placeholder="Ceritakan kebutuhan desain interior Anda..." required>{{ old('message') }}</textarea>
                        @error('message') <span class="form-error">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="submitBtn">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div>

            {{-- Contact Info --}}
            <div class="contact-info-wrap" data-aos="fade-left">
                <div class="contact-card">
                    <h3>Informasi Kontak</h3>
                    <p>Jangan ragu untuk menghubungi kami melalui berbagai channel berikut</p>

                    <div class="contact-items">
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4>Alamat Studio</h4>
                                <p>Jl. Jend. Sudirman No. 123<br>Jakarta Selatan, 12190</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4>Telepon</h4>
                                <p>+62 851 7445 5228<br>+62 21 5555 1234</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4>Email</h4>
                                <p>
                                    <a href="mailto:zuumar54@gmail.com">zuumar54@gmail.com</a><br>
                                    <a href="mailto:project@suki-interior.com">project@suki-interior.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4>Jam Operasional</h4>
                                <p>Senin - Sabtu: 09:00 - 18:00<br>Minggu: By Appointment</p>
                            </div>
                        </div>
                    </div>

                    {{-- Quick Contact Buttons --}}
                    <div class="quick-contact">
                        <a href="https://wa.me/6285174455228?text=Halo%20SUKI%2C%20saya%20ingin%20konsultasi%20desain%20interior." class="btn btn-whatsapp btn-block" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp"></i> Chat via WhatsApp
                        </a>
                        <a href="mailto:zuumar54@gmail.com" class="btn btn-outline btn-block">
                            <i class="fas fa-envelope"></i> Kirim Email
                        </a>
                    </div>
                </div>

                {{-- Map --}}
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2814095850887!2d106.82280261528!3d-6.224610795497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJl.%20Jend.%20Sudirman%2C%20Jakarta!5e0!3m2!1sid!2sid!4v1690000000000!5m2!1sid!2sid" 
                            width="100%" height="250" style="border:0; border-radius:16px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
        
        const formData = new FormData(form);
        
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message
                const alert = document.createElement('div');
                alert.className = 'alert alert-success';
                alert.innerHTML = '<i class="fas fa-check-circle"></i> ' + data.message;
                form.parentNode.insertBefore(alert, form);
                form.reset();
                
                // Remove alert after 5s
                setTimeout(() => alert.remove(), 5000);
            }
        })
        .catch(error => {
            const alert = document.createElement('div');
            alert.className = 'alert alert-error';
            alert.innerHTML = '<i class="fas fa-exclamation-circle"></i> Terjadi kesalahan. Silakan coba lagi.';
            form.parentNode.insertBefore(alert, form);
            setTimeout(() => alert.remove(), 5000);
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Pesan';
        });
    });
});
</script>
@endsection
