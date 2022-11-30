@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>User</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">User Config</span>
                    <span class="breadcrumb-item active">User</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit User</h3>
            </div>
            
            <div class="card-body">
                <form class="form-horizontal" id="form" action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('name') text-danger @enderror" for="name">Nama</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name')!== null ? old('name') : $user->name }}" placeholder="Nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('email') text-danger @enderror" for="email">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email')!== null ? old('email') : $user->email }}" placeholder="Email" readonly>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('username') text-danger @enderror" for="username">Username</label>
                        <div class="col-lg-10">
                            <input type="username" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username')!== null ? old('username') : $user->username }}" placeholder="Username">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('password') text-danger @enderror" for="password">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" for="password_confirmation">Konfirmasi Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-lg-2 @error('role') text-danger @enderror" for="role">Role</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="role" id="">
                                <option value="null" selected disabled>Pilih Role</option>
                                @foreach ($role as $item)
                                    <option value="{{ $item->id }}" {{ $user->roles->first()->id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 @error('avatar') text-danger @enderror" for="avatar">Avatar</label>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="avatar" class="custom-file-input form-control @error('avatar') is-invalid @enderror" id="customFile" accept=".jpg,.jpeg,.png">
                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <span id="temp_avatar">
                                <img src="{{ asset('storage/'.$user->avatar) }}" class="img-thumbnail" style="margin-top: 12px;"/>
                            </span>
                        </div>
                    </div>
    
                    <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                        <a class="btn btn-danger" href="{{ route('user.index') }}">Kembali</a>
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
    $(document).ready(function () {  
        $("#name").keyup(function () {  
            $(this).val($(this).val().toUpperCase());  
        });  
    });

    var previews = $('#temp_avatar');

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
