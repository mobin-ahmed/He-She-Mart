@extends('backend.master')
@section('body')
<div class="card mb-4 bg-info">
<p class="alert-success">
            <?php 
                $msg=Session::get('message');
                if($msg){
                    echo $msg;
                    Session::put('message',null);
                }
            ?>
        </p>

                            <h1 class="text-center text-danger">Manage Product</h1>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SN.</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Product Color</th>

                                            <th>Product Short Description</th>
                                            <th>Product long Description</th>
                                            <th>Product Image</th>
                                            <th>Publication</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    @foreach($products as $v_product)   
                                    <tbody>
                                        <tr>
                                            <td>{{$v_product->product_id}}</td>
                                            <td class="center">{{$v_product->product_name}}</td>
                            
                                            <td class="center">{{$v_product->product_price}} Tk</td>
                                            <td class="center">{{$v_product->product_color}} Tk</td>
                                            <td class="center">{{$v_product->product_short_description}} Tk</td>
                                            <td class="center">{{$v_product->product_long_description}} Tk</td>
                                            <td ><img src="{{url($v_product->product_image)}}" style="height:60px; wiedth:60px;"></td>
                                            
                                            <td class="center">
                                                @if($v_product->publication_status==1)
                                                    <span class="label label-success">Active</span>
                                                @else
                                                    <span class="label label-danger">Unactive</span>
                                                @endif
                                            </td>
                                            <td class="center">
                                                <!-- @if($v_product->publication_status==1)
                                                    <a class="btn btn-danger" href="{{URL::to('/unactive_product/'.$v_product->product_id)}}">
                                                        <i class="halflings-icon white thumbs-down"></i>                                            
                                                    </a>
                                                @else
                                                    <a class="btn btn-success" href="{{URL::to('/active_product/'.$v_product->product_id)}}">
                                                        <i class="halflings-icon white thumbs-up"></i>                                            
                                                    </a>
                                                @endif -->
                                                <a class="btn btn-success" href="{{url('/update-product-page/'.$v_product->id)}}">
                                                        Edit                                            
                                                </a>
                                                <a class="btn btn-danger" href="{{url('/delete-product/'.$v_product->id)}}">
                                                        Delete 	
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                </table>
                            </div>
                        </div>
@endsection