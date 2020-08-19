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

            //create
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
                    var user = data.user;
                    var roles = data.roles;
                    $('#modelHeading').html("Edit User");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#user_id').val(user.id);
                    $('#name').val(user.name);
                    $('#email').val(user.email);
                    $('.input-password').hide();
                    $("#role_user").empty();
                    $.each(roles, function () {
                        $("#role_user").append('<option value="' + this.id + '">' + this.name + '</option>');
                    })
                    $('#role_user').val(user.roleID);
                })
            });

            //edit
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



