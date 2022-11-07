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
			<div class="row">
				<div class="col-sm-6">
					<div class="top-cta">
						<ul>
							{{-- <li>
								<i class="fa fa-phone-square"></i><span>(+84) 123 456 6789</span> 
							</li>
							<li>
								<a href="#"><i class="fa fa-envelope-square"></i>hello@yoursite.net</a>
							</li> --}}
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<ul class="social-link pull-right">
						{{-- <li>Follow us</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li> --}}
                        <li><a href="{{ route('guest.logout', $guest->token) }}" class="navbar-nav-link">
                            <i class="icon-exit3"></i>&nbsp;&nbsp;Keluar
                        </a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>

<!-- Latest works Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>DATA ARSIP</h2>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
			<ul class="portfolio-filter text-center">
                @if ($guest->static != null)
    				<li><a class="btn btn-default waves-effect active" href="#" data-filter=".static">Statis</a></li>
                @endif
                @if ($guest->inactive != null)
    				<li><a class="btn btn-default waves-effect" href="#" data-filter=".inactive">Inaktif</a></li>
                @endif
			</ul>
			
			<div class="portfolio-boxes">
                @if ($guest->static != null)
                    <div class="each-box portfolio-box static">
                        <div class="inner gray-bg text-center">
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
                    </div>
                @endif

                @if ($guest->inactive != null)
                    <div class="each-box portfolio-box inactive">
                        <div class="inner gray-bg text-center">
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
                    </div>
                @endif
			</div>
			</div>
        </div>
	</div>
</section>

<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">

    <div class="navbar-collapse collapse" id="navbar-footer">
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
        ],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '_INPUT_',
            searchPlaceholder: 'Masukkan pencarian nama arsip ...',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
        }
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
        ],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '_INPUT_',
            searchPlaceholder: 'Masukkan pencarian nama arsip ...',
            paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
        }
    });
</script>
</body>
</html>