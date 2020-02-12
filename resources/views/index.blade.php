{{-- Add master layouts include header and footer --}}
@extends('layouts.master_layouts')
@section('content')
<h1>This is blade templating Engin</h1>
 <!-- Slider AREA -->
		<div class="slider-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3">	
						<div class="slider-left">
							<h2>Today’s Offer</h2>
							<div id="owl-slider-left" class="owl-carousel">
								<div class="slider-left-carousel">
									<div class="slider-left-product">
										<a href="#"><img src="img/product/slider-product.jpg" alt="product"></a>
										<div class="slider-product-button">
											<p class="add-chart"><a href="#">Add To Cart</a></p>
										</div>
									</div>
									<p class="view-details"><a href="#">View details</a></p>
								</div>
								<div class="slider-left-carousel">
									<div class="slider-left-product">
										<a href="#"><img src="img/product/slider-product-2.jpg" alt="product"></a>
										<div class="slider-product-button">
											<p class="add-chart"><a href="#">Add To Cart</a></p>
										</div>
									</div>
									<p class="view-details"><a href="#">View details</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-9">
						<!-- Main Slider -->
						<div class="main-slider">
							<div class="slider">
								<div id="mainSlider" class="nivoSlider slider-image">
									<img src="img/slider/s1.jpg" alt="main slider" title="#htmlcaption1"/>
									<img src="img/slider/s5.jpg" alt="main slider" title="#htmlcaption2"/>
								</div>
								<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
									<div class="slider-progress"></div>									
									<div class="slide-text">
										<div class="middle-text">
											<div class="cap-title wow slideInRight" data-wow-duration=".9s" data-wow-delay="0s">
												<h2>New Collection</h2>
											</div>
											<div class="cap-dec wow slideInRight" data-wow-duration="1.1s" data-wow-delay="0s">
												<p>Save Up to</p>
												<h1>37% Off</h1>
											</div>	
											<div class="cap-readmore animated bounceIn" data-wow-duration="1.5s" data-wow-delay=".5s">
												<a href="#">View details</a>
											</div>	
										</div>	
									</div>
									<div class="slide-image">
										<img class="wow slideInUp"  data-wow-duration="1.5s" data-wow-delay="0s" src="img/slider/si1.png" alt="slider caption" />
									</div>
								</div>
								<div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
									<div class="slider-progress"></div>					
									<div class="slide-text">
										<div class="middle-text">
											<div class="cap-title wow slideInRight" data-wow-duration=".9s" data-wow-delay="0s">
												<h2>New Collection</h2>
											</div>
											<div class="cap-dec wow slideInRight" data-wow-duration="1.1s" data-wow-delay="0s">
												<p>Save Up to</p>
												<h1>37% Off</h1>
											</div>	
											<div class="cap-readmore animated bounceIn" data-wow-duration="1.5s" data-wow-delay=".5s">
												<a href="#">Shop Now</a>
											</div>	
										</div>	
									</div>
									<div class="slide-image slide2-image">
										<img class="wow slideInUp"  data-wow-duration="1.5s" data-wow-delay="0s" src="img/slider/si3.png" alt="slider caption" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Product AREA -->
         <!-- Product AREA -->
		<div class="product-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="product-catagori-area">
							<div class="product-categeries">
								<h2>Categeries</h2>
								<div class="panel-group" id="accrodian">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<i class="fa fa-heart"></i> Style
												<a class="collapsed" data-toggle="collapse" href="#colOne" data-parent="#accrodian"></a>
											</h4>
										</div>
										<div class="panel-collapse collapse" id="colOne">
											<div class="panel-body">
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-1</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-2</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-3</a>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<i class="fa fa-male"></i> Men
												<a class="collapsed" data-toggle="collapse" href="#colTwo" data-parent="#accrodian"></a>
											</h4>
										</div>
										<div class="panel-collapse collapse" id="colTwo">
											<div class="panel-body">
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-1</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-2</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-3</a>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<i class="fa fa-female"></i> Women
												<a class="collapsed" data-toggle="collapse" href="#colThree" data-parent="#accrodian"></a>
											</h4>
										</div>
										<div class="panel-collapse collapse" id="colThree">
											<div class="panel-body">
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-1</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-2</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-3</a>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<i class="fa fa-odnoklassniki"></i> Kids
												<a class="collapsed" data-toggle="collapse" href="#colFour" data-parent="#accrodian"></a>
											</h4>
										</div>
										<div class="panel-collapse collapse" id="colFour">
											<div class="panel-body">
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-1</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-2</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-3</a>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<i class="fa fa-gift"></i> Gift
												<a class="collapsed" data-toggle="collapse" href="#colFive" data-parent="#accrodian"></a>
											</h4>
										</div>
										<div class="panel-collapse collapse" id="colFive">
											<div class="panel-body">
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-1</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-2</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-3</a>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<i class="fa fa-bitbucket"></i> Accessories
												<a class="collapsed" data-toggle="collapse" href="#colSix" data-parent="#accrodian"></a>
											</h4>
										</div>
										<div class="panel-collapse collapse" id="colSix">
											<div class="panel-body">
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-1</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-2</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-3</a>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<i class="fa fa-coffee"></i> Offer
												<a class="collapsed" data-toggle="collapse" href="#colSeven" data-parent="#accrodian"></a>
											</h4>
										</div>
										<div class="panel-collapse collapse" id="colSeven">
											<div class="panel-body">
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-1</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-2</a>
												<a href="#"><i class="fa fa-angle-double-right"></i> Categori-3</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="best-seller-area">
								<h2 class="header-title">Best seller</h2>
								<div class="best-sell-product">
									<div class="best-product-img">
										<a href="#"><img src="img/product/best-product-1.png" alt="product"></a>
									</div>
									<div class="best-product-content">
										<h2><a href="#">Et harum quidem red T-shirt</a></h2>
										<h3>$45.00</h3>
										<div class="best-product-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star-o"></i></a>
										</div>
									</div>
								</div>
								<div class="best-sell-product">
									<div class="best-product-img">
										<a href="#"><img src="img/product/best-product-2.png" alt="product"></a>
									</div>
									<div class="best-product-content">
										<h2><a href="#">Et harum quidem red T-shirt</a></h2>
										<h3>$45.00</h3>
										<div class="best-product-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star-o"></i></a>
										</div>
									</div>
								</div>
								<div class="best-sell-product">
									<div class="best-product-img">
										<a href="#"><img src="img/product/best-product-3.png" alt="product"></a>
									</div>
									<div class="best-product-content">
										<h2><a href="#">Et harum quidem red T-shirt</a></h2>
										<h3>$45.00</h3>
										<div class="best-product-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star-o"></i></a>
										</div>
									</div>
								</div>
								<div class="best-sell-product">
									<div class="best-product-img">
										<a href="#"><img src="img/product/best-product-2.png" alt="product"></a>
									</div>
									<div class="best-product-content">
										<h2><a href="#">Et harum quidem red T-shirt</a></h2>
										<h3>$45.00</h3>
										<div class="best-product-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star-o"></i></a>
										</div>
									</div>
								</div>
								<p class="view-details">
									<a href="#">View details</a>
								</p>
							</div>
							<div class="add-kids single-add">
								<a href="#"><img src="img/banner/kids-ad.jpg" alt="add"></a>
							</div>
							<div class="testmonial-area fix">
								<h2 class="header-title">Testimonial</h2>
								<div id="owl-testmonial" class="owl-carousel">
									<div class="testmonial fix">
										<span><i class="fa fa-quote-left"></i></span>
										<p>Lorem ipsum dolor consetetuer adipiscing elit. Aenean commdo ligula eget dolor. Aenean massa.</p>
										<h3>-MatthE Jensen</h3>
										<img src="img/testmonial.jpg" alt="">
									</div>
									<div class="testmonial fix">
										<span><i class="fa fa-quote-left"></i></span>
										<p>Lorem ipsum dolor consetetuer adipiscing elit. Aenean commdo ligula eget dolor. Aenean massa.</p>
										<h3>-MatthE Jensen</h3>
										<img src="img/testmonial.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="subscribe-area">
								<h2>Subscribe Letter</h2>
								<form action="#">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Enter your E-mail">
										<button type="button" class="btn"><i class="fa fa-envelope-o"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-8">
						<div class="product-items-area">
							<div class="product-items">
								<h2 class="product-header">style</h2>
								<div class="row">
									<div id="product-slider" class="owl-carousel">
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/single-product-1.jpg" alt="product">
														<img class="secondary-img" src="img/product/kids-1.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/single-product-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/women-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/single-product-3.jpg" alt="product">
														<img class="secondary-img" src="img/product/men-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/single-product-1.jpg" alt="product">
														<img class="secondary-img" src="img/product/kids-1.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/single-product-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/women-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/single-product-3.jpg" alt="product">
														<img class="secondary-img" src="img/product/men-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-items">
								<h2 class="product-header">men</h2>
								<div class="row">
									<div id="product-slider-two" class="owl-carousel">
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/men-1.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-3.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/men-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-3.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/men-3.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-3.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/men-1.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-3.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/men-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-3.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/men-3.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-3.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="arrivals-area single-add">
								<a href="#"> <img src="img/banner/arrivals.jpg" alt="arrivals"> </a>
							</div>
							<div class="product-items">
								<h2 class="product-header">women</h2>
								<div class="row">
									<div id="product-slider-women" class="owl-carousel">
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/single-product-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/women-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/women-3.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/single-product-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/women-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/women-3.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-2.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-items">
								<h2 class="product-header">kids</h2>
								<div class="row">
									<div id="product-slider-kids" class="owl-carousel">
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/kids-1.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-1.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/kids-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-1.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/kids-3.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-1.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/kids-1.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-1.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/kids-2.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-1.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/kids-3.jpg" alt="product">
														<img class="secondary-img" src="img/product/single-product-1.jpg" alt="product">
													</a>
													<div class="single-product-action">
														<a href="#"><i class="fa fa-external-link"></i></a>
														<a href="#"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
												<div class="single-product-content">
													<div class="product-content-left">
														<h2><a href="#">EXCLUSIVE STYLE</a></h2>
														<p>Jacket’s</p>
													</div>
													<div class="product-content-right">
														<h3>$27.00</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection()
