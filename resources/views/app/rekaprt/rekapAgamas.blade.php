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
                                    <th class="text-center">Jumlah Warga</th>
                                </tr>
                                <tr>
                                    <th>Islam</th>
                                    <th class="text-center">{{ $data_islam->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th>Kristen</th>
                                    <th class="text-center">{{ $data_kristen->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th>Katholik</th>
                                    <th class="text-center">{{ $data_katholik->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th>Hindu</th>
                                    <th class="text-center">{{ $data_hindu->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th>Budha</th>
                                    <th class="text-center">{{ $data_budha->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th>Konghucu</th>
                                    <th class="text-center">{{ $data_konghucu->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th>Kepercayaan</th>
                                    <th class="text-center">{{ $data_kepercayaan->jumlah }}</th>
                                </tr>
                                <tr>
                                    <th><b>Jumlah Keseluruhan</b></th>
                                    <th class="text-center"><b>{{ $data_islam->jumlah + $data_kristen->jumlah + $data_katholik->jumlah + $data_hindu->jumlah + $data_budha->jumlah + $data_konghucu->jumlah + $data_kepercayaan->jumlah }}</b></th>
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
                        Catatan : Hasil perhitungan ini dipengaruhi oleh kelengkapan data agama masing-masing RT.
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h4 class="header-title" align="center">Jumlah Warga Menurut Agama</h4>
    <canvas id="agamaChart" class="chartjs" width="undefined" height="undefined"></canvas><br><br>
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
    var ctx = document.getElementById("agamaChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Jumlah Warga',
        backgroundColor: '#12ad6a',
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_agama); ?>
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