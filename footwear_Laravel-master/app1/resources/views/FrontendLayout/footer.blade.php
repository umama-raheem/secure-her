
<!-- ========== FOOTER ========== -->
<footer class="pt-5 mt-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <h4 class="fw-bold mb-2">SafeHer<span class="brand-dot"></span></h4>
        <p class="text-white-50">Technology, awareness, and community — working together to keep women safe, everywhere.</p>
        <div class="d-flex gap-2 mt-2">
          <a class="foot-link" href="#" aria-label="Facebook"><i class="fab fa-facebook fa-lg me-2"></i></a>
          <a class="foot-link" href="#" aria-label="Twitter"><i class="fab fa-twitter fa-lg me-2"></i></a>
          <a class="foot-link" href="#" aria-label="Instagram"><i class="fab fa-instagram fa-lg me-2"></i></a>
          <a class="foot-link" href="#" aria-label="LinkedIn"><i class="fab fa-linkedin fa-lg me-2"></i></a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <h6 class="fw-bold">Quick Links</h6>
        <ul class="list-unstyled">
          <li><a class="foot-link" href="#features">Features</a></li>
          <li><a class="foot-link" href="#impact">Impact</a></li>
          <li><a class="foot-link" href="#tips">Tips</a></li>
          <li><a class="foot-link" href="#map">Map</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-3">
        <h6 class="fw-bold">Emergency Helplines</h6>
        <ul class="list-unstyled text-white-50">
          <li>Police: 15</li>
          <li>Rescue: 1122</li>
          <li>Global: 911</li>
          <li>Women Helpline: 1099</li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h6 class="fw-bold">Gallery</h6>
        <div class="d-flex flex-wrap gap-2">
          <img class="thumb" src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?auto=format&fit=crop&w=300&q=50" alt="">
          <img class="thumb" src="https://images.unsplash.com/photo-1554774853-b415df9eeb92?auto=format&fit=crop&w=300&q=50" alt="">
          <img class="thumb" src="https://images.unsplash.com/photo-1532634747-59cdd87a6692?auto=format&fit=crop&w=300&q=50" alt="">
          <img class="thumb" src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&w=300&q=50" alt="">
          <img class="thumb" src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=300&q=50" alt="">
          <img class="thumb" src="https://images.unsplash.com/photo-1516239321670-9145a32a3e96?auto=format&fit=crop&w=300&q=50" alt="">
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between align-items-center py-3 mt-4 copyright">
      <small>© 2025 SafeHer. All rights reserved.</small>
      <small>Designed with ❤️ by Umama</small>
    </div>
  </div>
</footer>

<!-- ===== Scripts ===== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  // Init AOS
  AOS.init({ duration: 700, once: true });

  // Animated counters (start when visible)
  const counters = document.querySelectorAll('.counter');
  const io = new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
      if(!entry.isIntersecting) return;
      const el = entry.target;
      const target = +el.dataset.target;
      let current = 0;
      const step = Math.max(1, Math.round(target/120));
      const tick = () => {
        current += step;
        if(current >= target){ el.textContent = target.toLocaleString(); return; }
        el.textContent = current.toLocaleString();
        requestAnimationFrame(tick);
      };
      tick();
      io.unobserve(el);
    });
  }, {threshold:.6});
  counters.forEach(c=>io.observe(c));

  // Quick actions (dummy handlers)
  function handleQuick(action){
    if(action === 'call'){
      alert('Dialing local police (dummy) — replace with actual tel link when integrated.');
    } else if(action === 'sos'){
      alert('SOS sent (dummy). For production: trigger location + alerts to server/contacts.');
    } else if(action === 'share'){
      alert('Share location feature (dummy). Implement Web Share / SMS integration in app.');
    }
  }

  // Newsletter handler (dummy)
  function handleSubscribe(e){
    e.preventDefault();
    const email = document.getElementById('newsletterEmail').value.trim();
    if(!email) return alert('Please enter a valid email.');
    // In real app: send to backend. For now, show friendly message.
    alert('Thanks — you are subscribed! (dummy).');
    e.target.reset();
    return false;
  }

  // THEME: Dark / Light toggle (persists in localStorage)
  const body = document.body;
  const themeToggle = document.getElementById('themeToggle');
  const themeIcon = document.getElementById('themeIcon');

  // init from localStorage
  const savedTheme = localStorage.getItem('safeher_theme');
  if(savedTheme === 'light'){
    body.classList.add('light-mode');
    themeIcon.className = 'fa-solid fa-moon';
    themeToggle.setAttribute('aria-pressed','true');
  } else {
    // default dark
    body.classList.remove('light-mode');
    themeIcon.className = 'fa-solid fa-sun';
    themeToggle.setAttribute('aria-pressed','false');
  }

  themeToggle.addEventListener('click', ()=>{
    const isLight = body.classList.toggle('light-mode');
    if(isLight){
      themeIcon.className = 'fa-solid fa-moon';
      localStorage.setItem('safeher_theme','light');
      themeToggle.setAttribute('aria-pressed','true');
    } else {
      themeIcon.className = 'fa-solid fa-sun';
      localStorage.removeItem('safeher_theme');
      themeToggle.setAttribute('aria-pressed','false');
    }
    // re-init AOS to ensure animations adapt on theme change
    AOS.refresh();
  });

  // Optional: pause / play video on tab visibility change (polish)
  (function(){
    const vid = document.querySelector('.hero video');
    if(!vid) return;
    document.addEventListener('visibilitychange', ()=>{
      if(document.hidden) vid.pause();
      else vid.play();
    });
  })();
</script>
</body>
</html>