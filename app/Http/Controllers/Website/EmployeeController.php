<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //


    public function home()
    {
        //function_body
        return view('website.user.user_home');
    }
    public function profile()
    {
        //function_body
        return view('Website.user.user_profile');
    }
}
