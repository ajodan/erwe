@include('layouts.head.head')
<style>
  body {
    margin: 20px;
    text-align: center;
  }

  h1 {
    color: green;
  }

  img {
    float: left;
    margin: 5px;
  }

  p {
    text-align: justify;
    font-size: 15px;
  }
</style>
  
<body>
  <!-- ======= Header/Navbar ======= -->
 @include('layouts.menu.menu')
  <!-- ======= Intro Section ======= -->
  <main id="main">
    <!-- ======= Intro Single ======= -->
   
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{ $artikels->judul }}</h1>
              <span class="color-text-a">{{ $artikels->created_by }}, {{ $artikels->created_at }}</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Detail Artikel
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="news-img-box">
              <img src="assets/img/slide-3.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-10 offset-md-0 col-lg-9 offset-lg-0">
            <img src="{{ asset('UploadedFile/gambarArtikel/'.$artikels->gambar) }}" class="css-class" height="800" width="965" alt="{{ $artikels->judul }}">
          <br><br> 
            <div class="post-content color-text-a">
              <div style="text-align:justify;">
              <p class="">
               {{ $artikels->isi_singkat }}
              </p>
              </div>
              <div style="text-align:justify;">
              <p>
               {{ $artikels->deskripsi }}
              </p>
              </div>
            </div>

            <div class="post-footer">
              <div class="post-share">
                <span>Share: </span>
                <ul class="list-inline socials">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
         
          <div class="col-md-12 col-lg-3">
                @foreach($artikellist as $list)
                <div style="text-align:top;">
                  <a href="{{ '/detailartikel/'.$list->slug }}"><img src="{{ asset('UploadedFile/gambarArtikel/'.$list->gambar) }}" height="70" width="80" alt="{{ $list->judul }}">
                    <p>{{ $list->judul }}<a></p>
                </div>
                
          <br><br>
                @endforeach
          </div>
        
        </div>
      </div>
    </section><!-- End Blog Single-->
 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer.footer-atas')
  @include('layouts.footer.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
 
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>