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
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "1")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "1")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "1")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "1")->count() }}</th>
                                    <?php 
                                    $jmlBelumSekolah = $data_rt1->where("pendidikan_id", "1")->count() + $data_rt2->where("pendidikan_id", "1")->count() + $data_rt3->where("pendidikan_id", "1")->count() + $data_rt4->where("pendidikan_id", "1")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlBelumSekolah }}</th>
                                </tr>
                                <tr>
                                    <th>Belum Tamat SD/Sederajat</th>
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "2")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "2")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "2")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "2")->count() }}</th>
                                    <?php 
                                    $jmlBelumTamatSD = $data_rt1->where("pendidikan_id", "2")->count() + $data_rt2->where("pendidikan_id", "2")->count() + $data_rt3->where("pendidikan_id", "2")->count() + $data_rt4->where("pendidikan_id", "2")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlBelumTamatSD }}</th>
                                </tr>
                                <tr>
                                    <th>Sudah Tamat SD/Sederajat</th>
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "3")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "3")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "3")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "3")->count() }}</th>
                                    <?php 
                                    $jmlTamatSD = $data_rt1->where("pendidikan_id", "3")->count() + $data_rt2->where("pendidikan_id", "3")->count() + $data_rt3->where("pendidikan_id", "3")->count() + $data_rt4->where("pendidikan_id", "3")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlTamatSD }}</th>
                                </tr>
                                <tr>
                                    <th>SLTP/Sederajat</th>
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "4")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "4")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "4")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "4")->count() }}</th>
                                    <?php 
                                    $jmlSLTP = $data_rt1->where("pendidikan_id", "4")->count() + $data_rt2->where("pendidikan_id", "4")->count() + $data_rt3->where("pendidikan_id", "4")->count() + $data_rt4->where("pendidikan_id", "4")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlSLTP }}</th>
                                </tr>
                                <tr>
                                    <th>SLTA/Sederajat</th>
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "5")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "5")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "5")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "5")->count() }}</th>
                                    <?php 
                                    $jmlSLTA = $data_rt1->where("pendidikan_id", "5")->count() + $data_rt2->where("pendidikan_id", "5")->count() + $data_rt3->where("pendidikan_id", "5")->count() + $data_rt4->where("pendidikan_id", "5")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlSLTA }}</th>
                                </tr>
                                <tr>
                                    <th>Diploma I/II</th>
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "6")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "6")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "6")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "6")->count() }}</th>
                                    <?php 
                                    $jmlDiploma = $data_rt1->where("pendidikan_id", "6")->count() + $data_rt2->where("pendidikan_id", "6")->count() + $data_rt3->where("pendidikan_id", "6")->count() + $data_rt4->where("pendidikan_id", "6")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlDiploma }}</th>
                                </tr>
                                <tr>
                                    <th>Akademi/Diploma III/Sarjana Muda</th>
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "7")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "7")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "7")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "7")->count() }}</th>
                                    <?php 
                                    $jmlSarmud = $data_rt1->where("pendidikan_id", "7")->count() + $data_rt2->where("pendidikan_id", "7")->count() + $data_rt3->where("pendidikan_id", "7")->count() + $data_rt4->where("pendidikan_id", "7")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlSarmud }}</th>
                                </tr>
                                <tr>
                                    <th>Diploma IV/Strata I</th>
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "8")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "8")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "8")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "8")->count() }}</th>
                                    <?php 
                                    $jmlS1 = $data_rt1->where("pendidikan_id", "8")->count() + $data_rt2->where("pendidikan_id", "8")->count() + $data_rt3->where("pendidikan_id", "8")->count() + $data_rt4->where("pendidikan_id", "8")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlS1 }}</th>
                                </tr>
                                <tr>
                                    <th>Strata II</th>
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "9")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "9")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "9")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "9")->count() }}</th>
                                    <?php 
                                    $jmlS2 = $data_rt1->where("pendidikan_id", "9")->count() + $data_rt2->where("pendidikan_id", "9")->count() + $data_rt3->where("pendidikan_id", "9")->count() + $data_rt4->where("pendidikan_id", "9")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlS2 }}</th>
                                </tr>
                                <tr>
                                    <th>Strata III</th>
                                    <th class="text-center">{{ $data_rt1->where("pendidikan_id", "10")->count() }}</th>
                                    <th class="text-center">{{ $data_rt2->where("pendidikan_id", "10")->count() }}</th>
                                    <th class="text-center">{{ $data_rt3->where("pendidikan_id", "10")->count() }}</th>
                                    <th class="text-center">{{ $data_rt4->where("pendidikan_id", "10")->count() }}</th>
                                    <?php 
                                    $jmlS3 = $data_rt1->where("pendidikan_id", "10")->count() + $data_rt2->where("pendidikan_id", "10")->count() + $data_rt3->where("pendidikan_id", "10")->count() + $data_rt4->where("pendidikan_id", "10")->count();
                                    ?>
                                    <th class="text-center">{{ $jmlS3 }}</th>
                                </tr>
                                <tr>
                                    <th><b>Jumlah Keseluruhan</b></th>
                                    <th class="text-center"><b>{{ $data_rt1->where("pendidikan_id", "1")->count() + $data_rt1->where("pendidikan_id", "2")->count() + $data_rt1->where("pendidikan_id", "3")->count() + $data_rt1->where("pendidikan_id", "4")->count() + $data_rt1->where("pendidikan_id", "5")->count() + $data_rt1->where("pendidikan_id", "6")->count() + $data_rt1->where("pendidikan_id", "7")->count() + $data_rt1->where("pendidikan_id", "8")->count() + $data_rt1->where("pendidikan_id", "9")->count() + $data_rt1->where("pendidikan_id", "10")->count() }}</b></th>
                                    <th class="text-center"><b>{{ $data_rt2->where("pendidikan_id", "1")->count() + $data_rt2->where("pendidikan_id", "2")->count() + $data_rt2->where("pendidikan_id", "3")->count() + $data_rt2->where("pendidikan_id", "4")->count() + $data_rt2->where("pendidikan_id", "5")->count() + $data_rt2->where("pendidikan_id", "6")->count() + $data_rt2->where("pendidikan_id", "7")->count() + $data_rt2->where("pendidikan_id", "8")->count() + $data_rt2->where("pendidikan_id", "9")->count() + $data_rt2->where("pendidikan_id", "10")->count() }}</b></th>
                                    <th class="text-center"><b>{{ $data_rt3->where("pendidikan_id", "1")->count() + $data_rt3->where("pendidikan_id", "2")->count() + $data_rt3->where("pendidikan_id", "3")->count() + $data_rt3->where("pendidikan_id", "4")->count() + $data_rt3->where("pendidikan_id", "5")->count() + $data_rt3->where("pendidikan_id", "6")->count() + $data_rt3->where("pendidikan_id", "7")->count() + $data_rt3->where("pendidikan_id", "8")->count() + $data_rt3->where("pendidikan_id", "9")->count() + $data_rt3->where("pendidikan_id", "10")->count() }}</b></th>
                                    <th class="text-center"><b>{{ $data_rt4->where("pendidikan_id", "1")->count() + $data_rt4->where("pendidikan_id", "2")->count() + $data_rt4->where("pendidikan_id", "3")->count() + $data_rt4->where("pendidikan_id", "4")->count() + $data_rt4->where("pendidikan_id", "5")->count() + $data_rt4->where("pendidikan_id", "6")->count() + $data_rt4->where("pendidikan_id", "7")->count() + $data_rt4->where("pendidikan_id", "8")->count() + $data_rt4->where("pendidikan_id", "9")->count() + $data_rt4->where("pendidikan_id", "10")->count() }}</b></th> 
                                    <th class="text-center"><b>{{ $jmlBelumSekolah+$jmlBelumTamatSD+$jmlTamatSD+$jmlSLTP+$jmlSLTA+$jmlDiploma+$jmlSarmud+$jmlS1+$jmlS2+$jmlS3 }}</b></th>

                          
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