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
              <h1 class="title-single">Data Statistik Agama RW 13</h1>
              <span class="color-text-a">Blok C Taman Alamanda, Karangsatria, Tambun Utara</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-12">
            <div class="card-header bg bg-light">
                <h4 align="center"><b>Tabel Warga RW 13 Menurut Agama Berdasarkan Wilayah</b></h4>
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
                            <th class="text-center">Nama Agama</th>
                            <th class="text-center">RT 01</th>
                            <th class="text-center">RT 02</th>
                            <th class="text-center">RT 03</th>
                            <th class="text-center">RT 04</th>
                            <th class="text-center">Jumlah</th>
                        </tr>
                        <tr>
                            <th>Islam</th>
                            <th class="text-center">{{ $data_rt1_islam->jumlah }}</th>
                            <th class="text-center">{{ $data_rt2_islam->jumlah }}</th>
                            <th class="text-center">{{ $data_rt3_islam->jumlah }}</th>
                            <th class="text-center">{{ $data_rt4_islam->jumlah }}</th>
                            <?php 
                            $jmlIslam = $data_rt1_islam->jumlah + $data_rt2_islam->jumlah + $data_rt3_islam->jumlah + $data_rt4_islam->jumlah;
                            ?>
                            <th class="text-center">{{ $jmlIslam }}</th>
                        </tr>
                        <tr>
                            <th>Kristen</th>
                            <th class="text-center">{{ $data_rt1_kristen->jumlah }}</th>
                            <th class="text-center">{{ $data_rt2_kristen->jumlah }}</th>
                            <th class="text-center">{{ $data_rt3_kristen->jumlah }}</th>
                            <th class="text-center">{{ $data_rt4_kristen->jumlah }}</th>
                            <?php 
                            $jmlKristen= $data_rt1_kristen->jumlah + $data_rt2_kristen->jumlah + $data_rt3_kristen->jumlah + $data_rt4_kristen->jumlah;
                            ?>
                            <th class="text-center">{{ $jmlKristen }}</th>
                        </tr>
                        <tr>
                            <th>Katholik</th>
                            <th class="text-center">{{ $data_rt1_katholik->jumlah }}</th>
                            <th class="text-center">{{ $data_rt2_katholik->jumlah }}</th>
                            <th class="text-center">{{ $data_rt3_katholik->jumlah }}</th>
                            <th class="text-center">{{ $data_rt4_katholik->jumlah }}</th>
                            <?php 
                            $jmlKatholik= $data_rt1_katholik->jumlah + $data_rt2_katholik->jumlah + $data_rt3_katholik->jumlah + $data_rt4_katholik->jumlah;
                            ?>
                            <th class="text-center">{{ $jmlKatholik }}</th>
                        </tr>
                        <tr>
                            <th>Hindu</th>
                            <th class="text-center">{{ $data_rt1_hindu->jumlah }}</th>
                            <th class="text-center">{{ $data_rt2_hindu->jumlah }}</th>
                            <th class="text-center">{{ $data_rt3_hindu->jumlah }}</th>
                            <th class="text-center">{{ $data_rt4_hindu->jumlah }}</th>
                            <?php 
                            $jmlHindu= $data_rt1_hindu->jumlah + $data_rt2_hindu->jumlah + $data_rt3_hindu->jumlah + $data_rt4_hindu->jumlah;
                            ?>
                            <th class="text-center">{{ $jmlHindu }}</th>
                        </tr>
                        <tr>
                            <th>Budha</th>
                            <th class="text-center">{{ $data_rt1_budha->jumlah }}</th>
                            <th class="text-center">{{ $data_rt2_budha->jumlah }}</th>
                            <th class="text-center">{{ $data_rt3_budha->jumlah }}</th>
                            <th class="text-center">{{ $data_rt4_budha->jumlah }}</th>
                            <?php 
                            $jmlBudha= $data_rt1_budha->jumlah + $data_rt2_budha->jumlah + $data_rt3_budha->jumlah + $data_rt4_budha->jumlah;
                            ?>
                            <th class="text-center">{{ $jmlBudha }}</th>
                        </tr>
                        <tr>
                            <th>Konghucu</th>
                            <th class="text-center">{{ $data_rt1_konghucu->jumlah }}</th>
                            <th class="text-center">{{ $data_rt2_konghucu->jumlah }}</th>
                            <th class="text-center">{{ $data_rt3_konghucu->jumlah }}</th>
                            <th class="text-center">{{ $data_rt4_konghucu->jumlah }}</th>
                            <?php 
                            $jmlKonghucu= $data_rt1_konghucu->jumlah + $data_rt2_konghucu->jumlah + $data_rt3_konghucu->jumlah + $data_rt4_konghucu->jumlah;
                            ?>
                            <th class="text-center">{{ $jmlKonghucu }}</th>
                        </tr>
                        <tr>
                            <th>Kepercayaan</th>
                            <th class="text-center">{{ $data_rt1_kepercayaan->jumlah }}</th>
                            <th class="text-center">{{ $data_rt2_kepercayaan->jumlah }}</th>
                            <th class="text-center">{{ $data_rt3_kepercayaan->jumlah }}</th>
                            <th class="text-center">{{ $data_rt4_kepercayaan->jumlah }}</th>
                            <?php 
                            $jmlKepercayaan= $data_rt1_kepercayaan->jumlah + $data_rt2_kepercayaan->jumlah + $data_rt3_kepercayaan->jumlah + $data_rt4_kepercayaan->jumlah;
                            ?>
                            <th class="text-center">{{ $jmlKepercayaan }}</th>
                        </tr>
                       
                        <tr>
                            <th><b>Jumlah Keseluruhan</b></th>
                            <th class="text-center"><b>{{ $data_rt1_islam->jumlah + $data_rt1_kristen->jumlah + $data_rt1_katholik->jumlah + $data_rt1_hindu->jumlah + $data_rt1_budha->jumlah + $data_rt1_konghucu->jumlah + $data_rt1_kepercayaan->jumlah }}</b></th>
                            <th class="text-center"><b>{{ $data_rt2_islam->jumlah + $data_rt2_kristen->jumlah + $data_rt2_katholik->jumlah + $data_rt2_hindu->jumlah + $data_rt2_budha->jumlah + $data_rt2_konghucu->jumlah + $data_rt2_kepercayaan->jumlah }}</b></th>
                            <th class="text-center"><b>{{ $data_rt3_islam->jumlah + $data_rt3_kristen->jumlah + $data_rt3_katholik->jumlah + $data_rt3_hindu->jumlah + $data_rt3_budha->jumlah + $data_rt3_konghucu->jumlah + $data_rt3_kepercayaan->jumlah }}</b></th>
                            <th class="text-center"><b>{{ $data_rt4_islam->jumlah + $data_rt4_kristen->jumlah + $data_rt4_katholik->jumlah + $data_rt4_hindu->jumlah + $data_rt4_budha->jumlah + $data_rt4_konghucu->jumlah + $data_rt4_kepercayaan->jumlah }}</b></th>
                            <th class="text-center"><b>{{ $jmlIslam+$jmlKristen+$jmlKatholik+$jmlHindu+$jmlBudha+$jmlKepercayaan }}</b></th>

                  
                            </tr>
                    </table>
                </div>
            </div>
            <h4 class="header-title" align="center">Jumlah Warga Beragama Islam Berdasarkan Wilayah</h4>
    <canvas id="islamChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Beragama Kristen Berdasarkan Wilayah</h4>
    <canvas id="kristenChart" class="chartjs" width="undefined" height="undefined"></canvas>
    <h4 class="header-title" align="center">Jumlah Warga Beragama Katholik Berdasarkan Wilayah</h4>
    <canvas id="katholikChart" class="chartjs" width="undefined" height="undefined"></canvas>
    <h4 class="header-title" align="center">Jumlah Warga Beragama Hindu Berdasarkan Wilayah</h4>
    <canvas id="hinduChart" class="chartjs" width="undefined" height="undefined"></canvas>
    <h4 class="header-title" align="center">Jumlah Warga Beragama Budha Berdasarkan Wilayah</h4>
    <canvas id="budhaChart" class="chartjs" width="undefined" height="undefined"></canvas>
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
    var ctx = document.getElementById("islamChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor: 'rgba(255, 205, 86, 0.2)',
        borderColor:  'rgb(255, 205, 86)',
        data: <?php echo json_encode($jumlah_islam); ?>
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
    var ctx = document.getElementById("kristenChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgb(75, 192, 192)',
        data: <?php echo json_encode($jumlah_kristen); ?>
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
    var ctx = document.getElementById("katholikChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor:  'rgba(153, 102, 255, 0.2)',
        borderColor: 'rgb(153, 102, 255)',
        data: <?php echo json_encode($jumlah_katholik); ?>
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
    var ctx = document.getElementById("hinduChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgb(255, 99, 132)',
        data: <?php echo json_encode($jumlah_hindu); ?>
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
    var ctx = document.getElementById("budhaChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor:   'rgba(255, 159, 64, 0.2)',
        borderColor:  'rgb(255, 159, 64)',
        data: <?php echo json_encode($jumlah_budha); ?>
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