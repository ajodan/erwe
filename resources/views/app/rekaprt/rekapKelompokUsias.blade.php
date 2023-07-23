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
                        <h4>Rekap Berdasarkan Kelompok Usia</h4>
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
                                    <th class="text-center">Kelompok Usia</th>
                                    <th class="text-center">Jumlah Warga</th>
                                </tr>
                                <tr>
                                    <th>Balita (Usia 0 - 5 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rtbalita = 0;
                                        @endphp
                                        @foreach($data_rt as $res)
                                        @if(getAge($res->tanggal_lahir) < 5)
                                            @php
                                            $rtbalita++;
                                            @endphp
                                            @endif
                                            @endforeach
                                            {{ $rtbalita }}
                                    </th>

                                </tr>
                                <tr>
                                    <th>Kanak-Kanak (Usia 5 - 11 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rtkanak = 0;
                                        @endphp
                                        @foreach($data_rt as $res)
                                        @if(getAge($res->tanggal_lahir) >= 5 && getAge($res->tanggal_lahir) < 12)
                                            @php
                                            $rtkanak++;
                                            @endphp
                                            @endif
                                            @endforeach
                                            {{ $rtkanak }}
                                    </th>

                                </tr>
                                <tr>
                                    <th>Remaja Awal (Usia 12 - 16 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rtRAwal = 0;
                                        @endphp
                                        @foreach($data_rt as $res)
                                        @if(getAge($res->tanggal_lahir) >= 12 && getAge($res->tanggal_lahir) < 17)
                                            @php
                                            $rtRAwal++;
                                            @endphp
                                            @endif
                                            @endforeach
                                            {{ $rtRAwal }}
                                    </th>
                                   

                                </tr>
                                <tr>
                                    <th>Remaja Akhir (Usia 17 - 25 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rtRAkhir = 0;
                                        @endphp
                                        @foreach($data_rt as $res)
                                        @if(getAge($res->tanggal_lahir) >= 17 && getAge($res->tanggal_lahir) < 26)
                                            @php
                                            $rtRAkhir++;
                                            @endphp
                                            @endif
                                            @endforeach
                                            {{ $rtRAkhir }}
                                    </th>
                                    
                                  
                                </tr>
                                <tr>
                                    <th>Dewasa Awal (Usia 26 - 35 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rtDAwal = 0;
                                        @endphp
                                        @foreach($data_rt as $res)
                                        @if(getAge($res->tanggal_lahir) >= 26 && getAge($res->tanggal_lahir) < 36)
                                            @php
                                            $rtDAwal++;
                                            @endphp
                                            @endif
                                            @endforeach
                                            {{ $rtDAwal }}
                                    </th>
                                    
                                    
                                </tr>
                                <tr>
                                    <th>Dewasa Akhir (Usia 36 - 45 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rtDAkhir = 0;
                                        @endphp
                                        @foreach($data_rt as $res)
                                        @if(getAge($res->tanggal_lahir) >= 36 && getAge($res->tanggal_lahir) < 46)
                                            @php
                                            $rtDAkhir++;
                                            @endphp
                                            @endif
                                            @endforeach
                                            {{ $rtDAkhir }}
                                    </th>
                                   
                                   
                                </tr>
                                <tr>
                                    <th>Lansia Awal (Usia 46 - 55 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rtLansiaAwal = 0;
                                        @endphp
                                        @foreach($data_rt as $res)
                                        @if(getAge($res->tanggal_lahir) >= 46 && getAge($res->tanggal_lahir) < 56)
                                            @php
                                            $rtLansiaAwal++;
                                            @endphp
                                            @endif
                                            @endforeach
                                            {{ $rtLansiaAwal }}
                                    </th>
                                    
                                   
                                </tr>
                                <tr>
                                    <th>Lansia Akhir (Usia 56 - 65 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rtLansiaAkhir = 0;
                                        @endphp
                                        @foreach($data_rt as $res)
                                        @if(getAge($res->tanggal_lahir) >= 56 && getAge($res->tanggal_lahir) < 65)
                                            @php
                                            $rtLansiaAkhir++;
                                            @endphp
                                            @endif
                                            @endforeach
                                            {{ $rtLansiaAkhir }}
                                    </th>
                                   
                                  
                                </tr>
                                <tr>
                                    <th>Manula (Usia Lebih dari 65 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rtManula = 0;
                                        @endphp
                                        @foreach($data_rt as $res)
                                        @if(getAge($res->tanggal_lahir) >= 65)
                                            @php
                                            $rtManula++;
                                            @endphp
                                            @endif
                                            @endforeach
                                            {{ $rtManula }}
                                    </th>
                                   
                                  
                                </tr>
                                <tr>
                                    <th><b>Jumlah Keseluruhan</b></th>
                                    {{-- <?php 
                                    $jmlRT = ;
                                    ?>
                                    <th class="text-center">{{ $jmlRT }}</th> --}}
                                    <th class="text-center"><b>{{ $rtbalita+$rtkanak+$rtRAwal+$rtRAkhir+$rtDAwal+$rtDAkhir+$rtLansiaAwal+$rtLansiaAkhir+$rtManula }}</b></th>

                          
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