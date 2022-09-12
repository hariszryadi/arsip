@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Klasifikasi Primer</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Master</span>
                    <span class="breadcrumb-item active">Klasifikasi Primer</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Klasifikasi Primer</h3>
            </div>
            
            <div class="card-body">
                <form class="form-horizontal" id="form" action="{{ route('classification.update', $primary->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Kode</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="code" value="{{ $primary->code }}" readonly>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="category">Kategori</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="category" id="category">
                                <option value="1" {{ $primary->category == '1' ? 'selected' : '' }}>Fasilitatif</option>
                                <option value="2" {{ $primary->category == '2' ? 'selected' : '' }}>Subtantif</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('name') text-danger @enderror" for="name">Nama</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name')!== null ? old('name') : $primary->name }}" placeholder="Nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('classification.index') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /content area -->

</div>
<!-- /inner content -->
@endsection
