<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function studentLogin(){
        return view("student.studentLogin");
    }

    public function staffLogin(){
        return view("staff.staffLogin");
    }

    public function home(){
        return view("home");
    }
}
