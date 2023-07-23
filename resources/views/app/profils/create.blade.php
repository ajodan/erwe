@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{route('administrators.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Administrator</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a>Beranda</a></div>
            <div class="breadcrumb-item"><a>Forms</a></div>
            <div class="breadcrumb-item">Tambah Administrator</div>
        </div>
    </div>

    <div class="section-body">
    <form method="POST" action="{{ route('administrators.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- <div class="col-12 col-md-4 col-lg-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Profil</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Pilih File</label>
                                <input type="file" name="profile" id="image-upload" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card card-primary">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nomor Kartu Keluarga</label>
                                <input id="no_kk" name="no_kk" type="text" class="form-control" maxLength="16" onkeypress="return isNumberKey(event)" value="{{ old('no_kk') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nomor Telepon</label>
                                <input id="no_telp" name="no_telp" type="text" class="form-control" maxLength="20" onkeypress="return isNumberKey(event)" value="{{ old('no_telp') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Rukun Tetangga</label>
                                <select class="form-control selectric" name="rt" value="{{ old('rt') }}" required>
                                    <option>Pilih Rukun Tetangga</option>
                                    <option value="1">RT 1</option>
                                    <option value="2">RT 2</option>
                                    <option value="3">RT 3</option>
                                    <option value="4">RT 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Level</label>
                                <select class="form-control selectric" name="level" value="{{ old('level') }}" required>
                                    <option>Pilih Level</option>
                                    <option value="Admin">Administrator</option>
                                    <option value="Ketua">Ketua RT</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Warga">Warga</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Konfirmasi Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" >
                            </div>
                        </div>
                        
                        
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-info">Tambah</button>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                        </button>
                        <strong class="h6"> 
                            Password harus mencapai 8 karakter, dan nomor telepon maksimal 11/12 angka
                        </strong>
                    </div>
                </div>
            </div>
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
@endsection

@section('JsSpecific')
<script src="{{asset('assets/stisla/js/page/features-post-create.js')}}"></script>
<script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>
@endsection

@section('JsCustom')
<script>
  $('#penggunaLink').addClass('active')
  $('#administratorsLink').addClass('active')

// text to number
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
}
</script>

@include('layouts.alerts.notif')
@endsection

