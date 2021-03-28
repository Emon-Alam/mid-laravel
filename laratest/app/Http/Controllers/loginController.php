<?php

namespace App\Http\Controllers;
use Illuminate\Http\req;
use App\Http\Requests\login_req;
use App\Admin;
use App\Moderator;
use Validator;


class loginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(login_req $req)   
     {
        if($user = Admin::where('username',$req->username)
                ->where('password',$req->password)
                ->first())
        {
            
            $req->session()->put('username',$user->username);
            $req->session()->put('type','Admin');
            return redirect('/home');

        }
        elseif($user = Moderator::where('username',$req->username)
        ->where('password',$req->password)
        ->first())
        {

            
            $req->session()->put('username',$user->username);
            $req->session()->put('type','Moderator');
            return redirect('/home');
        }
       
        else
        {
            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
       
        
    }

}
