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
    // products..
    public function products(){
        return view('products');
    }
    // Show Product..
    public function showproduct(){
        return view('showproduct');
    }
    // faq 
    public function faq(){
        return view('faq');
    }
    // checkout ..
    public function checkout(){
        return view('checkout');
    }
    // privacy polcies ..
    public function privacy(){
        return view('privacy');
    }
    public function cart(){
        return view('cart');
    }
}
