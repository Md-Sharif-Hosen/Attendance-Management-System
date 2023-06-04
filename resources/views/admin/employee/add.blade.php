@extends('admin.layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">

            @if (session()->get('Create'))
                <div class="alert alert-success">
                    {{ session()->get('Create') }}
                </div>
                <script>
                    Swal.fire({
                        title: 'Thanks',
                        text: '{{ session()->get('Create') }}',
                        icon: 'Create',
                        confirmButtonText: 'Close'
                    })
                </script>
            @endif
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
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                            @error('name')
                                <div style="color:brown">
                                    {{ $message }}

                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <select name="email" value="{{ old('email') }}" id="name" class="form-control">
                                <option value="">
                                    select
                                </option>

                                @foreach ($user as $data)
                                    <option value="{{ $data->id }}">{{ $data->email }}</option>
                                @endforeach
                            </select>
                            @error('email')
                                <div style="color:brown">
                                    {{ $message }}

                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="tel" class="form-control" value="{{ old('phone_number') }}" name="phone_number">
                            @error('phone_number')
                                <div style="color:brown">
                                    {{ $message }}

                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Date Of Birth</label>
                            <input type="date" class="form-control"  value="{{ old('date_of_birth') }}" name="date_of_birth">
                            @error('date_of_birth')
                                <div style="color:brown">
                                    {{ $message }}

                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Gender:</label>
                            <br>
                            <label for="Male">
                                <input type="radio" value="Male" name="gender">


                                Male
                            </label>
                            <label for="Female">
                                <input type="radio" value="Female" name="gender">


                                Female
                            </label>
                            <label for="Others">
                                <input type="radio" value="Others" name="gender">


                                Others
                            </label>
                            @error('gender')
                                <div style="color:brown">
                                    {{ $message }}

                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Department</label>
                            <select class="form-control" name="department" value="{{ old('department') }}" id="department">
                                <option value="">
                                    select
                                </option>

                                @foreach ($department as $data)
                                    <option value="{{ $data->id }}">{{ $data->department_title }}</option>
                                @endforeach
                            </select>
                            @error('department')
                                <div style="color:brown">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Post</label>
                            <select class="form-control" value="{{ old('post') }}" name="post" id="post">
                                <option value="">
                                    select
                                </option>
                                @foreach ($post as $data)
                                <option value="{{ $data->id }}">{{ $data->post_title }}</option>
                                @endforeach
                            </select>
                            @error('post')
                                <div style="color:brown">
                                    {{ $message }}

                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Salary</label>
                            <input type="text" class="form-control" value="{{ old('salary') }}" name="salary">
                            @error('salary')
                                <div style="color:brown">
                                    {{ $message }}

                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" value="{{ old('image') }}" class="form-control">
                            @error('image')
                                <div style="color:brown">
                                    {{ $message }}

                                </div>
                            @enderror
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
