@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Banner</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Pengaturan</span>
                    <span class="breadcrumb-item active">Banner</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ isset($banner) ? 'Edit Banner' : 'Tambah Banner' }}</h3>
            </div>
            
            <div class="card-body">
                @isset($banner)
                <form class="form-horizontal" id="form" action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                @else
                <form class="form-horizontal" id="form" action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                @endisset
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('image') text-danger @enderror" for="image">Gambar</label>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input form-control @error('image') is-invalid @enderror" id="customFile" accept=".jpg,.jpeg,.png">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <span id="temp_image">
                                @if (isset($banner))
                                    <img src="{{ asset('storage/'.$banner->image) }}" class="img-thumbnail" style="margin-top: 12px;"/>
                                @endif
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('caption') text-danger @enderror" for="caption">Caption</label>
                        <div class="col-lg-10">
                            <input type="string" class="form-control numeric @error('caption') is-invalid @enderror" name="caption" id="caption" value="{{ old('caption')!== null ? old('caption') : (isset($banner) ? $banner->caption : '') }}" placeholder="Caption">
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('banner.index') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">{{ isset($banner) ? 'Update' : 'Simpan' }}</button>
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
    var previews = $('#temp_image');

    $(".custom-file-input").on("change", function(e){
        $('.custom-file-label').text(e.target.files[0].name);
    });

    $("input[type=file]").on("change", function (e) {
        if (this.files[0].size > 2097152) {
            alert('Upload file max 2 MB');
            this.value = null;
        }
        previews.empty();
        Array.prototype.slice.call(e.target.files)
            .forEach(function (file, idx) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    $("<img/>", {
                            "src": event.target.result,
                            "class": idx,
                            "class": "img-thumbnail",
                            "style": "margin-top: 12px"
                        }).appendTo(previews);
                };
                reader.readAsDataURL(file);
            })
    })
</script>
@endsection
