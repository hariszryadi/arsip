@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Klasifikasi</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Master</span>
                    <span class="breadcrumb-item active">Klasifikasi</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Klasifikasi Tersier</h3>
            </div>
            
            <div class="card-body">
                <form class="form-horizontal" id="form" action="{{ route('classification-tertiary.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('primary_classification') text-danger @enderror" for="primary_classification">Klasifikasi Primer</label>
                        <div class="col-lg-10">
                            <select class="form-control select-search @error('primary_classification') is-invalid @enderror" name="primary_classification" id="primary_classification">
                                <option value="" selected disabled>Pilih Klasifikasi Primer</option>
                                @foreach ($primary as $item)
                                    <option value="{{ $item->id }}" {{ old('primary_classification') == $item->id ? 'selected' : '' }}>{{ $item->code }} - {{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('primary_classification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('secondary_classification') text-danger @enderror" for="secondary_classification">Klasifikasi Sekunder</label>
                        <div class="col-lg-10">
                            <select class="form-control select-search @error('secondary_classification') is-invalid @enderror" name="secondary_classification" id="secondary_classification">
                                <option value="" selected disabled>Pilih Klasifikasi Sekunder</option>
                            </select>
                            @error('secondary_classification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('code') text-danger @enderror" for="code">Kode</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" placeholder="Kode">
                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('name') text-danger @enderror" for="name">Nama</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('description') text-danger @enderror" for="description">Deskripsi</label>
                        <div class="col-lg-10">
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="5">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('classification.index') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
    $('#primary_classification').on('change', function () {
        var primary_id = $(this).val();
        $.ajax({
            url: "{{ route('classification-get-secondary') }}",
            method: "POST",
            data: {
                primary_id: primary_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (resp) {
                // console.log(resp.data);
                if (resp.data != null) {
                    $('#secondary_classification').empty();
                    $('#secondary_classification').append('<option value="" selected disabled>Pilih Klasifikasi Sekunder</option');
                    $.each(resp.data, function (i, v) {
                        $('#secondary_classification').append('<option value="'+v.id+'">'+v.code+' - '+v.name+'</option');
                    })
                }
            },
            error: function (error) {
                var responseText=JSON.parse(error.responseText);
                console.log(responseText.messages);
            }
        })
    })
</script>
@endsection
