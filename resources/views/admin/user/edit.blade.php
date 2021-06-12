@extends('admin.layouts.app')
@section('head')

@endsection
@section('title', 'Edit User')
@section('pagehead', 'Edit User')
@section('maincontent')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <a href="{{ route('user.index') }}"> <button type="button" class="btn btn-info">Back</button></a>
                <h4 class="mb-0">User Edit</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">All Users</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- end page title -->

    <div class="row">
        <div class="card col-md-12">
            <div class="p-4">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <img src="{{ $user->getFirstMediaUrl() }}" alt="" class="avatar-md rounded-circle me-2">
                        <br>
                        <br>
                        <h4 class="text-muted text-truncate mb-0">Id number #:{{ $user->id }}</h4>
                    </div>
                </div>
            </div>
            <div id="name">
                <div class="p-4">
                    <div class="">
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-16 mb-1">Edit Basic data</h5>
                            <p class="text-muted text-truncate mb-0">name & email</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <form role="form" class="card-body  needs-validation" action="{{ route('user.update', $user->id) }}"
                        method="post" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('put')
                        <!-- <x-/////alert /> -->
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label" for="name">Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Name" value="{{ $user->name }}" name="name" required>
                                <div class="invalid-feedback">
                                    Field is required
                                </div>
                                @error('name')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                                    id="" aria-describedby="helpId" placeholder="Enter Email" value="{{ $user->email }}"
                                    required>
                                <div class="invalid-feedback">
                                    Field is required
                                </div>
                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2">Description</label>
                            <div class="col-md-8">
                                <textarea class=" col-md-2 form-control @error('description') is-invalid @enderror" rows="3"
                                    placeholder="Enter Description" name="description">{{ $user->description }}</textarea>
                                <div class="invalid-feedback">
                                    Field is required
                                </div>
                                @error('description')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-10"></div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="change password">
                <div class="p-4">
                    <div class="">
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-16 mb-1">Change password</h5>
                            <p class="text-muted text-truncate mb-0">as per policy</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <form role="form" class="card-body  needs-validation col-md-12"
                        action="{{ route('changepassword', $user->id) }}" method="post" enctype="multipart/form-data"
                        novalidate>
                        @csrf
                        @method('put')
                        <!-- <x-/////alert /> -->
                        <div class="mb-3 row align-items-center">
                            <div class="col-md-5">
                                <label for=" password" class="visually-hidden">Password</label>
                                <div>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="password" aria-describedby="helpId" placeholder="Enter Password"
                                        required>
                                    <div class="invalid-feedback">
                                        Field is required
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for=" password" class="visually-hidden">Confirm Password</label>
                                <div>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password_confirmation" id="password-confirm" aria-describedby="helpId"
                                        placeholder="Confirm Password" required>
                                    <div class="invalid-feedback">
                                        Field is required
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="avatar">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-16 mb-1">Upload User image</h5>
                            <!-- <p class="text-muted text-truncate mb-0">upload</p> -->
                        </div>
                    </div>
                </div>
                <div id="avatar" class="">
                    <div class="p-4 border-top">
                        <form role="form" class="card-body  needs-validation"
                            action="{{ route('changeavatar', $user->id) }}" method="post" enctype="multipart/form-data"
                            novalidate id="selectform{{ $user->id }}">
                            @csrf
                            @method('put')
                            <div class="mb-3 row align-items-center">
                                <label for="image" class="col-form-label col-md-2">Upload Avatar</label>
                                <div class="col-md-8">
                                    <input id="image" type="file"
                                        class="form-control form-control-sm @error('image') is-invalid @enderror"
                                        name="image" required>

                                    <div class="invalid-feedback">
                                        Field is required
                                    </div>
                                    @error('image')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="text-center col-md-1 ">
                                    <a href=""
                                        onclick="event.preventDefault();document.getElementById('selectform{{ $user->id }}').submit()"><i
                                            class="far fa-check-circle fa-2x text-success"></i></a>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- end -->


@section('foot')

@endsection
@endsection
