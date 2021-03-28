<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Moderator;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index( Request $req){


        return view('home.admin');

    } 

    public function show(Request $req){

         
        $name = Admin::all();
        

        $value = $req->session()->get('username');
        $show = Admin::where('username','=',$value)->get();  
        return view('home.profile')->with('list', $show)->with('name',$name); 

        /* $name = Moderator::all();
        return view('home.list')->with('list', $name);
 */
    }

    public function userlist(Request $req){

        /* $name = Admin::all();
        $m    = Moderator::all();
        

        $value = $req->session()->get('username');
        $userlist = Admin::where('username','=',$value)->get();  
        return view('home.list')->with('list', $userlist)->with('name',$name)->with('m',$m); */

        $name = Moderator::all();
        return view('home.list')->with('list', $name);

    }

    public function delete($id){

        $user = Moderator::find($id);
        return view('home.delete')->with('user', $user);
    }

    public function destroy($id, Request $req){

        if(Moderator::destroy($id)){
            $req->session()->flash('msg', 'Moderator account removed successfully...');
            return redirect()->route('logout');
        }else{
            return redirect('/home/delete/moderator/'.$id);
        }

    } 
}
