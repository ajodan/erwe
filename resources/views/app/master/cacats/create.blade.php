@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{route('cacats.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Jenis Disabilitas</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a>Beranda</a></div>
            <div class="breadcrumb-item"><a>Master Data</a></div>
            <div class="breadcrumb-item">Jenis Disabilitas</div>
        </div>
    </div>

    <div class="section-body">
    <form method="POST" action="{{ route('cacats.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card card-primary">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Jenis Disabilitas</label>
                                <input id="jenis_cacat" type="text" class="form-control @error('jenis_cacat') is-invalid @enderror" name="jenis_cacat" value="{{ old('jenis_cacat') }}" required autocomplete="jenis_cacat" autofocus>
                            </div>
                        </div>
                        
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-info">Tambah</button>
                        </div>
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
  //$('#penggunaLink').addClass('active')
  $('#cacatLink').addClass('active')

// text to number
// function isNumberKey(evt)
// {
//     var charCode = (evt.which) ? evt.which : event.keyCode
//     if (charCode > 31 && (charCode < 48 || charCode > 57))
//     return false;

//     return true;
// }
</script>

@include('layouts.alerts.notif')
@endsection

