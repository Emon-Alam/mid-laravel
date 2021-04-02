<?php

namespace App\Http\Controllers;
use App\Admin;
use Validator;
use App\Moderator;
use Illuminate\Http\Request;
use App\Http\Requests\Reg_req;

class RegController extends Controller
{
    public function index( Request $req){

    

        return view('registration.index');

    }

    public function store(Reg_req $req){

        if($req->type =='Admin'){ 
            $user = new Admin();
            $user->username         = $req->username;
            $user->password         = $req->password;
            $user->name             = $req->name;
            $user->email            = $req->email;
            $user->dob              = $req->dob;
            $user->type             = $req->type;
            
            $user->save();
            return redirect()->route('login');
             } 

        elseif($req->type =='Moderator'){
                $user = new Moderator();
                $user->username         = $req->username;
                $user->password         = $req->password;
                $user->name             = $req->name;
                $user->email            = $req->email;
                $user->dob              = $req->dob;
                $user->type             = $req->type;
                
                $user->save();
                return redirect()->route('login');
                }
        else{
            return redirect()->route('login');
        }

        }
 

        public function addindex( Request $req){

    

            return view('home.add');
    
        }
    
        public function add(Reg_req $req){
    
            if($req->type =='Moderator'){
                    $user = new Moderator();
                    $user->username         = $req->username;
                    $user->password         = $req->password;
                    $user->name             = $req->name;
                    $user->email            = $req->email;
                    $user->dob              = $req->dob;
                    $user->type             = $req->type;
                    
                    $user->save();
                    return redirect()->route('index');
                    }
            else{
                return redirect()->route('index');
            }
    
            }
     
}
