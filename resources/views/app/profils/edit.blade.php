@extends('layouts.app')

@section('cssCustom')
<link rel="stylesheet" href="{{asset('assets/upload/dropify/css/dropify.min.css')}}">
@endsection
@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{route('profils.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Ubah Profil dan Ganti Password</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a>Beranda</a></div>
            <div class="breadcrumb-item"><a>Profil</a></div>
            <div class="breadcrumb-item">Ganti Password</div>
        </div>
    </div>

    <div class="section-body">
    <form method="POST" action="{{ route('profils.update', $profils->id) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
           
            <div class="col-12 col-md-3 col-lg-3">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                @if(empty($profils->profile))
                                    <input type="file" id="input-file-events" class="dropify-event" data-default-file="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" name="profile">
                                @else
                                    <input type="file" id="input-file-events" class="dropify-event" data-default-file="{{asset('UploadedFile/profilPelamar/'.$profils->profile)}}" name="profile" style="width: auto;">
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            @if(empty(Auth::user()->profile))
                            <img alt="image" src="{{asset('assets/stisla/img/avatar/avatar-5.png')}}" class="img-thumbnail">
                            @else
                            <img alt="image" src="{{asset('UploadedFile/profilPelamar/'.Auth::user()->profile)}}" class="img-thumbnail">
                            @endif
                            </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card card-primary">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label>Nama Lengkap</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $profils->name }}" required autocomplete="name" autofocus disabled>
                            </div>
                            <div class="form-group col-md-7">
                                <label>E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $profils->email }}" disabled >
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label>Nomor Kartu Keluarga</label>
                                <input id="no_kk" name="no_kk" value="{{$profils->no_kk}}"  maxLength="16" type="text" class="form-control" onkeypress="return isNumberKey(event)" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Rukun Tetangga (RT)</label>
                                <select class="form-control selectric" name="rt" disabled>
                                    <?php $rt = ['1', '2', '3','4']; ?>
                                    @foreach($rt as $key)
                                    @if($profils->rt == $key)
                                    <option value="{{ $key }}" selected> {{ $key }} </option>
                                    @else
                                    <option value="{{ $key }}"> {{ $key }} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Level Pengguna</label>
                                <select class="form-control selectric" name="level" disabled>
                                    <?php $level = ['Administrator', 'Warga', 'Sekretaris','Ketua','Bendahara','Rw']; ?>
                                    @foreach($level as $key)
                                    @if($profils->level == $key)
                                    <option value="{{ $key }}" selected> {{ $key }} </option>
                                    @else
                                    <option value="{{ $key }}"> {{ $key }} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-7">
                                <label>Nomor Telepon</label>
                                <input id="no_telp" name="no_telp" value="{{$profils->no_telp}}"  maxLength="50" type="text" class="form-control" onkeypress="return isNumberKey(event)">
                            </div>
                        </div>
                        <div class="row">
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="{{$profils->password_}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Konfirmasi Password</label>
                                <input type="password" class="form-control" name="password_" value="{{$profils->password_}}">
                            </div>
                        </div>
                        
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-info">Simpan</button>
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

<!-- Upload -->
<script src="{{asset('assets/upload/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/upload/form-file-uploads.min.js')}}"></script>
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

