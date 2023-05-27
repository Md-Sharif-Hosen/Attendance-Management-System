@extends('admin.layouts.dashboard')
@section('content')
<div class="row justify-content-center ">
    <div class="col-6 ">

        <form  action="{{ route('user.update',$userdata_edit->id ) }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="card  alert-dark" >
                    <div class="card-header ">
                        <h2 class="text-center">User Edit</h2>
                    </div>
                    <div class="card-body">
                        {{-- @dd($userdata_edit) --}}
                        <input type="hidden" name="id" value="{{ $userdata_edit->id }}">
                        <div class="form-group">
                            <label for="">Username <span class="login-danger">*</span></label>
                            <input class="form-control" type="text" value="{{ $userdata_edit->username }}" name="username">

                        </div>

                        <div class="form-group">
                            <label for="">Role ID <span class="login-danger">*</span></label>
                            <select class="form-control" name="role_id" id="role_id" value="{{ $userdata_edit->role_id }}">
                                @foreach ($role as $data)
                                    <option {{ $userdata_edit->role_id == $data->id? 'selected': " " }} value="{{ $data->id }}">
                                        {{ $data->role_id}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Email <span class="login-danger">*</span></label>
                            <input class="form-control" type="email" name="email" value="{{ $userdata_edit->email }}" >
                        </div>

                        <div class="form-group">
                            <label for="">Password <span class="login-danger">*</span></label>
                            <input type="password" class="form-control" name="password" >
                        </div>

                        <div class="text-center card-footer">
                            <button type="submit" class="btn btn-outline-success">Update</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>

@endsection
