<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
//use Validator;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $student = student::where('student_id', $req->session()->get('username'))->first();
        $req->session()->put('sid', $student->sid);
        return view('student.home.content', $student);
        //$data = $req->session()->all();
        //echo $student->sid;
        //print_r($data);
        //echo $req->session()->get('sid');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $sid)
    {
        

        $val = $request->validated();

        if($val==null){
            return back()->withError($val)->withInput();
            //print("Something wrong");
        }else{
            //echo $request->student_lname;
            $student=student::findOrfail($sid);
            $student->student_fname = $request->student_fname;
            $student->student_lname = $request->student_lname;
            $student->student_dept = $request->student_dept;
            $student->student_credit = $request->student_credit;
            $student->student_cgpa = $request->student_cgpa;
            $student->student_contact = $request->student_contact;
            $student->save();
            return redirect()->route('student.index');
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }
}
