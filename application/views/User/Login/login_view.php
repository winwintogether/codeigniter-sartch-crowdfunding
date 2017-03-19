<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>SARTCH</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="<?=base_url()?>Assets/bootstrap/css/bootstrap.css" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link href="<?=base_url()?>Assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!-- Fontello CSS -->
		<link href="<?=base_url()?>Assets/fonts/fontello/css/fontello.css" rel="stylesheet">
		<!-- Plugins -->
		<link href="<?=base_url()?>Assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/css/animations.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/plugins/hover/hover-min.css" rel="stylesheet">		
		<link href="<?=base_url()?>Assets/plugins/jquery.countdown/jquery.countdown.css" rel="stylesheet">
		<!-- the project core CSS file -->
		<link href="<?=base_url()?>Assets/css/style.css" rel="stylesheet" >
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="<?=base_url()?>Assets/css/skins/light_blue.css" rel="stylesheet">
		<!-- Custom css --> 
		<link href="<?=base_url()?>Assets/css/custom.css" rel="stylesheet">
		<link href="<?=base_url()?>Assets/css/setting.css" rel="stylesheet">
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="page-loader-4">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- background image -->
			<div class="f_screen"></div>

			<!-- banner start -->
			<!-- ================ -->
			<div class="pv-40 dark-translucent-bg">
				<div class="container">
					<div class="object-non-visible text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<div>
							<img id="logo_img" src="<?=base_url()?>Assets/img/logo_1.png" alt="The Project" style="height:35px; margin:0 auto"/>
						</div>
						<div class="form-block center-block p-30 light-gray-bg border-clear">
							<h2 class="title text-left">Login</h2>
							<form class="form-horizontal text-left" action="<?=base_url()?>index.php/user/do_login" method="post">
								<div class="form-group has-feedback">
									<label for="inputEmail" class="col-sm-3 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputPassword" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
										<i class="fa fa-lock form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-8">
										<div class="checkbox">
											<label>
												<input type="checkbox" required> Remember me.
											</label>
										</div>
										<button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
										<ul class="space-top">
											<li><a href="#">Forgot your password?</a></li>
										</ul>
										<span class="text-muted">Login with</span>
										<ul class="social-links colored circle clearfix">
											<li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="googleplus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</form>
							<p>Don't have an account yet? <a href="#">Sing up</a> now.</p>
						</div>
						<!-- .subfooter start -->
						<!-- ================ -->
						<p class="mt-20">Copyright © 2017 The Project by <a target="_blank" href="#">HtmlCoder</a>. All Rights Reserved</p>
						<!-- .subfooter end -->
					</div>
				</div>
			</div>
			<!-- banner end -->


			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>Assets/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/modernizr.js"></script>

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

		<!-- Count Down javascript -->
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/jquery.countdown/jquery.plugin.js"></script>
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/jquery.countdown/jquery.countdown.js"></script>
		<script type="text/javascript" src="<?=base_url()?>Assets/js/coming.soon.config.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="<?=base_url()?>Assets/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="<?=base_url()?>Assets/js/custom.js"></script>
	</body>
</html>
