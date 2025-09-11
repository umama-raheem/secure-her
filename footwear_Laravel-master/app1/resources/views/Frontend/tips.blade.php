
@include('Frontend.header')

<style>
/* Visual Safety Gallery */
#visual-gallery h2 { font-weight: 700; }
#visual-gallery .glass-card {
  background: rgba(255,255,255,0.05);
  backdrop-filter: blur(10px);
  padding: 20px;
  border-radius: 15px;
  transition: transform .3s, box-shadow .3s;
}
#visual-gallery .glass-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 35px rgba(255,43,106,.4);
}
#visual-gallery .tip-img {
  width: 100%;
  border-radius: 12px;
  border: 1px solid rgba(255,255,255,.08);
  transition: transform .3s, box-shadow .3s;
}
#visual-gallery .tip-img:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(255,43,106,.3);
}
#visual-gallery p {
  margin-top: 10px;
  font-weight: 500;
  color: var(--text-main);
}
@media(max-width:768px){
  #visual-gallery .col-sm-6 { margin-bottom:20px; }
}
</style>
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
.navbar{
  background: linear-gradient(to bottom right, rgba(14,18,35,.85), rgba(14,18,35,.4));
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

/* Hero */
.hero-section{
  background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1606851092490-94d7d42d2e60?auto=format&fit=crop&w=1600&q=80');
  background-size: cover;
  background-position: center;
  padding: 100px 0;
  text-align:center;
}
.hero-section h1{ font-size:42px;font-weight:700;margin-bottom:20px; }
.hero-section p{ font-size:18px;margin-bottom:30px;color:#ddd; }
.btn-gradient{ background: linear-gradient(90deg,#ff3cac,#784ba0); border:none; color:#fff; font-weight:600; transition:.3s; }
.btn-gradient:hover{ transform: scale(1.05); opacity:0.9; }

/* Cards */
.tip-card{
  background: rgba(255,255,255,0.05);
  padding:20px;
  border-radius:15px;
  text-align:center;
  transition:.3s;
}
.tip-card:hover{ transform: translateY(-8px); box-shadow:0 12px 25px rgba(255,43,106,.35); }
.tip-card i{
  font-size:2rem;
  color: var(--accent);
  margin-bottom:15px;
}
.tip-card img{ width:100%; border-radius:12px; margin-top:15px; }

/* Community Carousel */
.swiper-slide{ background: rgba(255,255,255,0.05); border-radius:15px; padding:20px; text-align:center; font-weight:500; transition:.3s; }
.swiper-slide:hover{ transform: translateY(-5px); box-shadow:0 10px 20px rgba(255,43,106,.3); }

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
@media(max-width:768px){
  .swiper-slide{ width:80% !important; }
}
</style>
<!-- Hero -->
<section class="hero-section">
  <div class="container">
    <h1>Safety Tips for Women</h1>
    <p>Practical advice and guidelines to stay safe anytime, anywhere.</p>
    <a href="#top-tips" class="btn btn-gradient">Explore Tips</a>
  </div>
</section>

<!-- Top Tips -->
<section class="container my-5" id="top-tips">
  <h2 class="text-center mb-4">Top Safety Tips</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="tip-card">
        <i class="fa-solid fa-phone"></i>
        <h5 class="mt-3">Always Carry Emergency Contacts</h5>
        <p>Keep police, friends, and family numbers handy on your phone.</p>
        <img src="https://images.unsplash.com/photo-1581091870620-d5550b551bfa?auto=format&fit=crop&w=800&q=60" alt="">
      </div>
    </div>
    <div class="col-md-4">
      <div class="tip-card">
        <i class="fa-solid fa-location-dot"></i>
        <h5 class="mt-3">Share Location</h5>
        <p>Always let a trusted contact know your whereabouts.</p>
        <img src="https://images.unsplash.com/photo-1603074119817-045d574c86b2?auto=format&fit=crop&w=800&q=60" alt="">
      </div>
    </div>
    <div class="col-md-4">
      <div class="tip-card">
        <i class="fa-solid fa-bolt"></i>
        <h5 class="mt-3">Stay Alert</h5>
        <p>Be aware of your surroundings and avoid distractions.</p>
        <img src="https://images.unsplash.com/photo-1573495612937-1b44c3f9fda6?auto=format&fit=crop&w=800&q=60" alt="">
      </div>
    </div>
  </div>
</section>

<!-- Visual Safety Gallery -->
<section class="container my-5" id="visual-gallery">
  <h2 class="text-center mb-4">Visual Safety Tips</h2>
  <div class="row g-4">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="glass-card text-center">
        <img src="https://images.pexels.com/photos/3184413/pexels-photo-3184413.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Share Location" class="img-fluid tip-img">
        <p class="mt-2">Always share your location with a trusted contact.</p>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="glass-card text-center">
        <img src="https://images.pexels.com/photos/267614/pexels-photo-267614.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Emergency Contacts" class="img-fluid tip-img">
        <p class="mt-2">Keep emergency contacts handy on your phone.</p>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="glass-card text-center">
        <img src="https://images.pexels.com/photos/1181355/pexels-photo-1181355.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Stay Alert" class="img-fluid tip-img">
        <p class="mt-2">Stay alert and aware of your surroundings.</p>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="glass-card text-center">
        <img src="https://images.pexels.com/photos/40568/woman-technology-desk-office-40568.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Use SOS Apps" class="img-fluid tip-img">
        <p class="mt-2">Install and use SOS/emergency apps for quick alerts.</p>
      </div>
    </div>
  </div>
</section>


<style>
/* Visual Safety Gallery */
#visual-gallery h2 { font-weight: 700; }
#visual-gallery .glass-card {
  background: rgba(255,255,255,0.05);
  backdrop-filter: blur(10px);
  padding: 20px;
  border-radius: 15px;
  transition: transform .3s, box-shadow .3s;
}
#visual-gallery .glass-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 35px rgba(255,43,106,.4);
}
#visual-gallery .tip-img {
  width: 100%;
  border-radius: 12px;
  border: 1px solid rgba(255,255,255,.08);
  transition: transform .3s, box-shadow .3s;
}
#visual-gallery .tip-img:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(255,43,106,.3);
}
#visual-gallery p {
  margin-top: 10px;
  font-weight: 500;
  color: var(--text-main);
}
@media(max-width:768px){
  #visual-gallery .col-sm-6 { margin-bottom:20px; }
}
</style>

<!-- Community Tips Carousel -->
<section class="container my-5">
  <h2 class="text-center mb-4">Community Tips</h2>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Always carry a whistle in your bag.</div>
      <div class="swiper-slide">Inform a friend about your travel plans.</div>
      <div class="swiper-slide">Walk confidently and stay alert.</div>
      <div class="swiper-slide">Use well-lit routes and avoid shortcuts.</div>
    </div>
    <div class="swiper-pagination mt-3"></div>
  </div>
</section>



@include('FrontendLayout.footer')