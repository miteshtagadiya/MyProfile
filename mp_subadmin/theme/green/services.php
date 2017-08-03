<?php

$vid = $_REQUEST['vid'];


include('../connect.php');

$sqlreg = "select * from registration where vid=$vid";

$regresult = mysqli_query($conn,$sqlreg);

$regrow = mysqli_fetch_array($regresult); 


$sqlservice = "select * from services where vid = $vid";

$serviceresult = mysqli_query($conn,$sqlservice);

	

?>









<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/koncept/garden/default/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2015 08:55:34 GMT -->
<head>
	<title><?php echo $regrow['shopname'];?></title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,900,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								
								<?php
								$sqlcontactus = "select * from contactus where vid = $vid";

								$contactusresult = mysqli_query($conn,$sqlcontactus);
				
				
								if(mysqli_num_rows($contactusresult))
								{
								$contactusrow = mysqli_fetch_array($contactusresult);
								
						
						?>
						
								
								
								<p>
									<span><i class="fa fa-phone"></i><?php echo $contactusrow['phone1'];?></span>
									<span><i class="fa fa-envelope-o"></i><?php echo $contactusrow['email'];?></span>
									
								</p>
								
								
								<?php
								}
								else
								{
								?>
								<p>
									<span><i class="fa fa-phone"></i>1234 - 5678 - 9012</span>
									<span><i class="fa fa-envelope-o"></i>support@koncept.com</span>
									
								</p>
								
								
								<?php
								}
								?>
								
							</div>	
							<div class="col-md-6">
								<ul class="social-icons">
							<?php
								$sqlfollowus = "select * from followus where vid = $vid";
								$followusresult = mysqli_query($conn,$sqlfollowus);

								while($followusrow = mysqli_fetch_array($followusresult))
								{
								
								if($followusrow['f_name'] == 'facebook')
								{
						?>	


									<li><a class="facebook" href="<?php echo $followusrow['link'];?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<?php
								}
								if($followusrow['f_name'] == 'google+')
								{
								?>	
									
								
								<li><a class="google" href="<?php echo $followusrow['link'];?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
									
								
								
								<?php
								}
								if($followusrow['f_name'] == 'twitter')
								{
								?>	
								
									<li><a class="twitter" href="<?php echo $followusrow['link'];?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<?php
								}
								}
								?>	
								
									
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<?php
								$sqllogo = "select * from logo where vid = $vid";
								$logoresult = mysqli_query($conn,$sqllogo);

								if(mysqli_num_rows($logoresult)>0)
								{
									$logorow = mysqli_fetch_array($logoresult);
						?>
								<a class="navbar-brand" href="index.php"><img src="../../logo/<?php echo $logorow['logo_icon'];?>" style="height:32px;width:101px;" alt=""></a>
						<?php
								}
								else
								{
						?>
							<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
						<?php
								}
						?>
					
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="drop"><a  href="index.php?vid=<?php echo $vid;?>">Home</a>
								
							</li>
							<li class="drop"><a  href="about.php?vid=<?php echo $vid;?>">About Us</a>
								
							</li>
							<li class="drop"><a class="active" href="services.php?vid=<?php echo $vid;?>">Services</a>
								
							</li>
							
							<li class="drop"><a href="products.php?vid=<?php echo $vid;?>">Products</a>
								
							</li>
							<li class="drop"><a href="contact.php?vid=<?php echo $vid;?>">Contact Us</a>
								
							</li>
							
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</header>
		<!-- End Header -->

		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h2>Services</h2>
				<ul class="page-depth">
					
					
				</ul>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- services-page section 
			================================================== -->
		<section class="services-page-section">
			<div class="container">
				<div class="services-wrapp">
					<div class="row">
						
							<?php
							
							if(mysqli_num_rows($serviceresult))
							{
							while($servicerow = mysqli_fetch_array($serviceresult))
							{
							?>
							<div class="col-md-4">
							<div class="services-post">
								
								<h2><?php echo $servicerow['title'];?></h2>
								<p><?php echo $servicerow['s_description'];?></p>
								
							</div>
						</div>
						
							
							<?php
							}
							}
							else
							{
							?>
						
						<div class="col-md-4">
							<div class="services-post">
								
								<h2>We do the best</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="services-post">
								
								<h2>We are really fast</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="services-post">
								
								<h2>We love our work</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="services-post">
								
								<h2>we promise good results</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="services-post">
								
								<h2>our team is great</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="services-post">
								
								<h2>try us!</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
								
							</div>
						</div>
						<?php
						}
						?>
						
					</div>
				</div>
			</div>
		</section>
		<!-- End services-page section -->

		<!-- footer 
			================================================== -->
		<footer>
			
			<p class="copyright">
				Developed by - <a href="http://accreteitech.com/"> Accrete Infotech </a>
			</p>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/script.js"></script>


</body>

<!-- Mirrored from nunforest.com/koncept/garden/default/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2015 08:55:35 GMT -->
</html>