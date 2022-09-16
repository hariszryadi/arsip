@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Mapping</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Master</span>
                    <span class="breadcrumb-item active">Mapping</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ isset($mapping) ? 'Edit Mapping' : 'Tambah Mapping' }}</h3>
            </div>
            
            <div class="card-body">
                @isset($mapping)
                <form class="form-horizontal" id="form" action="{{ route('mapping.update', $mapping->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                @else
                <form class="form-horizontal" id="form" action="{{ route('mapping.store') }}" method="POST">
                    @csrf
                @endisset
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('classification') text-danger @enderror" for="classification">Klasifikasi</label>
                        <div class="col-lg-10">
                            <select name="classification" class="form-control select-search @error('classification') is-invalid @enderror" id="classification" data-fouc>
                                <option value="" selected disabled>Pilih Klasifikasi</option>
                                @foreach ($classification as $item)
                                    @isset($mapping)
                                        <option value="{{ $item['code'] }}" {{ old('classification') == $item['code'] ? 'selected' : ($mapping->code == $item['code'] ? 'selected' : '') }}>{{ $item['code'] }} - {{ $item['name'] }}</option>
                                    @else
                                        <option value="{{ $item['code'] }}" {{ old('classification') == $item['code'] ? 'selected' : '' }}>{{ $item['code'] }} - {{ $item['name'] }}</option>
                                    @endisset
                                @endforeach
                            </select>
                            @error('classification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('archive_type') text-danger @enderror" for="archive_type">Jenis Arsip</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('archive_type') is-invalid @enderror" name="archive_type" placeholder="Jenis Arsip" value="{{ isset($mapping) ? $mapping->archive_type : '' }}" {{ isset($mapping) ? 'readonly' : '' }}>
                            @error('archive_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('security') text-danger @enderror" for="security">Keamanan</label>
                        <div class="col-lg-4">
                            <select name="security" class="form-control select-search @error('security') is-invalid @enderror" id="security" data-fouc>
                                <option value="" selected disabled>Pilih Keamanan</option>
                                @foreach ($security as $item)
                                    @isset($mapping)
                                        <option value="{{ $item['id'] }}" {{ old('security') == $item['id'] ? 'selected' : ($mapping->security == $item['id'] ? 'selected' : '') }}>{{ $item['name'] }}</option>
                                    @else
                                        <option value="{{ $item['id'] }}" {{ old('security') == $item['id'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
                                    @endisset
                                @endforeach
                            </select>
                            @error('security')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="col-form-label col-lg-2 @error('retention') text-danger @enderror" for="retention">Retensi</label>
                        <div class="col-lg-4">
                            <select name="retention" class="form-control select-search @error('retention') is-invalid @enderror" id="retention" data-fouc>
                                <option value="" selected disabled>Pilih Retensi</option>
                                @foreach ($retention as $item)
                                    @isset($mapping)
                                        <option value="{{ $item['id'] }}" {{ old('retention') == $item['id'] ? 'selected' : ($mapping->retention == $item['id'] ? 'selected' : '') }}>{{ $item['name'] }}</option>
                                    @else
                                        <option value="{{ $item['id'] }}" {{ old('retention') == $item['id'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
                                    @endisset
                                @endforeach
                            </select>
                            @error('retention')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('active') text-danger @enderror" for="active">Retensi Aktif</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="number" class="form-control @error('active') is-invalid @enderror" name="active" min="0" value="{{ isset($mapping) ? $mapping->active : 0 }}">
                                <span class="input-group-append">
                                    <span class="input-group-text">Tahun</span>
                                </span>
                                @error('active')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <label class="col-form-label col-lg-2 @error('inactive') text-danger @enderror" for="inactive">Retensi Inaktif</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="number" class="form-control @error('inactive') is-invalid @enderror" name="inactive" min="0" value="{{ isset($mapping) ? $mapping->inactive : 0 }}">
                                <span class="input-group-append">
                                    <span class="input-group-text">Tahun</span>
                                </span>
                                @error('inactive')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('mapping.index') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">{{ isset($mapping) ? 'Update' : 'Simpan' }}</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /content area -->

</div>
<!-- /inner content -->
@endsection
