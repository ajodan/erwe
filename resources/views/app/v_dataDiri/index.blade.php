@extends('layouts.app')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Warga</h1>

      <div class="section-header-button">
        @if (Auth::user()->level != 'Rw')
          <a href="{{ route('data_diris.create') }}">
            <h4 class="btn btn-info ">Tambah Data Warga</h4>
          </a>
        @endif
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a>Beranda</a></div>
        <div class="breadcrumb-item"><a>Modul</a></div>
        <div class="breadcrumb-item">Data Warga</div>
      </div>
    </div>

    <div class="section-body">
     
      <div class="row">
        <div class="col-12">
            <div class="card-body">
              <div class="table-responsive">
                <a href="{{ route('datadiris.export') }}">
                  <h2 class="btn btn-primary">Cetak Data Warga Excel</h2>
                </a>
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Tempat/Tanggal Lahir</th>
                      <th class="text-center">Jenis Kelamin</th>
                      {{-- <th class="text-center">Nomor Kartu Keluarga (KK)/<br>Nomor Induk Kependudukan (NIK)</th> --}}
                      <th class="text-center">Pendidikan</th>
                      <th class="text-center">Status Keluarga</th>
                      @if (Auth::user()->level == 'Rw')
                        <th class="text-center">RT</th>
                      @else
                        <th class="text-center">Blok/No. Rumah</th>
                      @endif
                      <th class="text-center">Dikeluarkan Tanggal</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @include('_FUNCTION.tanggal-indo')
                    @foreach($data_diris as $res)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>

                      <td>{{ $res->nama_lengkap }}</td>
                      <td class="text-center">{{ $res->tempat_lahir }} / {{ tgl_indo($res->tanggal_lahir) }}</td>
                      <td class="text-center">{{ $res->jenis_kelamin }}</td>
                      {{-- <td class="text-center">{{ $res->no_kk }}/<br>{{ $res->nik }}</td> --}}
                      <td class="text-center">{{ $res->jenjang }}</td>
                     
                      <td class="text-center">{{ $res->hub_kk }}</td>
                      @if (Auth::user()->level == 'Rw')
                      <td class="text-center">0{{ $res->rt }}</td>
                      @else
                      <td class="text-center">{{ $res->no_rumah }}</td>
                      
                      @endif
                      <td class="text-center">{{ $res->tgl_keluar_kk }}</td>
                      <td class="text-center">
                        @if (Auth::user()->level != 'Rw')
                          <a href="{{ route('data_diris.show', $res->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                          <a href="{{ route('data_diris.edit', $res->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                          <button href="#" class="btn btn-danger" data-uri="{{ route('data_diris.destroy', $res->id) }}" data-toggle="modal" data-target="#deleteConf"><i class="fas fa-trash"></i></button>
                        @else 
                          <a href="{{ route('data_diris.show', $res->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        @endif
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@section('JsLibraries')
<script src="{{asset('assets/stisla/modules/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/izitoast/js/iziToast.min.js')}}"></script>
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/modules-datatables.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>
@endsection

@section('JsCustom')
<script>
  $('#dataDiriLink').addClass('active')
</script>

@include('layouts.modal.deleteConf')
@include('layouts.alerts.notif')
@endsection