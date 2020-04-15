<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class facultyRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'userid'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
            'dept'=>'required'
        ];
    }


    public function messages(){
        return [
            'userid.required'=>"Faculty ID can't left empty!",
            'fname.required'=>"First name can't left empty!",
            'lname.required'=>"Last name can't left empty!",
            'email.required'=>"Email can't left empty!",
            'email.email'=>"Email must be a valid email ID",
            'contact.required'=>"Contact no can't left empty!",
            'dept.required'=>"Department name can't left empty!"
        ];
    }
}
