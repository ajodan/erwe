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
            <h1>Tambah Data Warga</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a>Beranda</a></div>
                <div class="breadcrumb-item"><a>Formulir</a></div>
                <div class="breadcrumb-item">Tambah Data Warga</div>
            </div>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                 @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                 @endforeach
            </ul>
        </div>
    @endif
        <div class="section-body">
            <form method="POST" action="{{ route('data_diris.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="file" id="input-file-events" class="dropify-event" data-default-file="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" name="foto">
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
                                    
                                    <div class="form-group col-md-6">
                                        <label>Nomor Kartu Keluarga (KK)</label>*
                                        <input id="no_kk" name="no_kk" type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="16" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nomor Induk Kependudukan (NIK)</label>*
                                        <input id="nik" name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" onkeypress="return isNumberKey(event)" maxlength="16" required>
                                    </div>
                                    <div class="form-group col-md-8">*
                                        <label>Nama Lengkap</label>
                                        <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" required>
                                    </div>
                                    <div class="form-group col-md-4">*
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control selectric" name="jenis_kelamin" required>
                                            <option>Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki" selected="selected">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5">*
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-3">*
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control datepicker" required>
                                    </div>
                                    <div class="form-group col-md-4">*
                                            <label>Agama</label>
                                            <select class="form-control selectric" name="agama_id" required>
                                                <option>Pilih Agama</option>
                                                @foreach($agamas as $res)
                                                <option value="{{ $res->id }}">{{ $res->nama_agama }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Pendidikan</label>*
                                        <select class="form-control selectric" name="pendidikan_id" required>
                                            <option>Pilih Jenjang Pendidikan</option>
                                            @foreach($pendidikans as $res)
                                            <option value="{{ $res->id }}">{{ $res->jenjang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Pekerjaan</label>*
                                        <select class="form-control selectric" name="pekerjaan_id" required>
                                            <option>Pilih Pekerjaan</option>
                                            @foreach($pekerjaans as $res)
                                            <option value="{{ $res->id }}">{{ $res->nama_pekerjaan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Hubungan dalam Kartu Keluarga</label>*
                                        <select class="form-control selectric" name="kk_id" required>
                                            <option>Pilih Hubungan dalam Kartu Keluarga</option>
                                            @foreach($status_kartu_keluargas as $res)
                                            <option value="{{ $res->id }}">{{ $res->hub_kk }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Status Pernikahan</label>*
                                        <select class="form-control selectric" name="pernikahan_id" required>
                                            <option>Pilih Status Pernikahan</option>
                                            @foreach($status_pernikahans as $res)
                                            <option value="{{ $res->id }}">{{ $res->pernikahan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Status Domisili KTP</label>*
                                        <select class="form-control selectric" name="status_ktp" required>
                                            <option>Pilih Status Domisili KTP</option>
                                            <option value="Tetap" selected="selected">Tetap</option>
                                            <option value="Belum Tetap">Belum Tetap</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Status Kepemilikan Rumah</label>*
                                        <select class="form-control selectric" name="status_rumah" required>
                                            <option>Pilih Status Kepemilikan Rumah</option>
                                            <option value="Milik Sendiri" selected="selected">Milik Sendiri</option>
                                            <option value="Sewa/Kontrak">Sewa/Kontrak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">*
                                        <label>Kewarganegaran</label>
                                        <select class="form-control selectric" name="kewarganegaraan" required>
                                            <option>Pilih Kewarganegaraan</option>
                                            <option value="WNI" selected="selected">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">*
                                        <label>Disabilitas</label>
                                        <select class="form-control selectric" name="cacat_id">
                                            <option>Pilih Jenis Cacat</option>
                                            @foreach($cacats as $res)
                                            <option value="{{ $res->id }}" selected="selected">{{ $res->jenis_cacat }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">*
                                        <label>Golongan Darah</label>
                                        <select class="form-control selectric" name="gol_darah" required>
                                            <option>Pilih Golongan Darah</option>
                                            <option value="Tidak Tahu" selected="selected">Tidak Tahu</option>
                                            <option value="A">A</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B">B</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB">AB</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O">O</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Nomor Ponsel/HP</label>
                                        <input id="no_hp" type="text" class="form-control" name="no_hp">
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label>Rukun Tetangga</label>*
                                        <select class="form-control selectric" name="rt" required>
                                            <option>Pilih Rukun Tetangga</option>
                                            <option value="1" selected="selected">RT 1</option>
                                            <option value="2">RT 2</option>
                                            <option value="3">RT 3</option>
                                            <option value="4">RT 4</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Blok/Nomor Rumah</label>*
                                        <input id="no_rumah" type="text" class="form-control" name="no_rumah" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Alamat Kartu Keluarga</label>*
                                        <textarea name="alamat_kartuKeluarga" id="alamat_kartuKeluarga" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Alamat Domisili</label>*
                                        <textarea name="alamat_domisili" id="alamat_domisili" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Status Dasar</label>*
                                        <select class="form-control selectric" name="status_dasar" required>
                                            <option>Pilih Status Dasar</option>
                                            <option value="Hidup" selected="selected">Hidup</option>
                                            <option value="Meninggal Dunia">Meninggal Dunia</option>
                                            <option value="Pindah">Pindah</option>
                                            <option value="Hilang">Hilang</option>
                                            <option value="Pergi">Pergi</option>
                                            <option value="Tidak Valid">Tidak Valid</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Tanggal Dikeluarkannya Kartu Keluarga (KK)</label>*
                                        <input type="text" name="tgl_keluar_kk" id="tgl_keluar_kk" class="form-control datepicker" required>
                                    </div>
                                    
                                </div>
                                *) Wajib diisi atau dipilih
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-info">Tambah Data</button>
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