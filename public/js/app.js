/* ═══════════════════════════════════════════
   SUKI Interior Design - App JavaScript
   ═══════════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', function () {

    // ── Initialize AOS ──
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 80,
            disable: window.innerWidth < 768 ? 'phone' : false
        });
    }

    // ── Navbar Scroll Effect ──
    const navbar = document.getElementById('navbar');
    const backToTop = document.getElementById('backToTop');

    function handleScroll() {
        const scrollY = window.scrollY;
        if (navbar) {
            navbar.classList.toggle('scrolled', scrollY > 50);
        }
        if (backToTop) {
            backToTop.classList.toggle('visible', scrollY > 500);
        }
    }
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    // ── Back to Top ──
    if (backToTop) {
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ── Mobile Nav Toggle ──
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function () {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu on link click
        navMenu.querySelectorAll('.nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // ── Counter Animation ──
    function animateCounters() {
        var counters = document.querySelectorAll('.stat-number[data-count]');
        counters.forEach(function (counter) {
            if (counter.dataset.animated) return;

            var rect = counter.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                counter.dataset.animated = 'true';
                var target = parseInt(counter.dataset.count);
                var duration = 2000;
                var start = 0;
                var startTime = null;

                function step(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3);
                    counter.textContent = Math.floor(eased * target);
                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        counter.textContent = target;
                    }
                }
                requestAnimationFrame(step);
            }
        });
    }
    window.addEventListener('scroll', animateCounters, { passive: true });
    animateCounters();

    // ── Testimonials Slider ──
    var slider = document.getElementById('testimonialSlider');
    if (slider) {
        var track = slider.querySelector('.testimonials-track');
        var cards = track.querySelectorAll('.testimonial-card');
        var dotsContainer = document.getElementById('testimonialDots');
        var prevBtn = document.getElementById('prevTestimonial');
        var nextBtn = document.getElementById('nextTestimonial');
        var currentSlide = 0;
        var totalSlides = cards.length;

        // Create dots
        for (var i = 0; i < totalSlides; i++) {
            var dot = document.createElement('button');
            dot.className = 'testimonial-dot' + (i === 0 ? ' active' : '');
            dot.dataset.index = i;
            dot.setAttribute('aria-label', 'Slide ' + (i + 1));
            dotsContainer.appendChild(dot);
        }

        function goToSlide(index) {
            currentSlide = index;
            if (currentSlide < 0) currentSlide = totalSlides - 1;
            if (currentSlide >= totalSlides) currentSlide = 0;
            track.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';

            dotsContainer.querySelectorAll('.testimonial-dot').forEach(function (d, idx) {
                d.classList.toggle('active', idx === currentSlide);
            });
        }

        if (prevBtn) prevBtn.addEventListener('click', function () { goToSlide(currentSlide - 1); });
        if (nextBtn) nextBtn.addEventListener('click', function () { goToSlide(currentSlide + 1); });
        dotsContainer.addEventListener('click', function (e) {
            if (e.target.classList.contains('testimonial-dot')) {
                goToSlide(parseInt(e.target.dataset.index));
            }
        });

        // Auto slide
        var autoSlide = setInterval(function () { goToSlide(currentSlide + 1); }, 5000);
        slider.addEventListener('mouseenter', function () { clearInterval(autoSlide); });
        slider.addEventListener('mouseleave', function () {
            autoSlide = setInterval(function () { goToSlide(currentSlide + 1); }, 5000);
        });

        // Touch support
        var touchStartX = 0;
        track.addEventListener('touchstart', function (e) { touchStartX = e.touches[0].clientX; }, { passive: true });
        track.addEventListener('touchend', function (e) {
            var diff = touchStartX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 50) {
                goToSlide(currentSlide + (diff > 0 ? 1 : -1));
            }
        }, { passive: true });
    }

    // ── Portfolio Filter ──
    var filterBtns = document.querySelectorAll('.filter-btn');
    var portfolioItems = document.querySelectorAll('.portfolio-masonry-item');

    if (filterBtns.length > 0) {
        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var filter = this.dataset.filter;

                filterBtns.forEach(function (b) { b.classList.remove('active'); });
                this.classList.add('active');

                portfolioItems.forEach(function (item) {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.classList.remove('hidden');
                        item.style.display = '';
                    } else {
                        item.classList.add('hidden');
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // ── Portfolio Modal ──
    var modal = document.getElementById('portfolioModal');
    var modalClose = document.getElementById('modalClose');
    var detailBtns = document.querySelectorAll('.portfolio-detail-btn');

    if (modal) {
        detailBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                document.getElementById('modalImage').src = this.dataset.image;
                document.getElementById('modalImage').alt = this.dataset.title;
                document.getElementById('modalTitle').textContent = this.dataset.title;
                document.getElementById('modalDescription').textContent = this.dataset.description;
                document.getElementById('modalClient').textContent = this.dataset.client || '-';
                document.getElementById('modalLocation').textContent = this.dataset.location || '-';
                document.getElementById('modalCategory').textContent = this.dataset.category;
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        if (modalClose) {
            modalClose.addEventListener('click', function () {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // ── Smooth Scroll for Anchor Links ──
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#') return;
            var target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

});
