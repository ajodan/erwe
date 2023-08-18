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
              <h1 class="title-single">Data Statistik Status Domisili RW 13</h1>
              <span class="color-text-a">Blok C Taman Alamanda, Karangsatria, Tambun Utara</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-12">
            <div class="card-header bg bg-light">
                <h4 align="center"><b>Tabel Warga RW 13 Menurut Status Domisili Berdasarkan Wilayah</b></h4>
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
                            <th class="text-center">Domisili Kartu Keluarga</th>
                            <th class="text-center">RT 01</th>
                            <th class="text-center">RT 02</th>
                            <th class="text-center">RT 03</th>
                            <th class="text-center">RT 04</th>
                            <th class="text-center">Jumlah</th>
                        </tr>
                        <tr>
                            <th>Tetap</th>
                            <th class="text-center">{{ $data_rt1_tetap->jumlah }}</th>
                            <th class="text-center">{{ $data_rt2_tetap->jumlah }}</th>
                            <th class="text-center">{{ $data_rt3_tetap->jumlah }}</th>
                            <th class="text-center">{{ $data_rt4_tetap->jumlah }}</th>
                            <?php 
                            $jmlTetap = $data_rt1_tetap->jumlah + $data_rt2_tetap->jumlah + $data_rt3_tetap->jumlah + $data_rt4_tetap->jumlah;
                            ?>
                            <th class="text-center">{{ $jmlTetap }}</th>
                        </tr>
                        <tr>
                            <th>Belum Tetap</th>
                            <th class="text-center">{{ $data_rt1_tidaktetap->jumlah }}</th>
                            <th class="text-center">{{ $data_rt2_tidaktetap->jumlah }}</th>
                            <th class="text-center">{{ $data_rt3_tidaktetap->jumlah }}</th>
                            <th class="text-center">{{ $data_rt4_tidaktetap->jumlah }}</th>
                            <?php 
                            $jmlBelumTetap = $data_rt1_tidaktetap->jumlah + $data_rt2_tidaktetap->jumlah + $data_rt3_tidaktetap->jumlah + $data_rt4_tidaktetap->jumlah;
                            ?>
                            <th class="text-center">{{ $jmlBelumTetap }}</th>
                        </tr>
                       
                        <tr>
                            <th><b>Jumlah Keseluruhan</b></th>
                            <th class="text-center"><b>{{ $data_rt1_tetap->jumlah + $data_rt1_tidaktetap->jumlah }}</b></th>
                            <th class="text-center"><b>{{ $data_rt2_tetap->jumlah + $data_rt2_tidaktetap->jumlah }}</b></th>
                            <th class="text-center"><b>{{ $data_rt3_tetap->jumlah + $data_rt3_tidaktetap->jumlah }}</b></th>
                            <th class="text-center"><b>{{ $data_rt4_tetap->jumlah + $data_rt4_tidaktetap->jumlah }}</b></th>
                            <th class="text-center"><b>{{ $jmlTetap+$jmlBelumTetap }}</b></th>
                  
                            </tr>
                    </table>
                </div>
            </div>
            <h4 class="header-title" align="center">Jumlah Warga Status Domisili Tetap Berdasarkan Wilayah</h4>
    <canvas id="tetapChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Status Domisili Belum Tetap Berdasarkan Wilayah</h4>
    <canvas id="tidaktetapChart" class="chartjs" width="undefined" height="undefined"></canvas>
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
    var ctx = document.getElementById("tetapChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor: '#54cb6a',
        
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_tetap); ?>
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

<script type="text/javascript">
    var ctx = document.getElementById("tidaktetapChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor: '#54cb6a',
        borderColor: '#93C3D2',
        barPercentage: 0.5,
        barThickness: 6,
        maxBarThickness: 8,
        minBarLength: 2,
        data: <?php echo json_encode($jumlah_tidaktetap); ?>
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