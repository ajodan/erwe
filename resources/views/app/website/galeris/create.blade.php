@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{route('galeris.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Galeri</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a>Beranda</a></div>
            <div class="breadcrumb-item"><a>Website</a></div>
            <div class="breadcrumb-item">Data Galeri</div>
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
    <form method="POST" action="{{ route('galeris.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card card-primary">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">*
                            <label>Kategori Galeri</label>
                            <select class="form-control selectric" name="kategori_galeri_id">
                                <option>Pilih Kategori</option>
                                @foreach($kategoris as $res)
                                <option value="{{ $res->id }}" selected="selected">{{ $res->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">*
                                <label>Judul Galeri</label>
                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Gambar Galeri</label><br>
                                @if(empty($galeris->gambar))
                                    <input type="file" id="gambar" class="dropify-event" data-default-file="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" name="gambar">
                                @else
                                    <input type="file" id="gambar" class="dropify-event" data-default-file="{{asset('UploadedFile/gambarArtikel/'.$galeris->gambar)}}" name="gambar" style="width: auto;">
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">*
                                <label>Publish</label><br>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="is_publish" value="1" checked> Ya
                                    </label>
                                </div>
                                  <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="is_publish" value="0"> Tidak
                                    </label>
                                  </div>
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
  $('#agamassLink').addClass('active')

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

