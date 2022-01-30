<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use DB;
class adminController extends Controller
{
    public function index(){
        return view('backend.login');
    }
    public function signIn(Request $req){

        $admin = Admin::first();
        $id = $admin->id;
        $username = $admin->username;
        $image = $admin->image;
        $p=$admin->password;
        $e=$admin->email;
        if($p == $req->password && $e == $req->email){
            session_start();
            Session::put('admin_id', $id);
            Session::put('username', $username);


            return view('backend.dashboard', ['admin'=>$admin]);
        }
        else{
            return redirect("/login");
        }
    }

    public function signUp(){
        return view('backend.register');
    }

    public function register(Request $req){

        // $data =  array();
        // $data['fullname']= $req->fullname;
        // $data['username']= $req->username;
        // $data['email']= $req->email;
        // $data['mobile']= $req->mobile;
        // $data['password']= $req->password;
        // $data['address']= $req->address;

        // $image=$req->file('image');
        // if($image){
        //     $image_name=rand(10,1000000);
        //     $ext=strtolower($image->getClientOriginalExtension());
        //     $image_full_name=$image_name.'.'.$ext;
        //     $upload_path='image/';
        //     $image_url=$upload_path.$image_full_name;
        //     $succes=$image->move($upload_path,$image_full_name);
        //     if($succes){
        //         $data['image']=$image_url;
        //         DB::table('admins')->insert($data);
        //         Session::put('message','Admin register successfully');
        //         return Redirect::to('/register');
        //     }
        // }
        

        // $data['image']='';
        // DB::table('admins')->insert($data);
        // Session::put('message','Admin register successfully');
        // return Redirect::to('/register');


        $data=new Admin;
        $data->fullname = $req->fullname;
        $data->user_name = $req->user_name;
        $data->email = $req->email;
        $data->mobile = $req->mobile;
        $data->password = $req->password;
        $data->address = $req->address;


        $image=$req->file('image');
        if($image){
            $image_name=rand(10,1000000);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $succes=$image->move($upload_path,$image_full_name);
            if($succes){
                $data->image=$image_url;
                $data->save();
                Session::put('message','Admin register successfully');
                return redirect('/register');
            }
        }

        $data->image='';
        $data->save();
        Session::put('message','Admin register successfully');
        return redirect('/register');


    }

    public function dashboard(){
        return view('backend.dashboard');
    }

    
}
