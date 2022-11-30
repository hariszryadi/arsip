@extends('layouts.app')

@section('content')
<style>
    .img-thumbnail {
        max-width: 250px;
    }
</style>
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Profil</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header"></div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('storage/'.auth()->user()->avatar) }}" class="img-thumbnail" onerror="this.onerror=null;this.src='{{ asset('global_assets/images/placeholders/placeholder.jpg') }}';"/>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2" for="name">Nama</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" readonly>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2" for="email">Email</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" readonly>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2" for="username">Username</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="username" value="{{ auth()->user()->username }}" readonly>
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
