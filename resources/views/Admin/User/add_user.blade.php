@extends('Admin.Dashboard.dashboard')
@section('main_content')

    <h1>
        User
        <small>Add User</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>User</li>
        <li class="active">Add User</li>
    </ol>

    <section class="content" align="center">

        <div class="col-md-6">

            <div class="box box-primary">

                <div class="box-header with-border">
                    <h3>Add User</h3>php
                </div>
                <form class="form" method="post" action="" role="form" >
                    <div class="box-body">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="password" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <select class="form-control" name="department" required>
                                    <option selected="true" disabled>--Select Department--</option>
                                    <option value="abc">ABC</option>
                                    <option value="xyz">Xyz</option>
                                    <option value="aaa">AAA</option>
                                </select>
                            </div>
                            </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                                <select class="form-control" name="report_to" required>
                                    <option selected="true" disabled>--Reporting to--</option>
                                    <option>ABC</option>
                                    <option>Xyz</option>
                                    <option>AAA</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" name="phone" placeholder="phone" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select class="form-control" name="usertype" required>
                                    <option selected="true" disabled>--User Type--</option>
                                    <option>Admin</option>
                                    <option>Salesman</option>
                                    <option>Normal</option>
                                </select>
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