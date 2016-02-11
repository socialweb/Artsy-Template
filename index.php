<?php

if (elgg_is_logged_in())
{
forward ('activity');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Artsy Template for Elgg</title>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link href="mod/artsy/css/bootstrap.css" rel="stylesheet">
<link href="mod/artsy/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="mod/artsy/css/chocolat.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="mod/artsy/css/form_style.css" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->	
<!-- js -->
<script type="text/javascript" src="mod/artsy/js/jquery.min.js"></script>
<!-- js -->
<script src="mod/artsy/js/modernizr.custom.97074.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="mod/artsy/js/move-top.js"></script>
<script type="text/javascript" src="mod/artsy/js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
<!-- start-smoth-scrolling -->
</head>
<body>
<div class="header">
	<div class="header-left">
		<a href="index.html"><img src="mod/artsy/images/logo.png" alt=""/><span>Artsy</span> Template</a>
	</div>
	<div class="header-right">
		<span class="menu"><img src="mod/artsy/images/menu.png" alt=""/></span>
			<nav class="cl-effect-11" id="cl-effect-11">	
				<ul class="nav1">	
					<li><a href="/activity" data-hover="Activity">ACTIVITY</a></li>
					<li><a href="/blogs" data-hover="Blogs">BLOGS</a></li>
					<li><a href="/bookmarks" data-hover="Bookmarks">BOOKMARKS</a></li>
					<li><a href="/files" data-hover="Files">FILES</a></li>
					<li><a href="/groups" data-hover="Groups">GROUPS</a></li>
					<li><a href="/members" data-hover="Members">MEMBERS</a></li>							
				</ul>
			</nav>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 93809900, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
	</div>
	<div class="clearfix"></div>
</div>
<!-- banner-slider -->
<div id="home" class="banner-slider">
		<!-- responsiveslides -->
							
		<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner one">
							
							<div class="container">
								<div class="banner-info">
					</br>				
					</br>
					</br>				
	
								    <form class="form-2" action="action/login" method="post">
<?php
$ts = time();
$token = generate_action_token($ts);
?>


<center style="font-size: 22px;">
    <b>Have an account? Sign in now!</b>
</center>    
</br>
<label for="login"><i class="icon-user"><b style="font-size: 14px;"></i>Username</b></label>
<input type="text" name="username" placeholder="Username or email">
</br>

<label for="password"><i class="icon-lock"></i><b style="font-size: 14px;">Password</b></label>
<input type="password" name="password" placeholder="Password" class="showpassword">

<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>"/>
<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />
</br>
<p class="clearfix"> 
<a href="/register" class="log-twitter">Create an Account</a>    
<input type="submit" name="submit" value="Log in">
</p>
</form>
									
								
								
								</div>
							</div>
					</div>
				</li>
				<li>
					
				</li>
				
			</ul>
		</div>
</div>
<div class="clearfix"></div>
<!-- //banner-slider -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<div class="welcome-head">
			<h3>WELCOME</h3>
			<p>This is an example text that you can change on the theme settings page. It is easy! Just type and save!</p>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<h3>ABOUT </h3>
			<div class="about-grids">
				<div class="col-md-6 about-grid-right">
					<img src="mod/artsy/images/1.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 about-grid-left">
					<h4>Describe your network!</h4>
					<p>Don't forget that you can edit this text on the settings page!
						<span>Write about your network! Let your visitors know all the features your network has here!</span></p>
					<div class="about-grid-left-grids">
						<div class="about-grid-left-grid">
							<img src="mod/artsy/images/2.jpg" alt=" " class="img-responsive" />
						</div>
						
					
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- services -->
<div id="services" class="services1">
	<div class="container">
		<h3>FEATURES</h3>
			<div class="servc-grids">
				<div class="col-md-6 servc-grid">
					<div class="servc-grid-left">
						<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
					</div>
					<div class="servc-grid-right">
						<h4>feature 1</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 servc-grid">
					<div class="servc-grid-left">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</div>
					<div class="servc-grid-right">
						<h4>feature 2</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 servc-grid">
					<div class="servc-grid-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="servc-grid-right">
						<h4>feature 3</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 servc-grid">
					<div class="servc-grid-left">
						<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
					</div>
					<div class="servc-grid-right">
						<h4>feature 4</h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
<!-- services -->





<div class="copy-right">
	<div class="container">
		<p> &copy; 2015 Artsy Template for elgg. All Rights Reserved </p>
	</div>
</div>
<!-- smooth scrolling -->
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
<!-- //smooth scrolling -->
</body>
</html>