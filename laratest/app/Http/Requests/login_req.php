<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class login_req extends FormRequest
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
            'username' => 'required|max:50',
            'password' => 'required|max:50|min:3|alpha_dash',
        ];
    }

    public function messages(){
        return [

            'username.required' => "username can't left empty...",
            'password.required' =>"password can't left empty..."
        ];
    }
}
