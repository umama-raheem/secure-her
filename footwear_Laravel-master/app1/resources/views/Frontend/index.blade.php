@include('Frontend.header')



<!-- ========== HERO ========== -->
<header id="hero" class="hero text-center">
  <!-- Dummy background video -->
  <video autoplay muted loop playsinline>
    <!-- Replace with your own video when ready -->
    <source src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4">
  </video>

  <div class="container position-relative">
    <h1 data-aos="fade-up">Your Safety, Our Priority</h1>
    <p class="lead" data-aos="fade-up" data-aos-delay="80">
      One-tap SOS, live GPS tracking, instant alerts to family & police, and community support — all in one place.
    </p>
    <div class="d-flex justify-content-center flex-wrap cta-wrap" data-aos="zoom-in" data-aos-delay="130">
      <a class="btn btn-sos" href="#" role="button"><i class="fa-solid fa-bolt me-1"></i> Send SOS Now</a>
      <a class="btn btn-outline-soft" href="#features">Explore Features</a>
    </div>

    <!-- ===== Emergency Quick Buttons (new) ===== -->
    <div class="quick-actions" data-aos="fade-up" data-aos-delay="200" aria-hidden="false">
      <button class="quick-btn" onclick="handleQuick('call')">
        <i class="fa-solid fa-phone"></i>
        <div class="text-start">
          <strong>Call Police</strong>
          <small>Immediate call to local police</small>
        </div>
      </button>

      <button class="quick-btn" onclick="handleQuick('sos')">
        <i class="fa-solid fa-bell"></i>
        <div class="text-start">
          <strong>One-Tap SOS</strong>
          <small>Send instant SOS to your circle</small>
        </div>
      </button>

      <button class="quick-btn" onclick="handleQuick('share')">
        <i class="fa-solid fa-location-dot"></i>
        <div class="text-start">
          <strong>Share Location</strong>
          <small>Share live location via message</small>
        </div>
      </button>
    </div>
  </div>
</header>

<!-- ========== FEATURES ========== -->
<section id="features" class="section">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title" data-aos="fade-up">Powerful Safety Features</h2>
      <p class="section-sub" data-aos="fade-up" data-aos-delay="60">Built for real emergencies — fast, reliable, and privacy-first.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="feat-card h-100">
          <div class="feat-icon"><i class="fa-solid fa-location-dot"></i></div>
          <h5 class="fw-bold mb-1">Live GPS Tracking</h5>
          <p>Share your real-time location with trusted contacts & authorities instantly.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="60">
        <div class="feat-card h-100">
          <div class="feat-icon"><i class="fa-solid fa-bell"></i></div>
          <h5 class="fw-bold mb-1">One-Tap SOS</h5>
          <p>Trigger an emergency alert with one tap — no unlock or typing required.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="120">
        <div class="feat-card h-100">
          <div class="feat-icon"><i class="fa-solid fa-video"></i></div>
          <h5 class="fw-bold mb-1">Auto Evidence</h5>
          <p>Background audio/video capture starts with SOS to preserve critical proof.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="180">
        <div class="feat-card h-100">
          <div class="feat-icon"><i class="fa-solid fa-users"></i></div>
          <h5 class="fw-bold mb-1">Family & Police Alerts</h5>
          <p>Immediate notifications to your circle & nearby responders with live tracking.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== IMPACT / COUNTERS ========== -->
<section id="impact" class="section impact">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title" data-aos="fade-up">Our Impact</h2>
      <p class="section-sub" data-aos="fade-up" data-aos-delay="50">Every second counts — here’s what we’ve done so far.</p>
    </div>
    <div class="row g-4">
      <div class="col-6 col-lg-3" data-aos="zoom-in">
        <div class="kpi text-center">
          <div class="num counter" data-target="12540">0</div>
          <div class="lbl">SOS Alerts Sent</div>
        </div>
      </div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="60">
        <div class="kpi text-center">
          <div class="num counter" data-target="8300">0</div>
          <div class="lbl">Women Helped</div>
        </div>
      </div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="120">
        <div class="kpi text-center">
          <div class="num counter" data-target="650">0</div>
          <div class="lbl">Police Stations Linked</div>
        </div>
      </div>
      <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="180">
        <div class="kpi text-center">
          <div class="num counter" data-target="5200">0</div>
          <div class="lbl">Lives Protected</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title" data-aos="fade-up">What Women Say</h2>
      <p class="section-sub" data-aos="fade-up" data-aos-delay="50">Real stories from our community.</p>
    </div>

    <div id="tCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="testimonial-card">
                <div class="d-flex align-items-center mb-3">
                  <img class="avatar me-3" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                  <div>
                    <strong>Ayesha — Karachi</strong>
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div>
                  </div>
                </div>
                <p class="mb-0">“Late night main SOS se family ko exact location mil gayi — response bohat fast tha.”</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="testimonial-card">
                <div class="d-flex align-items-center mb-3">
                  <img class="avatar me-3" src="https://randomuser.me/api/portraits/women/65.jpg" alt="">
                  <div>
                    <strong>Sana — Lahore</strong>
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                  </div>
                </div>
                <p class="mb-0">“Auto recording ne strong evidence save kardiya — mujhe real safety feel hui.”</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#tCarousel" data-bs-slide="prev" aria-label="Previous testimonial">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#tCarousel" data-bs-slide="next" aria-label="Next testimonial">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

  </div>
</section>

<!-- ========== TIPS (BLOG PREVIEW) ========== -->
<section id="tips" class="section">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title" data-aos="fade-up">Safety Tips & Awareness</h2>
      <p class="section-sub" data-aos="fade-up" data-aos-delay="50">Stay informed. Stay safe.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up">
        <article class="tip-card h-100">
          <img class="w-100 tip-img" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=60" alt="">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Self-Defense Basics</h6>
            <p class="mb-0 text-white-50">Simple moves every woman should know for quick response.</p>
          </div>
        </article>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="80">
        <article class="tip-card h-100">
          <img class="w-100 tip-img" src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&w=1200&q=60" alt="">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Know Your Rights</h6>
            <p class="mb-0 text-white-50">Understand legal protections & helplines in your city.</p>
          </div>
        </article>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="160">
        <article class="tip-card h-100">
          <img class="w-100 tip-img" src="https://images.unsplash.com/photo-1516239321670-9145a32a3e96?auto=format&fit=crop&w=1200&q=60" alt="">
          <div class="p-3">
            <h6 class="fw-bold mb-1">Travel Smart</h6>
            <p class="mb-0 text-white-50">Verify rides, share ETA, and keep SOS within easy reach.</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- ========== FAQ (new) ========== -->
<section class="section faq">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title" data-aos="fade-up">Frequently Asked Questions</h2>
      <p class="section-sub" data-aos="fade-up" data-aos-delay="50">Quick answers to common questions about SafeHer.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8" data-aos="fade-up">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
                How does the One-Tap SOS work?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                When SOS is triggered the app shares your live location with pre-selected contacts and sends alerts to partnered emergency services if available.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="faqTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Will the app record audio or video?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                If enabled, when SOS is triggered the app can start background audio/video capture to preserve evidence. Users can enable/disable this in settings.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="faqThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Is my location private?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Location is shared only with the contacts and emergency services you select. We follow privacy-first design and store minimal data.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- ========== VIDEO EXPLAINER ========== -->
<section class="section">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="ratio ratio-16x9 shadow-soft">
          <!-- Dummy YouTube video -->
          <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Women Safety Awareness" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <h3 class="fw-extrabold">See SafeHer in Action</h3>
        <p class="text-white-50">Quick walkthrough of one-tap SOS, live tracking, and auto evidence features.</p>
        <a class="btn btn-sos" href="#"><i class="fa-solid fa-download me-1"></i> Download App</a>
      </div>
    </div>
  </div>
</section>

<!-- ========== PARTNERS (Marquee + Grid) ========== -->
<section class="section">
  <div class="container">
    <h2 class="section-title text-center mb-4" data-aos="fade-up">Trusted By</h2>

    <div class="marquee mb-4" data-aos="zoom-in" aria-hidden="true">
      <div class="marquee-track">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=Police" alt="">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=Rescue+1122" alt="">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=UN+Women" alt="">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=NGO+Partner" alt="">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=Hospital+Network" alt="">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=Police" alt="">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=Rescue+1122" alt="">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=UN+Women" alt="">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=NGO+Partner" alt="">
        <img class="partner" src="https://dummyimage.com/200x60/ffffff/000&text=Hospital+Network" alt="">
      </div>
    </div>

    <div class="row g-3 align-items-center" data-aos="fade-up">
      <div class="col-md-3 text-center"><img class="img-fluid" src="https://dummyimage.com/160x60/fff/000&text=Police+Dept" alt=""></div>
      <div class="col-md-3 text-center"><img class="img-fluid" src="https://dummyimage.com/160x60/fff/000&text=Rescue+1122" alt=""></div>
      <div class="col-md-3 text-center"><img class="img-fluid" src="https://dummyimage.com/160x60/fff/000&text=UN+Women" alt=""></div>
      <div class="col-md-3 text-center"><img class="img-fluid" src="https://dummyimage.com/160x60/fff/000&text=Hospital+Net" alt=""></div>
    </div>
  </div>
</section>

<!-- ========== MAP (Full width container) ========== -->
<section id="map" class="section">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title" data-aos="fade-up">Nearest Help Centers</h2>
      <p class="section-sub" data-aos="fade-up" data-aos-delay="50">Find police stations & hospitals around you.</p>
    </div>
    <div class="map-wrap ratio ratio-16x9" data-aos="zoom-in">
      <!-- Dummy Google Map embed centered on Karachi -->
      <iframe
        src="https://www.google.com/maps?q=Karachi&output=embed"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- ========== CTA & RESOURCES (small) ========== -->
<section class="section pt-0">
  <div class="container">
    <div class="cta text-center shadow-soft" data-aos="fade-up">
      <h3 class="fw-bold mb-2">Your Safety Matters. Take Action Now!</h3>
      <p class="text-white-50 mb-3">Install the app or join as a volunteer to help women around you.</p>
      <div class="d-flex justify-content-center gap-2 mb-3">
        <a class="btn btn-sos" href="#"><i class="fa-solid fa-mobile-screen me-1"></i> Download App</a>
        <a class="btn btn-outline-soft" href="#"><i class="fa-solid fa-hand-holding-heart me-1"></i> Join as Volunteer</a>
      </div>

      <div class="row g-3 mt-3">
        <div class="col-md-4" data-aos="fade-up">
          <div class="feat-card p-3 text-start">
            <h6 class="mb-1">Downloadable Guide</h6>
            <p class="mb-0 text-white-50">Download a quick self-defense & safety checklist (PDF).</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="60">
          <div class="feat-card p-3 text-start">
            <h6 class="mb-1">Emergency Numbers</h6>
            <p class="mb-0 text-white-50">All essential helplines collected by city (PDF).</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="120">
          <div class="feat-card p-3 text-start">
            <h6 class="mb-1">Volunteer Opportunities</h6>
            <p class="mb-0 text-white-50">Sign up for local training & support programs.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== NEWSLETTER (new) ========== -->
<section class="section">
  <div class="container">
    <div class="newsletter" data-aos="fade-up">
      <div>
        <h5 class="mb-1">Stay Updated with Safety Tips</h5>
        <small class="text-white-50">Monthly tips, workshops, and important alerts — straight to your inbox.</small>
      </div>

      <form class="d-flex align-items-center" id="newsletterForm" onsubmit="return handleSubscribe(event)">
        <input type="email" id="newsletterEmail" class="form-control me-2" placeholder="Your email address" required aria-label="Email address">
        <button class="btn btn-sos" type="submit">Subscribe</button>
      </form>
    </div>
  </div>
</section>

@include('FrontendLayout.footer')