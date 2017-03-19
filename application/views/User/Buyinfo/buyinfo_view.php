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
										<li class="mega-menu">
											<a href="<?=base_url()?>index.php/page/profile">PROFILE</a>
										</li>																										
									</ul>
									
								</div>
							</nav>
						</div>
					</div>
				</header>
			</div>			<!-- header-container end -->
			
			<div id="page-start"></div>
			
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="#">Home</a></li>
						<li class="active">Collections</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Investor Collection</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<div class="row">
								<div class="col-md-4">
									<ul class="nav nav-pills" role="tablist">
										<li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Products</a></li>										
									</ul>
									<div class="tab-content clear-style">
										<div class="owl-carousel content-slider-with-large-controls-autoplay">

										<?php
											$col_info=null;
											foreach($collection as $col){
												$col_info=get_object_vars($col);
											}
											foreach($products as $pro){
											    $pro=get_object_vars($pro);
										?>
											<div class="overlay-container overlay-visible">
												<img src="<?=base_url()?>collections/<?=$col_info['collection_id']?>/<?=$pro['product_image']?>" alt="">
												<a href="<?=base_url()?>collections/<?=$col_info['collection_id']?>/<?=$pro['product_image']?>" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
											</div>
										<?php
											}
										?>	
										</div>									
									</div>
									<!-- pills end -->
								</div>
								<div class="col-md-8 pv-30">
									<h2><?=$col_info['collection_name']?></h2>
									<p><?=$col_info['collection_description']?></p>
									
									
									<hr class="mb-10">
									
									<div class="row light-gray-bg p-20 bordered clearfix">
										<form role="form"  class="clearfix" action="" method="POST">

											<div class="col-md-6">
												<div class="form-group">
													<label>Investor Amount($)</label>
													<input type="text" name="_token" value="">
												</div>
											</div>
											<div class="col-md-6">
												<script
													    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
													    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
													    data-amount="999"
													    data-name="Stripe.com"
													    data-description="Widget"
													    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
													    data-locale="auto"
													    data-zip-code="true">
												</script>											
											</div>
											
											<div class="col-md-12 text-right">
												
											</div>											
										</form>
									</div>									
								</div>
								
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
			<div class="clearfix"></div>
		
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
			</footer>
		</div>
	
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

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/owl-carousel/owl.carousel.js"></script>
		
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="<?=base_url()?>Assets/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="<?=base_url()?>Assets/js/custom.js"></script>
		<script src="<?=base_url()?>Assets/js/jssor.slider-22.1.6.min.js" type="text/javascript"></script>
		
	
	</body>
</html>
