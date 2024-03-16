<nav class="navbar navbar-expand-lg sticky-top bg-primary-subtle">
  <div class="container">
    <a class="navbar-brand" href="#">
      <span class="fw-bold">Daftar Magang</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASE_URL; ?>admin">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kelola Data
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= BASE_URL; ?>admin/job">Kelola Job</a></li>
            <li><a class="dropdown-item" href="<?= BASE_URL; ?>admin/pendaftar">Kelola Pendaftar</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL; ?>AuthController/logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main style="height: 100vh;">
  <div class="container mt-3">