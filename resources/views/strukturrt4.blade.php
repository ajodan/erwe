@include('layouts.head.head')

<body>

  <!-- ======= Header/Navbar ======= -->
  @include('layouts.menu.menu')
  <!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Struktur Organisasi RT 04/13</h1>
              <span class="color-text-a">Blok C Taman Alamanda, Karangsatria, Tambun Utara</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-12">
            <div class="title-single-box">
                {{-- <img class="img-fluid" src="{{asset('assets/img/struktur-org.jpg')}}" width="1460" height="1345"> --}}
                <span class="color-text-a"><h3>Ketua : Fahlevi</h3></span><br>
                <span class="color-text-a"><h3>Wakil Ketua : Sujoko</h3></span><br>
                <span class="color-text-a"><h3>Sekretaris : Murbianto</h3></span><br>
                <span class="color-text-a"><h3>Bendahara : Nanan S.</h3></span><br><br>
                <span class="color-text-a"><h4>Seksi Keagamaan : Nurindra Kiswandhanu</h4></span><br>
                <span class="color-text-a"><h4>Seksi Lingkungan : H. Budi Mulyono, Redy, Agus Purnomo</h4></span><br>
                <span class="color-text-a"><h4>Seksi Pemuda dan Olahraga : Ardi Muhammad S., Amri Irawan</h4></span><br>
                <span class="color-text-a"><h4>Seksi Keamanan : Endi Riyandi, Jimmi Putra, Safari, Irwansyah</h4></span><br>
                <span class="color-text-a"><h4>Seksi Pembangunan : Indra Gunardi, Doni Kurniawan</h4></span><br>
                <span class="color-text-a"><h4>Seksi Sosial Kemasyarakatan : Sapta Rahadian, Dodi</h4></span><br>
                <span class="color-text-a"><h4>Seksi Hubungan Masyarakat : Juhadi Suroto, Irvan W., Zaenudin, Miji Mitika</h4></span><br>
                <span class="color-text-a"><h4>Seksi Aset : Nanan S.</h4></span><br>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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