<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentDetails extends Controller
{
    public function index()
    {
    	$student = Student::all();
    	return view('faculty.studentDetails.content',['details'=>$student]);
   }


   public function studentApproveView()
   {
   		$student = Student::where('status','0')->get();
    	 return view('faculty.studentApprove.content',['details'=>$student]);
   }

   public function approveStudent($id)
   {
   		$stu = Student::where('sid',$id)->first();

   		$stu->status = 1;

   		if ($stu->save()) {
   			return redirect('/studentApproval');
   		}
   		else
   		{
   			print('Something Wrong');
   		}
   }
}
