<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userHomePage extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function loginRegisterPage(){
        return view('frontend.login-register');
    }

    public function contactPage(){
        return view('frontend.contact');
    }

    public function cartPage(){
        return view('frontend.cart');
    }

    public function checkoutPage(){
        return view('frontend.checkout');
    }
    
    public function paymentPage(){
        return view('frontend.payment');
    }
}
