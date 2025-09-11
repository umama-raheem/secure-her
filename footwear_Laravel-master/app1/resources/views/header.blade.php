<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>SafeHer — Women Safety Platform</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

  <!-- AOS (Scroll Animations) -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"/>

  <style>
    :root{
      --bg-dark: #0b0f1a;
      --glass: rgba(13,18,33,.6);
      --accent: #ff2b6a;
      --accent-2:#6a00f4;
      --muted:#aab0c0;
      --card-bg: linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02));
      --text-main: #e9ecf5;
      --muted-text: #c7cbe0;
      --footer-bg: #090d18;
      --hero-video-filter: brightness(.45) saturate(.9);
    }

    /* LIGHT MODE OVERRIDES */
    .light-mode {
      --bg-dark: #f6f8fb;
      --glass: rgba(255,255,255,.6);
      --accent: #ff2b6a;
      --accent-2: #6a00f4;
      --muted: #6b7280;
      --card-bg: linear-gradient(180deg, rgba(255,255,255,1), rgba(250,250,250,1));
      --text-main: #0b1220;
      --muted-text: #444953;
      --footer-bg: #f3f6fb;
      --hero-video-filter: brightness(.65) saturate(.95);
    }

    html,body{height:100%}
    body{
      font-family: "Inter", system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
      background: radial-gradient(1200px 600px at 10% 10%, #101633 0, var(--bg-dark) 55%) fixed;
      color:var(--text-main);
      overflow-x:hidden;
      transition: background .35s ease, color .25s ease;
    }

    /* ===== NAVBAR (glass) ===== */
    .navbar{
      background: linear-gradient(to bottom right, rgba(14,18,35,.75), rgba(14,18,35,.35));
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255,255,255,.06);
      transition: background .25s ease, border-color .25s ease;
    }
    .light-mode .navbar{
      background: linear-gradient(to bottom right, rgba(255,255,255,.9), rgba(255,255,255,.6));
      border-bottom: 1px solid rgba(10,20,40,.04);
    }
    .navbar-brand{
      font-weight:800;
      letter-spacing:.5px;
      color:var(--text-main) !important;
    }
    .brand-dot{
      display:inline-block;width:.55rem;height:.55rem;border-radius:50%;
      background: linear-gradient(45deg,var(--accent),var(--accent-2)); margin-left:.35rem
    }
    .nav-link{ color:var(--muted-text) !important; font-weight:600; }
    .nav-link:hover{ color:var(--accent) !important; }
    .btn-sos{
      background: linear-gradient(90deg,var(--accent),var(--accent-2));
      border:none;color:#fff;font-weight:700;border-radius:999px;padding:.6rem 1.1rem;
      box-shadow: 0 6px 20px rgba(255,43,106,.35);
    }
    .btn-sos:hover{ filter: brightness(1.08); transform: translateY(-1px); }

    /* ===== HERO with video ===== */
    .hero{
      position:relative; min-height:100vh; display:flex; align-items:center; justify-content:center; text-align:center;
      isolation:isolate; overflow:hidden; padding-top:56px; /* account for navbar */
    }
    .hero video{
      position:absolute; inset:0; width:100%; height:100%; object-fit:cover; z-index:-2; filter:var(--hero-video-filter);
      transition: filter .25s ease;
    }
    .hero::after{ /* gradient overlay */
      content:""; position:absolute; inset:0; z-index:-1;
      background: radial-gradient(800px 400px at 80% 20%, rgba(106,0,244,.35), transparent 60%),
                  radial-gradient(600px 350px at 20% 80%, rgba(255,43,106,.25), transparent 60%),
                  linear-gradient(to bottom, rgba(7,10,19,.55), rgba(7,10,19,.55));
      transition: background .3s ease;
    }
    .light-mode .hero::after{
      background: linear-gradient(to bottom, rgba(255,255,255,.55), rgba(255,255,255,.55));
    }
    .hero h1{
      font-weight:900; font-size: clamp(2rem, 4.5vw, 4rem);
      line-height:1.05; letter-spacing:.3px;
    }
    .hero p.lead{ color:var(--muted-text); max-width:820px; margin: 1rem auto 2rem; }
    .hero .cta-wrap{ gap:12px }
    .btn-outline-soft{
      border:1px solid rgba(255,255,255,.12); color:var(--text-main); border-radius:999px; padding:.6rem 1.1rem;
      background:transparent;
    }
    .light-mode .btn-outline-soft{ border-color: rgba(10,20,40,.12); color:var(--text-main); background:transparent; }
    .btn-outline-soft:hover{ border-color:var(--accent); }

    /* ===== SECTION UTILS ===== */
    .section{ padding: 80px 0; }
    .section-title{
      font-weight:800; letter-spacing:.2px; margin-bottom:10px;
      color:var(--text-main);
    }
    .section-sub{ color:var(--muted) }

    /* ===== FEATURES ===== */
    .feat-card{
      background: var(--card-bg);
      border:1px solid rgba(255,255,255,.07);
      border-radius:20px; padding:26px; height:100%;
      box-shadow: inset 0 0 0 1px rgba(255,255,255,.02);
      transition: transform .25s ease, box-shadow .25s ease;
    }
    .light-mode .feat-card{ border:1px solid rgba(10,20,40,.06) }
    .feat-card:hover{ transform: translateY(-6px); box-shadow: 0 18px 40px rgba(0,0,0,.15); }
    .feat-icon{
      width:56px; height:56px; border-radius:14px; display:inline-grid; place-items:center; margin-bottom:14px;
      background: linear-gradient(135deg, rgba(255,43,106,.18), rgba(106,0,244,.18));
      color:#fff; font-size:22px;
      border:1px solid rgba(255,255,255,.06);
    }
    .feat-card p{ color:var(--muted-text) }

    /* ===== Emergency Quick Buttons (new) ===== */
    .quick-actions{
      display:flex; gap:18px; justify-content:center; flex-wrap:wrap; margin-top:28px;
    }
    .quick-btn{
      min-width:190px; border-radius:14px; padding:16px 18px; border:1px solid rgba(255,255,255,.06);
      background: linear-gradient(180deg, rgba(255,255,255,.02), rgba(255,255,255,.01));
      color:var(--text-main); transition: transform .18s ease, box-shadow .18s ease;
      display:flex; align-items:center; gap:12px; box-shadow: 0 10px 30px rgba(0,0,0,.12);
    }
    .quick-btn i{ font-size:20px; color:var(--accent) }
    .quick-btn small{ display:block; color:var(--muted) }
    .quick-btn:hover{ transform: translateY(-6px); box-shadow: 0 20px 40px rgba(0,0,0,.18); }

    /* ===== IMPACT COUNTERS ===== */
    .impact{
      background: radial-gradient(900px 420px at 15% 20%, rgba(106,0,244,.06), transparent 55%),
                  radial-gradient(800px 420px at 85% 80%, rgba(255,43,106,.06), transparent 55%);
    }
    .kpi{
      background: var(--card-bg);
      border:1px solid rgba(255,255,255,.07); border-radius:18px; padding:28px;
    }
    .light-mode .kpi{ border:1px solid rgba(10,20,40,.06) }
    .kpi .num{ font-size: clamp(2rem, 5vw, 3rem); font-weight:900; background: linear-gradient(90deg,var(--accent),var(--accent-2));
      -webkit-background-clip:text; background-clip:text; color:transparent; }
    .kpi .lbl{ color:var(--muted-text) }

    /* ===== TESTIMONIALS ===== */
    .testimonial-card{
      background: var(--card-bg);
      border:1px solid rgba(255,255,255,.08); border-radius:20px; padding:28px;
    }
    .avatar{
      width:64px;height:64px;border-radius:50%;object-fit:cover;border:2px solid rgba(255,255,255,.18)
    }
    .stars{ color:#ffd166 }

    /* ===== TIPS (Blog-style) ===== */
    .tip-card{
      background:#0f1528; border:1px solid rgba(255,255,255,.07); border-radius:18px; height:100%;
      transition: transform .25s ease, box-shadow .25s ease;
    }
    .light-mode .tip-card{ background: #fff; border:1px solid rgba(10,20,40,.06); }
    .tip-card:hover{ transform: translateY(-6px); box-shadow: 0 16px 40px rgba(0,0,0,.12); }
    .tip-img{ border-top-left-radius:18px; border-top-right-radius:18px; height:160px; object-fit:cover; }

    /* ===== PARTNERS MARQUEE ===== */
    .marquee{
      overflow:hidden; position:relative;
      mask-image: linear-gradient(to right, transparent, #000 10%, #000 90%, transparent);
    }
    .marquee-track{
      display:flex; gap:54px; align-items:center;
      animation: scrollX 28s linear infinite;
    }
    @keyframes scrollX{
      from{ transform: translateX(0) }
      to{ transform: translateX(-50%) }
    }
    .partner{
      height:44px; filter: grayscale(1) contrast(1.05) brightness(.9); opacity:.85; transition:.2s;
    }
    .partner:hover{ filter:none; opacity:1 }

    /* ===== MAP ===== */
    .map-wrap{
      border-radius:20px; overflow:hidden; border:1px solid rgba(255,255,255,.08);
      box-shadow: 0 18px 40px rgba(0,0,0,.12);
    }
    .light-mode .map-wrap{ border:1px solid rgba(10,20,40,.06); box-shadow: none; }

    /* ===== CTA ===== */
    .cta{
      background: linear-gradient(135deg, rgba(106,0,244,.08), rgba(255,43,106,.06));
      border:1px solid rgba(255,255,255,.04); border-radius:22px; padding:44px;
    }

    /* ===== FAQ ===== */
    .faq .accordion-button{ background: transparent; color: var(--text-main); }
    .light-mode .faq .accordion-button{ color:var(--text-main) }

    /* ===== NEWSLETTER ===== */
    .newsletter{
      background: linear-gradient(90deg, rgba(255,43,106,.06), rgba(106,0,244,.06));
      border-radius:12px; padding:22px; border:1px solid rgba(255,255,255,.04);
      display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;
    }
    .newsletter input{ max-width:420px; }

    /* ===== FOOTER (gradient + gallery) ===== */
    footer{
      background:
        radial-gradient(900px 420px at 10% 0%, rgba(106,0,244,.08), transparent 60%),
        radial-gradient(900px 420px at 90% 100%, rgba(255,43,106,.08), transparent 60%),
        var(--footer-bg);
      border-top: 1px solid rgba(255,255,255,.04);
      transition: background .25s ease;
    }
    .light-mode footer{
      background: var(--footer-bg);
      border-top: 1px solid rgba(10,20,40,.04);
    }
    .foot-link{ color:var(--muted-text); text-decoration:none }
    .foot-link:hover{ color:#fff }
    .thumb{
      width:78px;height:78px;object-fit:cover;border-radius:12px;border:1px solid rgba(255,255,255,.08)
    }
    .copyright{
      color:#9aa3bf;border-top:1px solid rgba(255,255,255,.06)
    }

    /* small helpers */
    .shadow-soft{ box-shadow: 0 18px 40px rgba(0,0,0,.12) }
    @media (max-width:767px){
      .quick-btn{ min-width:140px; padding:12px }
      .hero{ padding-top:70px; }
    }
  </style>
</head>
<body>

<!-- ========== NAVBAR ========== -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      SafeHer<span class="brand-dot"></span>
    </a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="nav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="features.html">Features</a></li>
        <li class="nav-item"><a class="nav-link" href="impact.html">Impact</a></li>
        <li class="nav-item"><a class="nav-link" href="tips.html">Tips</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact & Map</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact & Map</a></li>
        <li class="nav-item ms-lg-3"><a class="btn btn-sos" href="index.html#hero" aria-label="Emergency SOS Button"><i class="fa-solid fa-bell me-1"></i> Emergency SOS</a></li>
        <li class="nav-item ms-3">
          <!-- Theme toggle -->
          <button id="themeToggle" class="btn btn-outline-soft" aria-pressed="false" title="Toggle dark / light mode">
            <i id="themeIcon" class="fa-solid fa-sun"></i>
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>