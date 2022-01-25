<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function manageProduct(){
        return view('backend.manage-product');
    }

    public function addProductPage(){
        return view('backend.add-product-page');
    }
    public function updateProductPage(){
        return view("backend.update-product-page");
    }
}
