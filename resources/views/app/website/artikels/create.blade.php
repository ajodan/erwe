@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{route('artikels.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Artikel</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a>Beranda</a></div>
            <div class="breadcrumb-item"><a>Website</a></div>
            <div class="breadcrumb-item">Data Artikel</div>
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
    <form method="POST" action="{{ route('artikels.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card card-primary">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">*
                            <label>Kategori Artikel</label>
                            <select class="form-control selectric" name="kategori_id">
                                <option>Pilih Kategori</option>
                                @foreach($kategoris as $res)
                                <option value="{{ $res->id }}" selected="selected">{{ $res->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">*
                                <label>Judul Artikel</label>
                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">*
                                <label>Slug</label>
                                <input id="slug" type="hidden" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Isi Singkat Artikel</label>*
                                <textarea class="form-control rounded-0" name="isi_singkat" id="isi_singkat" rows="5" @error('isi_singkat') is-invalid @enderror" value="{{ old('isi_singkat') }}" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Deskripsi Artikel</label>*
                                <textarea class="form-control rounded-0" name="deskripsi" id="deskripsi" rows="10" @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" required></textarea>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Gambar Artikel</label><br>
                                @if(empty($artikels->gambar))
                                    <input type="file" id="gambar" class="dropify-event" data-default-file="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" name="gambar">
                                @else
                                    <input type="file" id="gambar" class="dropify-event" data-default-file="{{asset('UploadedFile/gambarArtikel/'.$artikels->gambar)}}" name="gambar" style="width: auto;">
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

