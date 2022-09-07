@extends('layouts.app')

@section('content')
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

        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Dashboard Depo Arsip</h3>
                    </div>
                    
                    <div class="card-body pb-0">
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="card bg-teal text-white">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h3 class="font-weight-semibold mb-0">3,450</h3>
                                            <span class="badge badge-dark badge-pill align-self-center ml-auto">+53,6%</span>
                                        </div>
                                        <div>
                                            Members online
                                            <div class="font-size-sm opacity-75">489 avg</div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div id="members-online"></div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4">
                                <div class="card bg-pink text-white">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h3 class="font-weight-semibold mb-0">49.4%</h3>
                                            <div class="list-icons ml-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            Current server load
                                            <div class="font-size-sm opacity-75">34.6% avg</div>
                                        </div>
                                    </div>
                                    <div id="server-load"></div>
                                </div>
                            </div>
        
                            <div class="col-lg-4">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h3 class="font-weight-semibold mb-0">$18,390</h3>
                                            <div class="list-icons ml-auto">
                                                <a class="list-icons-item" data-action="reload"></a>
                                            </div>
                                        </div>
                                        <div>
                                            Today's revenue
                                            <div class="font-size-sm opacity-75">$37,578 avg</div>
                                        </div>
                                    </div>
                                    <div id="today-revenue"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /content area -->

</div>
<!-- /inner content -->
@endsection
