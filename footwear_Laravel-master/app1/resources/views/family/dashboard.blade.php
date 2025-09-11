@extends('Admin.adminLayout')
@section('centerContent')
<style>
  /* ---------- General ---------- */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f6f9;
    color: #333;
    transition: background 0.3s, color 0.3s;
}

.dark-mode {
    background-color: #121212;
    color: #f0f0f0;
}

/* ---------- Page Head ---------- */
.page-head h2 {
    font-size: 30px;
    background: linear-gradient(90deg, #0d6efd, #6610f2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.page-head p {
    font-size: 14px;
    color: #6c757d;
}

.page-head .btn {
    padding: 6px 14px;
    font-size: 14px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.page-head .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(13,110,253,0.3);
}

/* ---------- Stats Row ---------- */
.stats-row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.stat {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    padding: 20px 15px;
    text-align: center;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    cursor: pointer;
}

.stat:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
}

.stat .icon i {
    color: #0d6efd;
    transition: color 0.3s ease;
}

.stat:hover .icon i {
    color: #6610f2;
}

/* ---------- Action Cards ---------- */
.actions-grid .action-card {
    background: #fff;
    border: 1px solid #dee2e6;
    border-radius: 12px;
    padding: 20px 15px;
    text-align: center;
    transition: transform 0.4s ease, box-shadow 0.4s ease, background 0.4s ease;
    cursor: pointer;
}

.actions-grid .action-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    background: linear-gradient(135deg, #0d6efd, #6610f2, #198754);
    color: #fff;
}

.actions-grid .action-card i {
    color: #0d6efd;
    transition: transform 0.3s ease, color 0.3s ease;
}

.actions-grid .action-card:hover i {
    transform: rotate(15deg) scale(1.2);
    color: #fff;
}

.dark-mode .action-card {
    background-color: #1e1e1e;
    border-color: #333;
}

/* ---------- Friends List ---------- */
.friends-list .friend-row {
    padding: 10px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
    cursor: pointer;
}

.friends-list .friend-row:hover {
    background: rgba(13,110,253,0.1);
    transform: translateY(-2px);
}

.friends-list .avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #0d6efd;
    transition: transform 0.3s ease, border-color 0.3s ease;
}

.friends-list .friend-row:hover .avatar {
    transform: scale(1.1);
    border-color: #6610f2;
}

/* ---------- Timeline & Alerts ---------- */
.timeline-card, .alert-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.timeline-card:hover, .alert-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}

.timeline-card .dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 10px;
    background: #0d6efd;
    transition: transform 0.3s ease, background 0.3s ease;
}

.timeline-card li:hover .dot {
    transform: scale(1.4);
    background: #6610f2;
}

/* ---------- Buttons ---------- */
.btn {
    border-radius: 8px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}

/* ---------- Responsive ---------- */
@media (max-width: 991px) {
    .d-flex.flex-lg-row {
        flex-direction: column !important;
    }
    aside {
        min-width: 100% !important;
    }
}

/* ---------- Dark Mode ---------- */
.dark-mode .btn-outline-secondary {
    color: #f0f0f0;
    border-color: #555;
}

.dark-mode .btn-outline-secondary:hover {
    background-color: #333;
    color: #fff;
}

/* ---------- WOW / AOS Effects ---------- */
[data-aos] {
    opacity: 0;
    transition-property: transform, opacity;
}

[data-aos].aos-animate {
    opacity: 1;
}

/* ---------- Gradient badges ---------- */
.badge.bg-success {
    background: linear-gradient(45deg, #198754, #0dcaf0);
    color: #fff;
}

.badge.bg-primary {
    background: linear-gradient(45deg, #0d6efd, #6610f2);
    color: #fff;
}

.badge.bg-secondary {
    background: linear-gradient(45deg, #6c757d, #adb5bd);
    color: #fff;
}

</style>
<main class="main">
    <!-- Page Head -->
    <div class="page-head d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
        <div>
            <h2 class="mb-0 fw-bold">Hello, Umama</h2>
            <p class="mb-0 text-muted">Friends overview & recent activity</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-primary">Add Friend</button>
            <button class="btn btn-outline-secondary">Import</button>
        </div>
    </div>

    <!-- Stats Row -->
    <section class="stats-row d-flex flex-wrap gap-3 mb-4" aria-label="friends stats">
        <div class="stat p-3 flex-fill text-center" data-aos="fade-up">
            <div class="icon mb-2"><i class="fa-solid fa-users fa-2x"></i></div>
            <div class="meta">Total Friends</div>
            <small>125</small>
        </div>
        <div class="stat p-3 flex-fill text-center" data-aos="fade-up" data-aos-delay="80">
            <div class="icon mb-2"><i class="fa-solid fa-circle-check fa-2x"></i></div>
            <div class="meta">Online</div>
            <small>8</small>
        </div>
        <div class="stat p-3 flex-fill text-center" data-aos="fade-up" data-aos-delay="160">
            <div class="icon mb-2"><i class="fa-solid fa-users-gear fa-2x"></i></div>
            <div class="meta">Groups</div>
            <small>12</small>
        </div>
        <div class="stat p-3 flex-fill text-center" data-aos="fade-up" data-aos-delay="240">
            <div class="icon mb-2"><i class="fa-solid fa-message fa-2x"></i></div>
            <div class="meta">Unread Messages</div>
            <small>5</small>
        </div>
    </section>

    <!-- Quick actions & friends / Timeline -->
    <div class="d-flex flex-column flex-lg-row gap-3 mb-4">
        <!-- Left Column: Actions + Friends -->
        <div class="flex-fill">
            <!-- Actions Grid -->
            <div class="actions-grid d-grid gap-3 mb-3" style="grid-template-columns:repeat(auto-fit,minmax(150px,1fr))">
                <div class="action-card p-3 text-center border rounded" data-aos="fade-up">
                    <i class="fa-solid fa-paper-plane fa-2x mb-2"></i>
                    <div class="fw-bold">Send Message</div>
                    <small class="text-muted">Quickly message a friend</small>
                </div>
                <div class="action-card p-3 text-center border rounded" data-aos="fade-up" data-aos-delay="60">
                    <i class="fa-solid fa-users fa-2x mb-2"></i>
                    <div class="fw-bold">Create Group</div>
                    <small class="text-muted">Add friends to group</small>
                </div>
                <div class="action-card p-3 text-center border rounded" data-aos="fade-up" data-aos-delay="120">
                    <i class="fa-solid fa-bell fa-2x mb-2"></i>
                    <div class="fw-bold">Broadcast Alert</div>
                    <small class="text-muted">Send safety alert to many</small>
                </div>
                <div class="action-card p-3 text-center border rounded" data-aos="fade-up" data-aos-delay="180">
                    <i class="fa-solid fa-location-crosshairs fa-2x mb-2"></i>
                    <div class="fw-bold">Share Location</div>
                    <small class="text-muted">Share your live location</small>
                </div>
            </div>

            <!-- Friends List -->
            <div class="friends-list" data-aos="fade-up">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <strong>All Friends</strong>
                    <small class="text-muted">Showing 1-8 of 125</small>
                </div>

                <!-- Friend Rows -->
                <div class="friend-row d-flex align-items-center mb-2 gap-2">
                    <img class="avatar rounded-circle" src="https://i.pravatar.cc/80?img=44" alt="Ayesha">
                    <div class="flex-fill">
                        <div class="d-flex justify-content-between">
                            <div><strong>Ayesha Khan</strong><div class="text-muted small">Karachi</div></div>
                            <span class="badge bg-success">Online</span>
                        </div>
                        <div class="text-muted small mt-1">Last active: 2m ago</div>
                    </div>
                </div>

                <div class="friend-row d-flex align-items-center mb-2 gap-2">
                    <img class="avatar rounded-circle" src="https://i.pravatar.cc/80?img=65" alt="Sana">
                    <div class="flex-fill">
                        <div class="d-flex justify-content-between">
                            <div><strong>Sana Ali</strong><div class="text-muted small">Lahore</div></div>
                            <span class="badge bg-secondary text-dark">Offline</span>
                        </div>
                        <div class="text-muted small mt-1">Last active: 5h ago</div>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-outline-primary btn-sm">View All</button>
                    <button class="btn btn-outline-secondary btn-sm">Export</button>
                </div>
            </div>
        </div>

        <!-- Right Column: Timeline & Alerts -->
        <aside class="flex-shrink-0" style="min-width:280px;">
            <!-- Timeline -->
            <div class="timeline-card border rounded p-3 mb-3" data-aos="fade-left">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <strong>Recent Activity</strong>
                    <small class="text-muted">Live feed</small>
                </div>
                <ul class="timeline list-unstyled ps-0 mb-0">
                    <li class="mb-2"><div class="dot bg-primary me-2"></div><div class="content d-inline"> <strong>Sara</strong> accepted your friend request <small class="text-muted d-block">2 hours ago</small></div></li>
                    <li class="mb-2"><div class="dot bg-primary me-2"></div><div class="content d-inline"> <strong>Ayesha</strong> shared live location <small class="text-muted d-block">5 hours ago</small></div></li>
                    <li class="mb-2"><div class="dot bg-primary me-2"></div><div class="content d-inline"> <strong>Fatima</strong> sent a message <span class="badge bg-primary ms-2">Unread</span><small class="text-muted d-block">1 day ago</small></div></li>
                </ul>
            </div>

            <!-- Alerts -->
            <div class="alert-card border rounded p-3" data-aos="fade-left">
                <div class="d-flex justify-content-between align-items-start gap-2">
                    <div>
                        <strong class="text-danger">Zara needs help</strong>
                        <div class="text-muted small mt-1">Last known location: Gulberg, Lahore</div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-danger btn-sm mb-1">Respond</button>
                        <button class="btn btn-outline-secondary btn-sm">Dismiss</button>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</main>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({duration:600,easing:'ease-in-out',once:true});

// Dark mode toggle example
const modeToggle = document.getElementById('modeToggle');
if(modeToggle){
    modeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
}
</script>

<!-- Logout Form -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <x-responsive-nav-link :href="route('logout')"
        onclick="event.preventDefault(); this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>

@endsection
