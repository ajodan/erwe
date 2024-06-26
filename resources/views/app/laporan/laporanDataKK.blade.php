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
        <div class="text-center mt-3 text-info">
            <h4>Laporan Data Sesuai Nomor Kartu Keluarga</h4>
            <h5 style="font-family:'Courier New', Courier, monospace;
                    ">No. {{ $data_kk->no_kk }}</h5>
        </div>
        <br>
        <h6>Dengan alamat domisili: {{ $data_kk->alamat_domisili }}</h6>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
            <thead>
                <tr class="text-center" style="background-color: #eee;">
                    <th style="width:10px;">No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>

                </tr>
            </thead>
            <tbody>
                @include('_FUNCTION.tanggal-indo')
                @foreach ($data_diris as $res)
                <tr>
                    <td class="text-center">{{ $loop->iteration}}</td>
                    <td>{{ $res->nama_lengkap }} </td>
                    <td class="text-center">
                        <span class="badge badge-info" style="border:none;">{{ $res->nik }}</span>
                    </td>
                    <td class="text-center">{{ $res->jenis_kelamin }}</td>
                    <td class="text-center">{{ $res->tempat_lahir }}</td>
                    <td class="text-center">{{ tgl_indo($res->tanggal_lahir) }}</td>
                    <td class="text-center">{{ $res->nama_agama }}</td>
                    <td class="text-center">{{ $res->jenjang }}</td>
                    <td class="text-center">{{ $res->nama_pekerjaan }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
            <br>
            <table class="table table-bordered table-sm" style="width:800px;">
                <thead>
                    <tr class="text-center" style="background-color: #eee;">
                        <th style="width:50px;">No</th>
                        <th style="width:400px;">Status Perkawinan</th>
                        <th style="width:400px;">Status Hubungan Dalam Keluarga</th>
                        <th style="width:400px;">Kewarganegaraan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_diris as $res)
                    <tr class="text-center">
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $res->Pernikahan->pernikahan }} </td>
                        <td>{{ $res->KartuKeluarga->hub_kk }} </td>
                        <td>{{ $res->kewarganegaraan }} </td>
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
