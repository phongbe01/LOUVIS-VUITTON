@extends('admin.index')
<style>

    a {
        margin-right: 1.5em !important;
    }

    .lv-data-table-edit:hover {
        color: green !important;
    }

    .lv-data-table-delete:hover {
        color: red !important;
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
                            <div class="card-header d-flex">
                                <h3 class="card-title">User Table</h3>
                            </div>
                            <a class="btn btn-success " href="javascript:void(0)" id="createNewProduct"> Create New
                                Product</a>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="user_table"
                                       class="table table-bordered table-striped table-hover table-bordered data-table">
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

    <!--  Edit Modal -->
    @include('admin.user-table.edit')
    <!-- End Edit Modal -->
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'roleID', name: 'roleID'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('#createNewProduct').click(function () {
                $('#saveBtn').val("create-user");
                $('#userForm').trigger("reset");
                $('#modelHeading').html("Create New User");
                $('#ajaxModel').modal('show');
                $('#password').show();
                $('#role_user').val(2);

            });

            $('.card').on('click', '.lv-data-table-edit', function () {
                var user_id = $(this).data('id');
                $.get("{{ route('users.index') }}" + '/' + user_id + '/edit', function (data) {
                    $('#modelHeading').html("Edit User");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#user_id').val(data.id);
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    $('#password').hide();
                    $('#role_user').val(data.roleID);
                })
            });

            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#userForm').serialize(),
                    url: "{{ route('users.index') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        if ($.isEmptyObject(data.error)) {
                            $('#userForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            $('.print-error-msg').hide();
                            table.draw();
                            alert(data.success);
                        } else {
                            printErrorMsg(data.error);
                        }
                    },
                });

                function printErrorMsg(msg) {
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display', 'block');
                    $.each(msg, function (key, value) {
                        $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                        $('.print-error-msg').fadeOut(9000);
                    });
                }
            });

            $('.card').on('click', '.lv-data-table-delete', function () {

                var user_id = $(this).data("id");
                confirm("Are You sure want to delete !");

                $.ajax({
                    type: "DELETE",
                    url: "{{ route('users.store') }}" + '/' + user_id,
                    success: function (data) {
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });

        });
    </script>
@endsection



