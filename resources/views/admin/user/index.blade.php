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
 @section('title', 'User page')
 @section('maincontent')
 <!-- start page title -->
 <div class="row">
     <div class="col-12">
         <div class="card card card-info card-outline card-tabs">
             <div class="card-header border-bottom border-info" style="background-color: white;">
                 <h3 class="card-title"> <a href="{{route('user.create')}}"> <button type="button"
                             class="btn btn-info btn-soft-info waves-effect waves-light">Create
                             new</button></a> </h3>

             </div>
             <div class="card-body">
                 <table class="table table-hover" id="example1" style="font-size: 14px;">
                     <thead>
                         <tr>
                             <th width="10px">
                                 <div class="custom-control custom-checkbox">
                                     <input
                                         class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                         type="checkbox" id="selectall">
                                     <label for="selectall" class="custom-control-label"></label>
                                 </div>
                             </th>
                             <th width="10px">ID</th>
                             <th width="10px">Profile</th>
                             <th>Name</th>
                             <th>email</th>
                             <th>Roles</th>
                             <th width="10px">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @if($users->count())
                         @foreach ($users as $user)
                         <tr>
                             <td>
                                 <div class="custom-control custom-checkbox">
                                     <input
                                         class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                         type="checkbox" id="{{$user->id }}" name=" {{ $user->id   }}">
                                     <label for="{{ $user->id }}" class="custom-control-label"></label>
                                 </div>
                             </td>
                             <td> <a href="">{{ $user->id }}</a></td>
                             <td>
                                 <div class="image">
                                     <img src="{{ asset('admin/assets/images/users/avatar-2.jpg') }}" alt=""
                                         class="avatar-xs rounded-circle me-2"> <a href="#" class="text-body">
                                 </div>
                             </td>
                             <td> {{ ucfirst($user->name) }}</td>
                             <td>{{ ucfirst($user->email) }}</td>
                             <td>Roles</td>
                             <td class="btn-group">
                                 <a class=" btn btn-info btn-soft-info waves-effect waves-light btn-sm"
                                     href="{{route('user.edit',$user->id) }}"> <i class="fas fa-edit"></i></a>

                                 <form action="{{ route('user.destroy',$user->id) }}" method="post">
                                     @csrf
                                     @method('DELETE')
                                     <button type="button"
                                         class="btn btn-danger btn-soft-danger waves-effect waves-light btn-sm delete-confirm"
                                         data-name="{{ $user->name }}"><i class="fas fa-trash"></i></button>
                                 </form>
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

 <!-- jQuery -->
 <script src="{{asset ('assets2/plugins/jquery/jquery.min.js') }}"></script>
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
