@include('layouts.head.head')

<body>
  @include('layouts.menu.menu')
  <main id="main">
    <main id="main">

      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">Galeri</h1>
                <span class="color-text-a">Kegiatan Warga</span>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{ route('/') }}">Beranda</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Semua Galeri
                  </li>
                </ol> 
              </nav>
            </div>
          </div>
        </div>
      </section><!-- End Intro Single-->
  
      <!-- =======  Blog Grid ======= -->
      <section class="news-grid grid">
        <div class="container">
          @foreach($galeris as $galeri)
          <div class="row">
            
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{ asset('UploadedFile/gambarGaleri/'.$galeri->gambar) }}" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">{{ $galeri->nama_kategori }}</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">{{ $galeri->judul }}
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">{{ $galeri->created_at }}</span>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
             @endforeach
          </div>
          <div class="row">
            <div class="col-sm-12">
              <nav class="pagination-a">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <span class="bi bi-chevron-left"></span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item next">
                    <a class="page-link" href="#">
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section><!-- End Blog Grid-->
  
    </main><!-- End #main -->
  @include('layouts.footer.footer-atas')
  @include('layouts.footer.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>