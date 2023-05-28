@extends('admin.layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center"></h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Department</th>
                                    <th>Post</th>
                                    <th>Salary</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
@foreach ($employee_data as $data )

<tr>
    <td>{{ $data->user_id }}</td>
    <td>{{ $data->name }}</td>
    <td>
        @if ($data->user_email)
            {{ $data->user_email->email }}
        @endif
    </td>
    <td>{{ $data->phone_number }}</td>
    <td>{{ $data->date_of_birth }}</td>
    <td>{{ $data->gender }}</td>
    <td>{{ $data->department_data->department_title }}</td>
    <td>{{ $data->post_data->post_title }}</td>
    <td>{{ $data->salary }}</td>
    <td>
        <img src="/{{ $data->image }}" height="50"  width="50" alt="Image">
    </td>
    <td>
        <a class="btn btn-sm btn-outline-info" href="{{ route('admin.employee.edit',$data->id) }}">Edit</a>
        <br>
        <a  class="btn btn-sm btn-outline-danger" href="{{ route('admin.employee.delete',$data->id) }}" >Delete</a>
    </td>

</tr>
@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
