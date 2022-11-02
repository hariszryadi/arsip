<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Title -->
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Favicon -->
	<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <!-- /owl Carousel CSS -->

	<!-- Core JS files -->
	<script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
	<!-- /theme JS files -->

    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <!-- /owl Carousel JS -->
</head>
<style>
    .dataTables_filter input {
        width: 20rem;
    }
    
    #table-static > thead > tr, #table-inactive > thead > tr {
        background-color: #009E8B;
        color: #fff;
    }

    .owl-carousel .item img {
        display: block;
        width: 100%;
        max-width: 100%;
        height: 500px;
        object-fit: cover;
    }

    section {
        display: inline-block;
        width: 100%;
        height: 100hv;
        padding-top: 12px;
    }

    #title {
        background-color: #000;
        padding: 40px 0px;
        .fa {
            color:#fff;
            font-size:40px;
            padding-left:40px;
        }
    }

    /* Ow; Slider CSS*/
    .owl-wrapper {
        positon: relative;
    }

    .owl-controls {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
    }

    .owl-theme .owl-controls .owl-page span {
        background: #fff !important;
    }

    .owl-img {
        width: 100%;
        filter: brightness(50%);
    }

    .owl-text-overlay {
        position: absolute;
        text-align: center;
        width: 60%;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.4);
        background: rgba(0, 0, 0, 0.4);
        padding-bottom: 20px;
        font-family: "Open Sans", sans-serif;
        border-radius: 15px 15px 15px 15px;
        z-index: 1;
    }

    h2.owl-title {
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .owl-theme .owl-controls .owl-page span:active {
        background: #fff !important;
    }

    /* hide previous and next */
    .owl-buttons {
        visibility: hidden;
        display: none;
    }
</style>
<body>
	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark navbar-static" style="background-color: #009E8B;">
		<div class="d-flex flex-1 d-lg-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-paragraph-justify3"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-transmission"></i>
			</button>
		</div>

		<div class="navbar-brand text-center text-lg-left">
            <a href="" class="d-inline-block">
                <img src="{{ asset('images/depo.png') }}" class="d-none d-sm-block" alt="" style="height: 35px">
                <img src="{{ asset('images/logo-sm.png') }}" class="d-sm-none" alt="" style="height: 35px">
            </a>
		</div>

		<div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">

			<ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a href="#home" class="navbar-nav-link">
                        <i class="icon-home2"></i>&nbsp;&nbsp;Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#static" class="navbar-nav-link">
                        <i class="icon-stack"></i>&nbsp;&nbsp;Arsip Statis
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#inactive" class="navbar-nav-link">
                        <i class="icon-stack"></i>&nbsp;&nbsp;Arsip Inaktif
                    </a>
                </li>
				<li class="nav-item">
					<a href="{{ route('guest.logout', $guest->token) }}" class="navbar-nav-link">
						<i class="icon-exit3"></i>&nbsp;&nbsp;Keluar
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">


				<!-- Content area -->
				<div class="content">
                    <section id="home">
                        <div class="owl-carousel owl-theme">
                            @foreach ($banner as $item)
                                <div class="item">
                                    @if ($item->caption != null)
                                        <div class="owl-text-overlay">
                                            <h2 class="owl-title">{{ $item->caption }}</h2>
                                        </div>
                                    @endif
                                    <img class="owl-img" src="{{ asset('storage/'.$item->image) }}">
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <section id="static">
                        <div class="card">
                            <div class="card-body">
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
                    </section>

                    <section id="inactive">
                        <div class="card">
                            <div class="card-body">
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
                    </section>

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
					<div class="text-center d-lg-none w-100">
						<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
							<i class="icon-unfold mr-2"></i>
							Footer
						</button>
					</div>

					<div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; {{ date('Y') }}. <a href="#">Dinas Arsip dan Perpustakaan Kabupaten Bekasi</a>
						</span>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items:1,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true
            });

        });

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