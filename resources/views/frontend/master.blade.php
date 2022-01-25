<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | He-She-Mart</title>
    <link href="{{asset('/')}}/back-end/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/back-end/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/back-end/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset('/')}}/back-end/css/price-range.css" rel="stylesheet">
    <link href="{{asset('/')}}/back-end/css/animate.css" rel="stylesheet">
	<link href="{{asset('/')}}/back-end/css/main.css" rel="stylesheet">
	<link href="{{asset('/')}}/back-end/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body style="background-color: gray">
	<header id="header" style="background-color: lightgreen"><!--header-->
		<div class="header_top" style="background-color: skyblue"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0171853399</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info.anwarcse@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
							
							
							
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{url('login-register-page')}}"><i class="fa fa-user"></i> Sign Up</a></li>
								
								<li><a href="{{url('checkout-page')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{url('cart-page')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="{{url('login-register-page')}}"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url('home')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="{{url('product-details-page')}}">Product Details</a></li> 
										<li><a href="{{url('checkout-page')}}">Checkout</a></li> 
										<li><a href="{{url('cart-page')}}">Cart</a></li> 
										<li><a href="{{url('login-register-page')}}">Login</a></li> 
                                    </ul>
                                </li> 
								
								<li><a href="{{url('contact-page')}}">Contact</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div> -->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<div style="background-color: lightgray">
        @yield('body')
    </div>
	<footer id="footer" style="background-color: lightgreen"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>H</span>e-She-Mart</h2>
							<p>Mini online ecommerce availabe 24/7</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('/')}}/back-end/images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('/')}}/back-end/images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('/')}}/back-end/images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('/')}}/back-end/images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('/')}}/back-end/images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<div class="footer-bottom" style="background-color: skyblue">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank">Anwar Hussain</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('/')}}/back-end/js/jquery.js"></script>
	<script src="{{asset('/')}}/back-end/js/bootstrap.min.js"></script>
	<script src="{{asset('/')}}/back-end/js/jquery.scrollUp.min.js"></script>
	<script src="{{asset('/')}}/back-end/js/price-range.js"></script>
    <script src="{{asset('/')}}/back-end/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('/')}}/back-end/js/main.js"></script>
</body>
</html>