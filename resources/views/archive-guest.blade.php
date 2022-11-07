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
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo-sm.png') }}" class="logo" alt=""></a>
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
                                                <th>Nama Arsip</th>
                                                <th>Klasifikasi</th>
                                                <th>Tahun</th>
                                                <th>Jumlah</th>
                                                <th>Tingkat Perkembangan</th>
                                                <th>Lokasi Rak</th>
                                                <th>Box</th>
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
                                                <th>Nama Arsip</th>
                                                <th>Jenis Arsip</th>
                                                <th>Tahun</th>
                                                <th>Jumlah</th>
                                                <th>Tingkat Perkembangan</th>
                                                <th>Lokasi Rak</th>
                                                <th>Box</th>
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

<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
    <div class="navbar-collapse collapse">
        <span class="navbar-text">
            &copy; {{ date('Y') }}. <a href="#">Dinas Arsip dan Perpustakaan Kabupaten Bekasi</a>
        </span>
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
<script src="{{ asset('global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script>
    $('#table-static').DataTable({
        processing: true,
        serverside: true,
        autoWidth: false,
        bLengthChange: false,
        bInfo: false,
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
            { data: "rack", searchable: false },
            { data: "box", searchable: false }
        ],
        columnDefs: [
            { width: "5%", "targets": [0] }
        ]
    });
    
    $('#table-inactive').DataTable({
        processing: true,
        serverside: true,
        autoWidth: false,
        bLengthChange: false,
        bInfo: false,
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
            { data: "rack", searchable: false },
            { data: "box", searchable: false },
        ],
        columnDefs: [
            { width: "5%", "targets": [0] }
        ]
    });
</script>
</body>
</html>