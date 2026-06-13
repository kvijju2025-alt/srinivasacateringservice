<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Primary SEO -->
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
  <meta name="keywords"    content="<?= htmlspecialchars($meta_keywords) ?>">
  <link rel="canonical"    href="<?= htmlspecialchars($canonical_url) ?>">
  <meta name="robots"      content="index, follow">
  <meta name="author"      content="Srinivasa Catering Services">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:title"       content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($meta_description) ?>">
  <meta property="og:image"       content="<?= htmlspecialchars($canonical_url) ?>public/images/og-image.jpg">
  <meta property="og:locale"      content="en_IN">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= htmlspecialchars($page_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($meta_description) ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🪔</text></svg>">

  <!-- Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Lato:wght@300;400;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- AOS Animations -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

  <!-- Swiper JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/public/css/style.css">

  <!-- Local Business Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FoodEstablishment",
    "name": "Srinivasa Catering Services",
    "description": "Traditional Brahmin Pure Vegetarian Catering Services in Hyderabad",
    "url": "https://srinivasacateringservices.in",
    "telephone": ["+91-9908695554", "+91-9959933514"],
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Near Majjigowramma Temple, Srinivasa Heights, Chilkanagar Main Road",
      "addressLocality": "Uppal",
      "addressRegion": "Telangana",
      "addressCountry": "IN",
      "postalCode": "500039"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "17.4050",
      "longitude": "78.5586"
    },
    "servesCuisine": ["South Indian", "Brahmin Vegetarian", "Andhra"],
    "priceRange": "₹₹",
    "openingHours": "Mo-Su 07:00-21:00",
    "hasMap": "https://maps.google.com/?q=Majjigowramma+Temple+Uppal+Hyderabad",
    "founder": [
      {"@type": "Person", "name": "Y. Kandala Rama Devi"},
      {"@type": "Person", "name": "Mantha Srilakshmi"}
    ]
  }
  </script>

  <!-- FAQ Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What type of food does Srinivasa Catering Services serve?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We serve 100% pure vegetarian Brahmin-style food, including traditional Andhra recipes, puja prasadam, and homemade curries."
        }
      },
      {
        "@type": "Question",
        "name": "How many guests can you cater for?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We can comfortably cater for events ranging from small family gatherings to large functions with up to 200 guests."
        }
      },
      {
        "@type": "Question",
        "name": "Do you offer curry orders for home delivery?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we accept bulk curry orders for sambar, rasam, pulihora, majjiga pulusu, and many more traditional dishes."
        }
      },
      {
        "@type": "Question",
        "name": "Where are you located?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We are located near Majjigowramma Temple, Srinivasa Heights, Chilkanagar Main Road, Uppal, Hyderabad, Telangana."
        }
      }
    ]
  }
  </script>
</head>

<body>

<!-- ================================================
     PRELOADER
================================================ -->
<div id="preloader">
  <div class="preloader-inner">
    <div class="diya-icon">🪔</div>
    <div class="preloader-text">Srinivasa Catering</div>
    <div class="preloader-bar"><div class="preloader-fill"></div></div>
  </div>
</div>

<!-- ================================================
     ANNOUNCEMENT BAR
================================================ -->
<div class="announcement-bar" id="annBar">
  <div class="ann-track-wrap">
    <div class="ann-track">
      <span>🎉 30% OFF on all catering bookings this month! &nbsp;·&nbsp; Call <strong>9908695554</strong> to book now &nbsp;·&nbsp; 🌿 100% Pure Vegetarian · Traditional Brahmin Recipes &nbsp;·&nbsp; ⏰ Limited slots — July 2026 &nbsp;·&nbsp; 🏠 Serving Uppal, Hyderabad &amp; nearby areas &nbsp;·&nbsp; 💚 WhatsApp booking available! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
      <span aria-hidden="true">🎉 30% OFF on all catering bookings this month! &nbsp;·&nbsp; Call <strong>9908695554</strong> to book now &nbsp;·&nbsp; 🌿 100% Pure Vegetarian · Traditional Brahmin Recipes &nbsp;·&nbsp; ⏰ Limited slots — July 2026 &nbsp;·&nbsp; 🏠 Serving Uppal, Hyderabad &amp; nearby areas &nbsp;·&nbsp; 💚 WhatsApp booking available!</span>
    </div>
  </div>
  <button class="ann-close" id="annClose" aria-label="Dismiss announcement">✕</button>
</div>

<!-- ================================================
     NAVIGATION
================================================ -->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="#home">
      <span class="brand-diya">🪔</span>
      <span class="brand-text">
        <span class="brand-main">Srinivasa</span>
        <span class="brand-sub">Catering Services</span>
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
            aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="toggler-icon"><span></span><span></span><span></span></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#curry-orders">Curry Orders</a></li>
        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonials">Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
      <a href="tel:9908695554" class="btn-nav-call ms-lg-3">
        <i class="fas fa-phone-alt"></i> Call Now
      </a>
    </div>
  </div>
</nav>

<!-- ================================================
     HERO SECTION — 3-Slide Carousel
================================================ -->
<section id="home" class="hero-section">

  <!-- Floating decorative elements (above carousel) -->
  <div class="hero-deco hero-deco-1">🪔</div>
  <div class="hero-deco hero-deco-2">🌸</div>
  <div class="hero-deco hero-deco-4">🪔</div>

  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5500">

    <!-- Slide Dot Indicators -->
    <div class="hero-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="hero-dot active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" class="hero-dot" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" class="hero-dot" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">

      <!-- ====== SLIDE 1 — Main Branding ====== -->
      <div class="carousel-item active">
        <div class="hero-slide" style="background-image:linear-gradient(135deg,rgba(26,0,0,0.91)0%,rgba(90,0,0,0.80)60%,rgba(120,0,0,0.75)100%),url('https://images.unsplash.com/photo-1476224203421-74177e022103?auto=format&fit=crop&w=1920&q=85');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-8 col-xl-7">
                <div class="hero-content">
                  <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Traditional Brahmin Catering · Hyderabad
                  </div>
                  <h1 class="hero-title">
                    Authentic Brahmin<br>
                    <span class="text-gold">Catering Services</span><br>
                    in Hyderabad
                  </h1>
                  <p class="hero-subtitle">Traditional Pure Vegetarian Food Prepared with Devotion, Quality, and Authentic Taste for Every Occasion.</p>
                  <div class="hero-buttons">
                    <a href="tel:9908695554" class="btn-hero-primary"><i class="fas fa-phone-alt me-2"></i>Call Now</a>
                    <a href="https://wa.me/919908695554?text=Hello%2C+I+want+to+book+catering" target="_blank" class="btn-hero-whatsapp"><i class="fab fa-whatsapp me-2"></i>WhatsApp Booking</a>
                  </div>
                  <div class="hero-stats">
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> 7+ Years Experience</div>
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Pure Vegetarian</div>
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Traditional Recipes</div>
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Up to 200 Guests</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ====== SLIDE 2 — Tiffins & Breakfast ====== -->
      <div class="carousel-item">
        <div class="hero-slide" style="background-image:linear-gradient(135deg,rgba(15,8,0,0.90)0%,rgba(70,25,0,0.82)60%,rgba(100,40,0,0.78)100%),url('https://images.unsplash.com/photo-1630383249896-424e482df921?auto=format&fit=crop&w=1920&q=85');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-8 col-xl-7">
                <div class="hero-content">
                  <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Authentic Andhra &amp; Telangana Tiffins
                  </div>
                  <h1 class="hero-title">
                    Traditional Idli,<br>
                    <span class="text-gold">Dosa &amp; Tiffins</span><br>
                    Made with Love
                  </h1>
                  <p class="hero-subtitle">Idli, Pesarattu, Dosa, Pongal, Upma &amp; more — freshly prepared every morning using authentic Andhra recipes and pure ingredients.</p>
                  <div class="hero-buttons">
                    <a href="#curry-orders" class="btn-hero-primary"><i class="fas fa-utensils me-2"></i>Order Tiffins</a>
                    <a href="https://wa.me/919908695554?text=Hello%2C+I+want+to+order+tiffins" target="_blank" class="btn-hero-whatsapp"><i class="fab fa-whatsapp me-2"></i>WhatsApp Order</a>
                  </div>
                  <div class="hero-stats">
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Idli &amp; Dosa</div>
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Pesarattu</div>
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Pongal &amp; Upma</div>
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Made Fresh Daily</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ====== SLIDE 3 — 30% OFF Curry Orders ====== -->
      <div class="carousel-item">
        <div class="hero-slide" style="background-image:linear-gradient(135deg,rgba(0,18,5,0.92)0%,rgba(10,50,15,0.84)60%,rgba(30,70,20,0.80)100%),url('https://images.unsplash.com/photo-1546069901571-be20009f267a?auto=format&fit=crop&w=1920&q=85');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-8 col-xl-7">
                <div class="hero-content">
                  <div class="hero-badge offer-badge">
                    <span class="badge-dot offer-dot"></span>
                    🎉 Special Offer — 30% OFF This Month!
                  </div>
                  <h1 class="hero-title">
                    Fresh Homemade<br>
                    <span class="text-gold">Curry Orders</span><br>
                    on Demand
                  </h1>
                  <p class="hero-subtitle">Sambar, Rasam, Gongura Pachadi, Gutti Vankaya, Pulihora &amp; more — made-to-order Andhra curries at your doorstep.</p>
                  <div class="hero-buttons">
                    <a href="#curry-orders" class="btn-hero-primary"><i class="fas fa-shopping-basket me-2"></i>Order Curries</a>
                    <a href="https://wa.me/919908695554?text=Hello%2C+I+want+to+order+curries" target="_blank" class="btn-hero-whatsapp"><i class="fab fa-whatsapp me-2"></i>WhatsApp Order</a>
                  </div>
                  <div class="hero-stats">
                    <div class="hero-stat offer-stat"><i class="fas fa-tag"></i> 30% OFF Today</div>
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Sambar &amp; Rasam</div>
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Gongura Pachadi</div>
                    <div class="hero-stat"><i class="fas fa-check-circle"></i> Bulk Orders</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.carousel-inner -->

    <!-- Prev / Next Controls -->
    <button class="carousel-control-prev hero-nav-btn" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <div class="hero-nav-circle"><i class="fas fa-chevron-left"></i></div>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next hero-nav-btn" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <div class="hero-nav-circle"><i class="fas fa-chevron-right"></i></div>
      <span class="visually-hidden">Next</span>
    </button>

  </div><!-- /#heroCarousel -->

  <div class="hero-scroll-indicator">
    <a href="#about"><span></span><span></span><span></span></a>
  </div>
</section>

<!-- ================================================
     RANGOLI DIVIDER
================================================ -->
<div class="rangoli-divider">
  <div class="rangoli-line"></div>
  <div class="rangoli-center">✦ ॐ ✦</div>
  <div class="rangoli-line"></div>
</div>

<!-- ================================================
     ABOUT SECTION
================================================ -->
<section id="about" class="about-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="900">
        <div class="about-visual-wrapper">
          <div class="about-img-frame">
            <img
              src="https://images.unsplash.com/photo-1589301760014-d929f3979dbc?auto=format&fit=crop&w=700&q=85"
              alt="Traditional South Indian Brahmin feast on banana leaf"
              loading="lazy"
              class="about-real-img">
            <div class="about-img-badge">
              <span>🪔</span>
              <span>Pure &amp; Traditional</span>
            </div>
          </div>
          <div class="about-stat-badge badge-tl" data-aos="zoom-in" data-aos-delay="300">
            <span class="stat-num">7+</span>
            <span class="stat-lbl">Years</span>
          </div>
          <div class="about-stat-badge badge-tr" data-aos="zoom-in" data-aos-delay="400">
            <span class="stat-num">200+</span>
            <span class="stat-lbl">Guests</span>
          </div>
          <div class="about-stat-badge badge-br" data-aos="zoom-in" data-aos-delay="500">
            <span class="stat-num">100%</span>
            <span class="stat-lbl">Veg</span>
          </div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left" data-aos-duration="900">
        <div class="section-label">About Us</div>
        <h2 class="section-title">About Srinivasa<br><span class="text-gold">Catering Services</span></h2>
        <div class="gold-underline"></div>
        <p class="about-text">
          Srinivasa Catering Services has been serving authentic Brahmin-style vegetarian food for over <strong>7 years</strong>.
          Founded and managed by <strong>Kandala Rama Devi</strong> and <strong>Mantha Srilakshmi</strong>, we specialize in
          preparing traditional homemade meals using pure ingredients, authentic recipes, and hygienic cooking methods.
        </p>
        <p class="about-text">
          We undertake small and medium-sized catering orders and can comfortably serve up to <strong>200 guests</strong> while
          maintaining the same traditional taste and quality. Our goal is to make every religious event, family gathering,
          and special occasion memorable through delicious vegetarian food prepared with <em>care and devotion</em>.
        </p>
        <div class="about-highlights">
          <div class="highlight-item">
            <i class="fas fa-leaf"></i>
            <span>100% Pure Vegetarian — No onion, no garlic on request</span>
          </div>
          <div class="highlight-item">
            <i class="fas fa-fire-alt"></i>
            <span>Fresh food prepared on the day of the event</span>
          </div>
          <div class="highlight-item">
            <i class="fas fa-award"></i>
            <span>Traditional Brahmin recipes passed through generations</span>
          </div>
          <div class="highlight-item">
            <i class="fas fa-handshake"></i>
            <span>Family-run business with personal attention to every order</span>
          </div>
        </div>
        <div class="about-owners mt-4">
          <div class="owner-tag">
            <i class="fas fa-user-tie"></i>
            <div>
              <strong>Kandala Rama Devi</strong>
              <small>Co-Founder &amp; Head Chef</small>
            </div>
          </div>
          <div class="owner-tag">
            <i class="fas fa-user-tie"></i>
            <div>
              <strong>Mantha Srilakshmi</strong>
              <small>Co-Founder &amp; Operations</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================================================
     RANGOLI DIVIDER
================================================ -->
<div class="rangoli-divider maroon-bg">
  <div class="rangoli-line light"></div>
  <div class="rangoli-center light">✦ Our Services ✦</div>
  <div class="rangoli-line light"></div>
</div>

<!-- ================================================
     SERVICES SECTION
================================================ -->
<section id="services" class="services-section">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-label">What We Offer</div>
      <h2 class="section-title">Our <span class="text-gold">Catering Services</span></h2>
      <div class="gold-underline mx-auto"></div>
      <p class="section-desc">From intimate family gatherings to large traditional celebrations, we serve with devotion.</p>
    </div>
    <!-- Services Swiper -->
    <div class="scs-wrapper" data-aos="fade-up">
      <div class="swiper" id="servicesSwiper">
        <div class="swiper-wrapper">
          <?php
          $services = [
            ['icon'=>'fas fa-home',         'title'=>'Housewarming Catering',      'desc'=>'Celebrate your Griha Pravesham with an authentic Brahmin feast that blesses the new home with traditional flavours.'],
            ['icon'=>'fas fa-praying-hands','title'=>'Satyanarayana Vratham',      'desc'=>'Complete catering for Satyanarayana Puja including prasadam, panchamrit, and full meal for all devotees.'],
            ['icon'=>'fas fa-ring',         'title'=>'Wedding Catering',           'desc'=>'Traditional vegetarian wedding banquet served on banana leaves with full South Indian meal spreads.'],
            ['icon'=>'fas fa-heart',        'title'=>'Engagement Catering',        'desc'=>'Make your Nischitartham memorable with a beautifully presented traditional vegetarian meal for family and guests.'],
            ['icon'=>'fas fa-baby',         'title'=>'Annaprasana Functions',      'desc'=>'Celebrate the first rice-feeding ceremony with a joyful spread of traditional homemade food and sweets.'],
            ['icon'=>'fas fa-birthday-cake','title'=>'Birthday Parties',           'desc'=>'Pure vegetarian birthday catering with customised menus for children and adults — traditional or contemporary.'],
            ['icon'=>'fas fa-child',        'title'=>'Naming Ceremonies',          'desc'=>'Namakaranam catering with traditional prasadam and full meal preparations for family and community gatherings.'],
            ['icon'=>'fas fa-briefcase',    'title'=>'Corporate Vegetarian Meals', 'desc'=>'Healthy and hygienic vegetarian lunch catering for offices, team meets, and corporate events in Hyderabad.'],
            ['icon'=>'fas fa-star',         'title'=>'Festival Special Catering',  'desc'=>'Special catering for Ugadi, Sankranti, Diwali, and all major Telugu and Hindu festivals with season specials.'],
            ['icon'=>'fas fa-utensils',     'title'=>'Bulk Curry Orders',          'desc'=>'Order fresh homemade Andhra-style curries in bulk for any occasion — delivered hot and on time.'],
          ];
          foreach ($services as $s): ?>
          <div class="swiper-slide">
            <div class="service-card">
              <div class="service-icon-wrap"><i class="<?= $s['icon'] ?>"></i></div>
              <h3 class="service-title"><?= $s['title'] ?></h3>
              <p class="service-desc"><?= $s['desc'] ?></p>
              <a href="https://wa.me/919908695554?text=Hello%2C+I+am+interested+in+<?= urlencode($s['title']) ?>" target="_blank" class="service-link">
                Book This Service <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="scs-controls">
        <button class="scs-btn" id="svcPrev"><i class="fas fa-chevron-left"></i></button>
        <div class="scs-pag" id="svcPag"></div>
        <button class="scs-btn" id="svcNext"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </div>
</section>

<!-- ================================================
     CURRY ORDERS SECTION
================================================ -->
<section id="curry-orders" class="curry-section">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-label cream-label">Order Homemade</div>
      <h2 class="section-title light-title">Fresh Homemade <span class="text-gold">Curry Orders</span></h2>
      <div class="gold-underline mx-auto"></div>
      <p class="section-desc light-desc">
        We prepare traditional Andhra and Brahmin-style curries on order — made fresh, packed hygienically, and delivered with love.
      </p>
    </div>

    <!-- Curry Swiper -->
    <div class="scs-wrapper" data-aos="fade-up">
      <div class="swiper" id="currySwiper">
        <div class="swiper-wrapper">
          <?php
          $curries = [
            ['emoji'=>'🍲','name'=>'Sambar',              'desc'=>'Thick, tangy lentil &amp; vegetable broth','color'=>'#8B2500'],
            ['emoji'=>'🥣','name'=>'Rasam',               'desc'=>'Peppery tamarind soup — comfort in a bowl','color'=>'#B03A00'],
            ['emoji'=>'🍋','name'=>'Pulihora',            'desc'=>'Tangy tamarind rice — festival favourite','color'=>'#C8860A'],
            ['emoji'=>'🥛','name'=>'Majjiga Pulusu',     'desc'=>'Buttermilk curry with subtle spices','color'=>'#5A7A3A'],
            ['emoji'=>'🍆','name'=>'Gutti Vankaya',      'desc'=>'Stuffed brinjal in rich masala gravy','color'=>'#4A0070'],
            ['emoji'=>'🥦','name'=>'Bendakaya Curry',    'desc'=>'Crispy okra stir-fry with dry spices','color'=>'#2D6A4F'],
            ['emoji'=>'🥒','name'=>'Dondakaya Fry',      'desc'=>'Ivy gourd tossed with chilli &amp; coconut','color'=>'#1A6B3A'],
            ['emoji'=>'🍅','name'=>'Tomato Pappu',       'desc'=>'Tangy tomato &amp; lentil dal — soul food','color'=>'#A01010'],
            ['emoji'=>'🥭','name'=>'Mango Dal',           'desc'=>'Raw mango &amp; lentil — summer special','color'=>'#B07800'],
            ['emoji'=>'🥗','name'=>'Vegetable Kurma',    'desc'=>'Rich coconut &amp; cashew mixed veggie curry','color'=>'#7B5E00'],
            ['emoji'=>'🧴','name'=>'Traditional Chutneys','desc'=>'Coconut, tomato, peanut &amp; gongura','color'=>'#3D6B3A'],
            ['emoji'=>'🍮','name'=>'Sweets &amp; Payasam','desc'=>'Semiya, chanadal &amp; rice kheer payasam','color'=>'#8B5A00'],
          ];
          foreach ($curries as $c): ?>
          <div class="swiper-slide">
            <div class="curry-card">
              <div class="curry-emoji" style="background:<?= $c['color'] ?>;"><span><?= $c['emoji'] ?></span></div>
              <div class="curry-info">
                <h4><?= $c['name'] ?></h4>
                <p><?= $c['desc'] ?></p>
              </div>
              <div class="curry-order-btn">
                <a href="https://wa.me/919908695554?text=Hello%2C+I+want+to+order+<?= urlencode($c['name']) ?>" target="_blank">
                  <i class="fab fa-whatsapp"></i> Order
                </a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="scs-controls">
        <button class="scs-btn" id="curPrev"><i class="fas fa-chevron-left"></i></button>
        <div class="scs-pag" id="curPag"></div>
        <button class="scs-btn" id="curNext"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>

    <div class="curry-note text-center mt-5" data-aos="fade-up">
      <i class="fas fa-info-circle me-2"></i>
      Minimum order quantities apply. Please call or WhatsApp us for pricing and availability.
    </div>
  </div>
</section>

<!-- ================================================
     WHY CHOOSE US
================================================ -->
<section id="why-us" class="why-section">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-label">Our Promise</div>
      <h2 class="section-title">Why Choose <span class="text-gold">Srinivasa Catering?</span></h2>
      <div class="gold-underline mx-auto"></div>
    </div>
    <!-- Why Choose Us Swiper -->
    <div class="scs-wrapper" data-aos="fade-up">
      <div class="swiper" id="whySwiper">
        <div class="swiper-wrapper">
          <?php
          $whys = [
            ['icon'=>'fas fa-medal',        'title'=>'7+ Years Experience',              'desc'=>'Over 7 years of trusted catering experience across Hyderabad families and functions.'],
            ['icon'=>'fas fa-scroll',       'title'=>'Traditional Brahmin Recipes',      'desc'=>'Authentic recipes handed down through generations — the real taste of tradition.'],
            ['icon'=>'fas fa-leaf',         'title'=>'100% Pure Vegetarian',             'desc'=>'Strictly pure vegetarian. No eggs. No onion/garlic available upon request.'],
            ['icon'=>'fas fa-seedling',     'title'=>'Fresh Ingredients',                'desc'=>'We source fresh, quality vegetables, spices, and lentils every single day.'],
            ['icon'=>'fas fa-hand-sparkles','title'=>'Hygienic Preparation',             'desc'=>'Prepared in clean, hygienic conditions following traditional and modern safety standards.'],
            ['icon'=>'fas fa-tags',         'title'=>'Affordable Pricing',               'desc'=>'Premium quality catering at reasonable prices — tailored packages for every budget.'],
            ['icon'=>'fas fa-sliders',      'title'=>'Customised Menu',                  'desc'=>'We work with you to create the perfect menu for your occasion and dietary preferences.'],
            ['icon'=>'fas fa-clock',        'title'=>'Timely Delivery',                  'desc'=>'Food is prepared and served on time so your event runs smoothly without delays.'],
            ['icon'=>'fas fa-users-gear',   'title'=>'Small &amp; Medium Orders Accepted','desc'=>'No event is too small. We lovingly serve gatherings of all sizes with the same care.'],
            ['icon'=>'fas fa-people-group', 'title'=>'Up to 200 Guests',                 'desc'=>'Equipped to serve up to 200 guests while maintaining consistent taste and quality.'],
          ];
          foreach ($whys as $w): ?>
          <div class="swiper-slide">
            <div class="why-card">
              <div class="why-icon"><i class="<?= $w['icon'] ?>"></i></div>
              <div class="why-content">
                <h4><?= $w['title'] ?></h4>
                <p><?= $w['desc'] ?></p>
              </div>
              <div class="why-check"><i class="fas fa-check"></i></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="scs-controls">
        <button class="scs-btn" id="whyPrev"><i class="fas fa-chevron-left"></i></button>
        <div class="scs-pag" id="whyPag"></div>
        <button class="scs-btn" id="whyNext"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </div>
</section>

<!-- ================================================
     GALLERY SECTION
================================================ -->
<section id="gallery" class="gallery-section">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-label cream-label">Feast for the Eyes</div>
      <h2 class="section-title light-title">Our Food <span class="text-gold">Gallery</span></h2>
      <div class="gold-underline mx-auto"></div>
      <p class="section-desc light-desc">A glimpse of the love and tradition we put into every dish we prepare.</p>
    </div>

    <?php
    // SVG vector illustrations for gallery items (no external image dependency)
    function _svg_uri(string $svg): string {
      return 'data:image/svg+xml,' . rawurlencode($svg);
    }
    $svg_pesarattu = _svg_uri(
      "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'>" .
      "<rect width='400' height='300' fill='#1B3A0A'/>" .
      "<ellipse cx='200' cy='200' rx='168' ry='24' fill='#252525'/>" .
      "<ellipse cx='200' cy='195' rx='168' ry='24' fill='#363636'/>" .
      "<ellipse cx='200' cy='162' rx='150' ry='60' fill='#5A8015'/>" .
      "<ellipse cx='200' cy='157' rx='145' ry='54' fill='#72A222'/>" .
      "<ellipse cx='200' cy='157' rx='65' ry='26' fill='#C07800' opacity='.9'/>" .
      "<circle cx='168' cy='153' r='13' fill='#FFFEE0' opacity='.6'/>" .
      "<circle cx='232' cy='160' r='10' fill='#FFFEE0' opacity='.5'/>" .
      "<path d='M176 107 Q173 89 177 73' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.45'/>" .
      "<path d='M200 99 Q197 81 200 65' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.45'/>" .
      "<path d='M224 107 Q221 89 223 73' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.45'/>" .
      "<text x='200' y='248' text-anchor='middle' font-family='Georgia,serif' font-size='22' fill='#D4A017' font-weight='bold'>Pesarattu</text>" .
      "<text x='200' y='272' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#C4A882'>Green Moong Dosa</text>" .
      "</svg>"
    );
    $svg_coffee = _svg_uri(
      "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'>" .
      "<rect width='400' height='300' fill='#2A1500'/>" .
      "<ellipse cx='200' cy='232' rx='96' ry='20' fill='#7B5030'/>" .
      "<ellipse cx='200' cy='227' rx='96' ry='20' fill='#9A6840'/>" .
      "<path d='M152 165 L162 222 L238 222 L248 165 Z' fill='#B8904A'/>" .
      "<ellipse cx='200' cy='165' rx='48' ry='11' fill='#C8A055'/>" .
      "<ellipse cx='200' cy='163' rx='43' ry='8' fill='#3D1C02'/>" .
      "<ellipse cx='200' cy='162' rx='37' ry='6' fill='#6B3500' opacity='.7'/>" .
      "<path d='M250 178 L258 218 L290 218 L298 178 Z' fill='#A87840'/>" .
      "<ellipse cx='274' cy='178' rx='24' ry='7' fill='#B8904A'/>" .
      "<path d='M183 153 Q179 135 183 119' stroke='#FFF8E7' stroke-width='2.5' fill='none' stroke-linecap='round' opacity='.55'/>" .
      "<path d='M200 149 Q196 131 200 115' stroke='#FFF8E7' stroke-width='2.5' fill='none' stroke-linecap='round' opacity='.55'/>" .
      "<path d='M217 153 Q213 135 217 119' stroke='#FFF8E7' stroke-width='2.5' fill='none' stroke-linecap='round' opacity='.55'/>" .
      "<text x='200' y='268' text-anchor='middle' font-family='Georgia,serif' font-size='22' fill='#D4A017' font-weight='bold'>Filter Coffee</text>" .
      "<text x='200' y='290' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#C4A882'>South Indian Kaapi</text>" .
      "</svg>"
    );
    $svg_festive = _svg_uri(
      "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'>" .
      "<rect width='400' height='300' fill='#2D4A1E'/>" .
      "<ellipse cx='200' cy='162' rx='172' ry='106' fill='#3D7A28' opacity='.75'/>" .
      "<ellipse cx='200' cy='160' rx='166' ry='100' fill='#4A9030' opacity='.5'/>" .
      "<line x1='40' y1='160' x2='360' y2='160' stroke='#2A6018' stroke-width='3' opacity='.5'/>" .
      "<ellipse cx='200' cy='160' rx='48' ry='34' fill='#FFFEE0' opacity='.92'/>" .
      "<ellipse cx='113' cy='135' rx='27' ry='20' fill='#8B2500'/>" .
      "<ellipse cx='113' cy='132' rx='23' ry='15' fill='#A83010'/>" .
      "<ellipse cx='287' cy='135' rx='27' ry='20' fill='#AA3800'/>" .
      "<ellipse cx='287' cy='132' rx='23' ry='15' fill='#C04812'/>" .
      "<circle cx='148' cy='196' r='18' fill='#C8860A'/>" .
      "<circle cx='252' cy='196' r='18' fill='#3D6B3A'/>" .
      "<ellipse cx='200' cy='213' rx='24' ry='16' fill='#D4A017'/>" .
      "<circle cx='128' cy='110' r='7' fill='#FF8C8C' opacity='.7'/>" .
      "<circle cx='272' cy='110' r='7' fill='#FFB870' opacity='.7'/>" .
      "<text x='200' y='257' text-anchor='middle' font-family='Georgia,serif' font-size='22' fill='#FFF8E7' font-weight='bold'>Festive Spread</text>" .
      "<text x='200' y='281' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#D4A017'>Puja Naivedyam</text>" .
      "</svg>"
    );
    $svg_payasam = _svg_uri(
      "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'>" .
      "<rect width='400' height='300' fill='#4A1800'/>" .
      "<path d='M110 158 Q108 245 200 252 Q292 245 290 158 Z' fill='#C8A050'/>" .
      "<path d='M124 162 Q122 236 200 242 Q278 236 276 162 Z' fill='#F5D880'/>" .
      "<path d='M145 183 Q172 174 200 181 Q228 174 255 183' stroke='#C89020' stroke-width='3' fill='none' opacity='.85'/>" .
      "<path d='M143 193 Q170 184 200 191 Q230 184 257 193' stroke='#D4A017' stroke-width='2.5' fill='none' opacity='.75'/>" .
      "<path d='M145 203 Q172 194 200 201 Q228 194 255 203' stroke='#C89020' stroke-width='2.5' fill='none' opacity='.85'/>" .
      "<ellipse cx='200' cy='174' rx='58' ry='13' fill='#FFFBE8' opacity='.3'/>" .
      "<ellipse cx='170' cy='181' rx='8' ry='5' fill='#C89020' transform='rotate(-25 170 181)'/>" .
      "<ellipse cx='230' cy='181' rx='8' ry='5' fill='#C89020' transform='rotate(25 230 181)'/>" .
      "<ellipse cx='200' cy='174' rx='6' ry='8' fill='#6B3C0A'/>" .
      "<path d='M172 153 Q169 136 172 120' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M200 148 Q197 131 200 115' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M228 153 Q225 136 228 120' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M110 158 Q200 150 290 158' stroke='#D4A017' stroke-width='3.5' fill='none' opacity='.85'/>" .
      "<text x='200' y='268' text-anchor='middle' font-family='Georgia,serif' font-size='20' fill='#D4A017' font-weight='bold'>Semiya Payasam</text>" .
      "<text x='200' y='290' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#C4A882'>Sweet Vermicelli Kheer</text>" .
      "</svg>"
    );
    $svg_upma = _svg_uri(
      "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'>" .
      "<rect width='400' height='300' fill='#5A3000'/>" .
      "<ellipse cx='200' cy='230' rx='148' ry='26' fill='#3D1C02' opacity='.6'/>" .
      "<path d='M85 158 Q83 245 200 252 Q317 245 315 158 Z' fill='#C8A050'/>" .
      "<path d='M102 164 Q100 237 200 243 Q300 237 298 164 Z' fill='#E8C870'/>" .
      "<circle cx='158' cy='192' r='5' fill='#D4A017' opacity='.5'/>" .
      "<circle cx='175' cy='202' r='4' fill='#C89020' opacity='.45'/>" .
      "<circle cx='193' cy='186' r='6' fill='#D4A017' opacity='.5'/>" .
      "<circle cx='212' cy='197' r='5' fill='#C89020' opacity='.45'/>" .
      "<circle cx='228' cy='183' r='4' fill='#D4A017' opacity='.5'/>" .
      "<circle cx='245' cy='206' r='5' fill='#C89020' opacity='.4'/>" .
      "<ellipse cx='178' cy='176' rx='12' ry='5' fill='#2D6B20' opacity='.85' transform='rotate(-20 178 176)'/>" .
      "<ellipse cx='222' cy='179' rx='12' ry='5' fill='#2D6B20' opacity='.85' transform='rotate(15 222 179)'/>" .
      "<ellipse cx='200' cy='172' rx='10' ry='5' fill='#2D6B20' opacity='.8' transform='rotate(5 200 172)'/>" .
      "<circle cx='163' cy='173' r='4' fill='#2A1A00'/>" .
      "<circle cx='237' cy='176' r='3.5' fill='#2A1A00'/>" .
      "<circle cx='200' cy='170' r='3' fill='#2A1A00'/>" .
      "<path d='M172 150 Q169 132 172 116' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M200 144 Q197 126 200 110' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M228 150 Q225 132 228 116' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M85 158 Q200 150 315 158' stroke='#D4A017' stroke-width='3' fill='none' opacity='.8'/>" .
      "<text x='200' y='268' text-anchor='middle' font-family='Georgia,serif' font-size='22' fill='#D4A017' font-weight='bold'>Rava Upma</text>" .
      "<text x='200' y='290' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#C4A882'>Semolina Upma with Ghee</text>" .
      "</svg>"
    );
    $svg_sambar_rasam = _svg_uri(
      "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'>" .
      "<rect width='400' height='300' fill='#7B1800'/>" .
      "<ellipse cx='118' cy='220' rx='68' ry='13' fill='#5A0000'/>" .
      "<path d='M60 152 L70 215 L166 215 L176 152 Z' fill='#A03010'/>" .
      "<ellipse cx='118' cy='152' rx='58' ry='12' fill='#B84020'/>" .
      "<ellipse cx='118' cy='150' rx='53' ry='9' fill='#8B2500'/>" .
      "<ellipse cx='107' cy='148' rx='24' ry='5' fill='#CC4A20' opacity='.5'/>" .
      "<path d='M100 140 Q97 122 100 106' stroke='#FFF8E7' stroke-width='1.8' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M118 134 Q115 116 118 100' stroke='#FFF8E7' stroke-width='1.8' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M136 140 Q133 122 136 106' stroke='#FFF8E7' stroke-width='1.8' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<text x='118' y='196' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#FFF8E7' opacity='.9'>Sambar</text>" .
      "<ellipse cx='282' cy='220' rx='68' ry='13' fill='#5A0000'/>" .
      "<path d='M224 152 L234 215 L330 215 L340 152 Z' fill='#C04A10'/>" .
      "<ellipse cx='282' cy='152' rx='58' ry='12' fill='#D45A20'/>" .
      "<ellipse cx='282' cy='150' rx='53' ry='9' fill='#B03800'/>" .
      "<ellipse cx='271' cy='148' rx='24' ry='5' fill='#E06030' opacity='.5'/>" .
      "<path d='M264 140 Q261 122 264 106' stroke='#FFF8E7' stroke-width='1.8' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M282 134 Q279 116 282 100' stroke='#FFF8E7' stroke-width='1.8' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<path d='M300 140 Q297 122 300 106' stroke='#FFF8E7' stroke-width='1.8' fill='none' stroke-linecap='round' opacity='.5'/>" .
      "<text x='282' y='196' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#FFF8E7' opacity='.9'>Rasam</text>" .
      "<text x='200' y='258' text-anchor='middle' font-family='Georgia,serif' font-size='20' fill='#D4A017' font-weight='bold'>Sambar &amp; Rasam</text>" .
      "<text x='200' y='280' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#C4A882'>Freshly Made Every Day</text>" .
      "</svg>"
    );
    $svg_vankaya = _svg_uri(
      "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'>" .
      "<rect width='400' height='300' fill='#4A0070'/>" .
      "<ellipse cx='200' cy='218' rx='148' ry='28' fill='#7B0A00' opacity='.8'/>" .
      "<ellipse cx='200' cy='210' rx='140' ry='22' fill='#9B1A10' opacity='.6'/>" .
      "<ellipse cx='140' cy='170' rx='38' ry='30' fill='#5A0080'/>" .
      "<ellipse cx='140' cy='166' rx='34' ry='26' fill='#7B20B0'/>" .
      "<ellipse cx='128' cy='160' rx='18' ry='10' fill='#9B40C8' opacity='.5'/>" .
      "<path d='M140 140 Q144 128 148 134' stroke='#2D6B20' stroke-width='3.5' fill='none' stroke-linecap='round'/>" .
      "<ellipse cx='140' cy='140' rx='9' ry='5' fill='#2D6B20'/>" .
      "<ellipse cx='140' cy='176' rx='16' ry='10' fill='#C8860A' opacity='.92'/>" .
      "<circle cx='133' cy='174' r='4' fill='#D4A017' opacity='.7'/>" .
      "<circle cx='147' cy='178' r='3' fill='#D4A017' opacity='.7'/>" .
      "<ellipse cx='200' cy='163' rx='40' ry='32' fill='#5A0080'/>" .
      "<ellipse cx='200' cy='159' rx='36' ry='28' fill='#8030C0'/>" .
      "<ellipse cx='187' cy='153' rx='20' ry='11' fill='#A040D0' opacity='.5'/>" .
      "<path d='M200 131 Q204 119 208 125' stroke='#2D6B20' stroke-width='3.5' fill='none' stroke-linecap='round'/>" .
      "<ellipse cx='200' cy='131' rx='10' ry='5' fill='#2D6B20'/>" .
      "<ellipse cx='200' cy='170' rx='18' ry='11' fill='#C8860A' opacity='.92'/>" .
      "<circle cx='192' cy='168' r='4' fill='#D4A017' opacity='.7'/>" .
      "<circle cx='208' cy='172' r='3.5' fill='#D4A017' opacity='.7'/>" .
      "<ellipse cx='260' cy='170' rx='38' ry='30' fill='#5A0080'/>" .
      "<ellipse cx='260' cy='166' rx='34' ry='26' fill='#7B20B0'/>" .
      "<ellipse cx='248' cy='160' rx='18' ry='10' fill='#9B40C8' opacity='.5'/>" .
      "<path d='M260 140 Q264 128 268 134' stroke='#2D6B20' stroke-width='3.5' fill='none' stroke-linecap='round'/>" .
      "<ellipse cx='260' cy='140' rx='9' ry='5' fill='#2D6B20'/>" .
      "<ellipse cx='260' cy='176' rx='16' ry='10' fill='#C8860A' opacity='.92'/>" .
      "<circle cx='253' cy='174' r='4' fill='#D4A017' opacity='.7'/>" .
      "<circle cx='267' cy='178' r='3' fill='#D4A017' opacity='.7'/>" .
      "<circle cx='170' cy='208' r='3.5' fill='#D4A017' opacity='.65'/>" .
      "<circle cx='230' cy='205' r='3' fill='#D4A017' opacity='.65'/>" .
      "<circle cx='200' cy='212' r='3' fill='#C8860A' opacity='.6'/>" .
      "<text x='200' y='258' text-anchor='middle' font-family='Georgia,serif' font-size='22' fill='#D4A017' font-weight='bold'>Gutti Vankaya</text>" .
      "<text x='200' y='280' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#C4A882'>Stuffed Brinjal Masala</text>" .
      "</svg>"
    );
    $svg_chutney = _svg_uri(
      "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'>" .
      "<rect width='400' height='300' fill='#006B3A'/>" .
      "<ellipse cx='200' cy='238' rx='122' ry='18' fill='#003A20' opacity='.6'/>" .
      "<path d='M98 158 Q96 248 200 256 Q304 248 302 158 Z' fill='#C8A050'/>" .
      "<path d='M114 164 Q112 240 200 247 Q288 240 286 164 Z' fill='#F5F5E8'/>" .
      "<ellipse cx='200' cy='180' rx='72' ry='20' fill='#FFFDE0' opacity='.6'/>" .
      "<ellipse cx='163' cy='190' rx='13' ry='7' fill='#FFFFF0' opacity='.8' transform='rotate(-15 163 190)'/>" .
      "<ellipse cx='200' cy='194' rx='11' ry='6' fill='#FFFFF0' opacity='.8'/>" .
      "<ellipse cx='237' cy='187' rx='12' ry='7' fill='#FFFFF0' opacity='.8' transform='rotate(10 237 187)'/>" .
      "<ellipse cx='178' cy='208' rx='10' ry='5' fill='#FFFFF0' opacity='.7'/>" .
      "<ellipse cx='222' cy='210' rx='11' ry='6' fill='#FFFFF0' opacity='.7'/>" .
      "<path d='M146 200 Q150 191 157 200 Q161 207 156 213 Q153 218 148 212 Q144 206 146 200 Z' fill='#3D8A20'/>" .
      "<path d='M146 200 L140 189' stroke='#2D6B15' stroke-width='2.5' fill='none' stroke-linecap='round'/>" .
      "<ellipse cx='247' cy='197' rx='12' ry='5' fill='#2D6B20' opacity='.85' transform='rotate(-25 247 197)'/>" .
      "<ellipse cx='259' cy='206' rx='12' ry='5' fill='#2D6B20' opacity='.85' transform='rotate(-15 259 206)'/>" .
      "<ellipse cx='236' cy='208' rx='11' ry='5' fill='#2D6B20' opacity='.8' transform='rotate(5 236 208)'/>" .
      "<circle cx='168' cy='176' r='4' fill='#2A1A00'/>" .
      "<circle cx='182' cy='173' r='3.5' fill='#2A1A00'/>" .
      "<circle cx='226' cy='175' r='4' fill='#2A1A00'/>" .
      "<ellipse cx='215' cy='174' rx='9' ry='4' fill='#CC2200' opacity='.9' transform='rotate(-20 215 174)'/>" .
      "<path d='M98 158 Q200 150 302 158' stroke='#D4A017' stroke-width='3' fill='none' opacity='.8'/>" .
      "<text x='200' y='268' text-anchor='middle' font-family='Georgia,serif' font-size='22' fill='#D4A017' font-weight='bold'>Kobbari Pachadi</text>" .
      "<text x='200' y='290' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#C4A882'>Fresh Coconut Chutney</text>" .
      "</svg>"
    );

    $gallery = [
      [
        'img'      => 'https://images.unsplash.com/photo-1630383249896-424e482df921?auto=format&fit=crop&w=900&q=85',
        'fallback' => 'linear-gradient(135deg,#3D1200,#7B2800)',
        'caption'  => 'Idli &amp; Sambar',
        'sub'      => 'Classic Andhra morning tiffin',
      ],
      [
        'img'      => $svg_pesarattu,
        'fallback' => 'linear-gradient(135deg,#1B4A0A,#3D8A2C)',
        'caption'  => 'Pesarattu',
        'sub'      => 'Green moong dosa — Andhra special',
      ],
      [
        'img'      => $svg_upma,
        'fallback' => 'linear-gradient(135deg,#5A3000,#A06010)',
        'caption'  => 'Rava Upma',
        'sub'      => 'Semolina upma with ghee',
      ],
      [
        'img'      => $svg_coffee,
        'fallback' => 'linear-gradient(135deg,#2A1500,#6B3800)',
        'caption'  => 'Filter Coffee',
        'sub'      => 'South Indian filter kaapi',
      ],
      [
        'img'      => 'https://images.unsplash.com/photo-1589301760014-d929f3979dbc?auto=format&fit=crop&w=700&q=85',
        'fallback' => 'linear-gradient(135deg,#1B3A0A,#3A7020)',
        'caption'  => 'Banana Leaf Meal',
        'sub'      => 'Traditional Vidhya Bhojanam',
      ],
      [
        'img'      => $svg_festive,
        'fallback' => 'linear-gradient(135deg,#2D6A4F,#52B788)',
        'caption'  => 'Festive Spread',
        'sub'      => 'Puja Naivedyam &amp; sweets',
      ],
      [
        'img'      => $svg_sambar_rasam,
        'fallback' => 'linear-gradient(135deg,#7B1800,#CC3300)',
        'caption'  => 'Sambar &amp; Rasam',
        'sub'      => 'Freshly made every day',
      ],
      [
        'img'      => $svg_vankaya,
        'fallback' => 'linear-gradient(135deg,#4A0070,#9B1FCC)',
        'caption'  => 'Gutti Vankaya',
        'sub'      => 'Stuffed brinjal Andhra masala',
      ],
      [
        'img'      => 'https://images.unsplash.com/photo-1603133872878-684f208fb84b?auto=format&fit=crop&w=700&q=85',
        'fallback' => 'linear-gradient(135deg,#B07800,#FFD700)',
        'caption'  => 'Pulihora',
        'sub'      => 'Tamarind rice — festival dish',
      ],
      [
        'img'      => $svg_payasam,
        'fallback' => 'linear-gradient(135deg,#4A1800,#8B3A0A)',
        'caption'  => 'Semiya Payasam',
        'sub'      => 'Sweet vermicelli kheer',
      ],
      [
        'img'      => $svg_chutney,
        'fallback' => 'linear-gradient(135deg,#006B3A,#00A854)',
        'caption'  => 'Kobbari Pachadi',
        'sub'      => 'Fresh coconut chutney',
      ],
      [
        'img'      => _svg_uri(
          "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'>" .
          "<rect width='400' height='300' fill='#6B0000'/>" .
          "<ellipse cx='200' cy='235' rx='130' ry='18' fill='#3A0000' opacity='.6'/>" .
          "<circle cx='200' cy='155' r='90' fill='#F5EDD0'/>" .
          "<circle cx='200' cy='155' r='86' fill='#FFFBE8'/>" .
          "<circle cx='200' cy='155' r='72' fill='#F0D8A0'/>" .
          "<circle cx='200' cy='155' r='65' fill='#E8C870'/>" .
          "<circle cx='200' cy='148' r='52' fill='#D4A017' opacity='.35'/>" .
          "<circle cx='186' cy='145' r='8' fill='#C07800' opacity='.5'/>" .
          "<circle cx='214' cy='152' r='6' fill='#C07800' opacity='.45'/>" .
          "<circle cx='200' cy='160' r='7' fill='#B06000' opacity='.4'/>" .
          "<ellipse cx='200' cy='232' rx='110' ry='14' fill='#8B2500'/>" .
          "<ellipse cx='200' cy='228' rx='108' ry='13' fill='#A83010'/>" .
          "<ellipse cx='200' cy='224' rx='105' ry='12' fill='#C04020'/>" .
          "<ellipse cx='148' cy='222' rx='28' ry='10' fill='#7B5030' opacity='.8'/>" .
          "<ellipse cx='252' cy='222' rx='28' ry='10' fill='#7B5030' opacity='.8'/>" .
          "<circle cx='152' cy='217' r='12' fill='#9A6840' opacity='.7'/>" .
          "<circle cx='248' cy='217' r='12' fill='#9A6840' opacity='.7'/>" .
          "<path d='M172 85 Q169 68 172 52' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.45'/>" .
          "<path d='M200 80 Q197 63 200 47' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.45'/>" .
          "<path d='M228 85 Q225 68 228 52' stroke='#FFF8E7' stroke-width='2' fill='none' stroke-linecap='round' opacity='.45'/>" .
          "<text x='200' y='268' text-anchor='middle' font-family='Georgia,serif' font-size='22' fill='#D4A017' font-weight='bold'>Poori &amp; Masala</text>" .
          "<text x='200' y='290' text-anchor='middle' font-family='Georgia,serif' font-size='14' fill='#C4A882'>Fluffy Poori with Aloo Masala</text>" .
          "</svg>"
        ),
        'fallback' => 'linear-gradient(135deg,#6B0000,#A01010)',
        'caption'  => 'Poori &amp; Masala',
        'sub'      => 'Fluffy poori with aloo masala',
      ],
    ];
    ?>

    <div class="scs-wrapper gallery-swiper-wrap" data-aos="fade-up">
      <!-- Main Gallery Swiper -->
      <div class="swiper gallery-main-swiper" id="galMainSwiper">
        <div class="swiper-wrapper">
          <?php foreach ($gallery as $g): ?>
          <div class="swiper-slide">
            <div class="gallery-slide-img" style="background:<?= $g['fallback'] ?>;">
              <img
                src="<?= $g['img'] ?>"
                alt="<?= htmlspecialchars(strip_tags($g['caption'])) ?> - Srinivasa Catering"
                loading="lazy"
                onerror="this.style.display='none'">
              <div class="gallery-overlay">
                <div class="gallery-caption">
                  <h5><?= $g['caption'] ?></h5>
                  <p><?= $g['sub'] ?></p>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Controls -->
      <div class="scs-controls">
        <button class="scs-btn" id="galPrev"><i class="fas fa-chevron-left"></i></button>
        <div class="scs-pag" id="galPag"></div>
        <button class="scs-btn" id="galNext"><i class="fas fa-chevron-right"></i></button>
      </div>

      <!-- Thumbs Strip -->
      <div class="swiper gallery-thumbs-swiper" id="galThumbsSwiper">
        <div class="swiper-wrapper">
          <?php foreach ($gallery as $g): ?>
          <div class="swiper-slide">
            <div class="gallery-thumb" style="background:<?= $g['fallback'] ?>;">
              <img
                src="<?= $g['img'] ?>"
                alt="<?= htmlspecialchars(strip_tags($g['caption'])) ?>"
                loading="lazy"
                onerror="this.style.display='none'">
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================================================
     TESTIMONIALS
================================================ -->
<section id="testimonials" class="testimonials-section">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-label">Happy Customers</div>
      <h2 class="section-title">What Our <span class="text-gold">Customers Say</span></h2>
      <div class="gold-underline mx-auto"></div>
    </div>

    <?php
    $testimonials = [
      [
        'name'     => 'Venkata Subrahmanyam',
        'event'    => 'Housewarming Ceremony',
        'location' => 'Uppal, Hyderabad',
        'rating'   => 5,
        'text'     => 'We booked Srinivasa Catering for our Griha Pravesham and the food was absolutely divine. The sambar, rasam, and vadai were exactly like home-cooked food. Our guests kept asking who the caterer was! The team was punctual, hygienic, and very professional. Highly recommend them for any Brahmin function.',
      ],
      [
        'name'     => 'Padmavathi Rao',
        'event'    => 'Satyanarayana Vratham',
        'location' => 'LB Nagar, Hyderabad',
        'rating'   => 5,
        'text'     => 'The prasadam and food prepared by Kandala Rama Devi garu for our Satyanarayana Vratham was exceptional. The pulihora, payasam, and panchakajjaya were made with such devotion that it felt truly blessed. Everything was fresh, perfectly spiced, and served with warmth. Will surely call them again!',
      ],
      [
        'name'     => 'Anand Kishore Reddy',
        'event'    => 'Birthday Function',
        'location' => 'Nacharam, Hyderabad',
        'rating'   => 5,
        'text'     => 'Ordered catering for my father\'s 60th birthday. Around 80 guests, all Brahmin style pure veg. The quality was outstanding — gutti vankaya, bendakaya fry, and the chanadal payasam were the stars of the day. Very reasonable pricing too. Thank you Srinivasa Catering team!',
      ],
      [
        'name'     => 'Saraswathi Krishnamurthy',
        'event'    => 'Annaprasana Ceremony',
        'location' => 'Kothapet, Hyderabad',
        'rating'   => 5,
        'text'     => 'Mantha Srilakshmi garu and the team made our baby\'s Annaprasana so special. The food was prepared with so much care and love. All the elders in the family appreciated the authentic taste. The traditional sweets and the entire spread was beautiful. Very clean and hygienic too.',
      ],
      [
        'name'     => 'Ramachandra Sarma',
        'event'    => 'Small Wedding Function',
        'location' => 'Hayathnagar, Hyderabad',
        'rating'   => 5,
        'text'     => 'We had a small traditional wedding with 120 guests and Srinivasa Catering handled it brilliantly. Banana leaf meals with full South Indian spread, desserts, and everything was served on time and with perfect taste. Our family was very happy. Excellent value for money and wonderful service.',
      ],
      [
        'name'     => 'Vijayalakshmi Nambiar',
        'event'    => 'Pooja &amp; Family Gathering',
        'location' => 'Mallapur, Hyderabad',
        'rating'   => 5,
        'text'     => 'We invite Srinivasa Catering for all our home poojas now. The dondakaya fry, tomato pappu, and mango dal are absolutely outstanding. The food reminds me of my grandmother\'s cooking. Both the owners are very responsive on WhatsApp and always deliver with a smile. God bless them!',
      ],
    ];
    ?>

    <div class="scs-wrapper" data-aos="fade-up">
      <div class="swiper" id="testiSwiper">
        <div class="swiper-wrapper">
          <?php foreach ($testimonials as $t): ?>
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="testi-quote"><i class="fas fa-quote-left"></i></div>
              <div class="testi-stars">
                <?php for ($s=0;$s<$t['rating'];$s++): ?><i class="fas fa-star"></i><?php endfor; ?>
              </div>
              <p class="testi-text">"<?= $t['text'] ?>"</p>
              <div class="testi-author">
                <div class="testi-avatar"><?= strtoupper(substr($t['name'],0,1)) ?></div>
                <div>
                  <strong><?= $t['name'] ?></strong>
                  <span><?= $t['event'] ?> · <?= $t['location'] ?></span>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="scs-controls scs-controls-light">
        <button class="scs-btn scs-btn-dark" id="testiPrev"><i class="fas fa-chevron-left"></i></button>
        <div class="scs-pag scs-pag-dark" id="testiPag"></div>
        <button class="scs-btn scs-btn-dark" id="testiNext"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </div>
</section>

<!-- ================================================
     LOCATION SECTION
================================================ -->
<section id="location" class="location-section">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-label cream-label">Find Us</div>
      <h2 class="section-title light-title">Our <span class="text-gold">Location</span></h2>
      <div class="gold-underline mx-auto"></div>
    </div>
    <div class="row g-5 align-items-center">
      <div class="col-lg-5" data-aos="fade-right">
        <div class="location-info">
          <div class="location-icon-wrap"><i class="fas fa-map-marker-alt"></i></div>
          <h3>Srinivasa Catering Services</h3>
          <address>
            <p><i class="fas fa-map-pin me-2"></i>Near Majjigowramma Temple,</p>
            <p class="ms-4">Srinivasa Heights,</p>
            <p class="ms-4">Chilkanagar Main Road,</p>
            <p class="ms-4">Uppal, Hyderabad — 500039</p>
            <p class="ms-4">Telangana, India</p>
          </address>
          <div class="location-contacts mt-4">
            <a href="tel:9908695554" class="loc-contact-btn">
              <i class="fas fa-phone-alt"></i> +91 99086 95554
            </a>
            <a href="tel:9959933514" class="loc-contact-btn">
              <i class="fas fa-phone-alt"></i> +91 99599 33514
            </a>
            <a href="https://wa.me/919908695554" target="_blank" class="loc-contact-btn whatsapp">
              <i class="fab fa-whatsapp"></i> WhatsApp Us
            </a>
          </div>
          <div class="landmark-tag mt-3">
            <i class="fas fa-landmark me-2"></i> Landmark: Near Majjigowramma Temple, Uppal
          </div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left">
        <div class="map-wrapper">
          <iframe
            src="https://maps.google.com/maps?q=Majjigowramma+Temple+Uppal+Hyderabad+Telangana&t=&z=15&ie=UTF8&iwloc=&output=embed"
            width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="Srinivasa Catering Location Map">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================================================
     CONTACT SECTION
================================================ -->
<section id="contact" class="contact-section">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-label">Get In Touch</div>
      <h2 class="section-title">Contact <span class="text-gold">Us</span></h2>
      <div class="gold-underline mx-auto"></div>
      <p class="section-desc">Call or WhatsApp us to book your catering. We respond quickly.</p>
    </div>
    <div class="row g-4 justify-content-center">

      <div class="col-lg-5 col-md-6" data-aos="fade-right" data-aos-delay="100">
        <div class="contact-card">
          <div class="contact-avatar">KRD</div>
          <h3>Kandala Rama Devi</h3>
          <p class="contact-role">Co-Founder &amp; Head Chef</p>
          <div class="contact-phone">
            <i class="fas fa-phone-alt"></i>
            <a href="tel:9908695554">+91 99086 95554</a>
          </div>
          <div class="contact-actions">
            <a href="tel:9908695554" class="btn-contact-call">
              <i class="fas fa-phone-alt me-2"></i>Call Now
            </a>
            <a href="https://wa.me/919908695554?text=Hello%20Rama%20Devi%20garu%2C%20I%20want%20to%20enquire%20about%20catering%20services" target="_blank" class="btn-contact-wa">
              <i class="fab fa-whatsapp me-2"></i>WhatsApp
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-6" data-aos="fade-left" data-aos-delay="200">
        <div class="contact-card">
          <div class="contact-avatar">MSL</div>
          <h3>Mantha Srilakshmi</h3>
          <p class="contact-role">Co-Founder &amp; Operations</p>
          <div class="contact-phone">
            <i class="fas fa-phone-alt"></i>
            <a href="tel:9959933514">+91 99599 33514</a>
          </div>
          <div class="contact-actions">
            <a href="tel:9959933514" class="btn-contact-call">
              <i class="fas fa-phone-alt me-2"></i>Call Now
            </a>
            <a href="https://wa.me/919959933514?text=Hello%20Srilakshmi%20garu%2C%20I%20want%20to%20enquire%20about%20catering%20services" target="_blank" class="btn-contact-wa">
              <i class="fab fa-whatsapp me-2"></i>WhatsApp
            </a>
          </div>
        </div>
      </div>

    </div>

    <div class="contact-note text-center mt-5" data-aos="fade-up">
      <div class="row g-3 justify-content-center">
        <div class="col-auto">
          <div class="info-pill"><i class="fas fa-clock me-2"></i>Available 7 AM – 9 PM · All Days</div>
        </div>
        <div class="col-auto">
          <div class="info-pill"><i class="fas fa-map-marker-alt me-2"></i>Uppal, Hyderabad</div>
        </div>
        <div class="col-auto">
          <div class="info-pill"><i class="fas fa-users me-2"></i>Serving up to 200 Guests</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================================================
     FOOTER
================================================ -->
<footer class="site-footer">
  <div class="footer-top">
    <div class="container">
      <div class="row g-5">

        <div class="col-lg-4 col-md-6">
          <div class="footer-brand">
            <span class="footer-diya">🪔</span>
            <div>
              <h4>Srinivasa Catering Services</h4>
              <p>Traditional Brahmin Pure Vegetarian Catering</p>
            </div>
          </div>
          <p class="footer-about">
            Serving authentic Brahmin-style vegetarian food across Hyderabad for 7+ years.
            Founded by Y. Kandala Rama Devi &amp; Mantha Srilakshmi with devotion and love.
          </p>
          <div class="footer-badges">
            <span class="f-badge">🌿 Pure Veg</span>
            <span class="f-badge">✓ 7+ Years</span>
            <span class="f-badge">👥 200 Guests</span>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-6">
          <h5 class="footer-heading">Quick Links</h5>
          <ul class="footer-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#curry-orders">Curry Orders</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#testimonials">Reviews</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-6">
          <h5 class="footer-heading">Services</h5>
          <ul class="footer-links">
            <li><a href="#services">Housewarming</a></li>
            <li><a href="#services">Satyanarayana Vratham</a></li>
            <li><a href="#services">Wedding Catering</a></li>
            <li><a href="#services">Annaprasana</a></li>
            <li><a href="#services">Birthday Parties</a></li>
            <li><a href="#curry-orders">Bulk Curry Orders</a></li>
            <li><a href="#services">Corporate Meals</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h5 class="footer-heading">Contact Details</h5>
          <div class="footer-contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <span>Near Majjigowramma Temple, Srinivasa Heights, Chilkanagar Main Road, Uppal, Hyderabad — 500039</span>
          </div>
          <div class="footer-contact-item">
            <i class="fas fa-phone-alt"></i>
            <a href="tel:9908695554">+91 99086 95554</a>
          </div>
          <div class="footer-contact-item">
            <i class="fas fa-phone-alt"></i>
            <a href="tel:9959933514">+91 99599 33514</a>
          </div>
          <div class="footer-contact-item">
            <i class="fab fa-whatsapp"></i>
            <a href="https://wa.me/919908695554" target="_blank">WhatsApp Us</a>
          </div>
          <div class="footer-social mt-3">
            <a href="https://wa.me/919908695554" target="_blank" class="social-icon whatsapp" title="WhatsApp">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="tel:9908695554" class="social-icon phone" title="Call Us">
              <i class="fas fa-phone-alt"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <p>&copy; 2026 Srinivasa Catering Services. All Rights Reserved.</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <p class="footer-tagline">🪔 Made with <i class="fas fa-heart text-gold"></i> &amp; Devotion in Hyderabad</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- ================================================
     FLOATING WHATSAPP BUTTON
================================================ -->
<a href="https://wa.me/919908695554?text=Hello%2C%20I%20want%20to%20enquire%20about%20catering%20services"
   target="_blank" class="floating-whatsapp" id="floatingWA" title="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
  <span class="wa-tooltip">Book via WhatsApp</span>
</a>

<!-- Scroll to Top -->
<button class="scroll-top-btn" id="scrollTopBtn" title="Back to top">
  <i class="fas fa-chevron-up"></i>
</button>

<!-- ================================================
     SCRIPTS
================================================ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/public/js/main.js"></script>
</body>
</html>
