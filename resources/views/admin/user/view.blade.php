@extends('admin.layouts.dashboard')
@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">User Details</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive alert-dark">
                    <table class="table  table-striped">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>User Name</th>
                                    <th>Role ID</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($userdata as $data )

                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->role_id }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->password }}</td>
                                    <td>
                                       <a href="{{ route('user.edit',$data->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('user.delete',$data->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
