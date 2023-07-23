@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{route('pendidikans.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Ubah Jenjang Pendidikan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a>Beranda</a></div>
            <div class="breadcrumb-item"><a>Master Data</a></div>
            <div class="breadcrumb-item">Ubah Jenjang Pendidikan</div>
        </div>
    </div>

    <div class="section-body">
    <form method="POST" action="{{ route('pendidikans.update', $pendidikans->id) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
           
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card card-primary">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Jenjang Pendidikan</label>
                                <input id="jenjang" type="text" class="form-control @error('jenjang') is-invalid @enderror" name="jenjang" value="{{ $pendidikans->jenjang }}" required autocomplete="jenjang" autofocus>
                            </div>
                            
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-info">Ubah</button>
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
  $('#pendidikanLink').addClass('active')

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

