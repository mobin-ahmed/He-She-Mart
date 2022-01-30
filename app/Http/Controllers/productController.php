<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use DB;

class productController extends Controller
{
    public function manageProduct(){
        $products = Product::where('publication_status', 1)->get();
        
        return view('backend.manage-product', ['products' => $products]);

    }

    public function addProductPage(){
        return view('backend.add-product-page');
    }

    public function addProduct(Request $req){
        $data = new Product;

        $data->product_name = $req->product_name;
        $data->product_price = $req->product_price;
        $data->product_color = $req->product_color;
        $data->product_short_description = $req->product_short_description;
        $data->product_long_description = $req->product_long_description;
        $data->publication_status = $req->publication_status;


        $image=$req->file('product_image');
        if($image){
            $image_name=rand(10,1000000);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $succes=$image->move($upload_path,$image_full_name);
            if($succes){
                $data->product_image=$image_url;
                $data->save();
                Session::put('message','Product added successfully');
                return redirect('/add-product-page');
            }
        }

        $data->product_image='';
        $data->save();
        Session::put('message','Product added successfully');
        return redirect('/add-product-page');
    }


    public function updateProductPage($id){
        $product = Product::find($id);

        return view("backend.update-product-page", ['product'=> $product]);
    }
    public function updateProduct(Request $req, $id){

        // echo $req;

        // $data =new Product;

        // $data->product_name = $req->product_name;
        // $data->product_price = $req->product_price;
        // $data->product_color = $req->product_color;
        // $data->product_short_description = $req->product_short_description;
        // $data->product_long_description = $req->product_long_description;
        // $data->publication_status = $req->publication_status;


        // $image=$req->file('product_image');
        // if($image){
        //     $image_name=rand(10,1000000);
        //     $ext=strtolower($image->getClientOriginalExtension());
        //     $image_full_name=$image_name.'.'.$ext;
        //     $upload_path='image/';
        //     $image_url=$upload_path.$image_full_name;
        //     $succes=$image->move($upload_path,$image_full_name);
        //     if($succes){
        //         $data->product_image=$image_url;
        //         $data->where('id', $id)
        //         ->update((array)$data);
        //         Session::put('message','Product updated successfully');
        //         return redirect('/update-product-page');
        //     }
        // }

        // $data->product_image='';
        // $data->where('id', $id)
        //         ->update((array)$data);
        // Session::put('message','Product updated successfully');
        // return redirect('/update-product-page');
        

        $data=array();
        $data['product_name']=$req->product_name;
        $data['product_price']=$req->product_price;
        $data['product_color']=$req->product_color;
        $data['product_short_description']=$req->product_short_description;
        $data['product_long_description']=$req->product_long_description;

            $image=$req->file('product_image');
        if($image){
            $image_name=rand(10,1000000);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $succes=$image->move($upload_path,$image_full_name);
            if($succes){
                $data['product_image']=$image_url;
                DB::table('products')
            ->where('id',$id)
            ->update($data);
        Session::put('message','product Update succesfully!');
        return redirect('/manage-product');
            }
        }

        DB::table('products')
            ->where('id',$id)
            ->update($data);
        Session::put('message','product Update succesfully!');
        return redirect('/manage-product');
    }


    public function deleteProduct($id){
        DB::table("products")
            ->where('id', $id)
            ->delete();
        Session::put('message', 'Product deleted successfully!');
        return redirect('/manage-product');
    }
}
