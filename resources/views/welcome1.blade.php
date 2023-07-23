<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Website Title -->
    <title>SIRuTe RW13 Taman Alamanda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('assets/wellcome/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('assets/wellcome/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/stisla/css/components.css')}}" rel="stylesheet">
     <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('node_modules/chocolat/dist/css/chocolat.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('node_modules/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css')}}">

	<!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/stisla/img/logo/logo-rw13.png')}}">
</head>

<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    @include('layouts.menu.menu')
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Selamat Datang</h1><h1> di Website Blok C Taman Alamanda</h1>
                            <p class="p-large">
                               "Desa Karangsatria, Kecamatan Tambun Utara, Kabupaten Bekasi, Jawa Barat" 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('assets/wellcome/images/hero-img.png')}}" alt="alternative" style="margin-bottom:23%;">
                        </div>
                    </div>
                </div>
                <div class="section-body">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card card-danger">
                          <div class="card-header">
                            <h5>Pengurus RW dan RT</h5>
                            {{-- <div class="card-header-action">
                              <a href="#" class="btn btn-danger btn-icon icon-right">Semua <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                          </div>
                          <div class="card-body">
                            <div class="owl-carousel owl-theme" id="users-carousel">
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/3.jpg') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Nurohi</div>
                                    <div class="text-job text-muted">Ketua RW</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/avatar-2.png') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">H. Supriyono</div>
                                    <div class="text-job text-muted">Wakil Ketua</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/1.jpg') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Saepudin, M.Pd.</div>
                                    <div class="text-job text-muted">Penasehat</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/2.png') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Mayor Daya Bakir</div>
                                    <div class="text-job text-muted">Penasehat</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/avatar-5.png') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Muhanto</div>
                                    <div class="text-job text-muted">Sekretaris</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/8.jpg') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Subur</div>
                                    <div class="text-job text-muted">Bendahara</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/9.jpg') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Supatmo, SH</div>
                                    <div class="text-job text-muted">Bidang Olahraga, Pemuda dan Seni</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/avatar-5.png') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Karolus Kou</div>
                                    <div class="text-job text-muted">Bidang Keamanan dan Lingkungan</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/avatar-5.png') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Ahmad Pandis</div>
                                    <div class="text-job text-muted">Bidang Hubungan Masyarakat</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/10.jpg') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Warkim</div>
                                    <div class="text-job text-muted">Bidang Teknologi Informasi</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/4.jpg') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Kiki Supriyanto</div>
                                    <div class="text-job text-muted">Ketua RT 01</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/5.jpg') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Gunawan Ashari, S.E</div>
                                    <div class="text-job text-muted">Ketua RT 02</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/6.png') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Indra Gunawan</div>
                                    <div class="text-job text-muted">Ketua RT 03</div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="user-item">
                                  <img alt="image" src="{{ asset('assets/stisla/img/avatar/7.jpg') }}" class="img-fluid">
                                  <div class="user-details">
                                    <div class="user-name">Fahlefi</div>
                                    <div class="text-job text-muted">Ketua RT 04</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                
            </div>
            <div class="card-body"></div>
            
            {{-- <div class="section-body">
              <div class="card card-danger">
                <div class="card-header">
                    <h5>Artikel</h5>
                </div>
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <article class="article">
                      <div class="article-header">
                        <div class="article-image" data-background="../assets/img/news/img08.jpg">
                        </div>
                        <div class="article-title">
                          <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                        </div>
                      </div>
                      <div class="article-details">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. </p>
                        <div class="article-cta">
                          <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <article class="article">
                      <div class="article-header">
                        <div class="article-image" data-background="../assets/img/news/img04.jpg">
                        </div>
                        <div class="article-title">
                          <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                        </div>
                      </div>
                      <div class="article-details">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. </p>
                        <div class="article-cta">
                          <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                    </article>
                  </div>
                  
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <article class="article">
                      <div class="article-header">
                        <div class="article-image" data-background="../assets/img/news/img12.jpg">
                        </div>
                        <div class="article-title">
                          <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                        </div>
                      </div>
                      <div class="article-details">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. </p>
                        <div class="article-cta">
                          <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                </div>
                <div class="section-body">
                  <div class="card card-danger">
                    <div class="card-body"></div>
                    <div class="row">
                <div class="col-12 col-sm-6 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Galeri Kegiatan</h4>
                    </div>
                    <div class="card-body">
                      <div class="gallery gallery-md">
                        <div class="gallery-item" data-image="../assets/img/news/img04.jpg" data-title="Image 4"></div>
                        <div class="gallery-item" data-image="../assets/img/news/img05.jpg" data-title="Image 4"></div>
                        <div class="gallery-item" data-image="../assets/img/news/img11.jpg" data-title="Image 5"></div>
                        <div class="gallery-item" data-image="../assets/img/news/img09.jpg" data-title="Image 6"></div>
                        <div class="gallery-item" data-image="../assets/img/news/img12.jpg" data-title="Image 8"></div>
                        <div class="gallery-item" data-image="../assets/img/news/img13.jpg" data-title="Image 9"></div>
                        <div class="gallery-item" data-image="../assets/img/news/img14.jpg" data-title="Image 10"></div>
                        <div class="gallery-item" data-image="../assets/img/news/img15.jpg" data-title="Image 11"></div>
                        <div class="gallery-item gallery-more" data-image="../assets/img/news/img08.jpg" data-title="Image 12">
                          <div>+2</div>
                        </div>
                        <div class="gallery-item gallery-hide" data-image="../assets/img/news/img01.jpg" data-title="Image 9"></div>
                      </div>
                    </div>
                  </div>
                </div> --}}

                <div class="col-12 col-sm-6 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      @include('layouts.footer.footer')
                    </div>
                  </div>
                </div>
                    </div>
                  </div>
                </div>
        </div>
        </div>
        <!-- Main Content -->
    </header>
    <!-- end of header -->
    
	
    <!-- Scripts -->
    <script src="{{asset('assets/stisla/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/stisla/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/stisla/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/stisla/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/stisla/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/stisla/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('assets/stisla/js/validator.min.js')}}"></script>
    <script src="{{asset('assets/stisla/js/scripts.js')}}"></script>
    <script src="{{asset('assets/stisla/js/custom.js')}}"></script>
    <script src="{{asset('assets/stisla/js/stisla.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <!-- JS Libraies -->
  <script src="{{asset('node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>


  <!-- Page Specific JS File -->
  <script src="{{asset('assets/stisla/js/page/components-user.js')}}"></script>

    
</body>
</html>