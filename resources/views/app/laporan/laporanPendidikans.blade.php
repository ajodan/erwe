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
                        <h4>Rekap Berdasarkan Jenjang Pendidikan</h4>
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
                                    <th class="text-center">Jenjang Pendidikan</th>
                                    <th class="text-center">RT 01</th>
                                    <th class="text-center">RT 02</th>
                                    <th class="text-center">RT 03</th>
                                    <th class="text-center">RT 04</th>
                                    <th class="text-center">Jumlah</th>
                                </tr>
                                <tr>
                                    <th>Tidak/Belum Sekolah</th>
                                    <th class="text-center">{{ $data_rt1_ts->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_ts->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_ts->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_ts->jumlah }}</th>
                                    <?php 
                                    $jmlBelumSekolah = $data_rt1_ts->jumlah + $data_rt2_ts->jumlah + $data_rt3_ts->jumlah + $data_rt4_ts->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlBelumSekolah }}</th>
                                </tr>
                                <tr>
                                    <th>Belum Tamat SD/Sederajat</th>
                                    <th class="text-center">{{ $data_rt1_blmtsd->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_blmtsd->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_blmtsd->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_blmtsd->jumlah }}</th>
                                    <?php 
                                    $jmlBelumTamatSD = $data_rt1_blmtsd->jumlah + $data_rt2_blmtsd->jumlah + $data_rt3_blmtsd->jumlah + $data_rt4_blmtsd->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlBelumTamatSD }}</th>
                                </tr>
                                <tr>
                                    <th>Sudah Tamat SD/Sederajat</th>
                                    <th class="text-center">{{ $data_rt1_tsd->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_tsd->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_tsd->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_tsd->jumlah }}</th>
                                    <?php 
                                    $jmlTamatSD = $data_rt1_tsd->jumlah + $data_rt2_tsd->jumlah + $data_rt3_tsd->jumlah + $data_rt4_tsd->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlTamatSD }}</th>
                                </tr>
                                <tr>
                                    <th>SLTP/Sederajat</th>
                                    <th class="text-center">{{ $data_rt1_smp->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_smp->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_smp->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_smp->jumlah }}</th>
                                    <?php 
                                    $jmlSMP = $data_rt1_smp->jumlah + $data_rt2_smp->jumlah + $data_rt3_smp->jumlah + $data_rt4_smp->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlSMP }}</th>
                                </tr>
                                <tr>
                                    <th>SLTA/Sederajat</th>
                                    <th class="text-center">{{ $data_rt1_sma->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_sma->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_sma->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_sma->jumlah }}</th>
                                    <?php 
                                    $jmlSMA = $data_rt1_sma->jumlah + $data_rt2_sma->jumlah + $data_rt3_sma->jumlah + $data_rt4_sma->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlSMA }}</th>
                                </tr>
                                
                                <tr>
                                    <th>Diploma I/II</th>
                                    <th class="text-center">{{ $data_rt1_d1->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_d1->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_d1->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_d1->jumlah }}</th>
                                    <?php 
                                    $jmlD1 = $data_rt1_d1->jumlah + $data_rt2_d1->jumlah + $data_rt3_d1->jumlah + $data_rt4_d1->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlD1 }}</th>
                                </tr>
                                <tr>
                                    <th>Akademi/Diploma III/Sarjana Muda</th>
                                    <th class="text-center">{{ $data_rt1_d3->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_d3->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_d3->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_d3->jumlah }}</th>
                                    <?php 
                                    $jmlD3 = $data_rt1_d3->jumlah + $data_rt2_d3->jumlah + $data_rt3_d3->jumlah + $data_rt4_d3->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlD3 }}</th>
                                </tr>
                                <tr>
                                    <th>Diploma IV/Strata I</th>
                                    <th class="text-center">{{ $data_rt1_s1->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_s1->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_s1->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_s1->jumlah }}</th>
                                    <?php 
                                    $jmlS1 = $data_rt1_s1->jumlah + $data_rt2_s1->jumlah + $data_rt3_s1->jumlah + $data_rt4_s1->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlS1 }}</th>
                                </tr>
                                <tr>
                                    <th>Strata II</th>
                                    <th class="text-center">{{ $data_rt1_s2->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_s2->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_s2->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_s2->jumlah }}</th>
                                    <?php 
                                    $jmlS2 = $data_rt1_s2->jumlah + $data_rt2_s2->jumlah + $data_rt3_s2->jumlah + $data_rt4_s2->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlS2 }}</th>
                                </tr>
                                <tr>
                                    <th>Strata III</th>
                                    <th class="text-center">{{ $data_rt1_s3->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt2_s3->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt3_s3->jumlah }}</th>
                                    <th class="text-center">{{ $data_rt4_s3->jumlah }}</th>
                                    <?php 
                                    $jmlS3 = $data_rt1_s3->jumlah + $data_rt2_s3->jumlah + $data_rt3_s3->jumlah + $data_rt4_s3->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlS3 }}</th>
                                </tr>
                                <tr>
                                    <th><b>Jumlah Keseluruhan</b></th>
                                    <th class="text-center"><b>{{ $data_rt1_ts->jumlah + $data_rt1_blmtsd->jumlah + $data_rt1_tsd->jumlah + $data_rt1_smp->jumlah + $data_rt1_sma->jumlah + $data_rt1_d1->jumlah + $data_rt1_d3->jumlah + $data_rt1_s1->jumlah + $data_rt1_s2->jumlah + $data_rt1_s3->jumlah }}</b></th>
                                    <th class="text-center"><b>{{ $data_rt2_ts->jumlah + $data_rt2_blmtsd->jumlah + $data_rt2_tsd->jumlah + $data_rt2_smp->jumlah + $data_rt2_sma->jumlah + $data_rt2_d1->jumlah + $data_rt2_d3->jumlah + $data_rt2_s1->jumlah + $data_rt2_s2->jumlah + $data_rt2_s3->jumlah }}</b></th>
                                    <th class="text-center"><b>{{ $data_rt3_ts->jumlah + $data_rt3_blmtsd->jumlah + $data_rt3_tsd->jumlah + $data_rt3_smp->jumlah + $data_rt3_sma->jumlah + $data_rt3_d1->jumlah + $data_rt3_d3->jumlah + $data_rt3_s1->jumlah + $data_rt3_s2->jumlah + $data_rt3_s3->jumlah }}</b></th>
                                    <th class="text-center"><b>{{ $data_rt4_ts->jumlah + $data_rt4_blmtsd->jumlah + $data_rt4_tsd->jumlah + $data_rt4_smp->jumlah + $data_rt4_sma->jumlah + $data_rt4_d1->jumlah + $data_rt4_d3->jumlah + $data_rt4_s1->jumlah + $data_rt4_s2->jumlah + $data_rt4_s3->jumlah }}</b></th>
                                    <th class="text-center"><b>{{ $jmlBelumSekolah+$jmlBelumTamatSD+$jmlTamatSD+$jmlSMP+$jmlSMA+$jmlD1+$jmlD3+$jmlS1+$jmlS2+$jmlS3 }}</b></th>
                          
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
    <h4 class="header-title" align="center">Jumlah Warga Usia Belum Sekolah Berdasarkan RT</h4>
    <canvas id="tidakChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Usia Belum Tamat SD Berdasarkan RT</h4>
    <canvas id="belumTSDChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Tamat SD Berdasarkan RT</h4>
    <canvas id="tamatSDChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Tamat SMP Berdasarkan RT</h4>
    <canvas id="tamatSMPChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Tamat SMA Berdasarkan RT</h4>
    <canvas id="tamatSMAChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Tamat Diploma Berdasarkan RT</h4>
    <canvas id="tamatD1Chart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Tamat Sarjana Muda Berdasarkan RT</h4>
    <canvas id="tamatD3Chart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Tamat S1 Berdasarkan RT</h4>
    <canvas id="tamatS1Chart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Tamat S2 Berdasarkan RT</h4>
    <canvas id="tamatS2Chart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
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
    var ctx = document.getElementById("tidakChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        // backgroundColor: '#54cb6a',
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(255, 205, 86, 0.2)'
    ],
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_ts); ?>
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
    var ctx = document.getElementById("belumTSDChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        // backgroundColor: '#54cb6a',
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(255, 205, 86, 0.2)'
    ],
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_blmtsd); ?>
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
    var ctx = document.getElementById("tamatSDChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        // backgroundColor: '#54cb6a',
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(255, 205, 86, 0.2)'
    ],
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_sd); ?>
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
    var ctx = document.getElementById("tamatSMPChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        // backgroundColor: '#54cb6a',
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(255, 205, 86, 0.2)'
    ],
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_smp); ?>
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
    var ctx = document.getElementById("tamatSMAChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        // backgroundColor: '#54cb6a',
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(255, 205, 86, 0.2)'
    ],
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_sma); ?>
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
    var ctx = document.getElementById("tamatD1Chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        // backgroundColor: '#54cb6a',
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(255, 205, 86, 0.2)'
    ],
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_d1); ?>
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
    var ctx = document.getElementById("tamatD3Chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        // backgroundColor: '#54cb6a',
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(255, 205, 86, 0.2)'
    ],
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_d3); ?>
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
    var ctx = document.getElementById("tamatS1Chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        // backgroundColor: '#54cb6a',
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(255, 205, 86, 0.2)'
    ],
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_s1); ?>
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
    var ctx = document.getElementById("tamatS2Chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        // backgroundColor: '#54cb6a',
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(255, 205, 86, 0.2)'
    ],
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_s2); ?>
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