<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Women Safety Admin</title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <!-- Argon CSS -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

  <style>
    /* Sidebar Custom */
    .sidenav {
      background: #fff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .nav-link {
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: #344767;
      transition: all 0.3s ease;
      padding: 10px 15px;
      border-radius: 8px;
    }

    .nav-link:hover {
      background: #f5f6fa;
      color: #111;
      transform: translateX(4px);
    }

    .nav-link .arrow {
      font-size: 12px;
      transition: transform 0.3s ease;
    }

    .nav-link .arrow.rotate {
      transform: rotate(90deg);
    }

    .submenu {
      display: none;
      padding-left: 20px;
      margin-top: 5px;
    }

    .submenu a {
      display: block;
      padding: 8px 15px;
      font-size: 14px;
      border-radius: 6px;
      color: #555;
      transition: all 0.2s ease;
    }

    .submenu a:hover {
      background: #e9ecef;
      color: #000;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">


  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
    id="sidenav-main">

    <!-- Logo -->
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href="#">
        <img src="../assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100"
          alt="main_logo">
        <span class="ms-1 font-weight-bold">Women Safety</span>
      </a>
    </div>

    <hr class="horizontal dark mt-0">

    <!-- Menu -->
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <!-- Safety Tips Dropdown -->
        <li class="nav-item">
          <a class="nav-link" id="safetyToggle" href="#">
            <span><i class="ni ni-credit-card text-dark me-2"></i> Safety Tips</span>
            <span class="arrow">▶</span>
          </a>
          <ul class="submenu list-unstyled">
            <li><a href="{{ url('/safetytip') }}">➕ Add Safety Tip</a></li>
            <li><a href="#">👀 View Safety Tips</a></li>
          </ul>
        </li>

        <!-- Police Panel Dropdown -->
        <li class="nav-item">
          <a class="nav-link" id="policeToggle" href="#">
            <span><i class="ni ni-badge text-primary me-2"></i> Police Panel</span>
            <span class="arrow">▶</span>
          </a>
          <ul class="submenu list-unstyled">
            <li><a href="#">👮 Manage Police</a></li>
            <li><a href="#">📑 Police Reports</a></li>
          </ul>
        </li>

        <!-- Friends Panel Dropdown -->
        <li class="nav-item">
          <a class="nav-link" id="friendsToggle" href="#">
            <span><i class="ni ni-circle-08 text-warning me-2"></i> Friends Panel</span>
            <span class="arrow">▶</span>
          </a>
          <ul class="submenu list-unstyled">
            <li><a href="#">👥 View Friends</a></li>
            <li><a href="#">🚨 Friend Alerts</a></li>
          </ul>
        </li>

        <!-- Account Section -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="ni ni-single-02 text-dark me-2"></i>
            Profile
          </a>
        </li>

        <!-- Logout -->
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link btn btn-link text-start w-100">
              <i class="ni ni-button-power text-danger me-2"></i>
              Log Out
            </button>
          </form>
        </li>

      </ul>
    </div>
  </aside>

  <!-- JS for submenu toggle -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      function setupToggle(toggleId) {
        const toggle = document.getElementById(toggleId);
        if (!toggle) return;
        const submenu = toggle.nextElementSibling;
        const arrow = toggle.querySelector(".arrow");

        toggle.addEventListener("click", function (e) {
          e.preventDefault();
          if (submenu.style.display === "block") {
            submenu.style.display = "none";
            arrow.classList.remove("rotate");
          } else {
            submenu.style.display = "block";
            arrow.classList.add("rotate");
          }
        });
      }

      setupToggle("safetyToggle");
      setupToggle("policeToggle");
      setupToggle("friendsToggle");
    });
  </script>
</body>
</html>
