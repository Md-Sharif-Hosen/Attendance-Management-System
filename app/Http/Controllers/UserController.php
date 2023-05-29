<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function add()
    {
        //function_body
        return view('admin.user.add');
    }

    public function store(request $request)
    {
        //function_body
        $userdata=new User();
        $userdata->username= request('username');
        $userdata->role_id= request('role_id');
        $userdata->email= request('email');
        $userdata->password=Hash::make(request('password')) ;
        $userdata->save();
        return redirect()->back()->with('success','User Create Successfully');
    }

    public function view()
    {
        //function_body
        $userdata=User::get();
        return view('admin.user.view',compact('userdata'));
    }

    public function edit($id)
    {
        //function_body
        $role=UserRole::get();
        $userdata_edit= User::get()->find($id);
        return view('admin.user.edit',compact('userdata_edit','role'));
    }

    public function update(  $id , request $request)
    {
        //function_body
        // dd($request->all());
       $userdata_update=User::find(request()->id);
       $userdata_update->username = request('username');
       $userdata_update->role_id = request('role_id');
       $userdata_update->email = request('email');
       $userdata_update->password = Hash::make(request('password')) ;
       $userdata_update->save();
       return redirect()->route('user.view');
    }
    public function delete($id)
    {
        //function_body
        User::where('id' ,$id)->delete();
        return redirect()->back();
    }

}
