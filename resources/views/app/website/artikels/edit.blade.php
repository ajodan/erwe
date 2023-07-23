@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{route('artikels.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Ubah Artikel</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a>Beranda</a></div>
            <div class="breadcrumb-item"><a>Website</a></div>
            <div class="breadcrumb-item">Ubah Artikel</div>
        </div>
    </div>

    <div class="section-body">
    <form method="POST" action="{{ route('artikels.update', $artikels->id) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
           
            <div class="col-12 col-md-9 col-lg-9">
                <div class="card card-primary">
                    <!-- Card body -->
                    <div class="form-group col-md-12">
                        <label>Kategori Artikel</label>
                        <select class="form-control selectric" name="kategori_id">
                            @foreach($kategoris as $res)
                            @if($res->id == $artikels->kategori_id)
                            <option value="{{ $res->id }}" selected>{{ $res->nama_kategori }}</option>
                            @else
                            <option value="{{ $res->id }}">{{ $res->nama_kategori }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Judul Artikel</label>
                        <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $artikels->judul }}" required autocomplete="judul" autofocus>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Deskripsi Artikel</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $artikels->deskripsi }}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <img alt="Gambar Artikel" src="{{asset('UploadedFile/gambarArtikel/'.$artikels->gambar)}}" height="300" width="400">
                    </div>
                    
                        <div class="form-group col-md-12">
                            <label>Gambar Artikel</label><br>
                            @if(empty($artikels->gambar))
                                <input type="file" id="gambar" class="dropify-event" data-default-file="{{asset('assets/stisla/img/avatar/avatar-3.png')}}" name="gambar">
                            @else
                                <input type="file" id="gambar" class="dropify-event" data-default-file="{{asset('UploadedFile/gambarArtikel/'.$artikels->gambar)}}" name="gambar" style="width: auto;">
                            @endif
                        </div>
                    
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
            

                    <div class="card-body">
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
  $('#agamasLink').addClass('active')

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

