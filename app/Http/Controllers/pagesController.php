<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    // welcome page ..
    public function home(){
        return view('welcome');
    }
    // about page ..
    public function about(){
        return view('about');
    }
    // contact page ..
    public function contact(){
        return view('contact');
    }
}
