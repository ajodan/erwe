<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" href="{{asset('assets/stisla/img/logo/logo-rw13.png')}}">
    <title>Pendaftaran &mdash; SIRuTe</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/stisla/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/stisla/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/stisla/modules/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" href="{{asset('assets/stisla/modules/izitoast/css/iziToast.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/stisla/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/stisla/css/components.css')}}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="{{asset('assets/stisla/img/logo/logo-rw13.png')}}" alt="logo" width="150" class="rounded-square">
                        </div>

                        <div class="card card-info">
                            <div class="card-header">
                                <h4>Pendaftaran Pengguna SIRuTe RW 13 Taman Alamanda</h4>
                            </div>

                            <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="frist_name">Nama Lengkap</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="email">E-Mail</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="no_kk">Nomor Kartu Keluarga</label>
                                            <input id="no_kk" type="text" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk" maxlength="16" value="{{ old('no_kk') }}" required autocomplete="no_kk">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="no_telp">Nomor Handphone</label>
                                            <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required autocomplete="no_telp">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Rukun Tetangga</label>
                                            <select class="form-control selectric" name="rt">
                                                <option>&mdash;</option>
                                                <option value="1">RT 01</option>
                                                <option value="2">RT 02</option>
                                                <option value="3">RT 03</option>
                                                <option value="4">RT 04</option>
                                            </select>
                                        </div>
                                        {{-- <div class="form-group col-6">
                                            <label for="no_telp">Nomor Handphone</label>
                                            <input id="no_telp" type="email" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required autocomplete="no_telp">
                                        </div> --}}
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Kata Sandi</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block">Kata Sandi Konfirmasi</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="agree" {{ old('remember') ? 'checked' : '' }} required>
                                            <label class="custom-control-label" for="agree">Saya setuju dengan syarat dan ketentuan
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-lg btn-block">
                                            Daftar
                                        </button>
                                    </div>
                                </form>
                                <div class="mt-5 text-muted text-center">
                                    Sudah mempunyai akun? <a href="{{__('login')}}">Masuk</a>
                                </div>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; SIRuTe RW13, 2023 </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset('assets/stisla/modules/jquery.min.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/popper.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/tooltip.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/moment.min.js')}}"></script>
    <script src="{{asset('assets/stisla/js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('assets/stisla/js/scripts.js')}}"></script>
    <script src="{{asset('assets/stisla/js/custom.js')}}"></script>
    <script src="{{asset('assets/stisla/js/page/modules-toastr.js')}}"></script>
    <script src="{{asset('assets/stisla/modules/izitoast/js/iziToast.min.js')}}"></script>
    @include('layouts.alerts.notif')
</body>

</html>