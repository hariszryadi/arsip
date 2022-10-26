@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Pencipta Arsip</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Master</span>
                    <span class="breadcrumb-item active">Pencipta Arsip</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ isset($creator) ? 'Edit Pencipta Arsip' : 'Tambah Pencipta Arsip' }}</h3>
            </div>
            
            <div class="card-body">
                @isset($creator)
                <form class="form-horizontal" id="form" action="{{ route('archive-creator.update', $creator->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                @else
                <form class="form-horizontal" id="form" action="{{ route('archive-creator.store') }}" method="POST">
                    @csrf
                @endisset
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('name') text-danger @enderror" for="name">Nama</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name')!== null ? old('name') : (isset($creator) ? $creator->name : '') }}" placeholder="Nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('archive-creator.index') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">{{ isset($creator) ? 'Update' : 'Simpan' }}</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /content area -->

</div>
<!-- /inner content -->
@endsection

@section('scripts')
<script>
    $(document).ready(function () {  
        $("#name").keyup(function () {  
            $(this).val($(this).val().toUpperCase());  
        });  
    });
</script>
@endsection
