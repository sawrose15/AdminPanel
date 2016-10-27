@extends('Admin.Dashboard.dashboard')
@section('main_content')

    <h1>
        Product
        <small>Add Product</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Product</li>
        <li class="active">Add Product</li>
    </ol>

    <section class="content" align ="center">

        <div class="col-md-6">

            <div class="box box-primary">

                <div class="box-header with-border">
                    <h3>Add Product</h3>
                </div>
                <form class="form" method="post" action="" role="form" enctype="multipart/form-data" >
                    <div class="box-body">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <select class="form-control" name="category_name" required>
                                    <option selected="true" disabled>--Select Category--</option>
                                    @foreach($data as $raw)
                                    <option value="{{$raw->category_name}}">{{$raw->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-qrcode"></i></span>
                                <input type="number" name="product_code" class="form-control" placeholder="Product Code" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                <input type="text" name="product_description" class="form-control" placeholder="Description" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                <input type="text" name="product_price" class="form-control" placeholder="Price" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                <input type="file" class="form-control" name="image" id="image" required>
                            </div>
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-left">Submit</button>
                        <button type="reset" class="btn btn-default pull-right">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection