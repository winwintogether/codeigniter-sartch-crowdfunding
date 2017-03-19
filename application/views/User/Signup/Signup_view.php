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

		<link rel="stylesheet" href="<?=base_url()?>Assets/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>Assets/plugins/bootstrap-select/bootstrap-select.css" />
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
	<body class="no-trans   page-loader-4">

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
						<!-- logo -->
						<div>
							<img id="logo_img" src="<?=base_url()?>Assets/img/logo_1.png" alt="The Project" style="height:35px; margin:0 auto"/>
						</div>
						<!-- name-and-slogan -->
						
						<div class="form-block center-block p-30 light-gray-bg border-clear text-left">
							<h2 class="title">Sign Up</h2>
							<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/user/do_signup" method="post">
								<div class="form-group has-feedback">
									<label for="inputName" class="col-sm-3 control-label">First Name <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputName" name="first_name" placeholder="First Name" required>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputLastName" class="col-sm-3 control-label">Last Name <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Last Name" required>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputEmail" class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputPassword" class="col-sm-3 control-label">Password <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
										<i class="fa fa-lock form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputBirthday" class="col-sm-3 control-label">Birthday <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputBirthday" name="birthday" placeholder="Birthday" required>
										<i class="fa fa-calendar form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputAddress" class="col-sm-3 control-label">Address <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address" required>
										<i class="fa fa-institution form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputGender" class="col-sm-3 control-label">Gender <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<select class="form-control" name="gender">
										  <option value="male">Male</option>
										  <option value="female">Female</option>
										</select>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputCity" class="col-sm-3 control-label">City <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputCity" name="city" placeholder="City" required>
										<i class="fa fa-location-arrow form-control-feedback"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									<label for="inputCountry" class="col-sm-3 control-label">Country <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputCountry" name="country" placeholder="Country" required>
										<i class="fa fa-flag form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputZip" class="col-sm-3 control-label">Zip code<span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputZip" name="zipcode" placeholder="Zip code" required>
										<i class="fa fa-lock form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-8">
										<div class="checkbox">
											<label>
												<input type="checkbox" required> Accept our <a href="#">privacy policy</a> and <a href="#">customer agreement</a>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-8">
										<button type="submit" class="btn btn-group btn-default btn-animated">Sign Up <i class="fa fa-check"></i></button>
									</div>
								</div>
							</form>
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

		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/moment/min/moment.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript">
			$("#inputBirthday").datetimepicker({
				format:'YYYY/MM/DD'
			});
		</script>

	</body>
</html>
