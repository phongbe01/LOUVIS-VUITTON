@extends('admin.index')
<style>

    a {
        margin-right: 1.5em!important;
    }
    .lv-data-table-edit:hover {
        color: green!important;
    }

    .lv-data-table-delete:hover {
        color: red!important;
    }

    .lv-data-table-icon {
        margin-block-start: 0.5em;
    }

    .fa-edit {
        color: #00bb00;
    }

    .fa-trash {
        color: red;
    }
</style>
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div>
                                <table id="user_table" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @foreach($users as $user)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$user->id}}</td>--}}
{{--                                            <td>{{$user->name}}</td>--}}
{{--                                            <td>{{$user->email}}</td>--}}
{{--                                            <td>{{$user->role}}</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="lv-data-table d-flex">--}}
{{--                                                    <span class="fas fa-edit lv-data-table-icon" style=""></span>--}}
{{--                                                    <button class="btn btn-sm lv-data-table-edit"><a href="{{route('user.edit', $user->id)}}">Edit</a></button>--}}
{{--                                                    <span class="fas fa-trash lv-data-table-icon" style=""></span>--}}
{{--                                                    <button class="btn btn-sm lv-data-table-delete" type="button" data-toggle="modal" data-target="#deleteUserId" data-user_id="{{$user->id}}" data-user_name="{{$user->name}}">Delete</button>--}}
{{--                                                    <!-- Delete User Modal -->--}}
{{--                                                    <div class="modal fade" id="deleteUserId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                                        <div class="modal-dialog">--}}
{{--                                                            <form action="{{route('user.destroy', 'user_id')}}" method="post">--}}
{{--                                                                @csrf--}}
{{--                                                                @method('DELETE')--}}
{{--                                                                <div class="modal-content">--}}
{{--                                                                    <div class="modal-header">--}}
{{--                                                                        <h5 class="modal-title" id="exampleModalLabel">Notify</h5>--}}
{{--                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                                            <span aria-hidden="true">&times;</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="modal-body">--}}
{{--                                                                        <input type="hidden" name="user_id" id="user_id">--}}
{{--                                                                        <p id="text-user_name"></p>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="modal-footer">--}}
{{--                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                                                        <button type="submit" class="btn btn-danger" id="btn-delete">Delete</button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </form>--}}
{{--                                                            <form action="" id="form-delete">--}}
{{--                                                                <div class="modal-content">--}}
{{--                                                                    <div class="modal-header">--}}
{{--                                                                        <h5 class="modal-title" id="exampleModalLabel">Notify</h5>--}}
{{--                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                                            <span aria-hidden="true">&times;</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="modal-body">--}}
{{--                                                                        <input type="hidden" name="user_id" id="user_id">--}}
{{--                                                                        <p id="text-user_name"></p>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="modal-footer">--}}
{{--                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                                                        <button type="submit" class="btn btn-danger" id="btn-delete">Delete</button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        let table = $('#user_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('user.list') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'detail', name: 'detail'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#deleteUserId').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget)
            let user_id = button.data('user_id');
            let user_name = button.data('user_name');
            let modal = $(this);
            modal.find('.modal-title').text('Delete user ');
            modal.find('.modal-body #user_id').val(user_id);
            modal.find('.modal-body p').text('Do you want to delete ' + user_name + ' ?');
            modal.find('#form-delete').click(function () {
                $.ajax({
                    url: "admin/dashboard/user-table/delete/" + user_id,
                    type: 'DELETE',
                    data: {
                        id: user_id,
                    },
                    beforeSend:function () {
                        $('#btn-delete').text('Deleting...');
                    },
                    success:function (data) {
                        alert(data);

                        // setTimeout(function () {
                        //
                        // },2000);
                    },
                    error:function (error) {
                        alert(error);
                    }
                });
            })
        });
    </script>
@endsection



