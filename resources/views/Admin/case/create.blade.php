@extends('Admin.Dashboard.dashboard')
@section('main_content')

    <h1>
        User
        <small>Add User</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>User</li>
        <li class="active">Add Case</li>
    </ol>

    <section class="content" align="center">

        <div class="col-md-6">

            <div class="box box-primary">

                <div class="box-header with-border">
                    <h3>Add Case</h3>
                </div>
                <form class="form" method="post"  role="form" >
                    <div class="box-body">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-tag"></i></span>
                                <input type="text" name="subject" class="form-control" placeholder="Enter Subject" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-star-half-o"></i></span>
                                <input type="text" name="status" class="form-control" placeholder="Status" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="case_owner" class="form-control" placeholder="Case_owner" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-question-circle"></i></span>
                                <input type="text" name="case_reason" class="form-control" placeholder="Case_reason" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-arrows-v"></i></span>
                                <select class="form-control" name="priority" required>
                                    <option selected="true" disabled>--Select Priority--</option>
                                    <option value="High-level">High-level</option>
                                    <option value="Mid-level">Mid-level</option>
                                    <option value="Low-level">Low-level</option>
                                </select>
                            </div>
                            </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <select class="form-control" name="type" required>
                                    <option selected="true" disabled>--Case Type--</option>
                                    <option value="Return">Return</option>
                                    <option value="Damage">Damage</option>
                                    <option value="Lost">Lost</option>
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