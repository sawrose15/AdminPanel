@extends('Admin.Dashboard.dashboard')
@section('main_content')

    <h1>
        User
        <small>Manage User</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>User</li>
        <li class="active">Manage User</li>
    </ol>


    <div class="row">
        <div class="col-md-12">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- /.box -->

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">List of all Users available </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <td>Subject</td>
                                        <td>Status</td>
                                        <td>Priority</td>
                                        <td>Case Owner</td>
                                        <td>Case Reason</td>
                                        <td>Type</td>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->username }}</td>
                                        <td>{{ $row->email_address }}</td>
                                        <td>{{ $row->department }}</td>
                                        <td>{{ $row->reporting_to }}</td>
                                        <td>{{ $row->phone_no }}</td>
                                        <td>{{ $row->usertype }}</td>
                                        <td>
                                            <button class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>
                                            <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger"><i class="fa  fa-minus-circle"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>

    <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>

    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@endsection