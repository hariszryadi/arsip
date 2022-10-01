@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Arsip Inaktif</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Data</span>
                    <span class="breadcrumb-item active">Arsip Inaktif</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Arsip Inaktif</h3>
            </div>
            
            <div class="card-body">
                <form class="form-horizontal" id="form" action="{{ route('archives-inactive.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('name') text-danger @enderror" for="name">Nama Arsip</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Nama Arsip">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('mapping') text-danger @enderror" for="mapping">Jenis Arsip</label>
                        <div class="col-lg-10">
                            <select name="mapping" class="form-control select-search @error('mapping') is-invalid @enderror" id="mapping" select-search>
                                <option value="" selected disabled>Pilih Jenis Arsip</option>
                                @foreach ($mapping as $item)
                                    <option value="{{ $item->id }}" {{ old('mapping') == $item->id ? 'selected' : '' }}>{{ $item->archive_type }}</option>
                                @endforeach
                            </select>
                            @error('mapping')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('year') text-danger @enderror" for="year">Tahun Penciptaan</label>
                        <div class="col-lg-4">
                            @php
                                $first = (int)date('Y') - 30;
                                $last = (int)date('Y') + 5;
                            @endphp
                            <select name="year" class="form-control select-search @error('year') is-invalid @enderror" id="year" data-fouc>
                                @for ($i = $first; $i < $last; $i++)
                                    @if (old('year') !== null)
                                        <option value="{{ $i }}" {{ old('year') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @else
                                        <option value="{{ $i }}" {{ $i == date('Y') ? 'selected' : '' }}>{{ $i }}</option>
                                    @endif
                                @endfor
                            </select>
                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="col-form-label col-lg-2 @error('amount') text-danger @enderror" for="amount">Jumlah</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" min="0" value="{{ old('amount') !== null ? old('amount') : 0 }}">
                                <span class="input-group-append">
                                    <span class="input-group-text">Berkas</span>
                                </span>
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('dev_level') text-danger @enderror" for="dev_level">Tingkat Perkembangan</label>
                        <div class="col-lg-10">
                            <select name="dev_level" class="form-control select-search @error('dev_level') is-invalid @enderror" id="dev_level" data-fouc>
                                <option value="" selected disabled>Pilih Tingkat Perkembangan</option>
                                <option value="1" {{ old('dev_level') == '1' ? 'selected' : '' }}>Asli</option>
                                <option value="2" {{ old('dev_level') == '2' ? 'selected' : '' }}>Copy</option>
                                <option value="3" {{ old('dev_level') == '3' ? 'selected' : '' }}>Salinan</option>
                                <option value="4" {{ old('dev_level') == '4' ? 'selected' : '' }}>Pertinggal</option>
                                <option value="5" {{ old('dev_level') == '5' ? 'selected' : '' }}>Asli/Copy</option>
                            </select>
                            @error('dev_level')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('loc_floor') text-danger @enderror" for="loc_floor">Lantai</label>
                        <div class="col-lg-4">
                            <select name="loc_floor" class="form-control select-search @error('loc_floor') is-invalid @enderror" id="loc_floor" data-fouc>
                                <option value="1" {{ old('loc_floor') == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('loc_floor') == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('loc_floor') == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('loc_floor') == '4' ? 'selected' : '' }}>4</option>
                            </select>
                            @error('loc_floor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="col-form-label col-lg-2 @error('loc_status') text-danger @enderror" for="loc_status">Tipe</label>
                        <div class="col-lg-4">
                            <select name="loc_status" class="form-control select-search @error('loc_status') is-invalid @enderror" id="loc_status" data-fouc>
                                <option value="S" {{ old('loc_status') == 'S' ? 'selected' : '' }}>Statis</option>
                                <option value="D" {{ old('loc_status') == 'D' ? 'selected' : '' }}>Dinamis</option>
                            </select>
                            @error('loc_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('loc_rack') text-danger @enderror" for="loc_rack">Rak</label>
                        <div class="col-lg-4">
                            <input type="string" class="form-control numeric @error('loc_rack') is-invalid @enderror" name="loc_rack" id="loc_rack" maxlength="3" value="{{ old('loc_rack') != null ? old('loc_rack') : '001' }}">
                            @error('loc_rack')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="col-form-label col-lg-2 @error('loc_box') text-danger @enderror" for="loc_box">Box</label>
                        <div class="col-lg-4">
                            <input type="string" class="form-control numeric @error('loc_box') is-invalid @enderror" name="loc_box" id="loc_box" maxlength="2" value="{{ old('loc_box') != null ? old('loc_box') : '01' }}">
                            @error('loc_box')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('file') text-danger @enderror" for="customFile">Upload Arsip</label>
                        <div class="col-lg-10">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input @error('file') is-invalid @enderror" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('officer') text-danger @enderror" for="officer">Petugas</label>
                        <div class="col-lg-10">
                            <select name="officer" class="form-control select-search @error('officer') is-invalid @enderror" id="officer" select-search>
                                <option value="" selected disabled>Pilih Petugas</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}" {{ old('officer') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('officer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('archives-inactive.index') }}">Kembali</a>
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
    $(document).on("input", ".numeric", function() {
        this.value = this.value.replace(/\D/g,'');
    });

    $(".custom-file-input").on("change", function(e){
        $('.custom-file-label').text(e.target.files[0].name);
    });
</script>
@endsection
