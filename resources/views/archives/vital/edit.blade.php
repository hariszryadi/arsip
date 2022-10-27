@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Arsip Vital</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Data</span>
                    <span class="breadcrumb-item active">Arsip Vital</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Arsip Vital</h3>
            </div>
            
            <div class="card-body">
                <form class="form-horizontal" id="form" action="{{ route('archives-vital.update', $archives->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('name') text-danger @enderror" for="name">Nama Arsip</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') !== null ? old('name') : $archives->name }}" placeholder="Nama Arsip">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('code_classification') text-danger @enderror" for="code_classification">Klasifikasi</label>
                        <div class="col-lg-10">
                            <select name="code_classification" class="form-control select-search @error('code_classification') is-invalid @enderror" id="code_classification" select-search>
                                <option value="" selected disabled>Pilih Klasifikasi</option>
                                @foreach ($classification as $item)
                                    @if (old('code_classification') !== null)
                                        <option value="{{ $item['code'] }}" {{ old('code_classification') == $item['code'] ? 'selected' : '' }}>{{ $item['code'] }} - {{ $item['name'] }}</option>
                                    @else
                                        <option value="{{ $item['code'] }}" {{ $archives->code_classification == $item['code'] ? 'selected' : '' }}>{{ $item['code'] }} - {{ $item['name'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('code_classification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('archive_creator_id') text-danger @enderror" for="archive_creator_id">Pencipta Arsip</label>
                        <div class="col-lg-10">
                            <select name="archive_creator_id" class="form-control select-search @error('archive_creator_id') is-invalid @enderror" id="archive_creator_id" select-search>
                                <option value="" selected disabled>Pilih Pencipta Arsip</option>
                                @foreach ($creator as $item)
                                    @if (old('archive_creator_id') !== null)
                                        <option value="{{ $item->id }}" {{ old('archive_creator_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}" {{ $archives->archive_creator_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('archive_creator_id')
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
                                        <option value="{{ $i }}" {{ $archives->year == $i ? 'selected' : '' }}>{{ $i }}</option>
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
                                <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" min="0" value="{{ old('amount') !== null ? old('amount') : $archives->amount }}">
                                <span class="input-group-append">
                                    <span class="input-group-text">Folder</span>
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
                        <label class="col-form-label col-lg-2 @error('rack_id') text-danger @enderror" for="rack_id">Rak</label>
                        <div class="col-lg-4">
                            <select name="rack_id" class="form-control select-search @error('rack_id') is-invalid @enderror" id="rack_id" select-search>
                                <option value="" selected disabled>Pilih Rak</option>
                                @foreach ($rack as $item)
                                    @if (old('rack_id') !== null)
                                        <option value="{{ $item->id }}" {{ old('rack_id') == $item->id ? 'selected' : '' }}>R.{{ $item->floor}}.{{ $item->type }}.{{$item->no_rack }}</option>
                                    @else
                                        <option value="{{ $item->id }}" {{ $archives->rack_id == $item->id ? 'selected' : '' }}>R.{{ $item->floor}}.{{ $item->type }}.{{$item->no_rack }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('rack_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="capacity-feedback"></div>
                        </div>

                        <label class="col-form-label col-lg-2 @error('box') text-danger @enderror" for="box">Box</label>
                        <div class="col-lg-4">
                            <input type="string" class="form-control numeric @error('box') is-invalid @enderror" name="box" id="box" maxlength="2" value="{{ old('box') != null ? old('box') : $archives->box }}">
                            @error('box')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('dev_level') text-danger @enderror" for="dev_level">Tingkat Perkembangan</label>
                        <div class="col-lg-10">
                            <select name="dev_level" class="form-control select-search @error('dev_level') is-invalid @enderror" id="dev_level" data-fouc>
                                <option value="" selected disabled>Pilih Tingkat Perkembangan</option>
                                @if (old('dev_level') !== null)
                                    <option value="1" {{ old('dev_level') == '1' ? 'selected' : '' }}>Asli</option>
                                    <option value="2" {{ old('dev_level') == '2' ? 'selected' : '' }}>Copy</option>
                                    <option value="3" {{ old('dev_level') == '3' ? 'selected' : '' }}>Salinan</option>
                                    <option value="4" {{ old('dev_level') == '4' ? 'selected' : '' }}>Pertinggal</option>
                                    <option value="5" {{ old('dev_level') == '5' ? 'selected' : '' }}>Asli/Copy</option>
                                @else
                                    <option value="1" {{ $archives->dev_level == '1' ? 'selected' : '' }}>Asli</option>
                                    <option value="2" {{ $archives->dev_level == '2' ? 'selected' : '' }}>Copy</option>
                                    <option value="3" {{ $archives->dev_level == '3' ? 'selected' : '' }}>Salinan</option>
                                    <option value="4" {{ $archives->dev_level == '4' ? 'selected' : '' }}>Pertinggal</option>
                                    <option value="5" {{ $archives->dev_level == '5' ? 'selected' : '' }}>Asli/Copy</option>
                                @endif
                            </select>
                            @error('dev_level')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="customFile">Upload Arsip</label>
                        <div class="col-lg-10">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('officer') text-danger @enderror" for="officer">Petugas</label>
                        <div class="col-lg-10">
                            <select name="officer" class="form-control select-search @error('officer') is-invalid @enderror" id="officer" select-search>
                                <option value="" selected disabled>Pilih Petugas</option>
                                @foreach ($user as $item)
                                    @if (old('officer') !== null)
                                        <option value="{{ $item->id }}" {{ old('officer') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}" {{ $archives->officer == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endif
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
                        <a class="btn btn-danger" href="{{ route('archives-vital.index') }}">Kembali</a>
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

@section('scripts')
<script>
    $(document).on("input", ".numeric", function() {
        this.value = this.value.replace(/\D/g,'');
    });

    $(".custom-file-input").on("change", function(e){
        $('.custom-file-label').text(e.target.files[0].name);
    });

    $("#rack_id").on("change", function () {
        $('.capacity-feedback').empty();
        $.ajax({
            url: "{{ route('get-rack-archive-vital') }}",
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: this.value
            },
            success: function (resp) {
                $('.capacity-feedback').append(resp);
                $('.span-feedback').show();
            },
            error: function (xhr, textStatus, error) {
                swalInit.fire('Error!', textStatus, 'error');
            }
        })
    })
</script>
@endsection
