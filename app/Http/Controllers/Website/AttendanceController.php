<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //
    public function attend()
    {
        //function_body
        return view('website.user.user_attend');
    }
}
