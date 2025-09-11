@include('Frontend.header')


<!-- HERO -->
<section class="hero-section">
  <div class="container text-center">
    <h1>Our Impact</h1>
    <p>See how SafeHer is making communities safer for women.</p>
  </div>
</section>

<!-- IMPACT CARDS -->
<section class="container my-5">
  <div class="row g-4 text-center">
    <div class="col-md-4">
      <div class="impact-card">
        <i class="fa-solid fa-users impact-icon"></i>
        <h4>5000+ Users</h4>
        <p>Active users benefiting from our safety services.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="impact-card">
        <i class="fa-solid fa-map-location-dot impact-icon"></i>
        <h4>120+ Cities</h4>
        <p>Our coverage spans over multiple cities.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="impact-card">
        <i class="fa-solid fa-shield-halved impact-icon"></i>
        <h4>95% Safety Increase</h4>
        <p>Communities report improved safety awareness.</p>
      </div>
    </div>
  </div>
</section>

<!-- COUNTERS -->
<section class="container my-5" id="impact-counters">
  <h2 class="text-center mb-4">Our Impact</h2>
  <div class="row text-center g-4">
    <div class="col-md-3 col-6">
      <div class="glass-card p-4">
        <i class="fa-solid fa-users fa-2xl mb-2" style="color:#ff3cac;"></i>
        <h3 class="counter" data-target="15000">0</h3>
        <p>Users Protected</p>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="glass-card p-4">
        <i class="fa-solid fa-bell fa-2xl mb-2" style="color:#784ba0;"></i>
        <h3 class="counter" data-target="120000">0</h3>
        <p>Alerts Sent</p>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="glass-card p-4">
        <i class="fa-solid fa-city fa-2xl mb-2" style="color:#ff9a3c;"></i>
        <h3 class="counter" data-target="35">0</h3>
        <p>Cities Covered</p>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="glass-card p-4">
        <i class="fa-solid fa-calendar-check fa-2xl mb-2" style="color:#36d1dc;"></i>
        <h3 class="counter" data-target="50">0</h3>
        <p>Events Conducted</p>
      </div>
    </div>
  </div>
</section>

<!-- SUCCESS STORIES -->
<section class="impact-success my-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Success Stories</h2>
      <p>Real experiences that showcase how we made a difference.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 p-3">
          <p>"Thanks to the app, I was able to alert my family and get help within minutes. Truly life-saving!"</p>
          <h6 class="text-end">— Sarah, Karachi</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 p-3">
          <p>"The emergency alert feature gave me confidence to travel alone at night. A blessing!"</p>
          <h6 class="text-end">— Ayesha, Lahore</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 p-3">
          <p>"Our city police have partnered with this initiative, and it has improved response time significantly."</p>
          <h6 class="text-end">— Officer Ali, Islamabad</h6>
        </div>
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

/* Impact Cards */
.impact-card{
  background: rgba(255,255,255,0.05);
  border-radius:15px;
  padding:30px;
  text-align:center;
  transition: transform .3s, box-shadow .3s;
}
.impact-card:hover{
  transform: translateY(-10px);
  box-shadow:0 10px 30px rgba(255,43,106,.4);
}
.impact-icon{ font-size:2.5rem; color: var(--accent); margin-bottom:15px; }

/* Counters */
#impact-counters .glass-card {
  backdrop-filter: blur(10px);
  background: rgba(255,255,255,0.05);
  border-radius: 15px;
  transition: transform .3s, box-shadow .3s;
}
#impact-counters .glass-card:hover{
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(255,43,106,.4);
}
#impact-counters .counter{
  font-size:2rem;
  font-weight:700;
  margin:10px 0;
  color: var(--accent);
}
/* Success Stories Cards */
.impact-success .card {
  background: rgba(255, 255, 255, 0.05); /* semi-transparent glass effect */
  backdrop-filter: blur(10px);
  border-radius: 15px;
  padding: 25px;
  transition: transform 0.3s, box-shadow 0.3s;
  color: var(--text-main);
}

.impact-success .card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(255, 43, 106, 0.4);
}

.impact-success .card p {
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 15px;
}

.impact-success .card h6 {
  font-weight: 600;
  color: var(--accent);
  text-align: right;
}

/* Responsive */
@media (max-width: 768px) {
  .impact-success .card {
    padding: 20px;
  }
}

/* Footer */
footer{
  background:
    radial-gradient(900px 420px at 10% 0%, rgba(106,0,244,.08), transparent 60%),
    radial-gradient(900px 420px at 90% 100%, rgba(255,43,106,.08), transparent 60%),
    var(--footer-bg);
  border-top: 1px solid rgba(255,255,255,.04);
  padding:50px 0 20px;
}
.foot-link{ color:var(--muted-text); text-decoration:none; transition:.3s; }
.foot-link:hover{ color:#fff; }
.thumb{ width:48px; height:48px; border-radius:12px; border:1px solid rgba(255,255,255,.08); cursor:pointer; object-fit:cover; }

@media(max-width:768px){
  .thumb{ width:45px; height:45px; }
}
</style>


@include('FrontendLayout.footer')