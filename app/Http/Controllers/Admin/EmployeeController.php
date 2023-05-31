<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\EmployeeDetails;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    //
    public function dashboard()
    {
        //function_body
        return view('admin.dashboard');
    }

    public function add()
    {
        //function_body
        $department = Department::get();
        $post = Post::get();
        $user = User::get();
        return view('admin.employee.add', compact('user', 'department', 'post'));
    }

    public function store(request $request)
    {
        $this->validate($request, [
            'user_id' => ['required'],
            'name' => ['required', 'min:5'],
            'email'=>['required','email','min:9'],
'phone_number'=>['required']



        ]);

        //function_body
        $employee_data = new EmployeeDetails();
        $employee_data->user_id = request('user_id');
        $employee_data->name = request('name');
        $employee_data->email = request('email');
        $employee_data->phone_number = request('phone_number');
        $employee_data->date_of_birth = request('date_of_birth');
        $employee_data->gender = request('gender');
        $employee_data->department = request('department');
        $employee_data->post = request('post');
        $employee_data->salary = request('salary');
        if (request()->hasFile('image')) {

            $employee_data->image = Storage::put('/employee_image', $request->file('image'));
        }

        $employee_data->save();
        return redirect()->back()->with('Create', 'Employee Create Successfully!');
    }

    public function view()
    {
        //function_body

        $employee_data = EmployeeDetails::get();
        return view('admin.employee.view', compact('employee_data'));
    }

    public function edit($id)
    {
        //function_body
        $departmentdata = Department::get();
        $post = Post::get();
        $user_data = User::get();
        $employee_data_edit = EmployeeDetails::find($id);
        return view('admin.employee.edit', compact('employee_data_edit', 'user_data', 'departmentdata', 'post'));
    }

    public function update(request $request, $id)
    {
        //function_body
        // dd($request->all());


        $employee_data_save = EmployeeDetails::find(request()->id);
        $employee_data_save->user_id = request('user_id');
        $employee_data_save->name = request('name');
        $employee_data_save->email = request('email');
        $employee_data_save->phone_number = request('phone_number');
        $employee_data_save->gender = request('gender');
        $employee_data_save->department = request('department');
        $employee_data_save->post = request('post');
        if (request()->hasFile('image')) {
            $employee_data_save->image = Storage::put('/employee_image', $request->file('image'));
        }
        $employee_data_save->save();
        return redirect()->back()->with('Update', 'Employee Update Successfully!');
    }
    public function delete($id)
    {
        //function_body
        EmployeeDetails::where('id', $id)->delete();
        return redirect()->back();
    }
}
