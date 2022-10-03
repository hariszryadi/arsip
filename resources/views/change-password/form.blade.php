@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Ubah Password</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                {{-- <h3 class="card-title">Ubah Password</h3> --}}
            </div>
            
            <div class="card-body">
                <form class="form-horizontal" id="form" action="{{ route('change-password.update', auth()->user()->id) }}" method="POST">
                    @csrf
                    @method('PUT')
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('old_password') text-danger @enderror" for="old_password">Password Lama</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="old_password" placeholder="Password Lama">
                            @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('new_password') text-danger @enderror" for="new_password">Password Baru</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="new_password" placeholder="Password Baru">
                            @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="new_password_confirmation">Konfirmasi Password Baru</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" placeholder="Password Confirmation">
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('home') }}">Kembali</a>
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
