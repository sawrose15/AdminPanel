@extends('Admin.Dashboard.dashboard')
@section('main_content')

    <h1>
        Category
        <small>Add Category</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>


    <div class="row">
        <div class="col-md-6">
            <div class=" box box-primary ">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Category</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" name="create_category" method="post" >
                    {{csrf_field()}}
                    <div class="box-body">

                        <div class="form-group">
                            <label for="category_name">Category Name</label>
                            <input type="text" class="form-control" name="category_name"
                                   placeholder="Enter Category name">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="textarea" class="form-control" name="description" id=""
                                   placeholder="Description Please">
                        </div>
                        <div class="form-group">
                            <label for="">Rank</label>
                            <input type="number" class="form-control" name="rank" id=""
                                   placeholder="Rank Please">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>







            <div class="col-md-12">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              Categories List

            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List of all category available </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Category Name</td>
                                    <td>Description</td>
                                    <td>Rank</td>
                                    <td>Created By</td>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($cat as $catid)
                                <tr>
                                    <td>{{$catid->id}}</td>
                                    <td>{{$catid->category_name}}</td>
                                    <td>{{$catid->description}}</td>
                                    <td>{{$catid->rank}}</td>
                                    <td>{{$catid->created_by}}</td>
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