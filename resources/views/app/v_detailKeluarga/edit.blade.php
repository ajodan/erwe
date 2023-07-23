@extends('layouts.app')

@section('cssCustom')
<link rel="stylesheet" href="{{asset('assets/upload/dropify/css/dropify.min.css')}}">
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{route('data_diris.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail Data Keluarga</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a>Beranda</a></div>
                <div class="breadcrumb-item"><a>Formulir</a></div>
                <div class="breadcrumb-item">Detail Data Keluarga</div>
            </div>
        </div>

        <div class="section-body">
            <form method="POST" action="{{ route('data_diris.update', $data_diris->no_kk) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        @if(empty($data_diris->foto))
                                            <input type="file" id="input-file-events" class="dropify-event" data-default-file="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" name="foto">
                                        @else
                                            <input type="file" id="input-file-events" class="dropify-event" data-default-file="{{asset('UploadedFile/profilPelamar/'.$data_diris->foto)}}" name="foto" style="width: auto;">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-9">
                        <div class="card card-primary">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="form-group col-md-3">
                                        <label>Nomor Kartu Keluarga (KK)</label>
                                        <input id="no_kk" name="no_kk" type="text" class="form-control" onkeypress="return isNumberKey(event)" value="{{ $data_diris->no_kk }}" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Nomor Induk Kependudukan (NIK)</label>
                                        <input id="nik" name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" onkeypress="return isNumberKey(event)" value="{{ $data_diris->nik }}" readonly>
                                    </div>
                                    
                                    <div class="form-group col-md-3">
                                        <label>Rukun Tetangga (RT)</label>
                                        <select class="form-control selectric" name="rt" disabled="true">
                                            <?php $rt = ['1', '2', '3','4']; ?>
                                            @foreach($rt as $key)
                                            @if($data_diris->rt == $key)
                                            <option value="{{ $key }}" selected> 0{{ $key }} </option>
                                            @else
                                            <option value="{{ $key }}"> 0{{ $key }} </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Status Domisili KTP</label>
                                        <select class="form-control selectric" name="status_ktp" disabled="true">
                                            <?php $status_ktp = ['Tetap', 'Belum Tetap']; ?>
                                            @foreach($status_ktp as $key)
                                            @if($data_diris->status_ktp == $key)
                                            <option value="{{ $key }}" selected> {{ $key }} </option>
                                            @else
                                            <option value="{{ $key }}"> {{ $key }} </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Nama Lengkap</label>
                                        <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{ $data_diris->nama_lengkap }}" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Blok/Nomor Rumah</label>
                                        <input type="text" name="no_rumah" id="no_hp" value="{{ $data_diris->no_rumah }}" class="form-control" disabled="true">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Nomor Ponsel/HP</label>
                                        <input type="text" name="no_hp" id="no_hp" value="{{ $data_diris->no_hp }}" class="form-control" disabled="true">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Tanggal Dikeluarkannya Kartu Keluarga (KK)</label>
                                        <input type="text" name="tgl_keluar_kk" id="tgl_keluar_kk" class="form-control datepicker" value="{{ $data_diris->tgl_keluar_kk }}" disabled="true">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Alamat Kartu Keluarga</label>
                                        <textarea name="alamat_kartuKeluarga" id="alamat_kartuKeluarga" class="form-control" disabled="true">{{ $data_diris->alamat_kk }}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Alamat Domisili</label>
                                        <textarea name="alamat_domisili" id="alamat_domisili" class="form-control" disabled="true">{{ $data_diris->alamat_domisili }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    {{-- <button type="submit" class="btn btn-info">Ubah Data</button> --}}
                    <button type="button" onClick="history.go(-1);" class="btn btn-danger">Kembali</button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

@section('JsLibraries')
<script src="{{asset('assets/stisla/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('assets/stisla/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/izitoast/js/iziToast.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/features-post-create.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>

<!-- Upload -->
<script src="{{asset('assets/upload/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/upload/form-file-uploads.min.js')}}"></script>
@endsection

@section('JsCustom')
<script>
    // text to number
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>

<script>
    $('#dataDiriLink').addClass('active')
</script>

@include('layouts.alerts.notif')
@endsection