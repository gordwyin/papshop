<!DOCTYPE html>
<html lang="en">
<head>
<title>List Space</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<!-- //online-fonts -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
</head>
<body>
<!-- header -->
<?php include 'header.php';?>
	<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					
					<li>
						<div class="slider-info1">
							<h3>List your Space here</h3>
							<p>...............</p>
							
						</div>
					</li>
					<li>
						<div class="slider-info2">
							<h3>Want to hire space instead? </h3>
							<div class="readmore-w3">
								<a class="readmore" href="#Find Space" data-toggle="modal" data-target="#myModal1">Check here</a>
							</div>
						</div>
					</li>
				</ul>
						<!-- //Modal1 -->
			</div>
			<div class="clearfix"></div>
</div>		
		<!--//Slider-->

		<div class="main" id="main">
		<div class="w3layouts_main_grid">
		<div class="booking-form-head-agile">
		<h3>Space Details</h3>
		</div>
			<form action="#" method="post" class="w3_form_post">
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>Name * </h5>
						<div class="nam">
							<input type="text" name="First name" placeholder="First Name" required="">
						</div>
						<div class="nam1">
							<input type="text" name="Last name" placeholder="Last Name" required="">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>E-mail </h5>
							<input type="email" name="Email" placeholder="ex : myname@gmail.com" required="">
					</div>
				</div>
				
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>Location </h5>
							<input type="email" name="Email" placeholder="Your pop up locations?" required="">
					</div>
				</div>
				
				<div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Space Type</h5>
						<select id="category" name="category" required="">
							<option value=" ">None</option>
							<option value="category1">Indoors</option>
							<option value="category2">Outdoors</option>
							
							
						</select>
					</div>
				</div>
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right">
						<input type="submit" value="List Now">
					</div>
					<div class="clearfix"> </div>
				</div>
			</form>
		</div>

</div>
<!-- //header -->
<!-- /about -->
<div class="w3-aglile-about" id="about">
	<div class="w3-agile-about-grids">
		<div class="w3-aglie-about-grid1">
			<div class="col-md-6 w3-about-text-grid">
				<h3>How to list space</h3>
				<p>Fill the information required above</p>
					<p>We'll create a webspace for you.</p>
			</div>
			<div class="col-md-6 w3-aglie-about-img-grid1">
		
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="w3-aglie-about-grid2">
			<div class="col-md-4 w3-about-bg-text-grid">
			<div class="w3-about-bg-head">
			<h3>List of Spaces</h3>
			<p>...................</p>
			<h5><a href="#">viewmore</a></h5>
			</div>
			</div>
				
			<div class="col-md-4 w3-about-text1-grid">
			<div class="w3-about-text-heads">
				<h3>List your spaces at earlisest</h3>
				<h4>To be on our FrontPage</h4>
				<p>......................................</p>
				<ul class="about-list">
				<li><a href="#">viewmore</a></li>
				<li><a href="#main" class="scroll">List Space</a></li>
				</ul>
				</div>
			</div>
			<div class="col-md-4 w3-about-img-grid">
				
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- js files -->
	<!-- For-Banner -->
		 <script src="js/responsiveslides.min.js"></script>
		 <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				manualControls: '#slider3-pager',
			  });
			});
		  </script>
	<!-- //For-Banner -->
		
<!--footer-->
<div class="footer-w3">
	<p>&copy; 2018 Papshop.com. All rights reserved </p>
</div>
<!--//footer-->
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!-- //script for portfolio -->
	<!-- //For-Gallery-js -->
<!-- for-Testimonials -->
			<!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!--//required-js-files-->
		<!-- //for-Testimonials -->
<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
			<script src="js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
		<!-- //Calendar -->
		 <!-- start-smoth-scrolling -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->
		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="js/SmoothScroll.min.js"></script>



</body>
</html>