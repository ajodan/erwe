<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Website Title -->
    <title>SIRuTe RW13 Taman Alamanda</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('assets/wellcome/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('assets/wellcome/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/components.css')}}" rel="stylesheet">


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
    

    <!-- Navigation -->
    @include('layouts.menu.menu')
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                <div class="col-6 col-md-6 col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="{{asset('assets/stisla/img/struktur-rw-13.jpg')}}" alt="Struktur Organisasi">
                              <div class="carousel-caption d-none d-md-block">
                                <h6>Struktur Organisasi</h6>
                                <p>Struktur Organisasi Pengurus RW 13 Taman Alamanda, Desa Karangsatria</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      @include('layouts.footer.footer')
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
      
        
    </header>
    <!-- end of header -->
    
	
    <!-- Scripts -->
    <script src="{{asset('assets/wellcome/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/validator.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/scripts.js')}}"></script>

    
</body>
</html>