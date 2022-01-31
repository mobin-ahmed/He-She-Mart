<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function productDetailsPage($id){
        $product = Product::find($id);
        $p=Product::get();
        return view('frontend.product-details', [
            'product'=>$product,
            'p'=>$p
        ]);
    }
}
