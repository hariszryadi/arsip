{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>{{  config('app.name', 'Laravel')  }}</title>
        <!-- Favicon -->
	    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />

        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->

        <!-- Core JS files -->
        <script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
	    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
        <!-- /core JS files -->

        <!-- Theme JS files -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('global_assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>
        <!-- /theme JS files -->
    </head>
    <style>
        @media (max-width: 768px) {
            .img-form-guest {
                display:none;
            }
        }
        .btn-back {
            background-color: #00B49F;
        }
        .btn-back:hover {
            background-color: #01534A;
        }
    </style>
    <body>
        @include('helper.alert-swal')
        <div style="background-color: #009E8B; padding: 12px;">
            <a href="{{ url('/') }}" class="btn btn-success btn-back">
                <i class="icon-arrow-left52"></i> Kembali
            </a>
        </div>

        <div class="mt-4">
            <h1 class="font-weight-bold text-center">FORM PENDAFTARAN PENGUNJUNG</h1>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <!-- Page content -->
                <div class="page-content mt-4">
        
                    <!-- Main content -->
                    <div class="content-wrapper">
            

                        <!-- Inner content -->
                        <div class="content-inner">
            
                            <!-- Content area -->
                            <div class="img-form-guest">
            
                                <img src="{{ asset('images/archive.svg') }}" alt="">
            
                            </div>
                            <!-- /content area -->
            
                        </div>
                        <!-- /inner content -->
            
                    </div>
                    <!-- /main content -->
            
                </div>
                <!-- /page content -->
            </div>
            <div class="col-lg-6">
                <!-- Page content -->
                <div class="page-content mt-4">
        
                    <!-- Main content -->
                    <div class="content-wrapper">
            
                        <!-- Inner content -->
                        <div class="content-inner">
            
                            <!-- Content area -->
                            <div class="content d-flex justify-content-center align-items-center">
            
                                <!-- Login card -->
                                <form class="login-form" method="POST" action="{{ route('guest.store') }}">
                                    @csrf
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="text-center mb-3">
                                                <img src="{{ asset('images/logo.png') }}" alt="Icon Kab.Bekasi" width="75">
                                            </div>

                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" placeholder="Nama Lengkap" value="{{ old('fullname') }}" autofocus>
                                                <div class="form-control-feedback">
                                                    <i class="icon-user text-muted"></i>
                                                </div>
                                                @error('fullname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Alamat/Nama Instansi" value="{{ old('address') }}">
                                                <div class="form-control-feedback">
                                                    <i class="icon-home2 text-muted"></i>
                                                </div>
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" placeholder="NIK/NIP" value="{{ old('nik') }}">
                                                <div class="form-control-feedback">
                                                    <i class="icon-vcard text-muted"></i>
                                                </div>
                                                @error('nik')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="static" name="static" value="1" checked="">
                                                    <label class="custom-control-label" for="static">Statis</label>
                                                </div>
    
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="inactive" name="inactive" value="2">
                                                    <label class="custom-control-label" for="inactive">Inaktif</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block" style="background-color: #009E8B; color: #fff;">Daftar</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <!-- /login card -->

                            </div>
                            <!-- /content area -->
            
                        </div>
                        <!-- /inner content -->
            
                    </div>
                    <!-- /main content -->
            
                </div>
                <!-- /page content -->
            </div>
        </div>
    </body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Dinas Perpustakaan dan Arsip Kabupaten Bekasi">
    <meta name="keywords" content="kabupaten bekasi, sitem informasi depo arsip kabupaten bekasi, dinas perpustakaan dan arsip kabupaten bekasi">
    <meta name="author" content="ThemeAtelier">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Halaman Pengunjung - {{  config('app.name', 'Laravel')  }}</title>
    <!-- ========== Favicon Ico ========== -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Boots NAV CSS -->
    <link href="{{ asset('css/bootsnav.css') }}" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"/>
    <!-- Fonts Awesome CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Icofont CSS -->
    <link href="{{ asset('css/icofont.css') }}" rel="stylesheet">
	<!-- Animate CSS -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
	<!-- Megnafic popup CSS -->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <!-- OwlCarousel CSS -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}" />
    <!-- Modal video CSS -->
	<link rel="stylesheet" href="{{ asset('css/modal-video.min.css') }}" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/colors/teal.css') }}">
</head>
<style>
    .frame {
        height: 100px; /* Can be anything */
        width: 100px; /* Can be anything */
        position: relative;
    }
    .frame>img {
        width: auto;
        height: auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
    .center-button {
        z-index: 2;
        position: fixed;
        top: 75%;
        left: 50%;
        /* bring your own prefixes */
        transform: translate(-50%, -50%);
    }
    .invalid-feedback {
        color: #F44336;
    }
</style>
<body>
<!-- ========== Header Start ========== -->
<nav class="navbar navbar-default navbar-fixed navbar-transparent bootsnav" style="background-color: rgba(239, 230, 230, 0.85);">
	<div class="header-top primary-bg">
		<div class="container">
			<div class="row text-center">
                <span><strong>MAKIN BERANI</strong>, Energi Baru Kabupaten Bekasi</span>
			</div>
		</div>
	</div>
	<div class="top-search">
		<div class="container">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-search"></i></span>
				<input type="text" class="form-control" placeholder="Search">
				<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
			</div>
		</div>
	</div>
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><div class="frame"><img src="{{ asset('images/logo.png') }}" class="logo" alt=""></div></a>
            <a class="navbar-brand" href="#"><div class="frame"><img src="{{ asset('images/disarpus.png') }}" class="logo" alt=""></div></a>
            <a class="navbar-brand" href="#"><div class="frame"><img src="{{ asset('images/pemkab-bekasi.png') }}" class="logo" alt=""></div></a>
            <a class="navbar-brand" href="#"><div class="frame"><img src="{{ asset('images/berakhlak.png') }}" class="logo" alt=""></div></a>
            <a class="navbar-brand" href="#"><div class="frame"><img src="{{ asset('images/evp.png') }}" class="logo" alt=""></div></a>
            <a class="navbar-brand" href="#"><div class="frame"><img src="{{ asset('images/makin-berani.png') }}" class="logo" alt=""></div></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInUp" data-out="fadeOutDown">
                
            </ul>
        </div>
    </div>   
</nav>
<!-- ========== Header End ========== -->

<!-- ========== Slider Start ========== -->
<div class="main-slider">
    <div class="all-slide owl-item owl-carousel owl-theme owl-loaded owl-text-select-on">
        @foreach ($banner as $item)
            <div class="single-slide color-overlay" style="background-image:url({{ asset('storage/'.$item->image) }});">
                <div class="slider-text animated-text">	
                    <h1 class="tlt1">{{ $item->caption }}</h1>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="center-button">
    <button class="waves-effect waves-light btn-large" data-toggle="modal" data-target="#exampleModal">Daftar Disini</button>
</div>
<!-- ========== Slider End ========== -->
  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="display: inline-block;">Form Pendaftaran Pengunjung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('guest.store') }}">
                    @csrf
                    <div class="form-group">
                        <input id="fullname" type="text" class="form-control @error('fullname') invalid @enderror" name="fullname" value="{{ old('fullname') }}" placeholder="Nama Lengkap" value="{{ old('fullname') }}" autofocus>
                        @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input id="address" type="text" class="form-control @error('address') invalid @enderror" name="address" placeholder="Alamat/Nama Instansi" value="{{ old('address') }}">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input id="nik" type="text" class="form-control @error('nik') invalid @enderror" name="nik" placeholder="NIK/NIP" value="{{ old('nik') }}">
                        @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="static" name="static" value="1" checked="">
                            <label class="custom-control-label" for="static">Statis</label>
                        </div>

                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="inactive" name="inactive" value="2">
                            <label class="custom-control-label" for="inactive">Inaktif</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn" style="background-color: #FF5722;" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jquery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Bootstrap NAV -->
<script src="{{ asset('js/bootsnav.js') }}"></script>
<!-- materialize js -->
<script src="{{ asset('js/materialize.min.js') }}"></script>
<!-- sticky js -->
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<!-- isotope js -->
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- OwlCarousel js -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- counterup js -->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<!-- Animated text -->
<script src="{{ asset('js/jquery.textillate.js') }}"></script>
<script src="{{ asset('js/jquery.lettering.js') }}"></script>
<script src="{{ asset('js/jquery.fittext.js') }}"></script>
<!-- Modal video js -->
<script src="{{ asset('js/modal-video.min.js') }}"></script>
<!-- jquery.ajaxchimp.min.js -->
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>