<?php

$vid = $_REQUEST['vid'];


include('../connect.php');

$sqlreg = "select * from registration where vid=$vid";

$regresult = mysqli_query($conn,$sqlreg);

$regrow = mysqli_fetch_array($regresult); 


	

?>





<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/koncept/garden/default/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2015 08:57:00 GMT -->
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
							<li class="drop"><a  href="services.php?vid=<?php echo $vid;?>">Services</a>
								
							</li>
							
							<li class="drop"><a  href="products.php?vid=<?php echo $vid;?>">Products</a>
								
							</li>
							<li class="drop"><a class="active" href="contact.php?vid=<?php echo $vid;?>">Contact Us</a>
								
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
				<h2>Contact Us</h2>
				<ul class="page-depth">
					
					
				</ul>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- contact section 
			================================================== -->
		<section class="contact-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div id="map2"></div>
					</div>
					<div class="col-md-4">
						<div class="contact-info">
							<h2>Contact Info</h2>
							
							<ul class="information-list">
							
	<?php
				
				
								if(mysqli_num_rows($contactusresult))
								{
								
								
						
						?>
								<li><i class="fa fa-map-marker"></i><span>
								<?php echo $contactusrow['address'];?></span></li>
								<li><i class="fa fa-phone"></i><span><?php echo $contactusrow['phone1'];?></span><span><?php echo $contactusrow['phone2'];?></span></li>



								<li><i class="fa fa-envelope-o"></i><a href="#"><?php echo $contactusrow['email'];?></a></li>


						
						<?php
						}
						else
						{
						?>
<li><i class="fa fa-map-marker"></i><span>907 N Randolph street, Arlington County, Virginia, United States</span></li>
								<li><i class="fa fa-phone"></i><span>+1 703-697-1776</span><span>+1 605-315-8544</span></li>



								<li><i class="fa fa-envelope-o"></i><a href="#">nunforest@gmail.com</a></li>


							


							<?php
							}
							?>
							
								</ul>						
						</div>
						<form id="contact-form">
							<h2>Send us a message</h2>
							<input name="name" id="name" type="text" placeholder="Name">
							<input name="mail" id="mail" type="text" placeholder="Email">
							<textarea name="comment" id="comment" placeholder="Message"></textarea>
							<input type="submit" id="submit_contact" value="Send Message">
							<div id="msg" class="message"></div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End contact section -->

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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
<script>

/* ---------------------------------------------------------------------- */
	var contact = {"lat":"-33.880641", "lon":"151.204298"}; //Change a map coordinate here!

	try {
		var mapContainer = $('#map2');
		mapContainer.gmap3({
			action: 'addMarker',
			marker:{
				options:{
					icon : new google.maps.MarkerImage('images/marker.png')
				}
			},
			latLng: [contact.lat, contact.lon],
			map:{
				center: [contact.lat, contact.lon],
				zoom: 16
				},
			},
			{action: 'setOptions', args:[{scrollwheel:false}]}
		);
	} catch(err) {

	}


</script>
</body>

<!-- Mirrored from nunforest.com/koncept/garden/default/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2015 08:57:01 GMT -->
</html>