@extends('frontend.master')
@section('body')

<section>
		<div class="container" style="background-color: skyblue">
			<div class="row">
				
				
				<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset('/')}}/back-end/images/products/p6.jpg" alt="" />
							</div>
							<!-- <div id="similar-product" class="carousel slide" data-ride="carousel"> -->
								
								  <!-- Wrapper for slides -->
								    <!-- <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{asset('/')}}/back-end/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="{{asset('/')}}/back-end/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="{{asset('/')}}/back-end/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{asset('/')}}/back-end/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="{{asset('/')}}/back-end/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="{{asset('/')}}/back-end/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{asset('/')}}/back-end/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="{{asset('/')}}/back-end/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="{{asset('/')}}/back-end/images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div> -->

								  <!-- Controls -->
								  <!-- <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div> -->

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{asset('/')}}/back-end/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>Mobile</h2>
								<p>Web ID: 1089772</p>
								<img src="{{asset('/')}}/back-end/images/product-details/rating.png" alt="" />
								<span>
									<span>11000 tk</span>
									<label>Quantity: </label>
									<input type="text" value="0" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> not new</p>
								<p>Sumsung's product</p>
								<!-- <a href=""><img src="{{asset('/')}}/back-end/images/product-details/share.png" class="share img-responsive"  alt="" /></a> -->
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
							</ul>
						</div>
						<div class="tab-content">
							
								
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<!-- <b>Rating: </b> <img src="{{asset('/')}}/back-end/images/product-details/rating.png" alt="" /> -->
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('/')}}/back-end/images/products/p11.jpg" alt="" height="300" weight="300"/>
													<h2>1005 tk</h2>
													<p>Additas's products</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('/')}}/back-end/images/products/p13.jpg" alt="" height="300" weight="300"/>
													<h2>1005 tk</h2>
													<p>Additas's products</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('/')}}/back-end/images/products/p10.jpg" alt="" height="300" weight="300"/>
													<h2>1005 tk</h2>
													<p>Additas's products</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('/')}}/back-end/images/products/p12.jpg" alt="" height="300" weight="300"/>
													<h2>1005 tk</h2>
													<p>Additas's products</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('/')}}/back-end/images/products/p8.jpg" alt="" height="300" weight="300"/>
													<h2>1005 tk</h2>
													<p>Additas's products</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{asset('/')}}/back-end/images/products/p9.jpg" alt="" height="300" weight="300"/>
													<h2>1005 tk</h2>
													<p>Additas's products</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>

@endsection