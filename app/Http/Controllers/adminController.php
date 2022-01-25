<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class adminController extends Controller
{
    public function index(){
        return view('backend.login');
    }
    public function signIn(Request $req){

        $x = Admin::all();
        $p=$x[0]->password;
        $e=$x[0]->email;
        if($p == $req->password && $e == $req->email){
            return view('backend.dashboard');
        }
        else{
            return view('backend.login');
        }
    }

    public function signUp(){
        return view('backend.register');
    }

    public function register(Request $reg){
        
    }

    public function dashboard(){
        return view('backend.dashboard');
    }

    
}
