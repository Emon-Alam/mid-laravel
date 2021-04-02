<?php

namespace App\Http\Controllers;
use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function MoviesE(Request $request)
    {

        $content = Content::all();
        $content = $content->where('category','Movies')
                           ->where('subtitle','English');
       
        return view('home.contentlist')->with('list',$content);
                
    }
    public function MoviesH(Request $request)
    {

        $content = Content::all();
        $content = $content->where('category','Movies')
                           ->where('subtitle','Hindi');
       
        return view('home.contentlist')->with('list',$content);
                
    }

    public function Games(Request $request)
    {

        $content = Content::all();
        $content = $content->where('category','Games');
       
        return view('home.contentlist')->with('list',$content);
                
    }

    public function TV_seriesE(Request $request)
    {

        $content = Content::all();
        $content = $content->where('category','TV_series')
                            ->where('subtitle','English');
        return view('home.contentlist')->with('list',$content);
                
    }
    public function TV_seriesH(Request $request)
    {

        $content = Content::all();
        $content = $content->where('category','TV_series')
                            ->where('subtitle','Hindi');
        return view('home.contentlist')->with('list',$content);
                
    }

    public function Software(Request $request)
    {

        $content = Content::all();
        $content = $content->where('category','Software');
       
        return view('home.contentlist')->with('list',$content);
                
    }
}
