@extends('admin.layouts.app')
@section('head')

@endsection
@section('title', 'Show activity')
@section('pagehead', 'Show activity')
@section('maincontent')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <a href="{{ route('activity.index') }}"> <button type="button" class="btn btn-info">Back</button></a>
                <h4 class="mb-0">Show Activity</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('activity.index') }}">Activity log</a></li>
                        <li class="breadcrumb-item active">Show Activity</li>
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
                        <h5 class="text-muted text-truncate mb-0">Show activity ID : {{ $activity->id }}</h5>
                    </div>
                </div>
            </div>
            <div id="name">
                <div class="p-4 border-top">
                    <div class="col-md-9">
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Activity ID :
                                            :</label>
                                        <label class="form-label">{{ $activity->id }}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Time Ago:</label>
                                        <label
                                            class="form-label">{{ strtolower(\Carbon\Carbon::parse($activity->created_at)->diffForHumans()) }}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Created at:</label>
                                        <label class="form-label">{{ ucfirst($activity->created_at) }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Causer ID
                                            :</label>
                                        <label class="form-label">{{ ucfirst($activity->causer_id) }}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        @if ($activity->causer_id > 1)
                                            <label class="form-label" for="formrow-firstname-input">Causer Name
                                                :</label>
                                            <label
                                                class="form-label">{{ $activity->causer_type::find($activity->causer_id)->name }}
                                            </label>
                                        @else
                                            <label class="form-label" for="formrow-firstname-input">Causer Name
                                                :</label>
                                            <label class="form-label">System
                                            </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Causer type
                                            :</label>
                                        <label class="form-label">{{ ucfirst($activity->causer_type) }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Activity Log name
                                            :</label>
                                        <label class="form-label">{{ ucfirst($activity->log_name) }}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Activity Description
                                            :</label>
                                        <label class="form-label">{{ ucfirst($activity->description) }}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Subject type
                                            :</label>
                                        <label class="form-label">{{ ucfirst($activity->subject_type) }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Subject id
                                            :</label>
                                        <label class="form-label">{{ $activity->subject_id }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- json:{{ $activity->properties }}
                    <br> encode new"{{ json_encode($activity->properties['attributes'], true) }}
                    <br> decode name
                    new:{{ json_decode(json_encode($activity->properties['attributes']['name'], true), true) }}
                    <br> --}}
                    <div class="d-flex">
                        @if ($activity->description == 'updated')
                            <div class="row col-md-2">
                                <table class="table table-hover  " id="example1" style="font-size: 14px;">
                                    <thead width="10px">
                                        <th class="bg-light">Description</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($keys as $key)
                                            <tr>
                                                <td>{{ ucfirst($key) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row col-md-3">
                                <table class="table table-hover  col-md-6" id="example1" style="font-size: 14px;">
                                    <thead>
                                        <th class="bg-light">Original Values</th>
                                    </thead>
                                    <tbody>
                                        @foreach (explode(',', $oldarr) as $old)
                                            <tr>
                                                <td>{{ ucfirst($old) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row col-md-3">
                                <table class="table table-hover  " id="example1" style="font-size: 14px;">
                                    <thead>
                                        <th class="bg-light">New Values</th>
                                        <!-- <th>old</th> -->
                                    </thead>
                                    <tbody>
                                        @foreach (explode(',', $newarr) as $new)
                                            <tr>
                                                <td>{{ ucfirst($new) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @elseif($activity->description == 'deleted')
                            <div class="row col-md-2">
                                <table class="table table-hover " id="example1" style="font-size: 14px;">
                                    <thead class="bg-light">
                                        <th>Description</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($keys as $key)
                                            <tr>
                                                <td>{{ ucfirst($key) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row col-md-3">
                                <table class="table table-hover " id="example1" style="font-size: 14px;">
                                    <thead class="bg-light">
                                        <th>Original Values</th>
                                    </thead>
                                    <tbody>
                                        @foreach (explode(',', $oldarr) as $old)
                                            <tr>
                                                <td>{{ ucfirst($old) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="row col-md-2">
                                <table class="table table-hover " id="example1" style="font-size: 14px;">
                                    <thead class="bg-light">
                                        <th>Description</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($keys as $key)
                                            <tr>
                                                <td>{{ ucfirst($key) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row col-md-3">
                                <table class="table table-hover " id="example1" style="font-size: 14px;">
                                    <thead class="bg-light">
                                        <th>New Values</th>
                                    </thead>
                                    <tbody>
                                        @foreach (explode(',', $newarr) as $new)
                                            <tr>
                                                <td>{{ ucfirst($new) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end -->


@section('foot')

@endsection
@endsection
