<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentFile extends Controller
{
    public function uploadIndex(){
    	return view('student.upload.content');
    }

    public function downloadIndex(){
    	return view('student.download.content');
    }
}
