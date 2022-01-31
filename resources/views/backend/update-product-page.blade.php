@extends('backend.master')
@section('body')
    
<div class="col-md-10 col-md-offset-1 bg-info p-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center text-danger">Update Product</h4>
            </div>
            <div class="panel-body">
            
                <form action="{{url('/update-product/'.$product->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-4">Product Name</label>
                        <div class="col-md-8">
                            <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Product price</label>
                        <div class="col-md-8">
                            <input type="number" name="product_price" class="form-control" value="{{$product->product_price}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Product color</label>
                        <div class="col-md-8">
                            <input type="text" name="product_color" class="form-control" value="{{$product->product_color}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Product short description</label>
                        <div class="col-md-8">
                            <input type="text" name="product_short_description" class="form-control" value="{{$product->product_short_description}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Product long description</label>
                        <div class="col-md-8">
                            <textarea class="form-cotrol" name="product_long_description">{{$product->product_long_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-4">Product Image</label>
                        <div class="col-md-8">
                            <input type="file" name="product_image" class="form-control"/>
                            <img src="{{url($product->product_image)}}" style="height:60px; wiedth:60px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" {{$product->publication_status == 1 ? 'checked' : '' }} name="publication_status" 
value="1"/>Published</label>
                            <label><input type="radio" {{ $product->publication_status==1 ? 'checked' : '' }} name="publication_status" 
value="0"/>Unpublished</label>
                        </div>
                    </div>
                    <div class="form-control">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-danger btn-block" 
value="Update Product"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection