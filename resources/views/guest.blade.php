<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Dinas Perpustakaan dan Arsip Kabupaten Bekasi">
    <meta name="keywords" content="kabupaten bekasi, sitem informasi depo arsip kabupaten bekasi, dinas perpustakaan dan arsip kabupaten bekasi">
    <meta name="author" content="Dinas Perpustakaan dan Arsip Kabupaten Bekasi">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <style>
        .frame {
            height: 100px; /* Can be anything */
            width: 100px; /* Can be anything */
            position: relative;
            margin-left: auto;
            margin-right: auto;
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
        .modal-footer {
            border: none !important;
        }
        .btn {
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        .fa {
            float: right;
            margin-right: 6px;
            margin-top: -30px;
            position: relative;
        }
    </style>
</head>
<body>

<!-- ========== Slider Start ========== -->
<div class="main-slider">
		<div class="all-slide owl-item owl-carousel owl-theme owl-loaded owl-text-select-on">
            @foreach ($banner as $item)
                <div class="single-slide color-overlay" style="background-image:url({{ asset('storage/'.$item->image) }});">
                    <div class="slider-text animated-text">	
                        <h1 class="tlt1"><strong>MAKIN BERANI</strong>, Energi Baru Kabupaten Bekasi</h1>
                        <p class="tlt">{{ $item->caption }} </p>
                        <ul class="animated fadeInUp fadeInDown" style="opacity: 1;">
                            <li class="animated fadeInUp fadeInDown" style="opacity: 1;"><button class="animated fadeInUp fadeInDown waves-effect waves-light btn-large" data-toggle="modal" data-target="#exampleModal">Daftar Disini</button></li>
                        </ul>
                    </div>
                </div>
            @endforeach
		</div>
	</div>
<!-- ========== Slider End ========== -->

<!-- ========== Footer Start ========== -->
<footer id="footer" class="pt80" style="background-image:url({{ asset('images/bg-footer.png') }})">
	<div class="container">
		<div class="row">
			<div class="footer-wrap clearfix">
				<div class="col-sm-2">
                    <div class="frame">
                        <img src="{{ asset('images/pemda.png') }}" class="img-responsive" alt="Logo">
                    </div>
				</div>
				<div class="col-sm-2">
                    <div class="frame">
                        <img src="{{ asset('images/disarpus.png') }}" class="img-responsive" alt="Logo">
                    </div>
				</div>
				<div class="col-sm-2">
                    <div class="frame">
                        <img src="{{ asset('images/pemkab-bekasi.png') }}" class="img-responsive" alt="Logo">
                    </div>
				</div>
				<div class="col-sm-2">
                    <div class="frame">
                        <img src="{{ asset('images/berakhlak.png') }}" class="img-responsive" alt="Logo">
                    </div>
				</div>
				<div class="col-sm-2">
                    <div class="frame">
                        <img src="{{ asset('images/evp.png') }}" class="img-responsive" alt="Logo">
                    </div>
				</div>
				<div class="col-sm-2">
                    <div class="frame">
                        <img src="{{ asset('images/makin-berani.png') }}" class="img-responsive" alt="Logo">
                    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="footer-copyright text-center">
				<p>&copy; <a href="{{ url('/') }}">Dinas Arsip dan Perpustakaan Kabupaten Bekasi</a> {{ date('Y') }}, All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>
<!-- ========== Footer End ========== -->

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
            <div class="modal-body" style="padding: 25px;">
                <div class="alert alert-danger" style="display:none"></div>
                <form method="POST" action="{{ route('guest.store') }}">
                    <div class="form-group">
                        <input id="fullname" type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" autofocus>
                        <i class="fa fa-user"></i>
                    </div>
                    
                    <div class="form-group">
                        <input id="address" type="text" class="form-control" name="address" placeholder="Alamat / Nama Instansi">
                        <i class="fa fa-home"></i>
                    </div>
                    
                    <div class="form-group">
                        <input id="nik" type="text" class="form-control" name="nik" placeholder="NIK / NIP">
                        <i class="fa fa-id-card-o"></i>
                    </div>

                    <div class="form-group">
                        <input id="phone_number" type="text" class="form-control" name="phone_number" placeholder="Telepon">
                        <i class="fa fa-phone"></i>
                    </div>
                    
                    <div class="form-group" style="display: flex;">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="static" name="static" checked>
                            <label class="custom-control-label" for="static">Statis</label>
                        </div>

                        <div class="custom-control custom-checkbox custom-control-inline" style="margin-left: 24px;">
                            <input type="checkbox" class="custom-control-input" id="inactive" name="inactive">
                            <label class="custom-control-label" for="inactive">Inaktif</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn" style="background-color: #FF5722;" data-dismiss="modal">Close</button>
                        <button type="button" id="formSubmit" class="btn btn-primary">Daftar</button>
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
<script>
    $('.modal').modal();
    $(document).ready(function () {
        $('#formSubmit').on('click', function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
            $.ajax({
                url: "{{ route('guest.store') }}",
                method: 'POST',
                data: {
                    fullname: $('#fullname').val(),
                    address: $('#address').val(),
                    nik: $('#nik').val(),
                    static: $('#static').is(':checked') ? 1 : null,
                    inactive: $('#inactive').is(':checked') ? 1 : null,
                    phone_number: $('#phone_number').val(),
                },
                success: function(result){
                    if(result.errors) {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value){
                            console.log(value);
                            $('.alert-danger').show();
                            $('.alert-danger').append('<li>'+value+'</li>');
                        });
                    } else if (result.error) {
                        $('.alert-danger').html('');
                        $('.alert-danger').show();
                        $('.alert-danger').append(result.error);
                    } else {
                        $('.alert-danger').hide();
                        $('#exampleModal').modal('close');
                        window.location = result.url;
                    }
                }
            });
        });
    })

    $('.modal').on('shown.bs.modal', function() {
        $(this).find('[autofocus]').focus();
    });
</script>
</body>
</html>