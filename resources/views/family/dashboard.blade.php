@extends('Admin.adminLayout')

@section('centerContent')
<div class="friends-panel">

    <style>
    /* ---------- Friends Panel Styles ---------- */
    .friends-panel {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f6f9;
        color: #333;
        padding: 20px;
    }

    /* Page Head */
    .friends-panel .page-head h2 {
        font-size: 30px;
        background: linear-gradient(90deg, #0d6efd, #6610f2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .friends-panel .page-head p {
        font-size: 14px;
        color: #6c757d;
    }

    /* Stats */
    .friends-panel .stat {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        padding: 20px 15px;
        text-align: center;
        transition: 0.3s;
    }
    .friends-panel .stat:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    /* Action Cards */
    .friends-panel .action-card {
        background: #fff;
        border: 1px solid #dee2e6;
        border-radius: 12px;
        padding: 20px 15px;
        text-align: center;
        transition: 0.3s;
        cursor: pointer;
    }
    .friends-panel .action-card:hover {
        background: linear-gradient(135deg, #0d6efd, #6610f2, #198754);
        color: #fff;
    }

    /* Friends List */
    .friends-panel .friend-row {
        padding: 10px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        transition: 0.3s;
    }
    .friends-panel .friend-row:hover {
        background: rgba(13,110,253,0.1);
        transform: translateY(-2px);
    }
    .friends-panel .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 2px solid #0d6efd;
    }

    /* Timeline & Alerts */
    .friends-panel .timeline-card,
    .friends-panel .alert-card {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    </style>

    <!-- Page Head -->
    <div class="page-head d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">Hello, Umama</h2>
            <p class="mb-0">Friends overview & recent activity</p>
        </div>
        <div>
            <button class="btn btn-primary btn-sm">Add Friend</button>
            <button class="btn btn-outline-secondary btn-sm">Import</button>
        </div>
    </div>

    <!-- Stats -->
    <div class="d-flex gap-3 mb-4 flex-wrap">
        <div class="stat flex-fill"><i class="fa-solid fa-users"></i><br>Total Friends<br><small>125</small></div>
        <div class="stat flex-fill"><i class="fa-solid fa-circle-check"></i><br>Online<br><small>8</small></div>
        <div class="stat flex-fill"><i class="fa-solid fa-users-gear"></i><br>Groups<br><small>12</small></div>
        <div class="stat flex-fill"><i class="fa-solid fa-message"></i><br>Unread<br><small>5</small></div>
    </div>

    <div class="d-flex flex-lg-row flex-column gap-3">
        <!-- Left: Actions + Friends -->
        <div class="flex-fill">
            <div class="d-grid gap-3 mb-3" style="grid-template-columns:repeat(auto-fit,minmax(150px,1fr))">
                <div class="action-card"><i class="fa-solid fa-paper-plane"></i><br>Send Message</div>
                <div class="action-card"><i class="fa-solid fa-users"></i><br>Create Group</div>
                <div class="action-card"><i class="fa-solid fa-bell"></i><br>Broadcast Alert</div>
                <div class="action-card"><i class="fa-solid fa-location-crosshairs"></i><br>Share Location</div>
            </div>

            <!-- Friends List -->
            <div>
                <div class="d-flex justify-content-between mb-2">
                    <strong>All Friends</strong><small>1-8 of 125</small>
                </div>

                <div class="friend-row mb-2">
                    <img class="avatar" src="https://i.pravatar.cc/80?img=44" alt="Ayesha">
                    <div class="ms-2 flex-fill">
                        <div class="d-flex justify-content-between">
                            <strong>Ayesha Khan</strong><span class="badge bg-success">Online</span>
                        </div>
                        <small class="text-muted">Last active: 2m ago</small>
                    </div>
                </div>

                <div class="friend-row mb-2">
                    <img class="avatar" src="https://i.pravatar.cc/80?img=65" alt="Sana">
                    <div class="ms-2 flex-fill">
                        <div class="d-flex justify-content-between">
                            <strong>Sana Ali</strong><span class="badge bg-secondary">Offline</span>
                        </div>
                        <small class="text-muted">Last active: 5h ago</small>
                    </div>
                </div>

                <div class="mt-3">
                    <button class="btn btn-outline-primary btn-sm">View All</button>
                    <button class="btn btn-outline-secondary btn-sm">Export</button>
                </div>
            </div>
        </div>

        <!-- Right: Timeline + Alerts -->
        <aside style="min-width:280px;">
            <div class="timeline-card mb-3">
                <strong>Recent Activity</strong>
                <ul class="list-unstyled mt-2 mb-0">
                    <li><strong>Sara</strong> accepted request <small class="d-block text-muted">2h ago</small></li>
                    <li><strong>Ayesha</strong> shared location <small class="d-block text-muted">5h ago</small></li>
                    <li><strong>Fatima</strong> sent a message <span class="badge bg-primary">Unread</span> <small class="d-block text-muted">1d ago</small></li>
                </ul>
            </div>

            <div class="alert-card">
                <strong class="text-danger">Zara needs help</strong>
                <div class="small text-muted mb-2">Last seen: Lahore</div>
                <button class="btn btn-danger btn-sm">Respond</button>
                <button class="btn btn-outline-secondary btn-sm">Dismiss</button>
            </div>
        </aside>
    </div>
</div>
@endsection
