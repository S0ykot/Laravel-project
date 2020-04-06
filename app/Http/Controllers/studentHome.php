<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\DB;

class studentHome extends Controller
{
    public function index(Request $req){
    	$student = student::where('student_id', $req->session()->get('username'))->first();
    	return view('student.home.content', $student);
    	//echo $student->student_fname;
    }
}
