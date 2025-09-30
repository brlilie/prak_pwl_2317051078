<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('user*') ? 'active' : '' }}" href="{{ route('user.index') }}">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('kelas*') ? 'active' : '' }}" href="#">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dosen*') ? 'active' : '' }}" href="#">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
