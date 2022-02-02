@extends('frontend.master')
@section('body')

<section>
		<div class="container" style="background-color: skyblue">
			<div class="row">
				
				
				<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{url("$product->product_image")}}" alt="" />
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
								<h2>{{$product->product_name}}</h2>
								<p>ID: {{$product->id}}</p>
								<img src="{{asset('/')}}/back-end/images/product-details/rating.png" alt="" />
								<span>
									<span>{{$product->product_price}} tk</span>
									<form action="{{url('/add-to-cart')}}" method="POST">
										{{csrf_field()}}
										<label>Quantity: </label>
										<input type="number" name="quantity" value="0" />
										<input type="hidden" name="product_id" value="{{$product->id}}"/>
										<button type="submit" name="btn" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Add to cart
										</button>
									</form>
								</span>
								<p><b>Color:</b> {{$product->product_color}}</p>
								
								<p><b>Product short description:</b><br/>{{$product->product_short_description}}</p>
								<p><b>Product long description:</b><br/>{{$product->product_long_description}}</p>

								
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
								@foreach($p as $products2)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{url("$products2->product_image")}}" alt="" height="300" weight="300"/>
													<h2>{{$products2->product_price}} tk</h2>
													<a href="{{url('/product-details-page/'.$products2->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Product details</a>
												</div>
												
											</div>
										</div>
									</div>
								@endforeach
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