<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ route('/') }}">BLOKC<span class="color-b">TAMAN ALAMANDA</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('/') }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('profil') }}">Profil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Struktur Organisasi</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="{{ route('strukturrw') }}">RW 13</a>
              <a class="dropdown-item " href="{{ route('strukturrt1') }}">RT 01</a>
              <a class="dropdown-item " href="{{ route('strukturrt2') }}">RT 02</a>
              <a class="dropdown-item " href="{{ route('strukturrt3') }}">RT 03</a>
              <a class="dropdown-item " href="{{ route('strukturrt4') }}">RT 04</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('berita') }}">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('galeri') }}">Galeri</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link " href="blog-grid.html">Blog</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link " href="{{ route('kontak') }}">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('login') }}">LOGIN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><!-- End Header/Navbar -->