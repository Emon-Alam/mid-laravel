<?php

namespace App\Http\Controllers;
use App\Moderator;
use Validator;
use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    public function index( Request $req){


        return view('home.moderator');

    } 

    public function show(Request $req){

         
        $name = Moderator::all();
        

        $value = $req->session()->get('username');
        $show = Moderator::where('username','=',$value)->get();  
        return view('home.profile')->with('list', $show)->with('name',$name); 

        /* $name = Moderator::all();
        return view('home.list')->with('list', $name);
 */
    }
}
