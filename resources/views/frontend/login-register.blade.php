@extends('frontend.master')
@section('body')


	
	<section id="form"><!--form-->
		<div class="container" style="background-color: skyblue">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<p><?php
							if(isset($msg)){
								echo $msg;
							}
							else{
								echo '';
							}
						?></p>
						<form action="{{url('/user-login')}}" method="POST">
							{{csrf_field()}}
							<input type="password" name="password" placeholder="Password" />
							<input type="email" name="email" placeholder="Email Address" />
							<!-- <span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span> -->
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<p><?php
							if(isset($msg)){
								echo $msg;
							}
							else{
								echo '';
							}
						?></p>
						<form action="{{url('/user-register')}}" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<input type="text" name="fullname" placeholder="Fullname"/>
							<input type="text" name="username" placeholder="Username"/>
							<input type="email" name="email" placeholder="Email Address"/>
							<input type="number" name="mobile" placeholder="Mobile"/>
							<input type="file" name="image" placeholder="Image"/>
							<input type="password" name="password" placeholder="Password"/>
							<textarea name="address" id="" cols="30" rows="10" placeholder="Address"></textarea><hr/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@endsection