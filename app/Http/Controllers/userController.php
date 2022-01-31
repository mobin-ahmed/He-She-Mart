<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class userController extends Controller
{
    public function userRegister(Request $req){
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


        $data=new User;
        $data->fullname = $req->fullname;
        $data->username = $req->username;
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
                return view('frontend.login-register', ['msg'=>'User register successfully']);
            }
        }

        $data->image='';
        $data->save();
        return view('frontend.login-register', ['msg'=>'User register successfully']);
    }

    public function userLogin(Request $req){
        $info= DB::table("users")
            ->where('email', $req->email)
            ->where('password', $req->password)
            ->get();

        if($info->email == $req->email && $info->password == $req->password){
            return view('frontend.checkout');
        }
        else{
            return view('frontend.login-register', ['msg'=> 'login failed']);
        }
    }
}
