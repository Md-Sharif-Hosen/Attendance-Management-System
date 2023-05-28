@extends('admin.layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('admin.employee.update',$employee_data_edit->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Employee Details Edit</h2>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id" value="{{ $employee_data_edit->id }}">
                        <div class="form-group">
                            <label for="user_id"> User Id </label>
                            <select class="form-control" name="user_id" id="user_id">
                                @foreach ($user_data as $data)
                                    <option {{ $employee_data_edit->user_id == $data->id ? 'selected' : '' }}
                                        value="{{ $data->id }}">{{ $data->id }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="name"> Name </label>
                            <input class="form-control" type="text" name="name"
                                value="{{ $employee_data_edit->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email </label>
                            <select class="form-control" name="email" id="email">
                                @foreach ($user_data as $data)
                                    <option {{ $employee_data_edit->email == $data->id ? 'selected' : '' }} value="{{ $data->id }}">
                                     {{ $data->email }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="phone_number"> Phone Number </label>
                            <input class="form-control" type="text" name="phone_number"
                                value="{{ $employee_data_edit->phone_number }}">
                        </div>
                        <div class="form-group">
                            <label for="Gender"> Gender:</label>
                            <br>
                            <label for="Male">
                                <input type="radio" {{ $employee_data_edit->gender == 'Male' ? 'checked' : '' }}
                                    value="Male" name="gender">
                                Male</label>
                            <label for="Female">
                                <input type="radio" {{ $employee_data_edit->gender == 'Female' ? 'checked' : '' }}
                                    value="Female" name="gender">

                                Female</label>
                            <label for="Others">
                                <input type="radio" {{ $employee_data_edit->gender == 'Others' ? 'checked' : '' }}
                                    value="Others" name="gender">

                                Others</label>
                        </div>

                        <div class="form-group">
                            <label for="department"> Department </label>
                            <select class="form-control" type="text" name="department">
                                @foreach ($departmentdata as $data)
                                    <option {{ $employee_data_edit->department == $data->id ? 'selected' : '' }}
                                        value="{{ $data->id }}">
                                        {{ $data->department_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="post"> Post </label>
                            <select class="form-control" name="post" id="post">
                                @foreach ($post as $data)
                                    <option {{ $employee_data_edit->post == $data->id ? 'selected' : '' }}
                                        value="{{ $data->id }}">
                                        {{ $data->post_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image"> Image </label>
                            <input class="form-control" type="file" accept="image*/" name="image">
                            <img src="/{{ $employee_data_edit->image }}" height="100" alt="image">
                        </div>

                        <div class="text-center card-footer">
                            <button type="submit" class="btn btn-sm btn-outline-dark">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
