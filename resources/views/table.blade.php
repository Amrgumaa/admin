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
 @endsection
 @section('title', 'Test page')
 @section('maincontent')
 <!-- start page title -->
 <div class="row">
     <div class="col-12">
         <div class="page-title-box d-flex align-items-center justify-content-between">
             <h4 class="mb-0">Starter page</h4>

             <div class="page-title-right">
                 <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Datatable</a></li>
                     <li class="breadcrumb-item active">Colored Sidebar</li>
                 </ol>
             </div>
         </div>
     </div>
 </div>
 <!-- end page title -->
 <!-- Start here -->


 <div class="row">
     <div class="col-12">
         <div class="card">
             <div class="card-body">

                 <h4 class="card-title">Buttons example</h4>
                 <p class="card-title-desc">ssss </p>

                 <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                     style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                         <img src="{{asset('storage/users/'.$user->id.'/'.$user->image)}}"
                                             alt="{{$user->image}}" class=" img-circle elevation-2"
                                             style="width:35px; height:35px; left:0px; border-radius:50%">
                                     </div>
                                 </td>
                                 <td> {{ ucfirst($user->name) }}</td>
                                 <td>{{ ucfirst($user->email) }}</td>
                                 <td>Roles</td>
                                 <td class="btn-group btn-group-toggle">
                                     <a class="btn btn-info btn-xs mr-1" href="{{route('user.edit',$user->id) }}">
                                         <iclass="fas fa-edit "> </iclass=></a>
                                     <form action=" {{ route('user.destroy',$user->id) }}" method="POST" class="mr-1">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="btn-danger btn-xs"><i
                                                     class="fas fa-trash"></i></button>
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


 @endsection
 @endsection
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">Confirm Delete</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                 </button>
             </div>
             <div class="modal-body">
                 <p>Are You Sure you want to Delete?</p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Understood</button>
             </div>
         </div>
     </div>
