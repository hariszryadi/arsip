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
        <!-- /theme JS files -->
    </head>
    <style>
        .btn-img-welcome {
            -webkit-transition: 0.5s;
                    transition: 0.5s;
        }
        .btn-img-welcome:hover {
            -webkit-transform: scale(1.1);
                    transform: scale(1.1);
        }
    </style>
    <body style="background: url({{ asset('images/bg-welcome.jpg') }}); background-size: 100% 100%;">

        <div class="mt-4">
            <h1 class="font-weight-bold text-center" style="font-size: 2rem;">SISTEM INFORMASI DEPO ARSIP TERPADU</h1>
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
                            <div class="content d-flex justify-content-center align-items-center">
            
                                <a href="{{ route('guest.register') }}">
                                    <img class="btn-img-welcome" src="{{ asset('images/btn-guest.svg') }}" alt="guest page">
                                </a>
            
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
            
                                <a href="{{ route('login') }}">
                                    <img class="btn-img-welcome" src="{{ asset('images/btn-admin.svg') }}" alt="admin page">
                                </a>

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
