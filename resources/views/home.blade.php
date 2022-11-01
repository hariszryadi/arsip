@extends('layouts.app')

@section('content')
@include('home.styles')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Dashboard</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Dashboard content -->
        <div class="row">
            <div class="col-xl-12">

                <div class="row">
                    <div class="col-lg-4">

                        <div class="card bg-teal text-white">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">{{ $archive->where('status', '3')->count() }}</h3>
                                </div>
                                
                                <div>
                                    Arsip Vital
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">{{ $archive->where('status', '2')->count() }}</h3>
                                </div>
                                
                                <div>
                                    Arsip Statis
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="card bg-pink text-white">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">{{ $archive->where('status', '1')->count() }}</h3>
                                </div>
                                
                                <div>
                                    Arsip Inaktif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Denah Lokasi</h3>
                    </div>

                    <div class="card-body">
                        <div class="container">
                            <!-- Start Row 1 -->
                            @include('home.location-row1')
                            <!-- End Row 1 -->

                            <!-- Start Row 2 -->
                            @include('home.location-row2')
                            <!-- End Row 2 -->

                            <!-- Start Row 3 -->
                            @include('home.location-row3')
                            <!-- End Row 3 -->

                            <!-- Start Row 4 -->
                            @include('home.location-row4')
                            <!-- End Row 4 -->
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
        <!-- /dashboard content -->

    </div>
    <!-- /content area -->

</div>
<!-- /inner content -->
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection