@extends('layouts.app')

@section('content')
@include('home.styles')
<style>
    .square {
        width: 85vw;
        height: 62vw;
        border: 3px solid #000;
    }
    .box {
        width: 100%;
        height: 200px;
        border: 2px solid #000;
    }
    .box-half {
        width: 50%;
        height: 200px;
        border: 2px solid #000;
        float: left;
        position: absolute;
        bottom: 0;
    }
    .square h1 {
        color: #fff;
    }
    .card-box {
        border: 1px solid #000;
        border-radius: 0 !important;
    }
    .card-inline {
        display: inline-block;
    }
    .first-card {
        background-color: #ACBFD4;
        width: 35px;
        height: 100px;
    }
    .second-card {
        background-color: #DADFE5;
        width: 35px;
        height: 150px;
    }
    .third-card {
        background-color: #F2C592;
        width: 35px;
        height: 50px;
        margin-bottom: 0 !important;
    }
    .fourth-card {
        background-color: #799AE8;
        width: 25px;
        height: 35px;
        margin-bottom: 0 !important;
    }
    .fiveth-card {
        background-color: #C6D0E8;
        width: 25px;
        height: 35px;
        margin-bottom: 0 !important;
    }
    .sixth-card {
        background-color: #717379;
        width: 25px;
        height: 35px;
        margin-bottom: 0 !important;
    }
    .fourth-card > .card-body, .fiveth-card > .card-body, .sixth-card > .card-body {
        font-size: 9px
    }
    .modal-body {
        max-height: calc(150vh - 150px);
        overflow-x: auto; 
        overflow-y: auto; 
    }
    .card-box .card-body {
        padding: 0px;
    }
    .box-small-1 {
        border: 2px solid #000;
        width: 70px;
        height: 55px;
        position: absolute;
        top: 0 !important;
        margin-top: -25px;
        margin-left: -18px;
    }
    .box-small-2 {
        border: 2px solid #000;
        width: 40px;
        height: 45px;
        position: absolute;
        top: 0 !important;
        right: 0 !important;
        margin-top: -25px;
        margin-left: -18px;
    }
</style>
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
        
                                <a href="{{ route('report-guest') }}">
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
                                </a>
        
                            </div>
        
                            <div class="col-lg-4">

                                <a href="{{ route('report-guest') }}">
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
                                </a>
        
                            </div>
        
                            <div class="col-lg-4">
        
                                <a href="{{ route('report-guest') }}">
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
                        <h3 class="card-title">Data Kapasitas Rak</h3>
                    </div>

                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <div class="row">
                            <div class="col-lg-4">
        
                                <div class="card card-body bg-pink text-white has-bg-image" data-toggle="modal" data-target="#exampleModalLong">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3 class="font-weight-semibold mb-0 count">{{ $rack->where('type', 'V')->count() }}</h3>
                                            <span>Jumlah Rak Vital</span>
                                        </div>
                                        
                                        <div class="ml-3 align-self-center">
                                            <i class="icon-folder-check icon-3x opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="col-lg-4">

                                <div class="card card-body bg-indigo text-white has-bg-image" data-toggle="modal" data-target="#exampleModalLong">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3 class="font-weight-semibold mb-0 count">{{ $rack->where('type', 'S')->count() }}</h3>
                                            <span>Jumlah Rak Statis</span>
                                        </div>
                                        
                                        <div class="ml-3 align-self-center">
                                            <i class="icon-folder icon-3x opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="col-lg-4">
        
                                <div class="card card-body bg-purple text-white has-bg-image" data-toggle="modal" data-target="#exampleModalLong">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3 class="font-weight-semibold mb-0 count">{{ $rack->where('type', 'D')->count() }}</h3>
                                            <span>Jumlah Rak Dinamis</span>
                                        </div>
                                        
                                        <div class="ml-3 align-self-center">
                                            <i class="icon-folder icon-3x opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
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

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Kapasitas Rak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <center>
                        <div class="square">
                            <div class="row">
                                <!-- col 1 -->
                                @include('home.location-col-1')
                                <!-- col 2 -->
                                @include('home.location-col-2')
                                <!-- col 3 -->
                                @include('home.location-col-3')
                                <!-- col 4 -->
                                @include('home.location-col-4')
                                <!-- col 5 -->
                                @include('home.location-col-5')
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
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