@extends('Admin.adminLayout')
@section('centerContent')

<style>
  /* Dark Sidebar */
  .sidenav {
     background: linear-gradient(90deg,var(--accent),var(--accent-2));
    color: #fff;
  }
  .sidenav .nav-link,
  .sidenav .nav-item a {
    color: #ccc !important;
    font-weight: 500;
  }
  .sidenav .nav-link.active,
  .sidenav .nav-link:hover {
    color: #fff !important;
    background: rgba(255,255,255,0.1);
    border-radius: 8px;
  }
  .sidenav .collapse .nav-link {
    padding-left: 25px;
  }

  /* Navbar Dark */
  .navbar-main {
    background: #12121f !important;
    border-radius: 12px;
    margin: 10px 15px;
    padding: 12px;
  }
  .navbar-main .nav-link,
  .navbar-main .breadcrumb .text-sm,
  .navbar-main .font-weight-bolder {
    color: #fff !important;
  }
  .navbar-main input.form-control {
    background: #2a2a3b;
    color: #fff;
    border: none;
    border-radius: 8px;
  }
  .navbar-main input.form-control::placeholder {
    color: #bbb;
  }
  .navbar-main .input-group-text {
    background: #2a2a3b;
    border: none;
    color: #fff;
  }

  /* Form wrapper */
  .form-wrapper {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(90deg,#0f0f1f,#2c2c54);
  }

  /* Card */
  .form-card {
    background: #fff;
    padding: 35px 40px;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    width: 100%;
    max-width: 480px;
    animation: fadeIn 0.6s ease-in-out;
  }
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .form-card h2 {
    text-align: center;
    margin-bottom: 25px;
    font-weight: 700;
    color: #2c3e50;
  }

  label {
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 6px;
    display: block;
    color: #34495e;
  }

  .form-control {
    width: 100%;
    padding: 11px 13px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-bottom: 18px;
    font-size: 14px;
    transition: all 0.3s ease;
  }
  .form-control:focus {
    border-color: #66a6ff;
    box-shadow: 0 0 6px rgba(102,166,255,0.4);
    outline: none;
  }
  textarea.form-control {
    min-height: 90px;
    resize: vertical;
  }

  input[type="file"] {
    padding: 7px;
    border: 1px dashed #bbb;
    background: #f8f9fa;
  }
  input[type="file"]:hover {
    border-color: #66a6ff;
  }

  .btn-submit {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #66a6ff, #2575fc);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .btn-submit:hover {
    transform: translateY(-2px);
    background: linear-gradient(135deg, #2575fc, #66a6ff);
    box-shadow: 0 6px 16px rgba(37,117,252,0.35);
  }
</style>

<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
          <input type="text" class="form-control" placeholder="Search...">
        </div>
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link nav-link text-white font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i> Log Out
            </button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<div class="form-wrapper">
  <div class="form-card">
    <h2>➕ Add Safety Tip</h2>
    <form action="{{ url('/safetytip/add') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Enter tip title" required>
      <label for="description">Description</label>
      <textarea name="description" id="description" class="form-control" placeholder="Write safety tip..." required></textarea>
      <label for="image">Upload Image</label>
      <input type="file" name="image" id="image" class="form-control">
      <button type="submit" class="btn-submit">Add Tip</button>
    </form>
  </div>
</div>

@endsection
