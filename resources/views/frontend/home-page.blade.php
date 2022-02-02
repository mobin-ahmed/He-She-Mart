@extends('frontend.master')
@section('body')

<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								
								<div class="col-sm-12">
									<img height="100" src="{{url("$admin->image")}}" class="girl img-responsive" alt=""  />
								</div>
							</div>
							<div class="item">
							<div class="col-sm-12">
									<img height="100" src="{{url("$admin->image")}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
							<div class="col-sm-12">
									<img height="100" src="{{url("$admin->image")}}" class="girl img-responsive" alt="" />
								</div>
							</div>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container" style="background-color: skyblue;">
			<div class="row" >
				
				
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php $i=0; ?>
						@foreach($product as $products)
						<?php
							$i=$i+1; ?>
						@if($i==3) <break out of if and foreach here> @endif
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{url("$products->product_image")}}" alt="" height="300" weight="300"/>
											<h2>{{$products->product_price}} tk</h2>
											<a href="{{url('/product-details-page/'.$products->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Product details</a>
										</div>
										
								</div>
								
							</div>
						</div>
						
						@endforeach
						
						
						
					</div><!--features_items-->
					
					
					
					<!-- <div class="recommended_items">recommended_items -->
						<!-- <h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								@foreach($product as $products2)
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
					</div>/recommended_items -->
					
				</div>
			</div>
		</div>
	</section>

@endsection