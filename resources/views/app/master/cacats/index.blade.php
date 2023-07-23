@extends('layouts.app')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Jenis Disabilitas</h1>

      <div class="section-header-button">
        <a href="{{ route('cacats.create') }}">
          <h4 class="btn btn-info ">Tambah</h4>
        </a>
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a>Beranda</a></div>
        <div class="breadcrumb-item"><a>Master Data</a></div>
        <div class="breadcrumb-item">Jenis Disabilitas</div>
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
                      <th>Jenis Disabilitas</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cacats as $res)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>{{ $res->jenis_cacat }}</td>
                      <td class="text-center">
                        <a href="{{ route('cacats.edit', $res->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <button href="#" class="btn btn-danger" data-uri="{{ route('cacats.destroy', $res->id) }}" data-toggle="modal" data-target="#deleteConf"><i class="fas fa-trash"></i></button>
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
 // $('#penggunaLink').addClass('active')
  $('#cacatLink').addClass('active')
</script>

@include('layouts.modal.deleteConf')
@include('layouts.alerts.notif')
@endsection