 @extends('admin.layouts.app')
 @section('head')
     <!-- DataTables -->
     <link href="{{ asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
         type="text/css" />
     <link href="{{ asset('admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
         rel="stylesheet" type="text/css" />

     <!-- Responsive datatable examples -->
     <link href="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
         rel="stylesheet" type="text/css" />
     <!-- Sweet Alert-->
     <link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
 @endsection
 @section('title', 'Login Activity')
 @section('maincontent')
     <!-- start page title -->
     <div class="row">
         <div class="col-12">
             <div class="page-title-box d-flex align-items-center justify-content-between">
                 <a href="{{ route('user.index') }}"> <button type="button" class="btn btn-info">Back</button></a>
                 <h4 class="mb-0">Login Activity</h4>
                 <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                         <li class="breadcrumb-item active">Login Activity</li>
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
                 <div class="p-1">
                     <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                         <a href="{{ route('activity.index') }}" class="btn btn-info waves-effect waves-light ">
                             Activity Dashboard
                         </a>
                         <a href="{{ route('activity.index') }}" class="btn btn-info waves-effect waves-light">
                             Activity Log
                         </a>
                         <a href="{{ route('activity.loginactivity') }}" class="btn btn-info waves-effect waves-light">
                             Login Activity
                         </a>
                         <a href="{{ route('activity.loginactivity') }}" class="btn btn-info waves-effect waves-light">
                             Visitor Activity
                         </a>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="mb-3">
                     </div>
                     <table class="table table-hover" id="example1" style="font-size: 14px;">
                         <thead>


                             <tr>
                                 <th width="10px">ID</th>
                                 <th width="">log_name</th>
                                 <th width="">description</th>
                                 <th>Causer type</th>
                                 <th>Causer id</th>
                                 <th>Causer name</th>
                                 <th>Time ago</th>
                                 <th>Created at</th>

                             </tr>
                         </thead>
                         <tbody>
                             @if ($activities->count())
                                 @foreach ($activities as $activity)
                                     <tr>
                                         <td> <a href="">{{ $activity->id }}</a></td>
                                         <td> {{ ucfirst($activity->log_name) }}</td>
                                         <td> {{ ucfirst($activity->description) }}</td>
                                         <td>{{ ucfirst($activity->causer_type) }}</td>
                                         <td>{{ ucfirst($activity->causer_id) }}</td>
                                         @if ($activity->causer_id > 1)
                                             <td> {{ $activity->causer_type::find($activity->causer_id)->name }} </td>
                                         @else
                                             <td></td>
                                         @endif
                                         <td> {{ strtolower(\Carbon\Carbon::parse($activity->created_at)->diffForHumans()) }}
                                         </td>
                                         <td>{{ ucfirst($activity->created_at) }}</td>

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
                 "order": [
                     [0, 'desc'],
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
