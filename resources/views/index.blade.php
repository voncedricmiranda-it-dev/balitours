<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Discover Balingasag's natural scenery, culture, and travel options from Misamis Oriental, Philippines.">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Balingasag — Where Nature Thrives</title>
<link rel="icon" type="image/png" href="/Logo/BTLogo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
<a class="skip-link" href="#main-content">Skip to main content</a>
<main id="main-content">

<header class="nav">
  <div class="nav-inner">
    <a href="/" class="brand" aria-label="BaliTour Home">
      <img src="/Logo/BaliTourLogo.png" alt="BaliTour Logo" class="header-logo">
    </a>
    <nav class="links" aria-label="Primary navigation">
      <a href="#about">About</a>
      <a href="#attractions">Attractions</a>
      <a href="#nature">Nature</a>
      <a href="#culture">Culture</a>
      <a href="#visit">Visit</a>
    </nav>
    <button type="button" class="btn btn-primary open-modal">Plan Your Visit</button>
  </div>
</header>

<section class="hero">
  <div class="hero-content">
    <span class="eyebrow">Municipality of Balingasag · Misamis Oriental · Philippines</span>
    <h1>Where Nature<em>Thrives.</em></h1>
    <p>Discover the unspoiled forests, thermal springs, and vibrant cultural heritage of Balingasag — a hidden gem nestled along the coast of Macajalar Bay.</p>
    <div class="hero-ctas">
      <a href="#attractions" class="btn btn-light">Explore Attractions ↓</a>
      <button type="button" class="btn btn-outline-light open-modal">Plan Your Visit</button>
    </div>
  </div>
  <div class="scroll-tag">SCROLL</div>
</section>

@include('modals.login-register-modal')

<div class="stats">
  <div class="stats-grid">
    <div class="stat"><b>6+</b><span>Tourist Destinations</span></div>
    <div class="stat"><b>28</b><span>Barangays</span></div>
    <div class="stat"><b>78km²</b><span>Total Land Area</span></div>
    <div class="stat"><b>~75k</b><span>Population (2020)</span></div>
  </div>
</div>

<section id="about">
  <div class="wrap about-grid">
    <div>
      <span class="eyebrow dark">§ 01 — About</span>
      <h2>A Municipality<br><em>of Quiet Beauty</em></h2>
      <div class="rule"></div>
      <p>Balingasag is a first-class municipality in the province of Misamis Oriental, Northern Mindanao, Philippines. Situated along the coastline of Macajalar Bay, it is flanked by the verdant Balatukan Mountain Range to the south.</p>
      <p>Known for its abundant natural resources – from thermal springs and pristine waterfalls to fertile agricultural land – Balingasag offers visitors an authentic encounter with Mindanao's untouched landscapes and warm cultural traditions.</p>
    </div>
    <div class="about-img">
      <div class="frame"></div>
      <div class="badge">
        <div class="k">Est.</div>
        <div class="v">1854</div>
      </div>
    </div>
  </div>
</section>

<hr class="div">

<section id="attractions">
  <div class="wrap">
    <div class="att-head">
      <div>
        <span class="eyebrow dark">§ 02 — Attractions</span>
        <h2>Places to Explore</h2>
      </div>
      <div class="note">Six distinct destinations spanning mountain, forest, river, and coast.</div>
    </div>
    <div class="att-layout">
      <div class="att-feature">
        <div class="att-feature-info">
          <span class="tag">Agri-Tourism</span>
          <h3 style="margin-top:14px;">Balingasag Agriculture Park</h3>
          <p>Rolling farmland showcasing the region's rice cultivation heritage, offering guided tours of traditional farming practices.</p>
        </div>
      </div>
      <div class="att-list">
        <div class="att-item"><div class="left"><span class="num">01</span><div><div class="ti">Balingasag Hot Spring</div><div class="sub">Natural Springs</div></div></div><span class="arrow">→</span></div>
        <div class="att-item"><div class="left"><span class="num">02</span><div><div class="ti">Balingasag Falls</div><div class="sub">Waterfall</div></div></div><span class="arrow">→</span></div>
        <div class="att-item"><div class="left"><span class="num">03</span><div><div class="ti">Bendum River</div><div class="sub">River & Swimming</div></div></div><span class="arrow">→</span></div>
        <div class="att-item"><div class="left"><span class="num">04</span><div><div class="ti">Mount Balatukan Trail</div><div class="sub">Hiking & Trek</div></div></div><span class="arrow">→</span></div>
        <div class="att-item active"><div class="left"><span class="num">05</span><div><div class="ti">Balingasag Agriculture Park</div><div class="sub">Agri-Tourism</div></div></div><span class="arrow">→</span></div>
        <div class="att-item"><div class="left"><span class="num">06</span><div><div class="ti">Balingasag Beach</div><div class="sub">Coastal</div></div></div><span class="arrow">→</span></div>
      </div>
    </div>
  </div>
</section>

<section id="nature">
  <div class="wrap">
      <span class="eyebrow dark">§ 03 — Natural Scenery</span>
    <h2 style="font-size:2.6rem;font-weight:500;margin-bottom:36px;">Landscapes of Balingasag</h2>
    <div class="land-grid">
      <figure class="g1" style="background:linear-gradient(135deg, #e7f1ea 0%, #f7faf8 100%);"></figure>
      <figure style="background:linear-gradient(135deg, #e7f1ea 0%, #f7faf8 100%);"></figure>
      <figure style="background:linear-gradient(135deg, #e7f1ea 0%, #f7faf8 100%);"></figure>
      <figure style="background:linear-gradient(135deg, #e7f1ea 0%, #f7faf8 100%);"></figure>
      <figure style="background:linear-gradient(135deg, #e7f1ea 0%, #f7faf8 100%);"></figure>
    </div>
  </div>
</section>

<hr class="div">

<section id="culture">
  <div class="wrap cult-grid">
    <div>
      <span class="eyebrow dark">§ 04 — Culture & Heritage</span>
      <h2>Traditions<br><em>Kept Alive</em></h2>
      <div class="rule"></div>
      <p>The people of Balingasag – a blend of Cebuano, Higaonon, and Maranao communities – maintain a rich living culture of festivals, indigenous music, and traditional crafts that have endured through generations.</p>
      <p>The local weaving traditions and agricultural practices of the Higaonon indigenous peoples are recognized as integral to Balingasag's identity and continue to be practiced in upland communities today.</p>
    </div>
    <div>
      <div class="fest-card">
        <div class="date"><div class="d">01</div><div class="m">January</div></div>
        <div><h4>Kanduli Festival</h4><p>An annual celebration of Balingasag's founding anniversary featuring street dances, cultural presentations, and the coronation of local royalty.</p></div>
      </div>
      <div class="fest-card">
        <div class="date"><div class="d">02</div><div class="m">May</div></div>
        <div><h4>Feast of San Isidro</h4><p>The patron saint's feast day, marked by solemn processions, traditional Bukidnon music, and communal feasting across the municipality.</p></div>
      </div>
      <div class="fest-card">
        <div class="date"><div class="d">03</div><div class="m">October</div></div>
        <div><h4>Harvest Festival</h4><p>A thanksgiving celebration of the agricultural harvest season, featuring local produce exhibits, folk performances, and traditional craftsmanship.</p></div>
      </div>
    </div>
  </div>
</section>

<section id="visit" style="background:#fff;">
  <div class="wrap">
    <div class="travel-hero">
      <span class="eyebrow dark">§ 05 – Travel Guide</span>
      <h2>How to Get Here</h2>
      <p>Balingasag is easily accessible from Cagayan de Oro City and Laguindingan Airport, making it a natural extension of any Northern Mindanao itinerary.</p>
    </div>
    <div class="travel-cards">
      <div class="tcard"><div class="ic">✈️</div><div class="lbl">BY AIR</div><p>Fly into Laguindingan International Airport (CGY), Misamis Oriental. Balingasag is approximately 45 minutes by road from the terminal.</p></div>
      <div class="tcard"><div class="ic">🚌</div><div class="lbl">BY BUS</div><p>Regular bus services connect Cagayan de Oro City to Balingasag daily. The journey takes approximately 1.5 hours via the Coastal Road.</p></div>
      <div class="tcard"><div class="ic">🚐</div><div class="lbl">BY VAN</div><p>Shared van services (v-hire) depart from Agora Market in Cagayan de Oro City throughout the day. Travel time is roughly 1 hour.</p></div>
      <div class="tcard"><div class="ic">🚗</div><div class="lbl">BY PRIVATE CAR</div><p>Take the national highway eastward from Cagayan de Oro. Follow signage toward Balingasag along the Misamis Oriental coastal route.</p></div>
    </div>
    <div class="best-time">
      <div>
        <h3>Best Time to Visit</h3>
        <p>Balingasag enjoys a relatively dry season from November through April, making these months ideal for outdoor activities. The months of December through February offer cooler temperatures and clear skies, perfect for trekking the Balatukan Range.</p>
      </div>
      <div>
        <div class="season"><div class="dot"></div><div><b>Nov – Feb</b><span>Dry Season · Ideal Trekking</span></div></div>
        <div class="season"><div class="dot"></div><div><b>Mar – May</b><span>Warm · Festival Season</span></div></div>
        <div class="season"><div class="dot"></div><div><b>Jun – Oct</b><span>Wet Season · Lush Scenery</span></div></div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <a href="/" aria-label="BaliTour Home">
          <img src="/Logo/BTLogo.png" alt="BaliTour Logo" class="foot-logo">
        </a>
        <div class="foot-loc">Misamis Oriental, Philippines</div>
        <p>Promoting the natural wonders and cultural heritage of Balingasag for sustainable and responsible tourism.</p>
      </div>
      <div>
        <div class="foot-h">Quick Links</div>
        <div class="foot-links">
          <a href="#about">About</a>
          <a href="#attractions">Attractions</a>
          <a href="#nature">Nature</a>
          <a href="#culture">Culture</a>
          <a href="#visit">Visit</a>
        </div>
      </div>
      <div>
        <div class="foot-h">Contact & Info</div>
        <p style="color:#D3E3D9;font-size:.9rem;margin-bottom:8px;">Municipal Hall, Balingasag</p>
        <p style="color:#D3E3D9;font-size:.9rem;margin-bottom:8px;">Misamis Oriental, 9005</p>
        <p style="color:#D3E3D9;font-size:.9rem;margin-bottom:14px;">Philippines</p>
        <p style="color:var(--sage);font-size:.9rem;">tourism@balingasag.gov.ph</p>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2025 Balingasag Tourism Office. All rights reserved.</span>
      <span>Made for the people of Balingasag.</span>
    </div>
  </div>
</footer>

</main>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const nav = document.querySelector('header.nav');
  window.addEventListener('scroll', function() {
    nav.classList.toggle('scrolled', window.scrollY > 50);
  });
});
</script>
</body>
</html>
