@php
$desa = App\Desa::find(1);
@endphp
<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('') }}">

    <!-- SEO Management-->
    <meta name="author" content="Maulana Kevin Pradana">
    <meta name="keywords" content="desa arjasa,arjasa jember,arjasa,desa,desa.id,arjasa arjasa jember,desa di kecamatan arjasa jember,desa arjasa jember,daerah arjasa,website desa arjasa, web desa arjasa, website arjasa, web arjasa">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="{{ asset(Storage::url($desa->logo)) }}" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet">

    @yield('styles')
</head>

<body class="bg-default">
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
            <div class="container px-4">
                <a class="navbar-brand" href="{{ url('') }}">
                    <h2 class="h1 text-white"><b>Desa {{ $desa->nama_desa }}</b></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-collapse-main">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="{{ url('') }}">
                                    <h3 class="h1 text-primary"><b>Desa {{ $desa->nama_desa }}</b></h3>
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Navbar items -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{ route('home.index') }}">
                                <i class="fas fa-home"></i>
                                <span class="nav-link-inner--text">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bars"></i> <span class="nav-link-inner--text">Menu Utama</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right py-0 overflow-hidden">
                                <!-- <a class="dropdown-item @if (Request::segment(1) == 'layanan-surat') active @endif" href="{{ route('layanan-surat') }}">
                                    <i class="fas fa-fw fa-file-alt text-yellow"></i>
                                    <span class="nav-link-inner--text">Layanan Surat</span>
                                </a> -->
                                <a class="dropdown-item @if (Request::segment(1) == 'event') active @endif" href="{{ route('event') }}">
                                    <i class="fas fa-fw fa-calendar text-red"></i>
                                    <span class="nav-link-inner--text">Event dan Kegiatan</span>
                                </a>
                                <a class="dropdown-item @if (Request::segment(1) == 'berita') active @endif" href="{{ route('berita') }}">
                                    <i class="fas fa-fw fa-newspaper text-cyan"></i>
                                    <span class="nav-link-inner--text">Berita</span>
                                </a>
                                <a class="dropdown-item @if (Request::segment(1) == 'pemerintahan-desa') active @endif" href="{{ route('pemerintahan-desa') }}">
                                    <i class="fas fa-fw fa-atlas text-success"></i>
                                    <span class="nav-link-inner--text">UMKM dan Wirausaha</span>
                                </a>
                                <a class="dropdown-item @if (Request::segment(1) == 'peraturandesa') active @endif" href="{{ route('peraturandesa') }}">
                                    <i class="fas fa-fw fa-file text-pink"></i>
                                    <span class="nav-link-inner--text">Peraturan Desa</span>
                                </a>
                                <a class="dropdown-item @if (Request::segment(1) == 'gallery') active @endif" href="{{ route('gallery') }}">
                                    <i class="fas fa-fw fa-images text-orange"></i>
                                    <span class="nav-link-inner--text">Gallery</span>
                                </a>
                                <a class="dropdown-item @if (Request::segment(1) == 'statistik-penduduk') active @endif" href="{{ route('statistik-penduduk') }}">
                                    <i class="fas fa-fw fa-chart-pie text-info"></i>
                                    <span class="nav-link-inner--text">Statistik Penduduk</span>
                                </a>
                                <a class="dropdown-item @if (Request::segment(1) == 'laporan-apbdes') active @endif" href="{{ route('laporan-apbdes') }}">
                                    <i class="fas fa-fw fa-money-check-alt text-yellow"></i>
                                    <span class="nav-link-inner--text">Laporan APBDes</span>
                                </a>
                            </div>
                        </li>
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bars"></i> <span class="nav-link-inner--text">Menu Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right py-0 overflow-hidden">

                                <a class="dropdown-item" href="{{ route('dashboard') }}">
                                    <i class="fas fa-fw fa-tachometer-alt text-blue"></i> Dashboard
                                </a>
                                @if (auth()->user()->level=='admin')
                                <a class="dropdown-item" href="{{ route('penduduk.index') }}">
                                    <i class="fas fa-fw fa-users text-info"></i> Kelola Penduduk
                                </a>
                                <a class="dropdown-item" href="{{ route('dusun.index') }}">
                                    <i class="fas fa-fw fa-map-marker-alt text-yellow"></i> Kelola Dusun
                                </a>
                                <a class="dropdown-item" href="{{ url('anggaran-realisasi?jenis=pendapatan&tahun='.date('Y')) }}">
                                    <i class="fas fa-fw fa-coins text-success"></i> Kelola APBDes
                                </a>
                                <a class="dropdown-item" href="{{ route('surat.index') }}">
                                    <i class="fas fa-fw fa-file-alt text-primary"></i> Kelola Surat
                                </a>
                                @endif
                                <a class="dropdown-item" href="{{ route('event.index') }}">
                                    <i class="fas fa-fw fa-calendar text-red"></i> Kelola Event dan Kegiatan
                                </a>
                                <a href="{{ route('berita.index') }}" class="dropdown-item">
                                    <i class="fas fa-fw fa-newspaper text-cyan"></i> Kelola Berita
                                </a>
                                <a href="{{ route('pemerintahan-desa.index') }}" class="dropdown-item">
                                    <i class="fas fa-fw fa-atlas text-success"></i> Kelola UMKM dan Wirausaha
                                </a>
                                @if (auth()->user()->level=='admin')
                                <a class="dropdown-item" href="{{ route('peraturandesa.index') }}">
                                    <i class="fas fa-fw fa-file text-pink"></i> Kelola Peraturan Desa
                                </a>
                                @endif

                                <a class="dropdown-item" href="{{ route('gallery.index') }}">
                                    <i class="fas fa-fw fa-images text-yellow"></i> Kelola Gallery
                                </a>

                                @if (auth()->user()->level=='admin')
                                <a class="dropdown-item" href="{{ route('slider.index') }}">
                                    <i class="fas fa-fw fa-images text-red"></i> Kelola Slider
                                </a>
                                <a class="dropdown-item" href="{{ route('profil-desa') }}">
                                    <i class="fas fa-fw fa-users text-info"></i> Profil Desa
                                </a>
                                @endif
                                <a class="dropdown-item" href="{{ route('profil') }}">
                                    <i class="fas fa-fw fa-user text-orange"></i> Profil Saya
                                </a>
                                <hr class="m-0">
                                <a class="dropdown-item" href="{{ route('keluar') }}" onclick="event.preventDefault(); document.getElementById('form-keluar').submit();">
                                    <i class="fas fa-fw fa-sign-out-alt"></i> Keluar
                                </a>
                                <form id="form-keluar" action="{{ route('keluar') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            @yield('header')
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            @yield('content')
        </div>
        <footer class="py-5">
            <div class="container">
                <div class="copyright text-center text-xl-left text-muted">
                    <div class="footer-content font-weight-bold">
                        <p class="font-weight-bold text-xl-left">Kontak Kami:</p>
                        <p>Email : <a href="mailto:tawenganpemdes@gmail.com?subject=Informasi&body=Halo, saya ingin menanyakan tentang..." target="_blank">tawenganpemdes@gmail.com</a></p>
                        <p>Telepon : <a href="https://wa.me/628816723441" target="_blank">0881 6723 441 (Pramudya)</a></p>
                        <p>Alamat : <a href="https://maps.app.goo.gl/XmL1gf3nmmr4vHaJ7" target="_blank">Jl. Sambi-Catur km 2, Tawengan, Kec. Sambi, Kabupaten Boyolali, Jawa Tengah 57376</a></p>
                    </div>
                    © {{ date('Y') }} <a href="{{ url('') }}" class="font-weight-bold ml-1">Desa {{ $desa->nama_desa }}</a>
                    <div class="text-right text-muted text-xs mt-8">
                        Powered By <a href="https://github.com/maulanakevinp/simapeda/tree/1.2" class="font-weight-bold" target="_blank">SIMAPEDA</a>
                        | Upgraded By <a href="https://github.com/GalangPriyo" class="font-weight-bold" target="_blank">GOOND</a>
                    </div>
                </div>
            </div>
    </div>
    </footer>
    </div>

    <!--   Core   -->
    <script src="{{ url('/js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!--   Optional JS   -->

    <!--   Argon JS   -->
    <script src="{{ url('/js/argon-dashboard.min.js?v=1.1.2') }}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        const baseURL = $('meta[name="base-url"]').attr('content');
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>
    @stack('scripts')
</body>

</html>