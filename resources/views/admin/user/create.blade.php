@extends('admin.layouts.app')
@section('head')


@endsection
@section('title', 'Create User')
@section('pagehead', 'Create User')


@section('maincontent')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <a href="{{ route('user.index') }}"> <button type="button" class="btn btn-info">Back</button></a>
                <h4 class="mb-0">User Create </h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">All Users</a></li>
                        <li class="breadcrumb-item active">Create User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <!-- Start here -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div id="name">
                    <a class="text-dark">
                        <div class="p-4">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">Add New user</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div id="" class="collapse show">
                        <div class="p-4 border-top">
                            <form role="form" class="card-body  needs-validation" action="{{ route('user.store') }}"
                                method="post" enctype="multipart/form-data" novalidate>
                                @csrf
                                <!-- <x-/////alert /> -->
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label" for="name">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" placeholder="Name" value="{{ old('name') }}" name="name" required>
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
                                        <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                            name="email" id="" aria-describedby="helpId" placeholder="Enter Email"
                                            value="{{ old('email') }}" required>
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
                                    <label for=" password" class="col-md-2 col-form-label">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" id="password" aria-describedby="helpId"
                                            placeholder="Enter Password" required>
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
                                <div class="mb-3 row">
                                    <label for=" password" class="col-md-2 col-form-label">Confirm Password</label>
                                    <div class="col-md-8">
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

                                <div class="mb-3 row">
                                    <label class="col-md-2">Description</label>

                                    <div class="col-md-8">
                                        <textarea class=" col-md-2 form-control @error('description') is-invalid @enderror"
                                            rows="3" placeholder="Enter Description"
                                            name="description">{{ old('description') }}</textarea>
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
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Create
                                        Record</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- test -->

@section('foot')

@endsection
@endsection
