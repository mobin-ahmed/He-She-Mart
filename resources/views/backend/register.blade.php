@extends('backend.master')
@section('body')
<div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Sign Up</h3></div>
                                    <p class="alert-success">
                                        <?php 
                                            $msg=Session::get('message');
                                            if($msg){
                                                echo $msg;
                                                Session::put('message',null);
                                            }
                                        ?>
                                    </p>
                                    <div class="card-body">
                                        <form action="{{ url('admin-register') }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="fullname" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Full Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input name="user_name" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Username</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="email"class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="mobile" class="form-control" id="inputEmail" type="number" placeholder="name@example.com" />
                                                <label for="inputEmail">Mobile</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="image" class="form-control" id="inputEmail" type="file" placeholder="name@example.com" />
                                                <label for="inputEmail">Image</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="address" class="form-control" id="inputPasswordConfirm" type="text" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Address</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Reg-no</label>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <input type="submit" name="btn" class="btn btn-danger">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div> -->
                                </div>
                            </div>

@endsection