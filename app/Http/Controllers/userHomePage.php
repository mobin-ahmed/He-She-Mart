<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Admin;
use DB;

class userHomePage extends Controller
{
    public function homePage(){
        $admin= Admin::first();
        $product= Product::get();
        return view('frontend.home-page',[
            'admin'=>$admin,
            'product'=>$product
        ]);
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
