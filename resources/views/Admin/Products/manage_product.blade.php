@extends('Admin.Dashboard.dashboard')
@section('main_content')

    <h1>
        Product
        <small>Manage Products</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Product</li>
        <li class="active">Manage Product</li>
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
                                <h3 class="box-title">List of all Products available </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <td>Product Image</td>
                                        <td>Category Name</td>
                                        <td>Product Code</td>
                                        <td>Product Name</td>
                                        <td>Product Description</td>
                                        <td>Product Price</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($data as $row)
                                        <tr>
                                            <td><img width="200px" height="80px" src="/images/{{ $row->product_image }}"></td>
                                            <td>{{$row->category_name }}</td>
                                            <td>{{$row->product_code }}</td>
                                            <td>{{$row-> product_name }}</td>
                                            <td>{{$row-> product_description }}</td>
                                            <td>{{$row-> product_price }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fa fa-plus-circle"></i></a>
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