

@include('Frontend.header')
<!-- Custom CSS -->
<style>
  .btn-gradient {
    background: linear-gradient(90deg, #ff3cac, #784ba0);
    color: white;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.3s ease;
  }
  .btn-gradient:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
  }
  .text-gradient {
    background: linear-gradient(90deg, #ff3cac, #784ba0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .glass-card {
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(15px);
    transition: transform 0.3s ease;
  }
  .hover-scale:hover {
    transform: scale(1.05);
  }
  .team-img {
    width: 100px;
    height: 100px;
    object-fit: cover;
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

/* Team Card */
.team-card {
  background: rgba(255,255,255,0.05);
  border-radius: 15px;
  transition: transform 0.3s, box-shadow 0.3s;
}
.team-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 30px rgba(255,43,106,0.4);
}

/* Team Images */
.team-img {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border-radius: 50%;
  display: block;
  margin: 0 auto;
}

/* Hover gradient effect */
.hover-gradient:hover {
  background: linear-gradient(135deg, rgba(255,60,172,0.15), rgba(120,75,160,0.15));
}

/* Team Images */
.team-img {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border-radius: 50%;
  display: block;
  margin: 0 auto;
}

/* Hover gradient effect */
.hover-gradient:hover {
  background: linear-gradient(135deg, rgba(255,60,172,0.15), rgba(120,75,160,0.15));
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

<!-- Hero Section -->
<section class="hero-section text-center d-flex align-items-center justify-content-center" 
         style="height:100vh; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80'); 
                background-size:cover; background-position:center;">
  <div class="container text-white">
    <h1 class="display-4 fw-bold">Contact & Map</h1>
    <p class="lead">Reach out to us or see where we operate.</p>
  </div>
</section>

<!-- Contact & Map Section -->
<section class="container my-5">
  <div class="row g-4">
    <!-- Map -->
    <div class="col-lg-6">
      <div class="map-container shadow-lg rounded-4 overflow-hidden" style="height:400px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!..." 
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="col-lg-6">
      <div class="contact-form p-5 rounded-4" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(15px);">
        <h3 class="mb-4 text-gradient">Get in Touch</h3>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control form-control-lg" id="name" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-lg" id="email" placeholder="you@example.com">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control form-control-lg" id="message" rows="5" placeholder="Your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-gradient btn-lg w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Quick Contact Info & Safety Tips -->
<section class="container my-5">
  <div class="row g-4 text-center">
    <div class="col-md-4">
      <div class="glass-card p-4 rounded-4 shadow-sm hover-scale">
        <i class="fa-solid fa-phone fa-2xl mb-3 text-gradient"></i>
        <h5>Hotline</h5>
        <p>Police: 15<br>Rescue: 1122<br>Women Helpline: 1099</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="glass-card p-4 rounded-4 shadow-sm hover-scale">
        <i class="fa-solid fa-envelope fa-2xl mb-3 text-gradient"></i>
        <h5>Email</h5>
        <p>support@safeher.com<br>info@safeher.com</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="glass-card p-4 rounded-4 shadow-sm hover-scale">
        <i class="fa-solid fa-lightbulb fa-2xl mb-3 text-gradient"></i>
        <h5>Quick Tips</h5>
        <p>Always share location with family.<br>Keep emergency contacts handy.<br>Trust your instincts.</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Support Team -->
<section class="support-team my-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Our Support Team</h2>
      <p>Meet the amazing people working to make communities safer for women.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <!-- Team Member Card -->
      <div class="col-6 col-sm-4 col-md-3">
        <div class="team-card text-center p-4 rounded-4 shadow-sm hover-scale">
          <img src="https://images.unsplash.com/photo-1603415526960-f7e0328b2e0f?auto=format&fit=crop&w=300&q=80" 
               class="team-img rounded-circle mb-3" alt="Team Member">
          <h5>Sarah Khan</h5>
          <p class="text-muted">Project Lead</p>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3">
        <div class="team-card text-center p-4 rounded-4 shadow-sm hover-scale">
          <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=300&q=80" 
               class="team-img rounded-circle mb-3" alt="Team Member">
          <h5>Ali Raza</h5>
          <p class="text-muted">Tech Specialist</p>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3">
        <div class="team-card text-center p-4 rounded-4 shadow-sm hover-scale">
          <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=300&q=80" 
               class="team-img rounded-circle mb-3" alt="Team Member">
          <h5>Ayesha Malik</h5>
          <p class="text-muted">Community Outreach</p>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3">
        <div class="team-card text-center p-4 rounded-4 shadow-sm hover-scale">
          <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=300&q=80" 
               class="team-img rounded-circle mb-3" alt="Team Member">
          <h5>Omar Sheikh</h5>
          <p class="text-muted">Design Lead</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="container my-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Frequently Asked Questions</h2>
    <p>Get quick answers to common queries.</p>
  </div>
  <div class="accordion" id="faqAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq1">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
          How quickly will I receive help?
        </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Once you hit the emergency button, alerts are sent instantly to nearby authorities and contacts.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
          Is my location safe to share?
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Yes, your location is encrypted and shared only with emergency responders and trusted contacts.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
          Can I get follow-up support?
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Absolutely, our support team follows up to ensure your safety and well-being.
        </div>
      </div>
    </div>
  </div>
</section>

@include('FrontendLayout.footer')