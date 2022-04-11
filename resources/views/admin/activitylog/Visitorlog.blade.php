@extends('admin.layouts.app')
@section('head')
<!-- DataTables -->
<link href="{{ asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<!-- Sweet Alert-->
<link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('title', 'Activity Log')
@section('maincontent')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <a href="{{ route('user.index') }}"> <button type="button" class="btn btn-info">Back</button></a>
            <h4 class="mb-0">Visitor Log</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Visitor log</li>
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

            <div class="card-body">

                <table class="table table-hover table-sm" id="example1" style="font-size: 12px;">

                    <thead>

                        <tr height="10px">
                            <th width="10px">ID</th>
                            <th width="10px">Online status</th>
                            <th>IP Address</th>
                            <th>Country-city-state</th>
                            <th>Location</th>
                            <th width="10">User Id</th>
                            <th width="10" >User name</th>
                            <th width="">Device</th>
                            <th width="">Browser</th>
                            <th width="">Visited pages Count</th>
                            <th>Last Seen</th>
                            <th>Last Seen date</th>
                            <th>First visit</th>
                            <th>First visit date</th>
                            <th width="10px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($visitorlogs->count())
                        @foreach ($visitorlogs as $visitor)

                        <tr>
                            <td> <a href="">{{ $visitor->id }}</a></td>

                                @if($visitor->url()->latest()->first()->created_at->diffInMinutes(now())  <"3" )
                               <td> <span class="text-success"><i class="fas fa-dot-circle"></i>nline</span></td>
                                @else
                                <td><span class="text-secondary"><i class="fas fa-dot-circle">ffline</span></td>
                                @endif

                            <td> {{ $visitor->ip_address}}</td>
                            <td> {{ $visitor->country_flag}} <small>{{ $visitor->country}}- {{ $visitor->city}} -{{ $visitor->state_name}}</small></td>
                            <td> <a href="https://www.google.com/maps/place/ {{ $visitor->lat }},{{ $visitor->lon }}">
                              {{ $visitor->lat }},{{ $visitor->lon }}
                            </a></td>
                            <td> {{ $visitor->user_id}}</td>
                            <td>{{ $visitor->user_name}}</td>
                            <td>{{ $visitor->device}}-<small>{{ $visitor->platform}} {{ $visitor->platformversion}}</small> </td>
                            <td>{{ $visitor->browser}}<small> ({{ $visitor->browserversion}})</small> </td>
                           <td>
                               {{ $visitor->url()->count()}}
                            </td>
                             <td>
                             {{ strtolower(\Carbon\Carbon::parse($visitor->url()->latest()->first()->created_at)->diffForHumans()) }}
                            </td>
                            <td>
                                {{ $visitor->url()->latest()->first()->created_at }}
                            </td>

                            <td>
                                {{ strtolower(\Carbon\Carbon::parse($visitor->created_at)->diffForHumans()) }}
                            </td>
                            <td>{{ ucfirst($visitor->created_at) }}</td>




                            <td class="btn-group btn-group-sm">
                                <a class="btn btn-success btn-soft-success waves-effect waves-light"
                                    href="{{ route('activity.show', $visitor->id) }}"> <i class="fas fa-eye ">
                                    </i></a>
                            </td>


                        </tr>


                        @endforeach
                        @else
                        <td colspan="5">
                            <h6 class="text-center">No Records found. Create new </h6>
                        </td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->




@section('foot')


<!-- DataTables  & Plugins -->
<!-- Required datatable js -->
<script src="{{ asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
</script>

<!-- Datatable init js -->
<script src="{{ asset('admin/assets/js/pages/datatables.init.js') }}"></script>

<!-- Sweet Alerts js -->
<script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('admin/assets/js/pages/sweet-alerts.init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
    $(function() {
             $("#example1").DataTable({
                 "responsive": true,
                 "lengthChange": false,
                 "autoWidth": false,
                //  "stateSave": true,
                 "order": [
                     [11, 'desc'],
                 ],
                 "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]


             }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         });

</script>



<script>
    $('.delete-confirm').click(function(event) {
             var form = $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             swal({
                     title: `Are you sure you want to delete ${(name)}?`,
                     text: "If you delete this, it will be gone forever.",
                     icon: "warning",
                     buttons: true,
                     dangerMode: true,
                 })
                 .then((willDelete) => {
                     if (willDelete) {
                         form.submit();
                     }
                 });
         });

</script>

@endsection

@endsection
