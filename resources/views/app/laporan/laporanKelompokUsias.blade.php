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
                                    <th class="text-center">RT 01</th>
                                    <th class="text-center">RT 02</th>
                                    <th class="text-center">RT 03</th>
                                    <th class="text-center">RT 04</th>
                                    <th class="text-center">Jumlah</th>
                                </tr>
                                <tr>
                                    <th>Balita (Usia 0 - 5 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rt01Balita = 0;
                                        @endphp
                                        @foreach($data_rt1 as $res)
                                        @if(getAge($res->tanggal_lahir) < 5)
                                            @if($res->rt == "1")
                                            @php
                                            $rt01Balita++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt01Balita }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt02Balita = 0;
                                        @endphp
                                        @foreach($data_rt2 as $res)
                                        @if(getAge($res->tanggal_lahir) < 5)
                                            @if($res->rt == "2")
                                            @php
                                            $rt02Balita++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt02Balita }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt03Balita = 0;
                                        @endphp
                                        @foreach($data_rt3 as $res)
                                        @if(getAge($res->tanggal_lahir) < 5)
                                            @if($res->rt == "3")
                                            @php
                                            $rt03Balita++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt03Balita }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt04Balita = 0;
                                        @endphp
                                        @foreach($data_rt4 as $res)
                                        @if(getAge($res->tanggal_lahir) < 5)
                                            @if($res->rt == "4")
                                            @php
                                            $rt04Balita++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt04Balita }}
                                    </th>
                                    <?php 
                                    $jmlBalita = $rt01Balita + $rt02Balita + $rt03Balita + $rt04Balita;
                                    ?>
                                    <th class="text-center">{{ $jmlBalita }}</th>
                                </tr>
                                <tr>
                                    <th>Kanak-Kanak (Usia 5 - 11 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rt01Kanak = 0;
                                        @endphp
                                        @foreach($data_rt1 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 5 && getAge($res->tanggal_lahir) < 12)
                                            @if($res->rt == "1")
                                            @php
                                            $rt01Kanak++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt01Kanak }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt02Kanak = 0;
                                        @endphp
                                        @foreach($data_rt2 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 5 && getAge($res->tanggal_lahir) < 12)
                                            @if($res->rt == "2")
                                            @php
                                            $rt02Kanak++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt02Kanak }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt03Kanak = 0;
                                        @endphp
                                        @foreach($data_rt3 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 5 && getAge($res->tanggal_lahir) < 12)
                                            @if($res->rt == "3")
                                            @php
                                            $rt03Kanak++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt03Kanak }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt04Kanak = 0;
                                        @endphp
                                        @foreach($data_rt4 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 5 && getAge($res->tanggal_lahir) < 12)
                                            @if($res->rt == "4")
                                            @php
                                            $rt04Kanak++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt04Kanak }}
                                    </th>
                                    <?php 
                                    $jmlAnak = $rt01Kanak + $rt02Kanak + $rt03Kanak + $rt04Kanak;
                                    ?>
                                    <th class="text-center">{{ $jmlAnak }}</th>
                                </tr>
                                <tr>
                                    <th>Remaja Awal (Usia 12 - 16 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rt01RAwal = 0;
                                        @endphp
                                        @foreach($data_rt1 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 12 && getAge($res->tanggal_lahir) < 17)
                                            @if($res->rt == "1")
                                            @php
                                            $rt01RAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt01RAwal }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt02RAwal = 0;
                                        @endphp
                                        @foreach($data_rt2 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 12 && getAge($res->tanggal_lahir) < 17)
                                            @if($res->rt == "2")
                                            @php
                                            $rt02RAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt02RAwal }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt03RAwal = 0;
                                        @endphp
                                        @foreach($data_rt3 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 12 && getAge($res->tanggal_lahir) < 17)
                                            @if($res->rt == "3")
                                            @php
                                            $rt03RAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt03RAwal }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt04RAwal = 0;
                                        @endphp
                                        @foreach($data_rt4 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 12 && getAge($res->tanggal_lahir) < 17)
                                            @if($res->rt == "4")
                                            @php
                                            $rt04RAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt04RAwal }}
                                    </th>
                                    <?php 
                                    $jmlRemajaAwal = $rt01RAwal + $rt02RAwal + $rt03RAwal + $rt04RAwal;
                                    ?>
                                    <th class="text-center">{{ $jmlRemajaAwal }}</th>
                                </tr>
                                <tr>
                                    <th>Remaja Akhir (Usia 17 - 25 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rt01RAkhir = 0;
                                        @endphp
                                        @foreach($data_rt1 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 17 && getAge($res->tanggal_lahir) < 26)
                                            @if($res->rt == "1")
                                            @php
                                            $rt01RAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt01RAkhir }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt02RAkhir = 0;
                                        @endphp
                                        @foreach($data_rt2 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 17 && getAge($res->tanggal_lahir) < 26)
                                            @if($res->rt == "2")
                                            @php
                                            $rt02RAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt02RAkhir }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt03RAkhir = 0;
                                        @endphp
                                        @foreach($data_rt3 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 17 && getAge($res->tanggal_lahir) < 26)
                                            @if($res->rt == "3")
                                            @php
                                            $rt03RAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt03RAkhir }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt04RAkhir = 0;
                                        @endphp
                                        @foreach($data_rt4 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 17 && getAge($res->tanggal_lahir) < 26)
                                            @if($res->rt == "4")
                                            @php
                                            $rt04RAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt04RAkhir }}
                                    </th>
                                    <?php 
                                    $jmlRemajaAkhir = $rt01RAkhir + $rt02RAkhir + $rt03RAkhir + $rt04RAkhir;
                                    ?>
                                    <th class="text-center">{{ $jmlRemajaAkhir }}</th>
                                </tr>
                                <tr>
                                    <th>Dewasa Awal (Usia 26 - 35 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rt01DAwal = 0;
                                        @endphp
                                        @foreach($data_rt1 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 26 && getAge($res->tanggal_lahir) < 36)
                                            @if($res->rt == "1")
                                            @php
                                            $rt01DAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt01DAwal }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt02DAwal = 0;
                                        @endphp
                                        @foreach($data_rt2 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 26 && getAge($res->tanggal_lahir) < 36)
                                            @if($res->rt == "2")
                                            @php
                                            $rt02DAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt02DAwal }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt03DAwal = 0;
                                        @endphp
                                        @foreach($data_rt3 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 26 && getAge($res->tanggal_lahir) < 36)
                                            @if($res->rt == "3")
                                            @php
                                            $rt03DAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt03DAwal }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt04DAwal = 0;
                                        @endphp
                                        @foreach($data_rt4 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 26 && getAge($res->tanggal_lahir) < 36)
                                            @if($res->rt == "4")
                                            @php
                                            $rt04DAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt04DAwal }}
                                    </th>
                                    <?php 
                                    $jmlDewasaAwal = $rt01DAwal + $rt02DAwal + $rt03DAwal + $rt04DAwal;
                                    ?>
                                    <th class="text-center">{{ $jmlDewasaAwal }}</th>
                                </tr>
                                <tr>
                                    <th>Dewasa Awal (Usia 36 - 45 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rt01DAkhir = 0;
                                        @endphp
                                        @foreach($data_rt1 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 36 && getAge($res->tanggal_lahir) < 46)
                                            @if($res->rt == "1")
                                            @php
                                            $rt01DAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt01DAkhir }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt02DAkhir = 0;
                                        @endphp
                                        @foreach($data_rt2 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 36 && getAge($res->tanggal_lahir) < 46)
                                            @if($res->rt == "2")
                                            @php
                                            $rt02DAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt02DAkhir }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt03DAkhir = 0;
                                        @endphp
                                        @foreach($data_rt3 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 36 && getAge($res->tanggal_lahir) < 46)
                                            @if($res->rt == "3")
                                            @php
                                            $rt03DAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt03DAkhir }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt04DAkhir = 0;
                                        @endphp
                                        @foreach($data_rt4 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 36 && getAge($res->tanggal_lahir) < 46)
                                            @if($res->rt == "4")
                                            @php
                                            $rt04DAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt04DAkhir }}
                                    </th>
                                    <?php 
                                    $jmlDewasaAkhir = $rt01DAkhir + $rt02DAkhir + $rt03DAkhir + $rt04DAkhir;
                                    ?>
                                    <th class="text-center">{{ $jmlDewasaAkhir }}</th>
                                </tr>
                                <tr>
                                    <th>Lansia Awal (Usia 46 - 55 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rt01LAwal = 0;
                                        @endphp
                                        @foreach($data_rt1 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 46 && getAge($res->tanggal_lahir) < 56)
                                            @if($res->rt == "1")
                                            @php
                                            $rt01LAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt01LAwal }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt02LAwal = 0;
                                        @endphp
                                        @foreach($data_rt2 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 46 && getAge($res->tanggal_lahir) < 56)
                                            @if($res->rt == "2")
                                            @php
                                            $rt02LAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt02LAwal }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt03LAwal = 0;
                                        @endphp
                                        @foreach($data_rt3 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 46 && getAge($res->tanggal_lahir) < 56)
                                            @if($res->rt == "3")
                                            @php
                                            $rt03LAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt03LAwal }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt04LAwal = 0;
                                        @endphp
                                        @foreach($data_rt4 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 46 && getAge($res->tanggal_lahir) < 56)
                                            @if($res->rt == "4")
                                            @php
                                            $rt04LAwal++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt04LAwal }}
                                    </th>
                                    <?php 
                                    $jmlLansiaAwal = $rt01LAwal + $rt02LAwal + $rt03LAwal + $rt04LAwal;
                                    ?>
                                    <th class="text-center">{{ $jmlLansiaAwal }}</th>
                                </tr>
                                <tr>
                                    <th>Lansia Akhir (Usia 56 - 65 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rt01LAkhir = 0;
                                        @endphp
                                        @foreach($data_rt1 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 56 && getAge($res->tanggal_lahir) < 65)
                                            @if($res->rt == "1")
                                            @php
                                            $rt01LAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt01LAkhir }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt02LAkhir = 0;
                                        @endphp
                                        @foreach($data_rt2 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 56 && getAge($res->tanggal_lahir) < 65)
                                            @if($res->rt == "2")
                                            @php
                                            $rt02LAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt02LAkhir }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt03LAkhir = 0;
                                        @endphp
                                        @foreach($data_rt3 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 56 && getAge($res->tanggal_lahir) < 65)
                                            @if($res->rt == "3")
                                            @php
                                            $rt03LAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt03LAkhir }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt04LAkhir = 0;
                                        @endphp
                                        @foreach($data_rt4 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 56 && getAge($res->tanggal_lahir) < 65)
                                            @if($res->rt == "4")
                                            @php
                                            $rt04LAkhir++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt04LAkhir }}
                                    </th>
                                    <?php 
                                    $jmlLansiaAkhir = $rt01LAkhir + $rt02LAkhir + $rt03LAkhir + $rt04LAkhir;
                                    ?>
                                    <th class="text-center">{{ $jmlLansiaAkhir }}</th>
                                </tr>
                                <tr>
                                    <th>Manula (Usia Lebih dari 65 Tahun)</th>
                                    <th class="text-center">
                                        @php
                                        $rt01Manula = 0;
                                        @endphp
                                        @foreach($data_rt1 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 65)
                                            @if($res->rt == "1")
                                            @php
                                            $rt01Manula++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt01Manula }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt02Manula = 0;
                                        @endphp
                                        @foreach($data_rt2 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 65)
                                            @if($res->rt == "2")
                                            @php
                                            $rt02Manula++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt02Manula }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt03Manula = 0;
                                        @endphp
                                        @foreach($data_rt3 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 65)
                                            @if($res->rt == "3")
                                            @php
                                            $rt03Manula++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt03Manula }}
                                    </th>
                                    <th class="text-center">
                                        @php
                                        $rt04Manula = 0;
                                        @endphp
                                        @foreach($data_rt4 as $res)
                                        @if(getAge($res->tanggal_lahir) >= 65)
                                            @if($res->rt == "4")
                                            @php
                                            $rt04Manula++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $rt04Manula }}
                                    </th>
                                    <?php 
                                    $jmlManula = $rt01Manula + $rt02Manula + $rt03Manula + $rt04Manula;
                                    ?>
                                    <th class="text-center">{{ $jmlManula }}</th>
                                </tr>
                                <tr>
                                    <th><b>Jumlah Keseluruhan</b></th>
                                    <th class="text-center">{{ $rt01Balita+$rt01Kanak+$rt01RAwal+$rt01RAkhir+$rt01DAwal+$rt01DAkhir+$rt01LAwal+$rt01LAkhir+$rt01Manula }}</b></th>
                                    <th class="text-center">{{ $rt02Balita+$rt02Kanak+$rt02RAwal+$rt02RAkhir+$rt02DAwal+$rt02DAkhir+$rt02LAwal+$rt02LAkhir+$rt02Manula }}</b></th>
                                    <th class="text-center">{{ $rt03Balita+$rt03Kanak+$rt03RAwal+$rt03RAkhir+$rt03DAwal+$rt03DAkhir+$rt03LAwal+$rt03LAkhir+$rt03Manula }}</b></th>
                                    <th class="text-center">{{ $rt04Balita+$rt04Kanak+$rt04RAwal+$rt04RAkhir+$rt04DAwal+$rt04DAkhir+$rt04LAwal+$rt04LAkhir+$rt04Manula }}</b></th>
                                    <th class="text-center"><b>{{ $jmlBalita+$jmlAnak+$jmlRemajaAwal+$jmlRemajaAkhir+$jmlDewasaAwal+$jmlDewasaAkhir+$jmlLansiaAwal+$jmlLansiaAkhir+$jmlManula }}</b></th>

                          
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