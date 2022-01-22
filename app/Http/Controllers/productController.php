<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function manageProduct(){
        return view('backend.manage-product');
    }
}
