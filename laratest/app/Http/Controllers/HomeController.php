<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req)
    {
    if($req->session()->get('type')=='Admin')
    {
        return view('home.admin');
        
    }
    elseif($req->session()->get('type')=='Moderator')
    {
        
        return view('home.moderator');
    }
    }
}
