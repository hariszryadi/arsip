<!DOCTYPE html>
<html lang="en">
<head>
	<!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Dinas Perpustakaan dan Arsip Kabupaten Bekasi">
    <meta name="keywords" content="kabupaten bekasi, sitem informasi depo arsip kabupaten bekasi, dinas perpustakaan dan arsip kabupaten bekasi">
    <meta name="author" content="Dinas Perpustakaan dan Arsip Kabupaten Bekasi">
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
        .btn-download {
            height: 24px;
            line-height: 24px;
            padding: 0 12px;
        }
        .dataTables_paginate {
            float: right !important;
        }
        .dataTables_paginate .btn-primary {
            padding: 0 12px;
            margin: 0 6px;
        }
        .paginate_button {
            padding: 0 12px;
            margin: 0 6px;
        }
        input[type=search]:focus:not([readonly]) {
            border: 1px solid #009688;
        }
        input[type=search] {
            color: #000;
        }
        /* do not group these rules */
        *::-webkit-input-placeholder {
            color: #525252;
        }
        *:-moz-placeholder {
            /* FF 4-18 */
            color: #525252;
            opacity: 1;
        }
        *::-moz-placeholder {
            /* FF 19+ */
            color: #525252;
            opacity: 1;
        }
        *:-ms-input-placeholder {
            /* IE 10+ */
            color: #525252;
        }
        *::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #525252;
        }
        *::placeholder {
            /* modern browser */
            color: #525252;
        }
    </style>
</head>
<body>
<!-- ========== Header Start ========== -->
<nav class="navbar navbar-default navbar-sticky bootsnav">
	<div class="header-top primary-bg">
		<div class="container">
			<div class="row text-center">
                <span><strong>MAKIN BERANI</strong>, Energi Baru Kabupaten Bekasi</span>
			</div>
		</div>
	</div>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ asset('images/pemda.png') }}" class="logo" alt=""></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInUp" data-out="fadeOutDown">
                <li>
                    <a href="{{ route('guest.logout', $guest->token) }}"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Keluar</a>
                </li>
            </ul>
        </div>
    </div>   
</nav>

<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Contact form start -->
					<div class="contact-form-box">
						<div class="col-sm-12">
							<h3 class="ilm-subtitle mb50">DATA ARSIP</h3>
						</div>
						
						<div class="col-sm-12">

                            <ul class="tabs">
                                @if ($guest->static != null)
                                    <li class="tab s3 active"><a class="waves-effect" href="#static">Arsip Statis</a></li>
                                @endif
                                @if ($guest->inactive != null)
                                    <li class="tab s3"><a class="waves-effect" href="#inactive">Arsip Inaktif</a></li>
                                @endif
                            </ul>

                            @if ($guest->static != null)
                                <div id="static" class="single-tab-content">
                                    <table class="table datatable-basic table-hover table-bordered table-responsive" id="table-static">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th width="40%">Nama Arsip</th>
                                                <th width="10%">Klasifikasi</th>
                                                <th width="10%">Tahun</th>
                                                <th width="10%">Jumlah</th>
                                                <th width="10%">Tingkat Perkembangan</th>
                                                <th width="10%">Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            @endif

                            @if ($guest->inactive != null)
                                <div id="inactive" class="single-tab-content">
                                    <table class="table datatable-basic table-hover table-bordered table-responsive" id="table-inactive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th width="40%">Nama Arsip</th>
                                                <th width="10%">Jenis Arsip</th>
                                                <th width="10%">Tahun</th>
                                                <th width="10%">Jumlah</th>
                                                <th width="10%">Tingkat Perkembangan</th>
                                                <th width="10%">Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            @endif

						</div>
					</div>
				<!-- Contact form end -->
			</div>
        </div>
    </div>
</section>

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
				<p>&copy; {{ date('Y') }} <a href="{{ url('/') }}">Dinas Arsip dan Perpustakaan Kabupaten Bekasi</a>, All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>
<!-- ========== Footer End ========== -->


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
<script src="{{ asset('global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script>
    $('#table-static').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: false,
        bLengthChange: false,
        bInfo: true,
        ajax: {
            url: "{{ route('guest.archive.static') }}",
        },
        columns: [
            {
                data: "id", render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
            },
            { data: "name" },
            { data: "code_classification", searchable: false },
            { data: "year", searchable: false },
            { data: "amount", searchable: false },
            { data: "dev_level", searchable: false },
            { data: "generate", searchable: false }
        ],
        columnDefs: [
            { width: "5%", "targets": [0] }
        ],
        dom: "<'row'<'col-sm-12'ftr>>" +
         "<'row'<'col-sm-4'i><'col-sm-8'p>>",
        language: {
            search: '<span>Pencarian:</span> _INPUT_',
            searchPlaceholder: 'Ketik nama arsip...',
            lengthMenu: '<span>Show:</span> _MENU_',
        },
        preDrawCallback: function () {
            $('.previous').addClass('btn btn-primary');
            $('.next').addClass('btn btn-primary');
            $('.current').addClass('btn btn-primary');
        },
        drawCallback: function () {
            $('.previous').addClass('btn btn-primary');
            $('.next').addClass('btn btn-primary');
            $('.current').addClass('btn btn-primary');
        },
        initComplete: function() {
            $('.previous').addClass('btn btn-primary');
            $('.next').addClass('btn btn-primary');
            $('.current').addClass('btn btn-primary');
        }
    });
    
    $('#table-inactive').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: false,
        bLengthChange: false,
        bInfo: true,
        ajax: {
            url: "{{ route('guest.archive.inactive') }}",
        },
        columns: [
            {
                data: "id", render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
            },
            { data: "name" },
            { data: "mapping", searchable: false },
            { data: "year", searchable: false },
            { data: "amount", searchable: false },
            { data: "dev_level", searchable: false },
            { data: "generate", searchable: false }
        ],
        dom: "<'row'<'col-sm-12'ftr>>" +
         "<'row'<'col-sm-4'i><'col-sm-8'p>>",
        language: {
            search: '<span>Pencarian:</span> _INPUT_',
            searchPlaceholder: 'Ketik nama arsip...',
            lengthMenu: '<span>Show:</span> _MENU_',
        },
        preDrawCallback: function () {
            $('.previous').addClass('btn btn-primary');
            $('.next').addClass('btn btn-primary');
            $('.current').addClass('btn btn-primary');
        },
        drawCallback: function () {
            $('.previous').addClass('btn btn-primary');
            $('.next').addClass('btn btn-primary');
            $('.current').addClass('btn btn-primary');
        },
        initComplete: function() {
            $('.previous').addClass('btn btn-primary');
            $('.next').addClass('btn btn-primary');
            $('.current').addClass('btn btn-primary');
        }
    });
</script>
</body>
</html>