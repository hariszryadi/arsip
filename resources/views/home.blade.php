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

                <div class="card">
                    <div class="card-header">
                        <h3>Data Arsip</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
        
                                <a href="{{ route('archives-vital.index') }}">
                                    <div class="card card-body bg-teal text-white has-bg-image">
                                        <div class="media">
                                            <div class="media-body">
                                                <h3 class="font-weight-semibold mb-0 count">{{ $archive->where('status', '3')->count() }}</h3>
                                                <span>Arsip Vital</span>
                                            </div>
                                            
                                            <div class="ml-3 align-self-center">
                                                <i class="icon-stack-check icon-3x opacity-75"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
        
                            </div>
        
                            <div class="col-lg-4">
        
                                <a href="{{ route('archives-static.index') }}">
                                    <div class="card card-body bg-primary text-white has-bg-image">
                                        <div class="media">
                                            <div class="media-body">
                                                <h3 class="font-weight-semibold mb-0 count">{{ $archive->where('status', '1')->count() }}</h3>
                                                <span>Arsip Statis</span>
                                            </div>
                                            
                                            <div class="ml-3 align-self-center">
                                                <i class="icon-stack-text icon-3x opacity-75"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
        
                            </div>
        
                            <div class="col-lg-4">
        
                                <a href="{{ route('archives-inactive.index') }}">
                                    <div class="card card-body bg-danger text-white has-bg-image">
                                        <div class="media">
                                            <div class="media-body">
                                                <h3 class="font-weight-semibold mb-0 count">{{ $archive->where('status', '2')->count() }}</h3>
                                                <span>Arsip Inaktif</span>
                                            </div>
                                            
                                            <div class="ml-3 align-self-center">
                                                <i class="icon-stack4 icon-3x opacity-75"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
        
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
                        <h3>Data Pengunjung</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
        
                                <div class="card card-body bg-success text-white has-bg-image">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3 class="font-weight-semibold mb-0 count">{{ $guest->count() }}</h3>
                                            <span>Jumlah Pengunjung</span>
                                        </div>
                                        
                                        <div class="ml-3 align-self-center">
                                            <i class="icon-users4 icon-3x opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="col-lg-4">

                                <div class="card card-body bg-info text-white has-bg-image">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3 class="font-weight-semibold mb-0 count">{{ $guest->whereNotNull('static')->count() }}</h3>
                                            <span>Pengunjung Arsip Statis</span>
                                        </div>
                                        
                                        <div class="ml-3 align-self-center">
                                            <i class="icon-users icon-3x opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="col-lg-4">
        
                                <div class="card card-body bg-warning text-white has-bg-image">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3 class="font-weight-semibold mb-0 count">{{ $guest->whereNotNull('inactive')->count() }}</h3>
                                            <span>Pengunjung Arsip Inaktif</span>
                                        </div>
                                        
                                        <div class="ml-3 align-self-center">
                                            <i class="icon-users icon-3x opacity-75"></i>
                                        </div>
                                    </div>
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

    $('.count').each(function () {
        var $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 1000,
            easing: 'swing',
            step: function () {
            $this.text(Math.ceil(this.Counter));
            }
        });
    });
</script>
@endsection