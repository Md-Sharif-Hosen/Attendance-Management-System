<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function view()
    {
        //function_body
        return view('website.user.employee_profile');
    }
}
