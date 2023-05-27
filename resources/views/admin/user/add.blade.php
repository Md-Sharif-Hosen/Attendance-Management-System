@extends('admin.layouts.dashboard')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-6 ">

            <form  action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="card  alert-dark" >
                        <div class="card-header ">
                            <h2 class="text-center">User Create</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Username <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="username">

                            </div>

                            <div class="form-group">
                                <label for="">Role ID <span class="login-danger">*</span></label>
                                <input class="form-control" type="number" name="role_id">
                            </div>
                            <div class="form-group">
                                <label for="">Email <span class="login-danger">*</span></label>
                                <input class="form-control" type="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="">Password <span class="login-danger">*</span></label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="text-center card-footer">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
