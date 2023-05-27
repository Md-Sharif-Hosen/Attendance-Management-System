@extends('admin.layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('admin.employee.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Employee Details Create</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">User ID</label>
                            <select class="form-control" name="user_id" id="user_id">
                                @foreach ($user as $data)
                                    <option value="{{ $data->id }}">{{ $data->id }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <select name="email" id="name" class="form-control">
                                @foreach ($user as $data )

                                <option value="{{ $data->id }}">{{ $data->email }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="tel" class="form-control" name="phone_number">
                        </div>
                        <div class="form-group">
                            <label for="">Date Of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth">
                        </div>
                        <div class="form-group">
                            <label for="" > Gender:</label>
                            <br>
                            <input type="radio" value="Male" name="gender">
                            <label for="gender" >Male</label>
                            <input type="radio" value="Female" name="gender">
                            <label for="gender" >Female</label>
                            <input type="radio" value="Others" name="gender">
                            <label for="gender">Others</label>
                        </div>
                        <div class="form-group">
                            <label for="">Department</label>
                            <select class="form-control" name="department" id="department" >
                                @foreach ($department as $data )
                                <option value="{{ $data->id }}">{{ $data->department_title }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Post</label>
                            <select class="form-control" name="post" id="post" >
                                @foreach ($post as $data )
                                <option value="{{ $data->id }}">{{ $data->post_title }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Salary</label>
                            <input type="text" class="form-control" name="salary">
                        </div>
                        <div class="text-center card-footer">
                            <button type="submit" class="btn btn-sm btn-outline-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
