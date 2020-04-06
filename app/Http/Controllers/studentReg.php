<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentReg extends Controller
{
    public function index(){
    	return view('student.reg.RegForm.content');
    }

    public function cred(){
    	return view('student.reg.Credentials.content');
    }
}
