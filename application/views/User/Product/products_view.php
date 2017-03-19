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
		<link href="<?=base_url()?>Assets/plugins/morphext/morphext.css" rel="stylesheet">
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
			</div>

			<div class="owl-carousel carousel">
				<?php 

				$col_info=null;
				foreach($collection as $col){
					$col_info=get_object_vars($col);
				}
				foreach($products as $pro){
					$pro=get_object_vars($pro);
				?>
				<div class="image-box text-center">
					<div class="overlay-container">
						<img class="product-img" src="<?=base_url()?>collections/<?=$col_info['collection_id']?>/<?=$pro['product_image']?>" alt="">
						<div class="overlay-to-top">
							<a href="#" class="small"><?=$pro['product_name']?></a>	
						</div>
					</div>
				</div>
				
				<?php
				}
				?>								
			</div>
			
			<div id="page-start"></div>
			
			<section class="light-gray-bg pv-30 padding-bottom-clear clearfix">
				<div class="container">
					 <div class="row" style="text-align:center">
						<div class="col-md-8">
							<div class="statsproduct">
					            <div>
					                Collection Value
					                <p class="statsnumbersproduct"><?=$col_info['collection_value']?></p>
					            </div>
					            <div>
					                Investors
					                <p class="statsnumbersproduct"><?=$col_info['visitors']?></p>
					            </div>
					            <div>
					                Funded
					                <p class="statsnumbersproduct">89%</p>
					            </div>
					            <div>
					                Invested
					                <p class="statsnumbersproduct">£60,000</p>
					            </div>
					        	<div class="sixty"></div>

					        	<?php
									$customer_id = $this->session->userdata('customer_id');
								    if ($customer_id != null)
					            	{
					            ?>

					        	<button class="buyinto" onclick="gotobuy(<?=$col_info['collection_id']?>)">Buy Into</button>
					    		<?php
					    			}
					    		?>
					    	</div>

					    	<div class="pv-20" style="text-align:left;font-size:20px">
					    		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis repellat corporis sunt necessitatibus asperiores nesciunt eos cumque, 
								repudiandae expedita dolores eius, obcaecati corrupti sequi. Officia nulla, accusantium quis minus expedita.
					    	</div>

					    	<div class="panel panel-default">
								<div class="panel-heading" >
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion-4" href="#collapseOne-4" style="text-align: left;">
											<i class="fa fa-plus pr-10"></i>About collections
										</a>
									</h4>
								</div>
								<div id="collapseOne-4" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion-5" href="#collapseOne-5" style="text-align: left;">
											<i class="fa fa-plus pr-10"></i>Documents
										</a>
									</h4>
								</div>
								<div id="collapseOne-5" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									</div>
								</div>
							</div>
							

					    	<div class="paragraph">
						        <div class="tabs">
							    	<?php
							    		$tab_num=1;
							    		foreach($products as $pro){
							    			$pro=get_object_vars($pro);
							    			if($tab_num==1){
							    	?>	

							    			 <a href="javascript:void(0)"><div id="defaultOpen" class="tab" onclick="openTab(event, 'Tab<?=$tab_num?>')"><?=$pro['product_name']?></div></a>

							    	<?php
							    		  } else{
							    	?>
							    			<a href="javascript:void(0)"><div  class="tab" onclick="openTab(event, 'Tab<?=$tab_num?>')"><?=$pro['product_name']?></div></a>

							    	<?php
								    		}
								    		$tab_num++;
							    		}
							    	?>					       
						     	</div>



						        	<?php
							    		$tab_num=1;
							    		foreach($products as $pro){
							    			$pro=get_object_vars($pro);
							   		?>	
							    		<div id="Tab<?=$tab_num?>" class="paratext row"><p class="col-md-8"><?=$pro['product_description']?></p>
								        <img class="paraimg col-md-4" src="<?=base_url()?>collections/<?=$col_info['collection_id']?>/<?=$pro['product_image']?>" alt="">
								        </div>
							    	<?php								    		
								    		$tab_num++;
							    		}
							    	?>	
						    </div>
						</div>
						<div class="col-md-4">
							<div class="curator">
							     <h1>Meet The Curator</h1>
							     <div class="curatortext">
							        <div class="curatorimg"></div>
							        <h2>Jonathan Lucanzi</h2>
							        <h3>Curator title: Artist & Collector</h3>
							        <p class="curatorinfo"><b>e:</b> jlucanzi@lucanzi.com</p>
							        <p class="curatorinfo"><b>w:</b> sartch.com/lucanzi</p>
							        <p class="aboutlucanzi"><div class="about">About:</div>Jonathan is an avid art collector who has a deep passion for modern contemporary art. Jonathan here is sharing his collection with the world.</p>
							      </div>
							    <div class="buttons">
							      <img src="<?=base_url()?>Assets/img/heart.png" alt="heart">
							      <img src="<?=base_url()?>Assets/img/twitter.png" alt="twitter">
							      <img src="<?=base_url()?>Assets/img/facebook.png" alt="facebook">
							      <div class="buttonstext">
							          <a href="#">Like</a>
							          <a href="#">Share</a>
							          <a href="#">Share</a>
							      </div>
							    </div>
							 </div>
						</div>						
					 <div>
				</div>
			</section>
			
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
		<script type="text/javascript" src="<?=base_url()?>Assets/plugins/morphext/morphext.min.js"></script>
				<!-- Background Video -->
		<script src="<?=base_url()?>Assets/plugins/vide/jquery.vide.js"></script>
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
		
		
		
		<script type="text/javascript">
			function gotobuy(collection_id){
				window.location.href="<?=base_url()?>index.php/buyinfo/show?collection_id="+collection_id;
			}
			function openTab(evt, tabName) {
				    var i, paratext, tab;

					paratext = document.getElementsByClassName("paratext");
				    for (i = 0; i < paratext.length; i++) {
				        paratext[i].style.display = "none";
				    }

					tab = document.getElementsByClassName("tab");
				    for (i = 0; i < tab.length; i++) {
				        tab[i].className = tab[i].className.replace(" activetab", "");
				    }

					document.getElementById(tabName).style.display = "block";
				    evt.currentTarget.className += " activetab";
				}
			document.getElementById("defaultOpen").click();
		</script>

	</body>
</html>
