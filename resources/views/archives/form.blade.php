@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Arsip</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Data</span>
                    <span class="breadcrumb-item active">Arsip</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Arsip</h3>
            </div>
            
            <div class="card-body">
                <form class="form-horizontal" id="form" action="{{ route('archives.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="created_by">Pencipta Arsip</label>
                        <div class="col-lg-10">
                            <select name="created_by" class="form-control" id="created_by">
                                <option value="1">Perangkat Daerah</option>
                                <option value="2">Desa</option>
                                <option value="3">BUMD</option>
                                <option value="4">Perorangan</option>
                                <option value="5">Ormas</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="archives_number">No. Berkas</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="archives_number" id="archives_number" value="{{ old('archives_number') }}" placeholder="No. Berkas">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="description">Uraian Arsip</label>
                        <div class="col-lg-10">
                            <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="level">Tingkat Perkembangan</label>
                        <div class="col-lg-10">
                            <select name="level" class="form-control" id="level">
                                <option value="1">Asli</option>
                                <option value="2">Copy</option>
                                <option value="3">Pertinggal</option>
                                <option value="4">Salinan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="type">Jenis Arsip</label>
                        <div class="col-lg-10">
                            <select name="type" class="form-control" id="type">
                                <option value="1">Statis</option>
                                <option value="2">Inaktiv</option>
                                <option value="3">Vital</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Retensi Akhir Arsip</label>
                        <div class="col-lg-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="final_retention" id="musnah" value="1" checked>
                                <label class="form-check-label" for="musnah">Musnah</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="final_retention" id="permanen" value="2">
                                <label class="form-check-label" for="permanen">Permanen</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="type">Klasifikasi Arsip</label>
                        <div class="col-lg-10">
                            <select class="form-control select-search" data-fouc>
                                @foreach ($primaries as $item)
                                    <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="location">Lokasi Penyimpanan</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="location" id="location" value="{{ old('location') }}" placeholder="Lokasi Penyimpanan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="comment">Keterangan</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="comment" id="comment" value="{{ old('comment') }}" placeholder="Keterangan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="file">File Arsip</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="file" id="file">
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('archives.index') }}">Kembali</a>
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
