<nav class="navbar navbar-expand-lg" style="
  background: linear-gradient(90deg, #ff80ab, #ff4081, #f50057);
  box-shadow: 0 4px 12px rgba(255, 64, 129, 0.3);
">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#" style="
      color: white;
      font-family: 'Poppins', sans-serif;
      font-size: 1.5rem;
      letter-spacing: 0.5px;
    ">
      🌸 SIAKAD
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="filter: brightness(0) invert(1);"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto" style="font-family: 'Poppins', sans-serif;">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/" style="
            color: white;
            padding: 10px 18px;
            border-radius: 20px;
            transition: all 0.3s ease;
          ">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('user*') ? 'active' : '' }}" href="{{ route('user.index') }}" style="
            color: white;
            padding: 10px 18px;
            border-radius: 20px;
            transition: all 0.3s ease;
          ">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('kelas*') ? 'active' : '' }}" href="#" style="
            color: white;
            padding: 10px 18px;
            border-radius: 20px;
            transition: all 0.3s ease;
          ">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dosen*') ? 'active' : '' }}" href="#" style="
            color: white;
            padding: 10px 18px;
            border-radius: 20px;
            transition: all 0.3s ease;
          ">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="
            color: #ffe082;
            font-weight: 600;
            padding: 10px 18px;
            border-radius: 20px;
            transition: all 0.3s ease;
          ">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .nav-link:hover,
  .nav-link.active {
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff !important;
  }

  .navbar {
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
  }
</style>
