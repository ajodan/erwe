<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        {{-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> --}}
        </ul>
        <div class="search-element">
        <input class="form-control" type="search" placeholder="Cari" aria-label="Search" data-width="250">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        <div class="search-backdrop"></div>
      
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        
        @if(empty(Auth::user()->profile))
        <img alt="image" src="{{asset('assets/stisla/img/avatar/avatar-5.png')}}" class="rounded-circle mr-1">
        @else
        <img alt="image" src="{{asset('UploadedFile/profilPelamar/'.Auth::user()->profile)}}" class="rounded-circle mr-1">
        @endif
        <div class="d-sm-none d-lg-inline-block">@include('_FUNCTION.greeting'), {{ ucfirst(Auth::user()->name) }}</div></a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">
            Masuk!
            @include('_FUNCTION.time-ago-id')
            @php
                if(session('logged')){
                $v = session('logged');
                echo timeAgo($v);
                }
            @endphp
            </div>
            <a href="{{ route('profils.index') }}" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Ganti Password
            </a>
            {{-- <a href="#" class="dropdown-item has-icon">
            <i class="fas fa-cog"></i> Ganti Password
            </a> --}}
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            {{ __('Keluar') }}
            <i class="fas fa-sign-out-alt"></i> 
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </div>
        </li>
    </ul>
    </nav>