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
                                    <th class="text-center">Domisili Kepala Keluarga</th>
                                   
                                    <th class="text-center">Jumlah Kepala Keluarga</th>
                                </tr>
                                <tr>
                                    <th>Tetap</th>
                                    <?php 
                                    $jmlTetap = $data_tetap->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlTetap }}</th>
                                   
                                </tr>
                                <tr>
                                    <th>Belum Tetap</th>
                                    <?php 
                                    $jmlBelumTetap = $data_belumtetap->jumlah;
                                    ?>
                                    <th class="text-center">{{ $jmlBelumTetap }}</th>
                                </tr>
                               
                                <tr>
                                    <th><b>Jumlah Keseluruhan</b></th>
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
                        Catatan : Hasil perhitungan ini dipengaruhi oleh kelengkapan data status domisili KK/KTP.
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
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


@include('layouts.alerts.notif')
@endsection