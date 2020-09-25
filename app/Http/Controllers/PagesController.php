<?php

namespace App\Http\Controllers;

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
        return view('portfolio');
    }

    public  function project(){
        return view('project');
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
