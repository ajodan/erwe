@include('layouts.head.head')
<body>
  <!-- ======= Header/Navbar ======= -->
  
 @include('layouts.menu.menu')
  <!-- ======= Intro Section ======= -->
 
  <div class="intro intro-carousel swiper position-relative">
    
    <div class="swiper-wrapper">
      @foreach($artikels as $artikel)
    {{-- @if(empty($artikel->gambar))
      <img alt="image" src="{{asset('assets/stisla/img/avatar/avatar-1.png')}}" class="rounded-circle" width="35" data-toggle="tooltip" title="">
    @else --}}
    <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{ asset('UploadedFile/gambarArtikel/'.$artikel->gambar) }})">
    {{-- @endif --}}
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">{{ $artikel->created_at }} | Kategori Artikel {{ $artikel->nama_kategori }}</p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">{{ $artikel->judul }}</span>
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{ '/detailartikel/'.$artikel->slug }}"><span class="price-a">Baca Artikel</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  
  </div><!-- End Intro Section -->
 
  <div class="swiper-pagination"></div>
  <main id="main">
<!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Berita Terkini</h2>
              </div>
              <div class="title-link">
                {{-- <a href="{{ route('berita') }}">Semua Berita
                  <span class="bi bi-chevron-right"></span>
                </a> --}}
              </div>
            </div>
          </div>
        </div>
      

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
            @foreach($artikels as $artikel)
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('UploadedFile/gambarArtikel/'.$artikel->gambar) }}" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="{{ '/detailartikel/'.$artikel->slug }}">{{ $artikel->judul }}
                      </h2>
                    </div>
                    <div class="card-body-a">
                      {{-- <div class="price-box d-flex">
                        <span class="price-a">rent | $ 12.000</span>
                      </div> --}}
                      <a href="{{ '/detailartikel/'.$artikel->slug }}" class="link-a">{{ $artikel->nama_kategori }}
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Kategori :</h4>
                          <span>{{ $artikel->nama_kategori }}</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Dibuat Oleh:</h4>
                          <span>{{ $artikel->created_by }}</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Tanggal:</h4>
                          <span>{{ $artikel->created_at }}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
            @endforeach
            
            </div><!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->
    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Galeri</h2>
              </div>
              <div class="title-link">
                {{-- <a href="{{ route('galeri')  }}">Semua Galeri
                  <span class="bi bi-chevron-right"></span>
                </a> --}}
              </div>
            </div>
          </div>
        </div>
        
        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">
            
            @foreach($galeris as $galeri)
            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{ asset('UploadedFile/gambarGaleri/'.$galeri->gambar) }}" alt="" class="img-b img-fluid">
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
            </div><!-- End carousel item -->
            @endforeach
            
          </div>
        </div>
        
        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->
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