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
                        <h4>Rekap Berdasarkan Domisili Kartu Keluarga</h4>
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
    <h4 class="header-title" align="center">Jumlah Warga Status Domisili Tetap Berdasarkan Wilayah</h4>
    <canvas id="tetapChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
    <h4 class="header-title" align="center">Jumlah Warga Status Domisili Belum Tetap Berdasarkan Wilayah</h4>
    <canvas id="tidaktetapChart" class="chartjs" width="undefined" height="undefined"></canvas>
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
    var ctx = document.getElementById("tetapChart").getContext('2d');
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
      'rgba(201, 255, 207, 0.2)'
    ],
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
        // backgroundColor: '#cb547a',
        backgroundColor: [
            'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 243, 255, 0.2)',
      'rgba(201, 255, 207, 0.2)'
    ],
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

@include('layouts.alerts.notif')
@endsection