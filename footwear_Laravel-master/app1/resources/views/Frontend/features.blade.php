@include('Frontend.header')

<!-- Hero -->
<section class="hero-section">
  <div class="container">
    <h1>Our Features</h1>
    <p>Empowering women through technology and community support.</p>
    <a href="#featuresList" class="btn btn-gradient">Explore Features</a>
  </div>
</section>

<!-- Features Cards -->
<section class="container my-5" id="featuresList">
  <div class="section-title">
    <h2>Key Features</h2>
    <p>Everything SafeHer offers to ensure safety and empowerment.</p>
  </div>
  <div class="row g-4">
    <div class="col-md-4 col-12">
      <div class="feature-card">
        <i class="fa-solid fa-bell"></i>
        <h5>Instant SOS Alerts</h5>
        <p>One-tap SOS notifications to family, friends, and authorities for immediate help.</p>
      </div>
    </div>
    <div class="col-md-4 col-12">
      <div class="feature-card">
        <i class="fa-solid fa-map-location-dot"></i>
        <h5>Live Location Tracking</h5>
        <p>Share real-time location with trusted contacts during emergencies.</p>
      </div>
    </div>
    <div class="col-md-4 col-12">
      <div class="feature-card">
        <i class="fa-solid fa-shield-halved"></i>
        <h5>Safety Tips & Guides</h5>
        <p>Personal safety guides and educational content to empower women in all situations.</p>
      </div>
    </div>
    <div class="col-md-4 col-12">
      <div class="feature-card">
        <i class="fa-solid fa-users"></i>
        <h5>Community Support</h5>
        <p>Connect with volunteers and local networks for extra safety and assistance.</p>
      </div>
    </div>
    <div class="col-md-4 col-12">
      <div class="feature-card">
        <i class="fa-solid fa-mobile-screen-button"></i>
        <h5>Mobile App Integration</h5>
        <p>Access all features via our intuitive mobile app for convenience anywhere.</p>
      </div>
    </div>
    <div class="col-md-4 col-12">
      <div class="feature-card">
        <i class="fa-solid fa-globe"></i>
        <h5>Global Helplines</h5>
        <p>Preloaded emergency contacts worldwide for traveling women.</p>
      </div>
    </div>
  </div>
</section>

<!-- Animated Stats Section with Icons & Gradient Hover -->
<section class="container my-5">
  <div class="section-title">
    <h2>Our Impact in Numbers</h2>
    <p>See how SafeHer is making a real difference!</p>
  </div>
  <div class="row text-center g-4">
    <div class="col-6 col-md-3">
      <div class="glass-card p-4 hover-gradient">
        <i class="fa-solid fa-venus fa-2x mb-2" style="color:#ff3cac;"></i>
        <h3 class="stat-number" data-target="15000">0</h3>
        <p>Women Helped</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="glass-card p-4 hover-gradient">
        <i class="fa-solid fa-bell fa-2x mb-2" style="color:#784ba0;"></i>
        <h3 class="stat-number" data-target="1200">0</h3>
        <p>SOS Alerts Sent</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="glass-card p-4 hover-gradient">
        <i class="fa-solid fa-users fa-2x mb-2" style="color:#ff3cac;"></i>
        <h3 class="stat-number" data-target="350">0</h3>
        <p>Communities Reached</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="glass-card p-4 hover-gradient">
        <i class="fa-solid fa-handshake fa-2x mb-2" style="color:#784ba0;"></i>
        <h3 class="stat-number" data-target="500">0</h3>
        <p>Volunteers Engaged</p>
      </div>
    </div>
  </div>
</section>



<style>
:root{
  --accent: #ff2b6a;
  --accent-2: #6a00f4;
  --text-main: #fff;
  --muted-text: #9aa3bf;
  --footer-bg: #0e1223;
  --bg-main: #0a0d1a;
}
.light-mode{
  --text-main:#0a0d1a;
  --muted-text:#555;
  --footer-bg:#f9f9fb;
  --bg-main:#ffffff;
}
body{
  font-family: 'Inter', sans-serif;
  background: var(--bg-main);
  color: var(--text-main);
  transition: background .3s ease,color .3s ease;
}

/* Navbar */
.navbar{
  background: linear-gradient(to bottom right, rgba(14,18,35,.75), rgba(14,18,35,.35));
  backdrop-filter: blur(10px);
  border-bottom: 1px solid rgba(255,255,255,.06);
}
.navbar-brand{ font-weight:800; color:var(--text-main) !important; }
.brand-dot{ display:inline-block;width:.55rem;height:.55rem;border-radius:50%; background: linear-gradient(45deg,var(--accent),var(--accent-2)); margin-left:.35rem }
.nav-link{ color:var(--muted-text) !important; font-weight:600; transition:.2s; }
.nav-link:hover{ color:var(--accent) !important; }
.btn-sos{
  background: linear-gradient(90deg,var(--accent),var(--accent-2));
  border:none;color:#fff;font-weight:700;border-radius:999px;padding:.6rem 1.1rem;
  box-shadow: 0 6px 20px rgba(255,43,106,.35);
  transition:.3s;
}
.btn-sos:hover{ filter: brightness(1.08); transform: translateY(-2px); }

/* Hero Section */
.hero-section{
  background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1600185367964-7b7e2cd5be99?auto=format&fit=crop&w=1600&q=80');
  background-size: cover;
  background-position: center;
  padding: 120px 0;
  text-align:center;
}
.hero-section h1{ font-size:48px;font-weight:700;margin-bottom:20px; }
.hero-section p{ font-size:18px;margin-bottom:30px;color:#ddd; }
.btn-gradient{ background: linear-gradient(90deg,#ff3cac,#784ba0); border:none; color:#fff; font-weight:600; transition:.3s; }
.btn-gradient:hover{ transform: scale(1.05); opacity:0.9; }


/* Light mode overrides */
.light-mode {
  --text-main: #0a0d1a;       /* Main text dark */
  --muted-text: #555;         /* Muted text dark */
  --footer-bg: #f9f9fb;       /* Light footer */
  --bg-main: #ffffff;         /* Page background */
}

/* Apply text colors for cards and sections */
.light-mode .glass-card,
.light-mode .about-card,
.light-mode .team-card {
  background: rgba(255, 255, 255, 0.6); /* lighter glass for readability */
  color: #0a0d1a;                        /* text dark */
}

.light-mode h1, .light-mode h2, .light-mode h3, 
.light-mode h4, .light-mode h5, .light-mode h6,
.light-mode p, .light-mode li, .light-mode a {
  color: #0a0d1a !important;
}

/* Hero section text in light mode */
.light-mode .hero-section h1,
.light-mode .hero-section p {
  color: #0a0d1a;
}

/* Footer text in light mode */
.light-mode footer,
.light-mode footer a,
.light-mode footer p,
.light-mode footer small {
  color: #0a0d1a !important;
}

/* Glass cards */
.glass-card{
  backdrop-filter: blur(10px);
  background: rgba(255,255,255,0.05);
  border-radius:15px;
  padding:30px;
  margin-bottom:30px;
  box-shadow:0 8px 32px rgba(0,0,0,0.3);
  transition: transform .3s, box-shadow .3s;
}
.glass-card:hover{ transform: translateY(-10px); box-shadow:0 15px 40px rgba(255,43,106,.4); }

/* Features cards */
.feature-card{
  background: rgba(255,255,255,0.05);
  border-radius: 15px;
  padding: 20px;
  text-align:center;
  color:#fff;
  transition: transform .3s, box-shadow .3s;
}
.feature-card:hover{
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(255,43,106,.4);
}
.feature-card i{
  font-size:48px;
  margin-bottom:15px;
  background: linear-gradient(90deg,var(--accent),var(--accent-2));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Section titles */
.section-title{text-align:center;margin-bottom:50px;}
.section-title h2{ font-weight:700;font-size:36px;margin-bottom:15px;color:#ff3cac; }
.section-title p{ color:#ccc;font-size:16px; }

/* Footer */
footer{
  background:
    radial-gradient(900px 420px at 10% 0%, rgba(106,0,244,.08), transparent 60%),
    radial-gradient(900px 420px at 90% 100%, rgba(255,43,106,.08), transparent 60%),
    var(--footer-bg);
  border-top: 1px solid rgba(255,255,255,.04);
  padding:50px 0 20px;
}
.foot-link{ color:var(--muted-text); text-decoration:none; }
.foot-link:hover{ color:#fff; }
.thumb{ width:100%; height:auto; border-radius:12px; border:1px solid rgba(255,255,255,.08); cursor:pointer; }
.copyright{ color:#9aa3bf; text-align:center; margin-top:20px; }

/* Responsive */
@media(max-width:992px){
  .feature-card{ margin-bottom:20px; }
  .thumb{ width:100%; height:auto; }
}


  .thumb {
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,.08);
    cursor: pointer;
    height: auto;
  }

  .hover-gradient {
  transition: transform .3s, box-shadow .3s, background .3s;
}
.hover-gradient:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(255,43,106,.4);
  background: linear-gradient(135deg, rgba(255,60,172,0.15), rgba(120,75,160,0.15));
}
  .foot-link {
    color: #9aa3bf;
    transition: color 0.3s;
  }
  .foot-link:hover {
    color: #fff;
  }
</style>



@include('FrontendLayout.footer')
