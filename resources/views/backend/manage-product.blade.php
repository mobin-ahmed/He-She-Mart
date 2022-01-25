@extends('backend.master')
@section('body')
<div class="card mb-4 bg-info">

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
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Sony1</td>
                                            <td>7000 tk</td>
                                            <td>Dark Blue</td>
                                            <td>good level</td>
                                            <td>best sell of the month</td>
                                            <td>...</td>
                                            <td>1</td>
                                            <td><a href="{{ url('update-product-page') }}" class="btn btn-success">Update Product</a><a href="" class="btn btn-danger">Delete Product</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sony1</td>
                                            <td>7000 tk</td>
                                            <td>Dark Blue</td>
                                            <td>good level</td>
                                            <td>best sell of the month</td>
                                            <td>...</td>
                                            <td>1</td>
                                            <td><a href="{{ url('update-product-page') }}" class="btn btn-success">Update Product</a><a href="" class="btn btn-danger">Delete Product</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sony1</td>
                                            <td>7000 tk</td>
                                            <td>Dark Blue</td>
                                            <td>good level</td>
                                            <td>best sell of the month</td>
                                            <td>...</td>
                                            <td>1</td>
                                            <td><a href="{{ url('update-product-page') }}" class="btn btn-success">Update Product</a><a href="" class="btn btn-danger">Delete Product</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sony1</td>
                                            <td>7000 tk</td>
                                            <td>Dark Blue</td>
                                            <td>good level</td>
                                            <td>best sell of the month</td>
                                            <td>...</td>
                                            <td>1</td>
                                            <td><a href="{{ url('update-product-page') }}" class="btn btn-success">Update Product</a><a href="" class="btn btn-danger">Delete Product</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sony1</td>
                                            <td>7000 tk</td>
                                            <td>Dark Blue</td>
                                            <td>good level</td>
                                            <td>best sell of the month</td>
                                            <td>...</td>
                                            <td>1</td>
                                            <td><a href="{{ url('update-product-page') }}" class="btn btn-success">Update Product</a><a href="" class="btn btn-danger">Delete Product</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sony1</td>
                                            <td>7000 tk</td>
                                            <td>Dark Blue</td>
                                            <td>good level</td>
                                            <td>best sell of the month</td>
                                            <td>...</td>
                                            <td>1</td>
                                            <td><a href="{{ url('update-product-page') }}" class="btn btn-success">Update Product</a><a href="" class="btn btn-danger">Delete Product</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sony1</td>
                                            <td>7000 tk</td>
                                            <td>Dark Blue</td>
                                            <td>good level</td>
                                            <td>best sell of the month</td>
                                            <td>...</td>
                                            <td>1</td>
                                            <td><a href="{{ url('update-product-page') }}" class="btn btn-success">Update Product</a><a href="" class="btn btn-danger">Delete Product</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sony1</td>
                                            <td>7000 tk</td>
                                            <td>Dark Blue</td>
                                            <td>good level</td>
                                            <td>best sell of the month</td>
                                            <td>...</td>
                                            <td>1</td>
                                            <td><a href="{{ url('update-product-page') }}" class="btn btn-success">Update Product</a><a href="" class="btn btn-danger">Delete Product</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sony1</td>
                                            <td>7000 tk</td>
                                            <td>Dark Blue</td>
                                            <td>good level</td>
                                            <td>best sell of the month</td>
                                            <td>...</td>
                                            <td>1</td>
                                            <td><a href="{{ url('update-product-page') }}" class="btn btn-success">Update Product</a><a href="" class="btn btn-danger">Delete Product</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection