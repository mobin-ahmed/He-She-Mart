<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Admin;
use DB;
use Cart;
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

    public function addToCart(Request $req){
        $quantity= $req->quantity;
        $id=$req->product_id;
        $products = DB::table('products')
                        ->where('id', $id)
                        ->first();

        $data=[];
        $data['qty'] = intval($quantity);
        $data['id'] = $products->id;
        $data['name'] = $products->product_name;
        $data['price'] = $products->product_price;
        $data['weight'] = 0;
        $data['options']['image'] = $products->product_image;

        Cart::add($data);
        return view('frontend.cart');

        
    }
    public function hh($rowId){
        Cart::update($rowId, 0);
        echo 'daffa';
    }


    public function checkoutPage(){
        return view('frontend.checkout');
    }
    
    public function paymentPage(){
        return view('frontend.payment');
    }
}
