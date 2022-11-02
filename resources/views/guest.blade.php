<!DOCTYPE html>
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
    </style>
    <body>
        @include('helper.alert-swal')
        <div style="background-color: #009E8B; padding: 12px;">
            <a href="{{ url('/') }}" style="color: #fff;">
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
</html>
