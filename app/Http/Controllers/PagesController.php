<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public  function contact(){
        return view('contact');
    }

    public  function about(){
        return view('about');
    }

    public  function portfolio(){
        $projects=Portfolio::all();
        return view('portfolio', compact('projects'));
    }

    public  function project($slug){
        $project=Portfolio::where('slug',$slug)->first();
        $projects=Portfolio::latest()->take(4)->get();

        return view('project',compact('project','projects'));
    }

    public  function services(){
        return view('services');
    }

    public  function architecture(){
        return view('architecture');
    }

    public  function planning(){
        return view('planning');
    }

    public  function environment(){
        return view('environment');
    }

    public  function survey(){
        return view('survey');
    }


}
