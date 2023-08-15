@extends('layouts.app')
@section('content')
@include('_FUNCTION.age')
<script src="{{asset('assets/stisla/js/page/chart.js')}}"></script>
<!-- Scripts -->
<script src="{{ asset('assets/stisla/js/stisla.js') }}"></script>


<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">           
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>Rekap Berdasarkan Warga</h4>
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
                                    <th class="text-left">Rukun Tetangga (RT)</th>
                                    <th class="text-left">Jumlah Warga</th>
                                </tr>
                                <tr>
                                    <th>Rukun Tetangga (RT) 01</th>
                                    <th class="text-left">{{ $data_rt1->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th>Rukun Tetangga (RT) 02</th>
                                    <th class="text-left">{{ $data_rt2->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th>Rukun Tetangga (RT) 03</th>
                                    <th class="text-left">{{ $data_rt3->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th>Rukun Tetangga (RT) 04</th>
                                    <th class="text-left">{{ $data_rt4->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th><b>Jumlah Keseluruhan Warga</b></th>
                                    <th class="text-left"><b>{{ $data_rt1->jumlah + $data_rt2->jumlah + $data_rt3->jumlah + $data_rt4->jumlah }}</b></th>
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
                           Catatan : Hasil perhitungan ini dipengaruhi oleh kelengkapan data dari setiap Rukun Tetangga (RT).
                        </strong>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <h4 class="header-title" align="center">Jumlah Warga Berdasarkan RT</h4>
    <canvas id="mataChart" class="chartjs" width="undefined" height="undefined"></canvas>
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
    var ctx = document.getElementById("mataChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor:   'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgb(75, 192, 192)',
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


@include('layouts.alerts.notif')
@endsection