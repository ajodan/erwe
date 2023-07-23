@extends('layouts.app')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Galeri</h1>

      <div class="section-header-button">
        <a href="{{ route('galeris.create') }}">
          <h4 class="btn btn-info ">Tambah Galeri</h4>
        </a>
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a>Beranda</a></div>
        <div class="breadcrumb-item"><a>Website</a></div>
        <div class="breadcrumb-item">Data Galeri</div>
      </div>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Kategori Galeri</th>
                      <th class="text-left">Judul Galeri</th>
                      <th class="text-center">Publish</th>
                      <th class="text-center">Gambar</th>
                      <th class="text-center">Pengentri</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($galeris as $res)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td class="text-center">{{ $res->nama_kategori }}</td>
                      <td class="text-left">{{ $res->judul }}</td>
                      <td class="text-center">
                        <?php 
                        if($res->is_publish = '0')
                          echo "Tidak Aktif";
                        else {
                          echo "Aktif";
                        }?>
                      </td>
                      <td class="text-center"><img alt="Gambar Galeri" src="{{asset('UploadedFile/gambarGaleri/'.$res->gambar)}}" height="70" width="80"></td>
                      <td class="text-center">{{ $res->created_by }}</td>
                      <td class="text-center">
                        <a href="{{ route('galeris.edit', $res->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <button href="#" class="btn btn-danger" data-uri="{{ route('galeris.destroy', $res->id) }}" data-toggle="modal" data-target="#deleteConf"><i class="fas fa-trash"></i></button>
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
  $('#artikelLink').addClass('active')
</script>

@include('layouts.modal.deleteConf')
@include('layouts.alerts.notif')
@endsection