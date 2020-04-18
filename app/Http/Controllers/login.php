<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\student;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;


class login extends Controller
{
    public function index(){
    	return view('generalLogin.content');
    }

    public function verify(Request $req){
    	/*$user = user::where('user_id_name', $req->uname)
    				->where('password', $req->password)
    				->first();*/
    	$user = DB::table('user')
                   ->join('student', 'user.user_id_name','=','student.student_id')
                   ->where('user.user_id_name',  $req->uname)
                   ->where('user.password', $req->password)
                   ->first();

    	if($user!=null){
    		$req->session()->put('username', $req->uname);
    		$req->session()->put('password', $req->password);
    		if($user->rid==3){
                if($user->status!=1){
                    $req->session()->flash('msg', 'Your account is not activated yet!!');
                    return redirect('/login');
                }
                $req->session()->flash('welcome', 'Welcome');
                return redirect()->route('studentHome');
    		}
    	}else{
    		$req->session()->flash('msg', 'Invalid Username or Password');
    		return redirect('/login');
    	}

    }

}
