
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Image Logo -->
        {{-- <img src="{{asset('assets/stisla/img/logo/logo-rw13.png')}}" alt="Logo RW13" width="60" class="rounded-square"> --}}
        <img src="{{asset('assets/stisla/img/logo/logo-pemda.jpg')}}" alt="Logo Pemda Kabupaten Bekasi" width="70" class="rounded-square">
        
         {{-- <h2>RUKUN WARGA 13</h2> --}}
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('/') }}">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('struktur') }}">Struktur Organisasi <span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('layanan') }}">Layanan <span class="sr-only">(current)</span></a>
                </li> --}}
              
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('kontak') }}">Kontak <span class="sr-only">(current)</span></a>
                </li>
                
                @else
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('/') }}">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('struktur') }}">Struktur Organisasi <span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('layanan') }}">Layanan <span class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('kontak') }}">Kontak <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('login') }}">Login</a>
                </li>
                
                    {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('register') }}">Registrasi</a>
                    </li>
                    @endif --}}
                @endauth
            @endif
            </ul>
        </div>
    </nav> 
    <!-- end of navigation -->


    
	
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