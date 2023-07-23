
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="{{asset('assets/img/favicon.png')}}">
  <title>Login &mdash; SIRuTe RW 13</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets-lm/stisla/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets-lm/stisla/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assets-lm/stisla/modules/bootstrap-social/bootstrap-social.css')}}">
  <link rel="stylesheet" href="{{asset('assets-lm/stisla/modules/izitoast/css/iziToast.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets-lm/stisla/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets-lm/stisla/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              {{-- <img src="{{asset('assets-lm/stisla/img/logo/logo-1.png')}}" alt="logo" width="120" class="rounded-circle"> --}}
              <img src="{{asset('assets/img/logo-rw-web.jpg')}}" alt="logo" width="350" class="rounded-square">
            </div>

            <div class="card card-info">
              <div class="card-header"><h4>Masuk SIRuTe</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  </div>

                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }} >
                      <label class="custom-control-label" for="remember-me">Ingatkan Saya</label>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <button type="submit" class="btn btn-info btn-lg btn-block" tabindex="6">
                      Masuk
                    </button>
                  </div>
                </form>
                {{-- <div class="mt-5 text-muted text-center">
                Tidak mempunyai akun? <a href="{{__('register')}}">Buat akun</a>
                </div> --}}
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; SIRuTe RW13, 2023 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets-lm/stisla/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets-lm/stisla/modules/popper.js')}}"></script>
  <script src="{{asset('assets-lm/stisla/modules/tooltip.js')}}"></script>
  <script src="{{asset('assets-lm/stisla/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets-lm/stisla/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets-lm/stisla/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets-lm/stisla/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('assets-lm/stisla/js/scripts.js')}}"></script>
  <script src="{{asset('assets-lm/stisla/js/custom.js')}}"></script>
  <script src="{{asset('assets-lm/stisla/js/page/modules-toastr.js')}}"></script>
  <script src="{{asset('assets-lm/stisla/modules/izitoast/js/iziToast.min.js')}}"></script>
  @include('layouts.alerts.notif')
</body>
</html>