<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <h4>SIRuTe RW13</h4>
            @if (auth()->user()->level == 'Rw')
            @else
            <h4>RT 0{{ Auth::user()->rt }}</h4>
            @endif
           
        </div>
        
        <ul class="sidebar-menu">
            <li class="menu-header">Beranda</li>
            <li class="dropdown" id="dashboardLink">
                <a href="{{route('home')}}" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
            </li>
            @if (auth()->user()->level == 'Administrator')
            <li class="menu-header">Master Data</li>
            <li class="dropdown" id="penggunaLink">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Pengguna</span></a>
                <ul class="dropdown-menu">
                    <!-- <li id="usersLink"><a class="nav-link" href="">Users</a></li> -->
                    <li id="administratorsLink"><a class="nav-link" href="{{ route('administrators.index') }}">Administrators</a></li>
                </ul>
            </li>
            <li class="dropdown" id="dataDiriLink">
                <a href="{{ route('data_diris.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Warga</span>
                </a>
                <a href="{{ route('data_keluargas.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Keluarga</span>
                </a>
            </li>
            <li class="dropdown" id="statusLink">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-align-justify"></i> <span>Referensi</span></a>
                <ul class="dropdown-menu">
                    <li id="agamaLink"><a class="nav-link" href="{{ route('agamas.index') }}">Agama</a></li>
                    <li id="pendidikanLink"><a class="nav-link" href="{{ route('pendidikans.index') }}">Jenjang Pendidikan</a></li>
                    <li id="pekerjaanLink"><a class="nav-link" href="{{ route('pekerjaans.index') }}">Pekerjaan</a></li>
                    <li id="cacatLink"><a class="nav-link" href="{{ route('cacats.index') }}">Disabilitas</a></li>
                    <li id="kkLink"><a class="nav-link" href="{{ route('status_kartu_keluargas.index') }}">Hubungan Keluarga</a></li>
                    <li id="pernikahanLink"><a class="nav-link" href="{{ route('status_pernikahans.index') }}">Pernikahan</a></li>
                </ul>
            </li>
            <li class="dropdown" id="statusLink">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-align-justify"></i> <span>Website</span></a>
                <ul class="dropdown-menu">
                    <li id="agamaLink"><a class="nav-link" href="{{ route('agamas.index') }}">Pengurus</a></li>
                    <li id="artikelLink"><a class="nav-link" href="{{ route('artikels.index') }}">Artikel</a></li>
                    <li id="galeriLink"><a class="nav-link" href="{{ route('galeris.index') }}">Galeri</a></li>
                    <li id="cacatLink"><a class="nav-link" href="{{ route('cacats.index') }}">Agenda</a></li>
                </ul>
            </li>
            @endif
            @if (auth()->user()->level == 'Rw')
            <li class="dropdown" id="dataDiriLink">
                <a href="{{ route('data_diris.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Warga</span>
                </a>
                <a href="{{ route('data_keluargas.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Keluarga</span>
                </a>
            </li>

            <li class="menu-header">Laporan Data Warga</li>
            <li class="dropdown" id="printDataDiriKKLink">
                <a href="{{ route('nomorKK') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i> <span> Berdasarkan No KK</span>
                </a>
            </li>
            <li class="dropdown" id="printDataDiriLink">
                <a href="{{ route('printDataDiri') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i> <span> Seluruh Data Warga</span>
                </a>
            </li>
            <li class="dropdown" id="statusLink">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-align-justify"></i> <span>Website</span></a>
                <ul class="dropdown-menu">
                    <li id="agamaLink"><a class="nav-link" href="{{ route('agamas.index') }}">Pengurus</a></li>
                    <li id="artikelLink"><a class="nav-link" href="{{ route('artikels.index') }}">Artikel</a></li>
                    <li id="galeriLink"><a class="nav-link" href="{{ route('galeris.index') }}">Galeri</a></li>
                    <li id="cacatLink"><a class="nav-link" href="{{ route('cacats.index') }}">Agenda</a></li>
                </ul>
            </li>
            <li class="dropdown" id="statusLink">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-align-justify"></i> <span>Rekapitulasi</span></a>
                <ul class="dropdown-menu">
                    <li id="wargaLink"><a class="nav-link" href="{{ route('rekap_wargas.index') }}">Data Warga</a></li>
                    <li id="kepalaKeluargaLink"><a class="nav-link" href="{{ route('rekap_kks.index') }}">Data Kepala Keluarga</a></li>
                    <li id="agamaLink"><a class="nav-link" href="{{ route('rekap_agamas.index') }}">Data Agama</a></li>
                    <li id="jkLink"><a class="nav-link" href="{{ route('rekap_jks.index') }}">Data Jenis Kelamin</a></li>
                    <li id="pendidikanLink"><a class="nav-link" href="{{ route('rekap_pendidikans.index') }}">Data Pendidikan</a></li>
                    {{-- <li id="pekerjaanLink"><a class="nav-link" href="{{ route('pekerjaans.index') }}">Data Pekerjaan</a></li> --}}
                    <li id="domisiliLink"><a class="nav-link" href="{{ route('rekap_domisilikks.index') }}">Status Domisili KK/KTP</a></li>
                    <li id="usiaLink"><a class="nav-link" href="{{ route('rekap_kelompok_usias.index') }}">Data Kelompok Usia</a></li>
                  </ul>
            </li>

            @endif

            @if (auth()->user()->level == 'KPPS')
            <li class="dropdown" id="dataDiriLink">
                <a href="{{ route('data_diris.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Warga</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->level == 'Sekretaris')
            <li class="dropdown" id="dataDiriLink">
                <a href="{{ route('data_diris.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Warga</span>
                </a>
                <a href="{{ route('data_keluargas.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Keluarga</span>
                </a>
            </li>

            <li class="menu-header">Laporan Data Warga</li>
            <li class="dropdown" id="printDataDiriKKLink">
                <a href="{{ route('nomorKK') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i> <span> Berdasarkan No KK</span>
                </a>
            </li>
            <li class="dropdown" id="printDataDiriLink">
                <a href="{{ route('printDataDiri') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i> <span> Seluruh Data Warga</span>
                </a>
            </li>
            <li class="dropdown" id="statusLink">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-align-justify"></i> <span>Rekapitulasi</span></a>
                <ul class="dropdown-menu">
                    <li id="agamaLink"><a class="nav-link" href="{{ route('rekaprt_agamas.index') }}">Data Agama</a></li>
                    <li id="jkLink"><a class="nav-link" href="{{ route('rekaprt_jeniskelamins.index') }}">Data Jenis Kelamin</a></li>
                    <li id="pendidikanLink"><a class="nav-link" href="{{ route('rekaprt_pendidikans.index') }}">Data Pendidikan</a></li>
                    {{-- <li id="pekerjaanLink"><a class="nav-link" href="{{ route('pekerjaans.index') }}">Data Pekerjaan</a></li> --}}
                    <li id="domisiliLink"><a class="nav-link" href="{{ route('rekaprt_domisilikks.index') }}">Status Domisili KK/KTP</a></li>
                    <li id="usiaLink"><a class="nav-link" href="{{ route('rekaprt_kelompokusias.index') }}">Data Kelompok Usia</a></li>
                  </ul>
            </li>
            @endif

            @if (auth()->user()->level == 'Ketua')
            <li class="dropdown" id="dataDiriLink">
                <a href="{{ route('data_diris.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Warga</span>
                </a>
                <a href="{{ route('data_keluargas.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Keluarga</span>
                </a>
            </li>

            <li class="menu-header">Laporan Data Warga</li>
            <li class="dropdown" id="printDataDiriKKLink">
                <a href="{{ route('nomorKK') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i> <span> Berdasarkan No KK</span>
                </a>
            </li>
            <li class="dropdown" id="printDataDiriLink">
                <a href="{{ route('printDataDiri') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i> <span> Seluruh Data Warga</span>
                </a>
            </li>
            @endif

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <div id="Info" class="btn btn-primary btn-lg btn-block btn-icon-split" data-toggle="modal" data-target="#modalInfo">
                    <i class="fas fa-info"></i> <strong>Informasi Aplikasi</strong>
                </div>
            </div>
    </aside>
</div>
