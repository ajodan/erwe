@extends('layouts.app')
@section('content')
@include('_FUNCTION.age')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">           
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>Rekap Berdasarkan Agama</h4>
                        <div class="card-header-action">
                            <img class="img-fluid mt-1 img-shadow"
                                src="{{asset('assets/stisla/modules/flag-icon-css/flags/4x3/id.svg')}}" alt="image"
                                width="40">
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
                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="alert alert-primary alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                        </button>
                       <strong class="h6"> 
                        Catatan : Hasil perhitungan ini dipengaruhi oleh kelengkapan data jenis kelamin dari setiap Rukun Tetangga (RT).
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h4 class="header-title" align="center">Jumlah Warga Beragama Islam Berdasarkan RT</h4>
    <canvas id="islamChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Beragama Kristen Berdasarkan RT</h4>
    <canvas id="kristenChart" class="chartjs" width="undefined" height="undefined"></canvas>
    <h4 class="header-title" align="center">Jumlah Warga Beragama Katholik Berdasarkan RT</h4>
    <canvas id="katholikChart" class="chartjs" width="undefined" height="undefined"></canvas>
    <h4 class="header-title" align="center">Jumlah Warga Beragama Hindu Berdasarkan RT</h4>
    <canvas id="hinduChart" class="chartjs" width="undefined" height="undefined"></canvas>
    <h4 class="header-title" align="center">Jumlah Warga Beragama Budha Berdasarkan RT</h4>
    <canvas id="budhaChart" class="chartjs" width="undefined" height="undefined"></canvas>
</div>
@endsection

@section('JsLibraries')
<script src="{{asset('assets/stisla/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/chart.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('assets/stisla/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('assets/stisla/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/izitoast/js/iziToast.min.js')}}"></script>
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/index.js')}}"></script>
@endsection

@section('JsCustom')
<script>
    $('#dashboardLink').addClass('active')

    $('#imageDataDiri')
</script>
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
@include('layouts.alerts.notif')
@endsection