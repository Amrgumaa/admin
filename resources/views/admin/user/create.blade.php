@extends('admin.layouts.app')
@section('head')
<!-- Plugins css -->
<link href="{{ asset('admin/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('title', 'Create User')
@section('pagehead', 'Create User')


@section('maincontent')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Starter page</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Vertical</a></li>
                    <li class="breadcrumb-item active">Colored Sidebar</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<!-- Start here -->
<!-- start page title -->
<div class="d-flex justify-content-center">
    <div class="col-md-8">
        <div>

            <div class="card card card-info card-outline card-tabs">
                <div class="card-header border-bottom border-info" style="background-color: white;">
                    <div class="d-flex justify-content-between d-flex align-items-center">
                        <div class="card-title">
                            <h4 class="mt-1">Add new User</h4>
                        </div>
                        <a href="{{route('user.index')}}"> <button type="button" class="btn btn-info">Back</button></a>
                    </div>
                </div>

                <div class="card-body">
                    <form role="form" class="card-body  needs-validation" action="{{route('user.store')}}" method="post"
                        enctype="multipart/form-data" novalidate>
                        @csrf
                        <!-- <x-/////alert /> -->
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label" for="name">Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Name" value="{{ old('name') }}" name="name" required>
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
                            <div class="col-md-10">
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
                            <div class="col-md-10">
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
                        <div class="mb-3 row">
                            <label for=" password" class="col-md-2 col-form-label">Confirm Password</label>
                            <div class="col-md-10">
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
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" rows="3"
                                placeholder="Enter Description" name="description">{{ old('description')}}</textarea>
                            <div class="invalid-feedback">
                                Field is required
                            </div>
                            @error('description')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Image</label>
                            <div class="">
                                <input id="image" type="file" class="form-control-file" name="image">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Create Record</button>
                        </div>
                    </form>

                </div>

            </div>
        </div> <!-- end col -->

    </div> <!-- end row -->

</div>
<div class="d-flex justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Upload User Image</h4>
                <div>
                    <form action="#" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted uil uil-cloud-upload"></i>
                            </div>

                            <h4>Drop files here or click to upload.</h4>
                        </div>
                    </form>
                </div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                </div>
            </div>
        </div>
    </div>
</div>

@section('foot')
<!-- Plugins js -->

< src="{{ asset('admin/assets/libs/dropzone/min/dropzone.min.js') }}"></>
@endsection
@endsection
