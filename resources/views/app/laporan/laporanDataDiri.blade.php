@include('layouts.head.head')

<style>
    body{
        background-color: #fff !important;
    }
</style>

<section class="section">
    <div class="print-padding d-flex flex-column text-right mr-1"><br>
        <b>
            <p id="date" style="font-size: 15px;"></p>
        </b>
    </div>
    <div class="print-padding d-flex flex-column text-left">
        <div class="img-print d-flex justify-content-center mb-2">
            <img style="width:120px;" src="{{ asset('assets/stisla/img/logo/logo-rw13.png') }}" alt="RT">
        </div>
        <div class="w-full text-center d-flex justify-content-center flex-column">
            @if (auth()->user()->level == 'Rw')
            <h1>Rukun Warga</h1>
            <p>RW 13, Desa Karangsatria, Kecamatan Tambun Utara, Kabupaten Bekasi, Jawa Barat</p>
            @else
            <h1>Rukun Tetangga</h1>
            <p>RT 0{{ $rt }}/13, Desa Karangsatria, Kecamatan Tambun Utara, Kabupaten Bekasi, Jawa Barat</p>
            @endif

            
        </div>
        <div class="text-center mt-3">
            <h4 class="text-primary">Laporan Seluruh Data Warga</h4>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="table-1">
            <thead>
                <tr class="text-center" style="background-color: #eee;">
                    <th style="width: 10px;">No</th>
                    <th>Nama Lengkap</th>
                    <th>Nomor KK</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    
                    <th>Pendidikan</th>
                    <th>Jenis Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                @include('_FUNCTION.tanggal-indo')
                @foreach ($data_diris as $res)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$res->nama_lengkap}} </td>
                    <td class="text-center">
                        <span class="badge badge-info" style="border:none;">{{$res->no_kk}}</span>
                    </td>
                    <td class="text-center">
                        <span class="badge badge-info" style="border:none;">{{$res->nik}}</span>
                    </td>
                    <td class="text-center">{{$res->jenis_kelamin}}</td>
                    <td class="text-center">{{$res->tempat_lahir }}</td>
                    <td class="text-center">{{ tgl_indo($res->tanggal_lahir) }}</td>
                    <td class="text-center">{{$res->nama_agama}}</td>
                    <td class="text-center">{{$res->jenjang}}</td>
                    <td class="text-center">{{$res->nama_pekerjaan}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</section>

@include('_FUNCTION.dateToday')
<script>
    window.print();  
</script>
