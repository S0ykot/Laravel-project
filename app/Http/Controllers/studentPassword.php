<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentPassword extends Controller
{
    public function index(){
    	return view('student.changePassword.content');
    }
}
