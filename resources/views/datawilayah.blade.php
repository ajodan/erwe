@include('layouts.head.head')
<script src="{{asset('assets/stisla/js/page/chart.js')}}"></script>
<!-- Scripts -->
<script src="{{ asset('assets/stisla/js/stisla.js') }}"></script>

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
              <h1 class="title-single">Data Statistik Wilayah RW 13</h1>
              <span class="color-text-a">Blok C Taman Alamanda, Karangsatria, Tambun Utara</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-12">
            <div class="card-header bg bg-light">
                <h4 align="center"><b>Tabel Populasi Berdasarkan Wilayah</b></h4>
                <div class="card-header-action">
                    {{-- <img class="img-fluid mt-1 img-shadow"
                        src="{{asset('assets/stisla/modules/flag-icon-css/flags/4x3/id.svg')}}" alt="image"
                        width="40"> --}}
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                    <table class="table table-striped table-hover table-md">
                        <tr class="alert alert-light">
                            <th class="text-left">Rukun Tetangga (RT)</th>
                            <th class="text-center">Jumlah Warga</th>
                            <th class="text-center">Prosentase (%)</th>
                        </tr>
                        {{ $total = $data_rt1->jumlah + $data_rt2->jumlah + $data_rt3->jumlah + $data_rt4->jumlah }}
                        <tr>
                            <th>Rukun Tetangga (RT) 01</th>
                            <th class="text-center">{{ number_format($data_rt1->jumlah) }}</th>
                            <th class="text-center">{{ number_format($data_rt1->jumlah/$total*100) }} %</th>
                        </tr>
                        <tr>
                            <th>Rukun Tetangga (RT) 02</th>
                            <th class="text-center">{{ number_format($data_rt2->jumlah) }}</th>
                            <th class="text-center">{{ number_format($data_rt2->jumlah/$total*100) }} %</th>
                        </tr>
                        <tr>
                            <th>Rukun Tetangga (RT) 03</th>
                            <th class="text-center">{{ number_format($data_rt3->jumlah) }}</th>
                            <th class="text-center">{{ number_format($data_rt3->jumlah/$total*100) }} %</th>
                        </tr>
                        <tr>
                            <th>Rukun Tetangga (RT) 04</th>
                            <th class="text-center">{{ number_format($data_rt4->jumlah) }}</th>
                            <th class="text-center">{{ number_format($data_rt4->jumlah/$total*100) }} %</th>
                        </tr>
                        <tr>
                            <th><b>Jumlah Keseluruhan Warga</b></th>
                            <th class="text-center"><b>{{ number_format($data_rt1->jumlah + $data_rt2->jumlah + $data_rt3->jumlah + $data_rt4->jumlah) }}</b></th>
                            <th class="text-center">{{ number_format($total/$total*100) }} %</th>
                          </tr>
                    </table><br><br>
                </div>
            </div>
            <h4 class="header-title" align="center"><b>Grafik Populasi Berdasarkan Wilayah</b></h4>
    <canvas id="wilayahChart" class="chartjs" width="undefined" height="undefined"></canvas>
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
  <script type="text/javascript">
    var ctx = document.getElementById("wilayahChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor:   '#37D360',
        borderColor: '#071F08',
        data: <?php echo json_encode($jumlah_warga); ?>
        }],
        options: {
    animation: {
        onProgress: function(animation) {
            progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
        }
      }
    }
   },
 });
</script>
</body>

</html>