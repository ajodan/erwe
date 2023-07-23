@extends('layouts.app')
@section('content')
@include('_FUNCTION.age')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-user-friends"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pengguna</h4>
                  </div>
                  <div class="card-body">
                    {{ $pengguna->count() }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-id-card"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Data Warga</h4>
                  </div>
                  <div class="card-body">
                    {{$data_diris->count()}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kartu Keluarga</h4>
                  </div>
                  <div class="card-body">
                    {{$kartu_keluargas->count()}}
                  </div>
                </div>
              </div>
            </div>                  
        </div>
        
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>Informasi Data Warga!</h4>
                        <div class="card-header-action">
                            <div class="badge badge-primary">
                                Tahun
                                <script>document.write(new Date().getFullYear()); </script>
                            </div>
                        </div>
                    </div>
                    <div class="card-body info">
                        <span>Informasi Data Warga Rukun Tetangga <b>0{{$rt}}</b></span>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-lg-3">RT/RW</strong>
                                <span style="padding-left:30px;">: </span>
                                <span><b>0{{$rt}}</b>/13</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-lg-2">Desa</strong>
                                <span style="padding-left:45px;">:</span>
                                <span>Karangsatria</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-lg-2">Kecamatan</strong>
                                <span style="padding-left:6px;">:</span>
                                <span>Tambun Utara</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-2">Kabupaten</strong>
                                <span style="padding-left:8px;">:</span>
                                <span>Bekasi</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <strong class="col-2">Provinsi</strong>
                                <span style="padding-left:26px;">:</span>
                                <span>Jawa Barat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>Kategori Usia</h4>
                        <div class="card-header-action">
                            <img class="img-fluid mt-1 img-shadow"
                                src="{{asset('assets/stisla/modules/flag-icon-css/flags/4x3/id.svg')}}" alt="image"
                                width="40">
                        </div>
                    </div>
                    
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped table-sm">
                                <tr class="alert alert-light">
                                    <th></th>
                                    <td class="text-center">Laki-Laki</td>
                                    <td class="text-center">Perempuan</td>
                                    <td class="text-center">Total</td>
                                </tr>
                                <tr class="alert alert-light">
                                    <th class="text-center alert alert-success">Jumlah Warga</th>
                                    <td class="text-center alert alert-success">
                                        <strong>
                                            {{ $jenis_kelamins->where("jenis_kelamin", "Laki-Laki")->count() }}
                                        </strong>
                                    </td>
                                    <td class="text-center alert alert-success">
                                        <strong>
                                            {{ $jenis_kelamins->where("jenis_kelamin", "Perempuan")->count() }}
                                        </strong>
                                    </td>
                                    <td class="text-center alert alert-success">
                                        <strong>
                                            {{ $jenis_kelamins->count() }}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="col-md-12" style="padding-right:110px;">Balita</span>
                                        <span class="col-md-12">(0 s/d 5 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $balitalaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) < 5)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $balitalaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $balitalaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $balitaperempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) < 5)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $balitaperempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $balitaperempuan }}
                                    </td>
                                    <td class="text-center">{{ $balitalaki + $balitaperempuan }}</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="col-md-12" style="padding-right:61px;">Kanak-Kanak</span>
                                        <span class="col-md-12">(5 s/d 11 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $anakLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 5 && getAge($res->tanggal_lahir) < 12)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $anakLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $anakLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $anakPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 5 && getAge($res->tanggal_lahir) < 12)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $anakPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $anakPerempuan }}
                                    </td>
                                    <td class="text-center">{{ $anakLaki + $anakPerempuan }}</td>
                                </tr>

                                <tr>
                                    <th>
                                        <span class="col-md-12" style="padding-right:62px;">Remaja Awal</span>
                                        <span class="col-md-12">(12 s/d 16 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $remajaAwalLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 12 && getAge($res->tanggal_lahir) < 17)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $remajaAwalLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $remajaAwalLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $remajaAwalPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 12 && getAge($res->tanggal_lahir) < 17)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $remajaAwalPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $remajaAwalPerempuan }}
                                    </td>
                                    <td class="text-center">{{ $remajaAwalLaki + $remajaAwalPerempuan }}</td>
                                </tr>

                                <tr>
                                    <th>
                                        <span class="col-md-12" style="padding-right:62px;">Remaja Akhir</span>
                                        <span class="col-md-12">(17 s/d 25 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $remajaAkhirLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 17 && getAge($res->tanggal_lahir) < 26)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $remajaAkhirLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $remajaAkhirLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $remajaAkhirPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 17 && getAge($res->tanggal_lahir) < 26)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $remajaAkhirPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $remajaAkhirPerempuan }}
                                    </td>
                                    <td class="text-center">{{ $remajaAkhirLaki + $remajaAkhirPerempuan }}</td>
                                </tr>

                                <tr>
                                    <th>
                                        <span class="col-md-12" style="padding-right:61px;">Dewasa Awal</span>
                                        <span class="col-md-12">(26 s/d 35 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $dewasaAwalLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 26 && getAge($res->tanggal_lahir) < 36)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $dewasaAwalLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $dewasaAwalLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $dewasaAwalPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 26 && getAge($res->tanggal_lahir) < 36)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $dewasaAwalPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $dewasaAwalPerempuan }}
                                    </td>
                                    <td class="text-center">{{ $dewasaAwalLaki + $dewasaAwalPerempuan }}</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="col-md-12" style="padding-right:60px;">Dewasa Akhir</span>
                                        <span class="col-md-12">(36 s/d 45 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $dewasaAkhirLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 36 && getAge($res->tanggal_lahir) < 46)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $dewasaAkhirLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $dewasaAkhirLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $dewasaAkhirPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 36 && getAge($res->tanggal_lahir) < 46)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $dewasaAkhirPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $dewasaAkhirPerempuan }}
                                    </td>
                                    <td class="text-center">{{ $dewasaAkhirLaki + $dewasaAkhirPerempuan }}</td>
                                </tr>

                                <tr>
                                    <th>
                                        <span class="col-md-12" style="padding-right:72px;">Lansia Awal</span>
                                        <span class="col-md-12">(46 s/d 55 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $lansiaAwalLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 46 && getAge($res->tanggal_lahir) < 56)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $lansiaAwalLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $lansiaAwalLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $lansiaAwalPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 46 && getAge($res->tanggal_lahir) < 56)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $lansiaAwalPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $lansiaAwalPerempuan }}
                                    </td>
                                    <td class="text-center">{{ $lansiaAwalLaki + $lansiaAwalPerempuan }}</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="col-md-12" style="padding-right:70px;">Lansia Akhir</span>
                                        <span class="col-md-12">(56 s/d 65 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $lansiaAkhirLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 56 && getAge($res->tanggal_lahir) < 65)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $lansiaAkhirLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $lansiaAkhirLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $lansiaAkhirPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 56 && getAge($res->tanggal_lahir) < 65)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $lansiaAkhirPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $lansiaAkhirPerempuan }}
                                    </td>
                                    <td class="text-center">{{ $lansiaAkhirLaki + $lansiaAkhirPerempuan }}</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="col-md-12" style="padding-right:103px;">Manula</span>
                                        <span class="col-md-12">(>65 Tahun)</span>
                                    </th>
                                    <td class="text-center">
                                        @php
                                        $manulaLaki = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 65)
                                            @if($res->jenis_kelamin == "Laki-Laki")
                                            @php
                                            $manulaLaki++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $manulaLaki }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                        $manulaPerempuan = 0;
                                        @endphp
                                        @foreach($data_diris as $res)
                                        @if(getAge($res->tanggal_lahir) >= 65)
                                            @if($res->jenis_kelamin == "Perempuan")
                                            @php
                                            $manulaPerempuan++;
                                            @endphp
                                            @endif
                                            @endif
                                            @endforeach
                                            {{ $manulaPerempuan }}
                                    </td>
                                    <td class="text-center">{{ $manulaLaki + $manulaPerempuan }}</td>
                                </tr>
                            </table>
                            *) Kategori usia menurut Departemen Kesehatan Republik Indonesia tahun 2009 
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card card-hero card-danger">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-grin-beam"></i>
                        </div>
                        <center>
                            <h4>{{ $KepalaKeluargaCount }}</h4>
                            <div class="card-description"><strong>KEPALA KELUARGA</strong></div>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>Berdasarkan Pendidikan Warga</h4>
                        <div class="card-header-action">
                            <img class="img-fluid mt-1 img-shadow"
                                src="{{asset('assets/stisla/modules/flag-icon-css/flags/4x3/id.svg')}}" alt="image"
                                width="40">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped table-hover table-md">
                                <tr>
                                    <th>Tidak/Belum Sekolah</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 1)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Belum Tamat SD/Sederajat</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 2)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Sudah Tamat SD/Sederajat</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 3)->count() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>SLTP/Sederajat</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 4)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>SLTA/Sederajat</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 5)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Diploma I/II</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 6)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Akademi/Diploma III/Sarjana Muda</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 7)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Diploma IV/Strata</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 8)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Strata II</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 9)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Strata III</th>
                                    <th>:</th>
                                    <td>{{ $pendidikans->where("pendidikan_id", 10)->count() }}</td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>Berdasarkan Agama Warga</h4>
                        <div class="card-header-action">
                            <img class="img-fluid mt-1 img-shadow"
                                src="{{asset('assets/stisla/modules/flag-icon-css/flags/4x3/id.svg')}}" alt="image"
                                width="40">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped table-hover table-md">
                                <tr>
                                    <th>Islam</th>
                                    <th>:</th>
                                    <td>{{ $agamas->where("agama_id", 1)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Kristen</th>
                                    <th>:</th>
                                    <td>{{ $agamas->where("agama_id", 2)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Katholik</th>
                                    <th>:</th>
                                    <td>{{ $agamas->where("agama_id", 3)->count() }}</td>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Hindu</th>
                                    <th>:</th>
                                    <td>{{ $agamas->where("agama_id", 4)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Budha</th>
                                    <th>:</th>
                                    <td>{{ $agamas->where("agama_id", 5)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Konghucu</th>
                                    <th>:</th>
                                    <td>{{ $agamas->where("agama_id", 6)->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Kepercayaan</th>
                                    <th>:</th>
                                    <td>{{ $agamas->where("agama_id", 7)->count() }}</td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-primary">
                    <div class="card-header bg bg-light">
                        <h4>
                            Lokasi
                            <span>(Online)</span>
                        </h4>
                        <div class="card-header-action">
                            <img class="img-fluid mt-1 img-shadow"
                                src="{{asset('assets/stisla/modules/flag-icon-css/flags/4x3/id.svg')}}" alt="image"
                                width="40">
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d701.1586977003951!2d107.0459611738675!3d-6.2171519706346565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ed10cfee99b%3A0x15e80395979fd53f!2sMasjid%20Jami&#39;%20Al%20-%20Furqaan!5e0!3m2!1sid!2sid!4v1683540504080!5m2!1sid!2sid"
                        width="auto" height="430" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="alert alert-primary alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                        </button>
                       <strong class="h6"> 
                           Catatan : Hasil perhitungan ini dipengaruhi oleh kelengkapan data yang ada terutama Tanggal lahir, Jenis kelamin, dan Pendidikan.
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