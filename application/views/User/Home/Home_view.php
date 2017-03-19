<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SARTCH</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?=base_url()?>Assets/images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
		<link href="<?=base_url()?>Assets/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/fonts/fontello/css/fontello.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/css/animations.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/plugins/hover/hover-min.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/css/style.css" rel="stylesheet" >
		<link href="<?=base_url()?>Assets/css/skins/light_blue.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/css/custom.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/css/setting.css" rel="stylesheet">
		<link rel="stylesheet" href="<?=base_url()?>Assets/css/small-slider.css">

	</head>
	<body class="no-trans page-loader-4">
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		<div class="page-wrapper">
			<div class="header-container">			
				<header class="header  fixed full-width  clearfix">
					<div class="header-right clearfix">
						<div class="main-navigation  animated with-dropdown-buttons">
							<nav class="navbar navbar-default" role="navigation">
								<div class="container-fluid">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<div class="header-left clearfix">
											<div id="logo" class="logo">
												<a href="#"><img id="logo_img" src="<?=base_url()?>Assets/images/logo.png" alt="The Project"></a>
											</div>
										</div>
									</div>
									<div class="collapse navbar-collapse" id="navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right">
										<li class="mega-menu">
											<a href="<?=base_url()?>index.php/page/home">HOME</a>
										</li>
										<li class="mega-menu">
											<a href="<?=base_url()?>index.php/page/login">LOG IN</a>
										</li>
										<li class="mega-menu">
											<a href="<?=base_url()?>index.php/page/signup">SIGN UP</a>
										</li>
										<li class="mega-menu">
											<a href="<?=base_url()?>index.php/page/collections" >COLLECTIONS</a>
										</li>
										<li class="mega-menu">
											<a href="<?=base_url()?>index.php/page/aboutus">ABOUT US</a>
										</li>
										<?php
										$customer_id = $this->session->userdata('customer_id');
				                        if ($customer_id != null)
	            			             {
	            			           ?>
										<li class="mega-menu">
											<a href="<?=base_url()?>index.php/page/profile">PROFILE</a>
										</li>
										<?php
										}
										?>																										
									</ul>
									
								</div>
							</nav>
						</div>
					</div>
				</header>
			</div>			<!-- header-container end -->
		
			<!-- banner start -->
			<!-- ================ -->
			<div class="banner clearfix">

				<!-- slideshow start -->
				<!-- ================ -->
				<div class="slideshow">			
					
					<div class="slider-banner-container">
						<div class="slider-banner-fullwidth">
							<ul class="slides">
								<li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">
									<img src="<?=base_url()?>pages_content/Home/slider/cover01.jpg" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">
									
								</li>
								<li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">								
								
									<img src="<?=base_url()?>pages_content/Home/slider/cover02.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

																

								</li>
								<li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">								
								
									<img src="<?=base_url()?>pages_content/Home/slider/cover03.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">
															

								</li>
								<!-- slide 2 end -->
							</ul>
							<div class="tp-bannertimer"></div>
						</div>
					</div>
					<!-- slider revolution end -->

				</div>
				<!-- slideshow end -->

			</div>
			<!-- banner end -->
			
			<div id="page-start"></div>
			
			<section class="light-gray-bg pv-30 padding-bottom-clear clearfix">
				<div class="container">
					 <div class="row" style="text-align:center">
						<div class="col-md-4">
						    <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<h1>What Sartch does</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus enim qui optio quod facere, voluptatem id, itaque necessitatibus aut voluptas iste numquam mollitia!</p>
								<button type="button" class="learnmore">learn more</button>
							</div>
						</div>
				
						<div class="col-md-4">
							<div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100"> 
								<h1>How it works</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus enim qui optio quod facere, voluptatem id, itaque necessitatibus aut voluptas iste numquam mollitia!</p>
								<br>
								<button type="button" class="learnmore">learn more</button>
							</div>
						</div>
				
						<div class="col-md-4">
							<div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<h1>The Art</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus enim qui optio quod facere, voluptatem id, itaque necessitatibus aut voluptas iste numquam mollitia!</p>
								<br>
								<button type="button" class="learnmore">learn more</button>
							</div>
						</div>
					<div>
				</div>
			</section>	
			<section class="light-gray-bg pv-30 padding-bottom-clear clearfix">
				<div class="container">
					 <div class="row">  
	
							<div class="collection col-md-4">
								<div id="jssor_1" class="small-carousel">
									<!-- Loading Screen -->
									<div data-u="loading" class="data-loading">
										<div class="data-loading-filter"></div>
										<div class="data-loading-icon"></div>
									</div>
									<div data-u="slides" class="data-slides">
										<div>
											<div class="collection-head">product-1</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/01.jpg"/>
											<img data-u="thumb" src="<?=base_url()?>Assets/img/01.jpg" />                
										</div>
										

									   <div>
											<div class="collection-head">product-2</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/02.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/02.jpg" />
										</div>
										
										<div>
											<div class="collection-head">product-3</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/03.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/03.jpg" />
										</div>
									   
									   <div>
											<div class="collection-head">product-4</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/04.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/04.jpg" />
										</div>
										<div>
											<div class="collection-head">product-5</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/02.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/02.jpg" />
										</div>
										
										<div>
											<div class="collection-head">product-6</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/03.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/03.jpg" />
										</div>
									   
									   <div>
											<div class="collection-head">product-7</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/04.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/04.jpg" />
										</div>
									</div>
									<!-- Thumbnail Navigator -->
									<div data-u="thumbnavigator" class="thumbnails"  data-autocenter="1">
										<!-- Thumbnail Item Skin Begin -->
									  <div data-u="slides" style="cursor: default;">
											<div data-u="prototype" class="p">
												<div class="w">
													<div data-u="thumbnailtemplate" class="t"></div>
												</div>
												<div class="c"></div>
											</div>
										</div>
										<!-- Thumbnail Item Skin End -->
									</div>
									<!-- Arrow Navigator -->
									<span data-u="arrowleft" class="jssora05l"></span>
									<span data-u="arrowright" class="jssora05r"></span>
								</div>

								<div class="stats">
									<div>
										Investors
										<p class="statsnumbers">260</p>
									</div>
									<div>
										Funded
										<p class="statsnumbers">89%</p>
									</div>
									<div>
										Invested
										<p class="statsnumbers">£60,000</p>
									</div>
									<div class="sixty"></div>
								</div>

							</div>

							<div class="collection col-md-4">
								<div id="jssor_2" class="small-carousel">
									<!-- Loading Screen -->
									<div data-u="loading" class="data-loading">
										<div class="data-loading-filter"></div>
										<div class="data-loading-icon"></div>
									</div>
									<div data-u="slides" class="data-slides">
										<div>
											<div class="collection-head">product-1</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/01.jpg"/>
											<img data-u="thumb" src="<?=base_url()?>Assets/img/01.jpg" />                
										</div>
										

									   <div>
											<div class="collection-head">product-2</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/02.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/02.jpg" />
										</div>
										
										<div>
											<div class="collection-head">product-3</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/03.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/03.jpg" />
										</div>
									   
									   <div>
											<div class="collection-head">product-4</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/04.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/04.jpg" />
										</div>
										<div>
											<div class="collection-head">product-5</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/02.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/02.jpg" />
										</div>
										
										<div>
											<div class="collection-head">product-6</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/03.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/03.jpg" />
										</div>
									   
									   <div>
											<div class="collection-head">product-7</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/04.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/04.jpg" />
										</div>
									</div>
									<!-- Thumbnail Navigator -->
									<div data-u="thumbnavigator" class="thumbnails"  data-autocenter="1">
										<!-- Thumbnail Item Skin Begin -->
									  <div data-u="slides" style="cursor: default;">
											<div data-u="prototype" class="p">
												<div class="w">
													<div data-u="thumbnailtemplate" class="t"></div>
												</div>
												<div class="c"></div>
											</div>
										</div>
										<!-- Thumbnail Item Skin End -->
									</div>
									<!-- Arrow Navigator -->
									<span data-u="arrowleft" class="jssora05l"></span>
									<span data-u="arrowright" class="jssora05r"></span>
								</div>

								<div class="stats">
									<div>
										Investors
										<p class="statsnumbers">260</p>
									</div>
									<div>
										Funded
										<p class="statsnumbers">89%</p>
									</div>
									<div>
										Invested
										<p class="statsnumbers">£60,000</p>
									</div>
									<div class="sixty"></div>
								</div>
							</div>

							<div class="collection col-md-4">
								<div id="jssor_3" class="small-carousel">
									<!-- Loading Screen -->
									<div data-u="loading" class="data-loading">
										<div class="data-loading-filter"></div>
										<div class="data-loading-icon"></div>
									</div>
									<div data-u="slides" class="data-slides">
										<div>
											<div class="collection-head">product-1</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/01.jpg"/>
											<img data-u="thumb" src="<?=base_url()?>Assets/img/01.jpg" />                
										</div>
										

									   <div>
											<div class="collection-head">product-2</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/02.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/02.jpg" />
										</div>
										
										<div>
											<div class="collection-head">product-3</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/03.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/03.jpg" />
										</div>
									   
									   <div>
											<div class="collection-head">product-4</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/04.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/04.jpg" />
										</div>
										<div>
											<div class="collection-head">product-5</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/02.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/thumb-02.jpg" />
										</div>
										
										<div>
											<div class="collection-head">product-6</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/03.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/03.jpg" />
										</div>
									   
									   <div>
											<div class="collection-head">product-7</div>
											<img data-u="image" src="<?=base_url()?>Assets/img/04.jpg" />
											<img data-u="thumb" src="<?=base_url()?>Assets/img/04.jpg" />
										</div>
									</div>
									<!-- Thumbnail Navigator -->
									<div data-u="thumbnavigator" class="thumbnails"  data-autocenter="1">
										<!-- Thumbnail Item Skin Begin -->
									  <div data-u="slides" style="cursor: default;">
											<div data-u="prototype" class="p">
												<div class="w">
													<div data-u="thumbnailtemplate" class="t"></div>
												</div>
												<div class="c"></div>
											</div>
										</div>
										<!-- Thumbnail Item Skin End -->
									</div>
									<!-- Arrow Navigator -->
									<span data-u="arrowleft" class="jssora05l"></span>
									<span data-u="arrowright" class="jssora05r"></span>
								</div>

								<div class="stats">
					                <div>
					                    Investors
					                    <p class="statsnumbers">260</p>
					                </div>
					                <div>
					                    Funded
					                    <p class="statsnumbers">89%</p>
					                </div>
					                <div>
					                    Invested
					                    <p class="statsnumbers">£60,000</p>
					                </div>
					                <div class="sixty"></div>
            					</div>

							</div>
					
					</div>
					
					<div class="pv-20 row" style="text-align:center">
						<div class="col-md-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> 
							<p>Omnis quam sapiente incidunt inventore, sed deleniti nostrum.</p> 
							<p>Quos incidunt error a, unde soluta maxime, nihil illo mollitia eius harum, tenetur molestiae?</p>
						</div>
					</div>					
				</div>
			</section>
			
			<section class="dark-translucent-bg" style="background-position:50% 10%; padding-top:20px; padding-bottom:20px">
				<div class="container" >
					<div class="row">
						<div class="col-md-2 col-sm-12 col-xs-12" style="padding:5px 5px" stye>
							<img class="footer-img1" src="<?=base_url()?>pages_content/Home/footer/01.jpg" />
							<div class="footer-image-caption">Caption 1</div>	
						</div>						
						<div class="col-md-7">
							<div class="row" >
								<div class="col-md-8 col-sm-6 col-xs-6" style="padding:5px 5px">
									<img class="footer-img2" src="<?=base_url()?>pages_content/Home/footer/02.jpg" />
									<div class="footer-image-caption">Caption 2</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6" style="padding:5px 5px" >
									<img class="footer-img3" src="<?=base_url()?>pages_content/Home/footer/03.jpg" />
									<div class="footer-image-caption">Caption 3</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-6 col-xs-6" style="padding:5px 5px">
									<img class="footer-img4" src="<?=base_url()?>pages_content/Home/footer/04.jpg" />
									<div class="footer-image-caption">Caption 4</div>
								</div>
								<div class="col-md-8 col-sm-6 col-xs-6" style="padding:5px 5px">
									<img class="footer-img5" src="<?=base_url()?>pages_content/Home/footer/05.jpg" />
									<div class="footer-image-caption">Caption 5</div>
								</div>
							</div>								
						</div>
						<div class="col-md-3 col-sm-12 col-xs-12" style="padding:5px 5px" >
							<img class="footer-img6" src="<?=base_url()?>pages_content/Home/footer/06.jpg" />
							<div class="footer-image-caption">Caption 6</div>	
						</div>						
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- section end -->		
			
			<footer id="footer" class="clearfix ">

				
				<div class="footer" style="padding-left:20px;padding-right:20px; color:#fff">
					
						<div class="footer-inner">
							<div class="row" style="font-size:20px">
								<div class="col-md-2 col-sm-6 col-xs-6">
									<h3 style="color:#fff">About us</h3>
									
									<p>Who we are</p>
									<p>Press</p>
									<p>Jobs</p>
									<p>Newsletter</p>
								</div>
								<div class="col-md-2  col-sm-6 col-xs-6">
									<h3 style="color:#fff">About us</h3>
									
									<p>Who we are</p>
									<p>Press</p>
									<p>Jobs</p>
									<p>Newsletter</p>
										
								</div>
								<div class="col-md-2  col-sm-6 col-xs-6">
									<h3 style="color:#fff">About us</h3>
									
									<p>Who we are</p>
									<p>Press</p>
									<p>Jobs</p>
									<p>Newsletter</p>
								</div>
								<div class="col-md-2  col-sm-6 col-xs-6">
									<h3 style="color:#fff">About us</h3>
									
									<p>Who we are</p>
									<p>Press</p>
									<p>Jobs</p>
									<p>Newsletter</p>
								</div>
							</div>
						</div>
						
						<div class="logo">
							<a href="#"><img id="logo_img" src="<?=base_url()?>Assets/images/logo.png" alt="The Project"></a>
						</div>
					
				</div>
				
				
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->
			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>Assets/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/modernizr.js"></script>

		<!-- jQuery Revolution Slider  -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/jquery.countTo.js"></script>
		
		<!-- Parallax javascript -->
		<script src="<?=base_url()?>Assets/plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="<?=base_url()?>Assets/plugins/jquery.validate.js"></script>


		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/pace/pace.min.js"></script>
		<!-- SmoothScroll javascript -->

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/owl-carousel/owl.carousel.js"></script>
		<!-- Pace javascript -->
		
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="<?=base_url()?>Assets/js/template.js"></script>


		<!-- Custom Scripts -->
		<script type="text/javascript" src="<?=base_url()?>Assets/js/custom.js"></script>
		<script src="<?=base_url()?>Assets/js/jssor.slider-22.1.6.min.js" type="text/javascript"></script>

		
		<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var SlideshowTransitions = [
              {$Duration:2400,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:2400,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var slider_options = {
              $AutoPlay: false,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 180
              }
            };           
           
            var jssor_1_slider = new $JssorSlider$("jssor_1", slider_options);
            var jssor_2_slider = new $JssorSlider$("jssor_2", slider_options);
            var jssor_3_slider = new $JssorSlider$("jssor_3", slider_options);
			
			
    });
   </script>

	</body>
</html>
