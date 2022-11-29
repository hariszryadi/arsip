@extends('layouts.app')

@section('content')
<style>
    .table tr th:nth-child(2),
    .table tr th:nth-child(3),
    .table tr th:nth-child(4),
    .table tr th:nth-child(5),
    .table tr th:nth-child(6),
    .table tr td:nth-child(2),
    .table tr td:nth-child(3),
    .table tr td:nth-child(4),
    .table tr td:nth-child(5),
    .table tr td:nth-child(6) {
        text-align: center;
        width: 10%;
    }
</style>
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Role</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">User Config</span>
                    <span class="breadcrumb-item active">Role</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ isset($role) ? 'Edit Role' : 'Tambah Role' }}</h3>
            </div>
            
            <div class="card-body">
                @isset($role)
                <form class="form-horizontal" id="form" action="{{ route('role.update', $role->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                @else
                <form class="form-horizontal" id="form" action="{{ route('role.store') }}" method="POST">
                    @csrf
                @endisset
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('name') text-danger @enderror" for="name">Nama</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name')!== null ? old('name') : (isset($role) ? $role->name : '') }}" placeholder="Nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Permission</label>
                        <div class="col-lg-10">
                            <table class="table table-hover table-bordered striped">
                                <thead>
                                    <tr class="bg-teal-400">
                                        <th>Menu</th>
                                        <th>Lihat</th>
                                        <th>Buat</th>
                                        <th>Ubah</th>
                                        <th>Hapus</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Master - Klasifikasi</td>
                                        <td><input type="checkbox" value="classification-list" name="permission[]" id="classification-list" {{ isset($role) ? $role->permissions->contains('name', 'classification-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="classification-create" name="permission[]" id="classification-create" {{ isset($role) ? $role->permissions->contains('name', 'classification-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="classification-edit" name="permission[]" id="classification-edit" {{ isset($role) ? $role->permissions->contains('name', 'classification-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="classification-delete" name="permission[]" id="classification-delete" {{ isset($role) ? $role->permissions->contains('name', 'classification-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Master - Keamanan</td>
                                        <td><input type="checkbox" value="security-list" name="permission[]" id="security-list" {{ isset($role) ? $role->permissions->contains('name', 'security-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="security-create" name="permission[]" id="security-create" {{ isset($role) ? $role->permissions->contains('name', 'security-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="security-edit" name="permission[]" id="security-edit" {{ isset($role) ? $role->permissions->contains('name', 'security-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="security-delete" name="permission[]" id="security-delete" {{ isset($role) ? $role->permissions->contains('name', 'security-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Master - Retensi</td>
                                        <td><input type="checkbox" value="retention-list" name="permission[]" id="retention-list" {{ isset($role) ? $role->permissions->contains('name', 'retention-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="retention-create" name="permission[]" id="retention-create" {{ isset($role) ? $role->permissions->contains('name', 'retention-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="retention-edit" name="permission[]" id="retention-edit" {{ isset($role) ? $role->permissions->contains('name', 'retention-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="retention-delete" name="permission[]" id="retention-delete" {{ isset($role) ? $role->permissions->contains('name', 'retention-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Master - Mapping</td>
                                        <td><input type="checkbox" value="mapping-list" name="permission[]" id="mapping-list" {{ isset($role) ? $role->permissions->contains('name', 'mapping-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="mapping-create" name="permission[]" id="mapping-create" {{ isset($role) ? $role->permissions->contains('name', 'mapping-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="mapping-edit" name="permission[]" id="mapping-edit" {{ isset($role) ? $role->permissions->contains('name', 'mapping-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="mapping-delete" name="permission[]" id="mapping-delete" {{ isset($role) ? $role->permissions->contains('name', 'mapping-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Master - Pencipta Arsip</td>
                                        <td><input type="checkbox" value="archive-creator-list" name="permission[]" id="archive-creator-list" {{ isset($role) ? $role->permissions->contains('name', 'archive-creator-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archive-creator-create" name="permission[]" id="archive-creator-create" {{ isset($role) ? $role->permissions->contains('name', 'archive-creator-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archive-creator-edit" name="permission[]" id="archive-creator-edit" {{ isset($role) ? $role->permissions->contains('name', 'archive-creator-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archive-creator-delete" name="permission[]" id="archive-creator-delete" {{ isset($role) ? $role->permissions->contains('name', 'archive-creator-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Master - Rak</td>
                                        <td><input type="checkbox" value="rack-list" name="permission[]" id="rack-list" {{ isset($role) ? $role->permissions->contains('name', 'rack-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="rack-create" name="permission[]" id="rack-create" {{ isset($role) ? $role->permissions->contains('name', 'rack-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="rack-edit" name="permission[]" id="rack-edit" {{ isset($role) ? $role->permissions->contains('name', 'rack-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="rack-delete" name="permission[]" id="rack-delete" {{ isset($role) ? $role->permissions->contains('name', 'rack-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Data - Arsip Vital</td>
                                        <td><input type="checkbox" value="archives-vital-list" name="permission[]" id="archives-vital-list" {{ isset($role) ? $role->permissions->contains('name', 'archives-vital-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-vital-create" name="permission[]" id="archives-vital-create" {{ isset($role) ? $role->permissions->contains('name', 'archives-vital-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-vital-edit" name="permission[]" id="archives-vital-edit" {{ isset($role) ? $role->permissions->contains('name', 'archives-vital-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-vital-delete" name="permission[]" id="archives-vital-delete" {{ isset($role) ? $role->permissions->contains('name', 'archives-vital-delete') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-vital-download" name="permission[]" id="archives-vital-download" {{ isset($role) ? $role->permissions->contains('name', 'archives-vital-download') ? 'checked' : '' : '' }}></td>
                                    </tr>
                                    <tr>
                                        <td>Data - Arsip Statis</td>
                                        <td><input type="checkbox" value="archives-static-list" name="permission[]" id="archives-static-list" {{ isset($role) ? $role->permissions->contains('name', 'archives-static-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-static-create" name="permission[]" id="archives-static-create" {{ isset($role) ? $role->permissions->contains('name', 'archives-static-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-static-edit" name="permission[]" id="archives-static-edit" {{ isset($role) ? $role->permissions->contains('name', 'archives-static-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-static-delete" name="permission[]" id="archives-static-delete" {{ isset($role) ? $role->permissions->contains('name', 'archives-static-delete') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-static-download" name="permission[]" id="archives-static-download" {{ isset($role) ? $role->permissions->contains('name', 'archives-static-download') ? 'checked' : '' : '' }}></td>
                                    </tr>
                                    <tr>
                                        <td>Data - Arsip Inaktif</td>
                                        <td><input type="checkbox" value="archives-inactive-list" name="permission[]" id="archives-inactive-list" {{ isset($role) ? $role->permissions->contains('name', 'archives-inactive-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-inactive-create" name="permission[]" id="archives-inactive-create" {{ isset($role) ? $role->permissions->contains('name', 'archives-inactive-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-inactive-edit" name="permission[]" id="archives-inactive-edit" {{ isset($role) ? $role->permissions->contains('name', 'archives-inactive-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-inactive-delete" name="permission[]" id="archives-inactive-delete" {{ isset($role) ? $role->permissions->contains('name', 'archives-inactive-delete') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="archives-inactive-download" name="permission[]" id="archives-inactive-download" {{ isset($role) ? $role->permissions->contains('name', 'archives-inactive-download') ? 'checked' : '' : '' }}></td>
                                    </tr>
                                    <tr>
                                        <td>Data - Usul Musnah</td>
                                        <td><input type="checkbox" value="archives-destroy-list" name="permission[]" id="archives-destroy-list" {{ isset($role) ? $role->permissions->contains('name', 'archives-destroy-list') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="checkbox" value="archives-destroy-delete" name="permission[]" id="archives-destroy-delete" {{ isset($role) ? $role->permissions->contains('name', 'archives-destroy-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Data - Usul Serah</td>
                                        <td><input type="checkbox" value="archives-over-list" name="permission[]" id="archives-over-list" {{ isset($role) ? $role->permissions->contains('name', 'archives-over-list') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Report - Arsip Vital</td>
                                        <td><input type="checkbox" value="report-archive-vital-list" name="permission[]" id="report-archive-vital-list" {{ isset($role) ? $role->permissions->contains('name', 'report-archive-vital-list') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Report - Arsip Statis</td>
                                        <td><input type="checkbox" value="report-archive-static-list" name="permission[]" id="report-archive-static-list" {{ isset($role) ? $role->permissions->contains('name', 'report-archive-static-list') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Report - Arsip Inaktif</td>
                                        <td><input type="checkbox" value="report-archive-inactive-list" name="permission[]" id="report-archive-inactive-list" {{ isset($role) ? $role->permissions->contains('name', 'report-archive-inactive-list') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Report - Pengunjung</td>
                                        <td><input type="checkbox" value="report-guest-list" name="permission[]" id="report-guest-list" {{ isset($role) ? $role->permissions->contains('name', 'report-guest-list') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>User Config - Role</td>
                                        <td><input type="checkbox" value="role-list" name="permission[]" id="role-list" {{ isset($role) ? $role->permissions->contains('name', 'role-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="role-create" name="permission[]" id="role-create" {{ isset($role) ? $role->permissions->contains('name', 'role-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="role-edit" name="permission[]" id="role-edit" {{ isset($role) ? $role->permissions->contains('name', 'role-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="role-delete" name="permission[]" id="role-delete" {{ isset($role) ? $role->permissions->contains('name', 'role-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>User Config - User</td>
                                        <td><input type="checkbox" value="user-list" name="permission[]" id="user-list" {{ isset($role) ? $role->permissions->contains('name', 'user-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="user-create" name="permission[]" id="user-create" {{ isset($role) ? $role->permissions->contains('name', 'user-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="user-edit" name="permission[]" id="user-edit" {{ isset($role) ? $role->permissions->contains('name', 'user-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="user-delete" name="permission[]" id="user-delete" {{ isset($role) ? $role->permissions->contains('name', 'user-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Pengaturan - Banner</td>
                                        <td><input type="checkbox" value="banner-list" name="permission[]" id="banner-list" {{ isset($role) ? $role->permissions->contains('name', 'banner-list') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="banner-create" name="permission[]" id="banner-create" {{ isset($role) ? $role->permissions->contains('name', 'banner-create') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="banner-edit" name="permission[]" id="banner-edit" {{ isset($role) ? $role->permissions->contains('name', 'banner-edit') ? 'checked' : '' : '' }}></td>
                                        <td><input type="checkbox" value="banner-delete" name="permission[]" id="banner-delete" {{ isset($role) ? $role->permissions->contains('name', 'banner-delete') ? 'checked' : '' : '' }}></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('role.index') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">{{ isset($role) ? 'Update' : 'Simpan' }}</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /content area -->

</div>
<!-- /inner content -->
@endsection
