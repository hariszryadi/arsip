@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Keamanan</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Master</span>
                    <span class="breadcrumb-item active">Keamanan</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ isset($security) ? 'Edit Keamanan' : 'Tambah Keamanan' }}</h3>
            </div>
            
            <div class="card-body">
                @isset($security)
                <form class="form-horizontal" id="form" action="{{ route('security.update', $security->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                @else
                <form class="form-horizontal" id="form" action="{{ route('security.store') }}" method="POST">
                    @csrf
                @endisset
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('name') text-danger @enderror" for="name">Nama</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name')!== null ? old('name') : (isset($security) ? $security->name : '') }}" placeholder="Nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('access_rights') text-danger @enderror" for="access_rights">Hak Akses</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('access_rights') is-invalid @enderror" name="access_rights" id="access_rights" value="{{ old('access_rights')!== null ? old('access_rights') : (isset($security) ? $security->access_rights : '') }}" placeholder="Hak Akses">
                            @error('access_rights')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('basic_consideration') text-danger @enderror" for="basic_consideration">Dasar Pertimbangan</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('basic_consideration') is-invalid @enderror" name="basic_consideration" id="basic_consideration" value="{{ old('basic_consideration')!== null ? old('basic_consideration') : (isset($security) ? $security->basic_consideration : '') }}" placeholder="Dasar Pertimbangan">
                            @error('basic_consideration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('processing_unit') text-danger @enderror" for="processing_unit">Unit Pengolah</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('processing_unit') is-invalid @enderror" name="processing_unit" id="processing_unit" value="{{ old('processing_unit')!== null ? old('processing_unit') : (isset($security) ? $security->processing_unit : '') }}" placeholder="Unit Pengolah">
                            @error('processing_unit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('security.index') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">{{ isset($security) ? 'Update' : 'Simpan' }}</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /content area -->

</div>
<!-- /inner content -->
@endsection
