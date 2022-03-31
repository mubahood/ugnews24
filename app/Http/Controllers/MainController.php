<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index (){
        return view('main.index');
    }
    
    function about (){
        return view('main.about');
    }
    
    function contact (){
        return view('main.contact');
    }
    
    function privacy (){
        return "Privacy & Policy page";
    }

}
