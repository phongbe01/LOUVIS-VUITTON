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
                        <li class="breadcrumb-item active">Roles</li>
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
                                <h3 class="card-title">Roles Table</h3>
                            </div>
                            <a class="btn btn-success " href="javascript:void(0)" id="createNewRole"> Create New
                                Role</a>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="role_table"
                                       class="table table-bordered table-striped table-hover table-bordered data-table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
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
    @include('admin.role-table.edit')
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
                ajax: "{{ route('roles.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            //create
            $('#createNewRole').click(function () {
                $.get("{{route('roles.create')}}", function () {
                    $('#saveBtn').val("create-role");
                    $('#roleForm').trigger("reset");
                    $('#modelHeading').html("Create New role");
                    $('#ajaxModel').modal('show');
                })
            });

            $('.card').on('click', '.lv-data-table-edit', function () {
                var role_id = $(this).data('id');
                $.get("{{ route('roles.index') }}" + '/' + role_id + '/edit', function (data) {
                    var role = data.role;
                    $('#modelHeading').html("Edit Role");
                    $('#saveBtn').val("edit-role");
                    $('#ajaxModel').modal('show');
                    $('#role_id').val(role.id);
                    $('#name').val(role.name);
                })
            });

            //edit
            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#roleForm').serialize(),
                    url: "{{ route('roles.index') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        if ($.isEmptyObject(data.error)) {
                            $('#roleForm').trigger("reset");
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
                var role_id = $(this).data("id");
                confirm("Are You sure want to delete !");
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('roles.index') }}" + '/' + role_id + '/',
                    data: role_id,
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



