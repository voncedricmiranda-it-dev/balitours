<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="BaliTours simple scaffolded pages for public, authentication, user, and admin sections.">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @if(config('app.env') === 'production')
  <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://cdn.jsdelivr.net; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com https://fonts.googleapis.com; img-src 'self' data: https:; connect-src 'self' https:;">
  @endif
  <title>{{ $title ?? 'BaliTours' }}</title>
  <link rel="icon" type="image/png" href="/Logo/BTLogo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #f8f7f2;
      --panel: #ffffff;
      --border: #dadbd4;
      --ink: #15251f;
      --ink-soft: #546255;
      --primary: #163b26;
      --accent: #8aab8f;
      --muted: #6e7b72;
      --shadow: 0 24px 60px rgba(15, 27, 21, 0.08);
    }
    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body { margin: 0; font-family: 'Inter', sans-serif; color: var(--ink); background: var(--bg); }
    a { color: inherit; text-decoration: none; }
    .skip-link { position: absolute; left: -999px; top: auto; width: 1px; height: 1px; overflow: hidden; }
    .skip-link:focus { left: 16px; top: 16px; width: auto; height: auto; padding: 12px 16px; background: var(--primary); color: #fff; border-radius: 6px; z-index: 1000; }
    .site-header { position: sticky; top: 0; z-index: 30; background: rgba(255,255,255,0.95); border-bottom: 1px solid rgba(26,37,30,0.08); backdrop-filter: blur(12px); }
    .header-inner { max-width: 1200px; margin: 0 auto; padding: 18px 36px; display: flex; align-items: center; justify-content: space-between; gap: 16px; }
    .brand { display: flex; align-items: center; gap: 12px; font-weight: 700; }
    .brand .mark { width: 38px; height: 38px; display: grid; place-items: center; background: var(--primary); color: #fff; border-radius: 50%; font-family: 'Playfair Display', serif; }
    .brand .title { line-height: 1.1; }
    .top-nav { display: flex; flex-wrap: wrap; gap: 18px; font-size: 0.92rem; color: var(--ink-soft); }
    .top-nav a { color: var(--ink-soft); transition: color 0.2s ease; }
    .top-nav a:hover { color: var(--primary); }
    .mobile-menu-btn { display: none; background: none; border: none; cursor: pointer; padding: 8px; }
    .mobile-nav { display: none; position: absolute; top: 100%; left: 0; right: 0; background: white; border-bottom: 1px solid var(--border); padding: 16px; flex-direction: column; gap: 12px; box-shadow: var(--shadow); }
    .mobile-nav.active { display: flex; }
    .page-wrap { max-width: 1120px; margin: 0 auto; padding: 48px 32px 80px; }
    .page-panel { background: var(--panel); border: 1px solid var(--border); border-radius: 26px; box-shadow: var(--shadow); padding: 44px; }
    .eyebrow { display: inline-flex; font-size: 0.78rem; letter-spacing: 0.16em; text-transform: uppercase; color: var(--accent); font-weight: 700; margin-bottom: 18px; }
    h1 { font-family: 'Playfair Display', serif; font-size: clamp(2.2rem, 3vw, 3.4rem); line-height: 1.05; margin: 0 0 20px; }
    p.intro { font-size: 1rem; color: var(--ink-soft); max-width: 760px; margin-bottom: 32px; }
    .item-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 18px; }
    .card { background: #f7f6f0; border: 1px solid rgba(119, 129, 119, 0.18); border-radius: 18px; padding: 24px; min-height: 190px; transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .card:hover { transform: translateY(-4px); box-shadow: 0 12px 24px rgba(15, 27, 21, 0.12); }
    .card h2 { font-size: 1.1rem; margin: 0 0 12px; }
    .card p { margin: 0; color: var(--ink-soft); }
    .note { margin-top: 32px; color: var(--muted); line-height: 1.7; }
    .footer-inner { max-width: 1120px; margin: 0 auto; padding: 24px 32px; color: var(--muted); font-size: 0.92rem; border-top: 1px solid rgba(26,37,30,0.08); }
    @media (max-width: 1024px) { .item-grid { grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); } }
    @media (max-width: 780px) { 
      .header-inner { padding: 16px 20px; } 
      .page-wrap { padding: 32px 20px 60px; } 
      .page-panel { padding: 28px; }
      .mobile-menu-btn { display: block; }
      .top-nav { display: none; }
      .item-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 480px) {
      .header-inner { padding: 12px 16px; }
      .page-wrap { padding: 24px 16px 48px; }
      .page-panel { padding: 20px; }
      h1 { font-size: 1.8rem; }
    }
  </style>
</head>
<body>
  <a class="skip-link" href="#content">Skip to content</a>
  <header class="site-header">
    <div class="header-inner">
      <a class="brand" href="/" aria-label="BaliTour Home">
        <img src="/Logo/BTLogo.png" alt="BaliTour Logo" style="height: 44px; width: auto; object-fit: contain;">
      </a>
      <button class="mobile-menu-btn" aria-label="Toggle navigation" onclick="document.querySelector('.mobile-nav').classList.toggle('active')">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
      <nav class="top-nav" aria-label="Primary navigation">
        <a href="/">Landing</a>
        <a href="/public/about">About</a>
        <a href="/public/destinations">Destinations</a>
        <a href="/public/events">Events</a>
        <a href="/public/contact">Contact</a>
        <a href="/auth/login">Login</a>
        <a href="/admin/dashboard">Admin</a>
      </nav>
      <nav class="mobile-nav" aria-label="Mobile navigation">
        <a href="/">Landing</a>
        <a href="/public/about">About</a>
        <a href="/public/destinations">Destinations</a>
        <a href="/public/events">Events</a>
        <a href="/public/contact">Contact</a>
        <a href="/auth/login">Login</a>
        <a href="/admin/dashboard">Admin</a>
      </nav>
    </div>
  </header>

  <main id="content" class="page-wrap">
    @yield('content')
  </main>

  <footer class="site-footer">
    <div class="footer-inner" style="display: flex; flex-direction: column; align-items: center; gap: 12px;">
      <img src="/Logo/BTLogo.png" alt="BaliTour Logo" style="height: 40px; width: auto; object-fit: contain;">
      <p>&copy; {{ date('Y') }} BaliTour. Simple scaffold pages for public, auth, user, and admin sections.</p>
      <nav aria-label="Footer navigation" style="display: flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
        <a href="/public/contact" style="color: var(--muted); text-decoration: none; hover: color: var(--primary);">Contact</a>
        <a href="/public/faq" style="color: var(--muted); text-decoration: none; hover: color: var(--primary);">FAQ</a>
        <a href="/auth/login" style="color: var(--muted); text-decoration: none; hover: color: var(--primary);">Login</a>
      </nav>
    </div>
  </footer>
</body>
</html>
