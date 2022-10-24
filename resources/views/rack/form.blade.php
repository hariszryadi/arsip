@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Rak</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Master</span>
                    <span class="breadcrumb-item active">Rak</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ isset($rack) ? 'Edit Rak' : 'Tambah Rak' }}</h3>
            </div>
            
            <div class="card-body">
                @isset($rack)
                <form class="form-horizontal" id="form" action="{{ route('rack.update', $rack->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                @else
                <form class="form-horizontal" id="form" action="{{ route('rack.store') }}" method="POST">
                    @csrf
                @endisset
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('floor') text-danger @enderror" for="floor">Lantai</label>
                        <div class="col-lg-4">
                            <select name="floor" class="form-control select-search @error('floor') is-invalid @enderror" id="floor" data-fouc>
                                <option value="1" {{ isset($rack) ? $rack->floor == '1' || old('floor') == '1' ? 'selected' : '' : '' }}>1</option>
                                <option value="2" {{ isset($rack) ? $rack->floor == '2' || old('floor') == '2' ? 'selected' : '' : '' }}>2</option>
                                <option value="3" {{ isset($rack) ? $rack->floor == '3' || old('floor') == '3' ? 'selected' : '' : '' }}>3</option>
                                <option value="4" {{ isset($rack) ? $rack->floor == '4' || old('floor') == '4' ? 'selected' : '' : '' }}>4</option>
                            </select>
                            @error('floor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="col-form-label col-lg-2 @error('type') text-danger @enderror" for="type">Tipe</label>
                        <div class="col-lg-4">
                            <select name="type" class="form-control select-search @error('type') is-invalid @enderror" id="type" data-fouc>
                                <option value="S" {{ isset($rack) ? $rack->type == 'S' || old('type') == 'S' ? 'selected' : '' : '' }}>Statis</option>
                                <option value="D" {{ isset($rack) ? $rack->type == 'D' || old('type') == 'D' ? 'selected' : '' : '' }}>Dinamis</option>
                            </select>
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('no_rack') text-danger @enderror" for="no_rack">Nomor Rak</label>
                        <div class="col-lg-4">
                            <input type="string" class="form-control numeric @error('no_rack') is-invalid @enderror" name="no_rack" id="no_rack" maxlength="3" value="{{ old('no_rack')!== null ? old('no_rack') : (isset($rack) ? $rack->no_rack : '001') }}" placeholder="Nomor Rak">
                            @error('no_rack')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="col-form-label col-lg-2 @error('capacity') text-danger @enderror" for="capacity">Kapasitas</label>
                        <div class="col-lg-4">
                            <input type="number" class="form-control @error('capacity') is-invalid @enderror" name="capacity" id="capacity" min="0" value="{{ old('capacity')!== null ? old('capacity') : (isset($rack) ? $rack->capacity : '0') }}">
                            @error('capacity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('rack.index') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">{{ isset($rack) ? 'Update' : 'Simpan' }}</button>
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
    $(document).on("input", ".numeric", function() {
        this.value = this.value.replace(/\D/g,'');
    });
</script>
@endsection
