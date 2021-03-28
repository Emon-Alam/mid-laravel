<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Reg_req extends FormRequest
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
            'username' => 'required|unique:admins|min:3|max:30|regex:/[a-zA-Z0-9]/i',
            'password' => 'required|min:3|max:8',
            'email' => 'required|email:rfc|max:50|min:10',
            'name' =>'required|min:3|max:30|regex:/[a-zA-Z]/i' ,
            'dob' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'username.required' => "Username can't be empty...",
            'username.unique' => "Username has already been taken...",
            'username.min' => "Username must be minimum 3 characters...",
            'username.max' => "Username can't exceed 30 characters...",
            'username.regex' => "Username must be in alphanumeric...",

            'password.required' => "Password can't be empty...",
            'password.min' => "Password must be minimum 3 characters...",
            'password.max' => "Password can't exceed 8 characters...",

            'email.required' => "Email can't be empty...",
            'email.min' => "Email must be minimum 10 characters...",
            'email.max' => "Email can't exceed 50 characters...",
            'email.email' => "Email format is invalid...",

            'name.required' => "Name can't be empty...",
            'name.min' => "Name must be minimum 3 characters...",
            'name.max' => "Name can't exceed 30 characters...",
            'name.regex' => "Name must be in letter...",

            'dob.required' => "Date of Birth must be selected...",

            'type.required' => "User Type category must be selected...",
            
        ];
    }
}
