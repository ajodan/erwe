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
                                    <th class="text-center">{{ $data_rt1->where("agama_id", "1")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("agama_id", "1")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("agama_id", "1")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("agama_id", "1")->count() }}</th>
                                    <?php 
                                    $jmlIslam = $data_rt1->where("agama_id", "1")->count() + $data_rt2->where("agama_id", "1")->count() + $data_rt3->where("agama_id", "1")->count() + $data_rt4->where("agama_id", "1")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlIslam }}</th>
                                </tr>
                                <tr>
                                    <th>Kristen</th>
                                    <th class="text-center">{{ $data_rt1->where("agama_id", "2")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("agama_id", "2")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("agama_id", "2")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("agama_id", "2")->count() }}</th>
                                    <?php 
                                    $jmlKristen = $data_rt1->where("agama_id", "2")->count() + $data_rt2->where("agama_id", "2")->count() + $data_rt3->where("agama_id", "2")->count() + $data_rt4->where("agama_id", "2")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlKristen }}</th>
                                </tr>
                                <tr>
                                    <th>Katholik</th>
                                    <th class="text-center">{{ $data_rt1->where("agama_id", "3")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("agama_id", "3")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("agama_id", "3")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("agama_id", "3")->count() }}</th>
                                    <?php 
                                    $jmlKatholik = $data_rt1->where("agama_id", "3")->count() + $data_rt2->where("agama_id", "3")->count() + $data_rt3->where("agama_id", "3")->count() + $data_rt4->where("agama_id", "3")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlKatholik }}</th>
                                </tr>
                                <tr>
                                    <th>Hindu</th>
                                    <th class="text-center">{{ $data_rt1->where("agama_id", "4")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("agama_id", "4")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("agama_id", "4")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("agama_id", "4")->count() }}</th>
                                    <?php 
                                    $jmlHindu = $data_rt1->where("agama_id", "4")->count() + $data_rt2->where("agama_id", "4")->count() + $data_rt3->where("agama_id", "4")->count() + $data_rt4->where("agama_id", "4")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlHindu }}</th>
                                </tr>
                                <tr>
                                    <th>Budha</th>
                                    <th class="text-center">{{ $data_rt1->where("agama_id", "5")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("agama_id", "5")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("agama_id", "5")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("agama_id", "5")->count() }}</th>
                                    <?php 
                                    $jmlBudha = $data_rt1->where("agama_id", "5")->count() + $data_rt2->where("agama_id", "5")->count() + $data_rt3->where("agama_id", "5")->count() + $data_rt4->where("agama_id", "5")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlBudha }}</th>
                                </tr>
                                <tr>
                                    <th>Konghucu</th>
                                    <th class="text-center">{{ $data_rt1->where("agama_id", "6")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("agama_id", "6")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("agama_id", "6")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("agama_id", "6")->count() }}</th>
                                    <?php 
                                    $jmlKonghucu = $data_rt1->where("agama_id", "6")->count() + $data_rt2->where("agama_id", "6")->count() + $data_rt3->where("agama_id", "6")->count() + $data_rt4->where("agama_id", "6")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlKonghucu }}</th>
                                </tr>
                                <tr>
                                    <th>Kepercayaan</th>
                                    <th class="text-center">{{ $data_rt1->where("agama_id", "7")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("agama_id", "7")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("agama_id", "7")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("agama_id", "7")->count() }}</th>
                                    <?php 
                                    $jmlKepercayaan = $data_rt1->where("agama_id", "7")->count() + $data_rt2->where("agama_id", "7")->count() + $data_rt3->where("agama_id", "7")->count() + $data_rt4->where("agama_id", "7")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlKepercayaan }}</th>
                                </tr>
                               
                                <tr>
                                    <th><b>Jumlah Keseluruhan</b></th>
                                    <th class="text-center"><b>{{ $data_rt1->where("agama_id", "1")->count() + $data_rt1->where("agama_id", "2")->count() + $data_rt1->where("agama_id", "3")->count() + $data_rt1->where("agama_id", "4")->count() + $data_rt1->where("agama_id", "5")->count() + $data_rt1->where("agama_id", "6")->count() + $data_rt1->where("agama_id", "7")->count() }}</b></th>
                                    <th class="text-center"><b>{{ $data_rt2->where("agama_id", "1")->count() + $data_rt2->where("agama_id", "2")->count() + $data_rt2->where("agama_id", "3")->count() + $data_rt2->where("agama_id", "4")->count() + $data_rt2->where("agama_id", "5")->count() + $data_rt2->where("agama_id", "6")->count() + $data_rt2->where("agama_id", "7")->count() }}</b></th>
                                    <th class="text-center"><b>{{ $data_rt3->where("agama_id", "1")->count() + $data_rt3->where("agama_id", "2")->count() + $data_rt3->where("agama_id", "3")->count() + $data_rt3->where("agama_id", "4")->count() + $data_rt3->where("agama_id", "5")->count() + $data_rt3->where("agama_id", "6")->count() + $data_rt3->where("agama_id", "7")->count() }}</b></th>
                                    <th class="text-center"><b>{{ $data_rt4->where("agama_id", "1")->count() + $data_rt4->where("agama_id", "2")->count() + $data_rt4->where("agama_id", "3")->count() + $data_rt4->where("agama_id", "4")->count() + $data_rt4->where("agama_id", "5")->count() + $data_rt4->where("agama_id", "6")->count() + $data_rt4->where("agama_id", "7")->count() }}</b></th>
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