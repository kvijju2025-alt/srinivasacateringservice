/**
 * Srinivasa Catering Services — Main JavaScript
 * Traditional Brahmin Premium Website
 */

(function () {
  'use strict';

  /* =============================================
     AOS (Animate On Scroll) Init
  ============================================= */
  document.addEventListener('DOMContentLoaded', function () {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 750,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80,
        disable: 'mobile',  // smoother on mobile
      });
    }

    initAnnBar();
    initPreloader();
    initNavbar();
    initSmoothScroll();
    initActiveNavLinks();
    initCounters();
    initScrollTop();
    initParallax();
    initHeroTyping();
  });

  /* =============================================
     ANNOUNCEMENT BAR — close button
  ============================================= */
  function initAnnBar() {
    var bar   = document.getElementById('annBar');
    var btn   = document.getElementById('annClose');
    var nav   = document.getElementById('mainNav');
    if (!bar || !btn) return;

    btn.addEventListener('click', function () {
      bar.classList.add('ann-hidden');
      document.documentElement.style.setProperty('--ann-h', '0px');
      if (nav) nav.style.top = '0px';
    });
  }

  /* =============================================
     PRELOADER
  ============================================= */
  function initPreloader() {
    var preloader = document.getElementById('preloader');
    if (!preloader) return;
    window.addEventListener('load', function () {
      setTimeout(function () {
        preloader.classList.add('hidden');
        document.body.style.overflow = '';
      }, 800);
    });
    // Safety: always hide after 3s
    setTimeout(function () {
      if (preloader) preloader.classList.add('hidden');
    }, 3000);
  }

  /* =============================================
     NAVBAR — transparent → solid on scroll
  ============================================= */
  function initNavbar() {
    var nav = document.getElementById('mainNav');
    if (!nav) return;

    function updateNav() {
      if (window.scrollY > 60) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    }
    updateNav();
    window.addEventListener('scroll', updateNav, { passive: true });
  }

  /* =============================================
     SMOOTH SCROLL for anchor links
  ============================================= */
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        var target = document.querySelector(this.getAttribute('href'));
        if (!target) return;
        e.preventDefault();

        // Close mobile navbar if open
        var navMenu = document.getElementById('navMenu');
        if (navMenu && navMenu.classList.contains('show')) {
          var bsCollapse = bootstrap.Collapse.getInstance(navMenu);
          if (bsCollapse) bsCollapse.hide();
        }

        var navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h')) || 80;
        var top = target.getBoundingClientRect().top + window.scrollY - navH;
        window.scrollTo({ top: top, behavior: 'smooth' });
      });
    });
  }

  /* =============================================
     ACTIVE NAV LINKS on scroll
  ============================================= */
  function initActiveNavLinks() {
    var sections = document.querySelectorAll('section[id]');
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    if (!sections.length || !navLinks.length) return;

    function setActive() {
      var scrollPos = window.scrollY + 120;
      var current = '';
      sections.forEach(function (sec) {
        if (scrollPos >= sec.offsetTop) {
          current = sec.getAttribute('id');
        }
      });
      navLinks.forEach(function (link) {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
          link.classList.add('active');
        }
      });
    }
    setActive();
    window.addEventListener('scroll', setActive, { passive: true });
  }

  /* =============================================
     ANIMATED COUNTERS
  ============================================= */
  function initCounters() {
    var counters = document.querySelectorAll('.stat-num, .counter-val');
    if (!counters.length) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        if (el.dataset.counted) return;
        el.dataset.counted = '1';

        var text  = el.textContent.trim();
        var suffix = text.replace(/[0-9]/g, '');
        var end    = parseInt(text.replace(/[^0-9]/g, ''), 10);
        if (isNaN(end)) return;

        var duration = 1600;
        var start    = 0;
        var step     = 16;
        var increment = end / (duration / step);

        var timer = setInterval(function () {
          start += increment;
          if (start >= end) {
            start = end;
            clearInterval(timer);
          }
          el.textContent = Math.floor(start) + suffix;
        }, step);

        observer.unobserve(el);
      });
    }, { threshold: 0.5 });

    counters.forEach(function (c) { observer.observe(c); });
  }

  /* =============================================
     SCROLL TO TOP BUTTON
  ============================================= */
  function initScrollTop() {
    var btn = document.getElementById('scrollTopBtn');
    if (!btn) return;

    window.addEventListener('scroll', function () {
      if (window.scrollY > 400) {
        btn.classList.add('show');
      } else {
        btn.classList.remove('show');
      }
    }, { passive: true });

    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* =============================================
     PARALLAX for hero section
  ============================================= */
  function initParallax() {
    var hero = document.querySelector('.hero-section');
    if (!hero) return;

    // Only on desktop/tablet
    if (window.matchMedia('(max-width: 768px)').matches) return;

    window.addEventListener('scroll', function () {
      var scrolled = window.scrollY;
      if (scrolled > window.innerHeight) return;
      var overlay = hero.querySelector('.hero-overlay');
      if (overlay) {
        overlay.style.transform = 'translateY(' + scrolled * 0.15 + 'px)';
      }
      var decos = hero.querySelectorAll('.hero-deco');
      decos.forEach(function (d, i) {
        var speed = 0.06 + i * 0.02;
        d.style.transform = 'translateY(' + scrolled * speed + 'px)';
      });
    }, { passive: true });
  }

  /* =============================================
     HERO TYPING EFFECT (subtle)
  ============================================= */
  function initHeroTyping() {
    var subtitle = document.querySelector('.hero-subtitle');
    if (!subtitle) return;
    subtitle.style.opacity = '0';
    subtitle.style.transform = 'translateY(16px)';
    subtitle.style.transition = 'opacity 1s ease 0.6s, transform 1s ease 0.6s';
    requestAnimationFrame(function () {
      requestAnimationFrame(function () {
        subtitle.style.opacity = '';
        subtitle.style.transform = '';
      });
    });
  }

  /* =============================================
     SWIPER INITIALIZATIONS (all sections)
  ============================================= */
  document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper === 'undefined') return;

    // --- Services ---
    new Swiper('#servicesSwiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: { delay: 3500, disableOnInteraction: false },
      navigation: { prevEl: '#svcPrev', nextEl: '#svcNext' },
      pagination: { el: '#svcPag', clickable: true },
      breakpoints: {
        576: { slidesPerView: 2 },
        992: { slidesPerView: 3 },
      },
    });

    // --- Curry Orders ---
    new Swiper('#currySwiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: { delay: 3200, disableOnInteraction: false },
      navigation: { prevEl: '#curPrev', nextEl: '#curNext' },
      pagination: { el: '#curPag', clickable: true },
      breakpoints: {
        480: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        992: { slidesPerView: 4 },
      },
    });

    // --- Why Choose Us ---
    new Swiper('#whySwiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: { delay: 3800, disableOnInteraction: false },
      navigation: { prevEl: '#whyPrev', nextEl: '#whyNext' },
      pagination: { el: '#whyPag', clickable: true },
      breakpoints: {
        576: { slidesPerView: 2 },
        992: { slidesPerView: 3 },
      },
    });

    // --- Gallery Thumbs (must init before main) ---
    var galThumbs = new Swiper('#galThumbsSwiper', {
      slidesPerView: 4,
      spaceBetween: 8,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
        480: { slidesPerView: 5 },
        768: { slidesPerView: 6 },
        992: { slidesPerView: 8 },
      },
    });

    // --- Gallery Main ---
    new Swiper('#galMainSwiper', {
      loop: true,
      effect: 'fade',
      fadeEffect: { crossFade: true },
      autoplay: { delay: 4000, disableOnInteraction: false },
      navigation: { prevEl: '#galPrev', nextEl: '#galNext' },
      pagination: { el: '#galPag', clickable: true },
      thumbs: { swiper: galThumbs },
    });

    // --- Testimonials ---
    new Swiper('#testiSwiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: { delay: 4500, disableOnInteraction: false, pauseOnMouseEnter: true },
      navigation: { prevEl: '#testiPrev', nextEl: '#testiNext' },
      pagination: { el: '#testiPag', clickable: true },
      breakpoints: {
        768: { slidesPerView: 2 },
      },
    });
  });

  /* =============================================
     NAVBAR TOGGLER ANIMATION
  ============================================= */
  document.addEventListener('DOMContentLoaded', function () {
    var toggler = document.querySelector('.navbar-toggler');
    var menu    = document.getElementById('navMenu');
    if (!toggler || !menu) return;

    menu.addEventListener('show.bs.collapse', function () {
      toggler.classList.add('active');
    });
    menu.addEventListener('hide.bs.collapse', function () {
      toggler.classList.remove('active');
    });
  });

  /* =============================================
     SERVICE CARDS — stagger reveal
  ============================================= */
  document.addEventListener('DOMContentLoaded', function () {
    var cards = document.querySelectorAll('.service-card, .why-card, .curry-card');
    if (!cards.length) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    cards.forEach(function (card) { observer.observe(card); });
  });

  /* =============================================
     PHONE / WHATSAPP CLICK TRACKING (optional GA)
  ============================================= */
  document.addEventListener('click', function (e) {
    var target = e.target.closest('a');
    if (!target) return;
    var href = target.getAttribute('href') || '';
    if (href.startsWith('tel:') || href.includes('wa.me')) {
      // Fire GA event if gtag is available
      if (typeof gtag === 'function') {
        gtag('event', href.startsWith('tel:') ? 'phone_call' : 'whatsapp_click', {
          event_category: 'contact',
          event_label: href,
        });
      }
    }
  });

})();
