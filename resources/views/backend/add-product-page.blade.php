@extends('backend.master')
@section('body')
    
<div class="col-md-10 col-md-offset-1 bg-info p-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center text-danger">Add Product</h4>
            </div>
            <div class="panel-body">
                <form action="" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-4">Product Name</label>
                        <div class="col-md-8">
                            <input type="text" name="category_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Product price</label>
                        <div class="col-md-8">
                            <input type="number" name="category_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Product color</label>
                        <div class="col-md-8">
                            <input type="text" name="category_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Product short description</label>
                        <div class="col-md-8">
                            <input type="text" name="category_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Product long description</label>
                        <div class="col-md-8">
                            <textarea class="form-cotrol" name="category_description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-4">Product Image</label>
                        <div class="col-md-8">
                            <input type="file" name="category_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" checked name="publication_status" 
value="1"/>Published</label>
                            <label><input type="radio" name="publication_status" 
value="0"/>Unpublished</label>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-danger" 
value="Add Product"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection