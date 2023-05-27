<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\EmployeeDetails;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function add()
    {
        //function_body
        $department=Department::get();
        $post=Post::get();
        $user=User::get();
        return view('admin.employee.add',compact('user','department','post'));
    }

    public function store(request $request)
    {
        //function_body
        $employee_data=new EmployeeDetails();
        $employee_data->user_id = request('user_id');
        $employee_data->name = request('name');
        $employee_data->email = request('email');
        $employee_data->phone_number = request('phone_number');
        $employee_data->date_of_birth = request('date_of_birth');
        $employee_data->gender = request('gender');
        $employee_data->department = request('department');
        $employee_data->post =request('post');
        $employee_data->salary = request('salary');
        $employee_data->save();
        return redirect()->route('admin.employee.add');
    }
}
