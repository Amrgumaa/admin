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
<section>
    <div class="d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card card-info card-outline card-tabs ">
                <div class="card-header">
                    <div class="d-flex justify-content-between d-flex align-items-center">
                        <h3 class="card-title">Add new record</h3>
                        <a href="{{route('user.index')}}"> <button type="button" class="btn btn-info">Back</button></a>
                    </div>
                </div>

                <div class="card-body">
                    <form role="form" class="card-body " action="{{route('user.store')}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="name" name="name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="" aria-describedby="helpId"
                                placeholder="Enter Email" value="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="" aria-describedby="helpId"
                                placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter Description"
                                name="description">{{ old('description')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Image</label>
                            <div class="">
                                <input id="image" type="file" class="form-control-file" name="image">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Create Record</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</section>

@section('foot')


@endsection
@endsection
