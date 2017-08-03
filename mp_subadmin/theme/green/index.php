<?php

$vid = $_REQUEST['vid'];


include('../connect.php');

$sqlreg = "select * from registration where vid=$vid";

$regresult = mysqli_query($conn,$sqlreg);

$regrow = mysqli_fetch_array($regresult); 


$sqlslider = "select * from slider where vid = $vid";

$sliderresult = mysqli_query($conn,$sqlslider);



?>




<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/koncept/garden/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2015 08:49:53 GMT -->
<head>
	<title><?php echo $regrow['shopname'];?></title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,900,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

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
								<a class="navbar-brand" href="index.php"><img src="../../logo/<?php echo $logorow['logo_icon'];?>" alt="" style="height:32px;width:101px;"></a>
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
							<li class="drop"><a class="active" href="index.php?vid=<?php echo $vid;?>">Home</a>
								
							</li>
							<li class="drop"><a href="about.php?vid=<?php echo $vid;?>">About Us</a>
								
							</li>
							<li class="drop"><a href="services.php?vid=<?php echo $vid;?>">Services</a>
								
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

		<!-- home-section 
			================================================== -->
		<section id="home-section" class="slider1">
			
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	
					
					
					
<?php
if(mysqli_num_rows($sliderresult))
{
while($sliderrow = mysqli_fetch_array($sliderresult))
{
?>

<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
<img src="../../slider/<?php echo $sliderrow['path'];?>"  alt="slidebg1" data-lazyload="../../slider/<?php echo $sliderrow['path'];?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
</li>

<?php
}
}
else
{
?>


						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							<img src="upload/slide/1.jpg"  alt="slidebg1" data-lazyload="upload/slide/1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						</li>


						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							<img src="upload/slide/2.jpg"  alt="slidebg1" data-lazyload="upload/slide/2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						</li>


						<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="Parallax 3D">
							<img src="upload/slide/3.jpg"  alt="3dbg" data-lazyload="upload/slide/3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						</li>

<?php
}
?>

						</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
		</section>






		<section class="projects-section">
			<div class="container">
				<div class="title-section">
					<h1>Our - Latest Products</h1>
					
				</div>
			</div>
			
		</section>






		<section class="projects-section projects-page-section">
			<div class="container">
				
				<div class="project-box iso-call col3 active">
				<?php
				
				$sqlproduct = "select * from product where vid = $vid ORDER BY sortorder LIMIT 6"  ;

				$productresult = mysqli_query($conn,$sqlproduct);
				
				
				if(mysqli_num_rows($productresult))
				{
				while($productrow = mysqli_fetch_array($productresult))
				{

				?>
				
				
				
					<div class="project-post buildings default-size">
						<img src="../../product/<?php echo $productrow['image'];?>" style="height:250px;width:350px;" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<h2><?php echo $productrow['title'];?></h2>
								<span><?php echo $productrow['P_description'];?></span>
								
								<a href="../../product/<?php echo $productrow['image'];?>" class="zoom"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					
			<?php
		}
			}
			else
			
			{
			
			
		?>		
					
					
					
					
					
					
					
					
					
					
					<div class="project-post buildings isolation">
						<img src="upload/projects/1.jpg" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<h2>Elegant Building</h2>
								<span>bulding, house</span>
								
								<a href="upload/projects/1.jpg" class="zoom"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					
					
					<div class="project-post interior default-size">
						<img src="upload/projects/3.jpg" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<h2>Beatiful House</h2>
								<span>bulding, house</span>
								
								<a href="upload/projects/3.jpg" class="zoom"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="project-post interior isolation">
						<img src="upload/projects/5.jpg" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<h2>Afarist Building</h2>
								<span>bulding, house</span>
								
								<a href="upload/projects/5.jpg" class="zoom"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="project-post energy isolation">
						<img src="upload/projects/7.jpg" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<h2>traditional Building</h2>
								<span>bulding, house</span>
								
								<a href="upload/projects/7.jpg" class="zoom"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="project-post interior buildings">
						<img src="upload/projects/8.jpg" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<h2>traditional Building</h2>
								<span>bulding, house</span>
								
								<a href="upload/projects/8.jpg" class="zoom"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="project-post energy isolation buildings">
						<img src="upload/projects/10.jpg" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<h2>traditional Building</h2>
								<span>bulding, house</span>
								
								<a href="upload/projects/10.jpg" class="zoom"><i class="fa fa-arrows-alt"></i></a>
							</div>
						</div>
					</div>
					
					<?php
					}
					?>
					
					
					
				</div>
			</div>
		</section>

		
		
		<footer>
			
			<p class="copyright">
				 Developed by - <a href="http://accreteitech.com/" target="_blank"> Accrete Infotech </a>
			</p>
		</footer>
		
		
		
	</div>
	
	
	
	<script type="text/javascript">

		jQuery(document).ready(function() {
						
			jQuery('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:10000,
				startwidth:1140,
				startheight:550,
				hideThumbs:200,
				
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				
				navigationType:"bullet",
				
				touchenabled:"on",
				onHoverStop:"off",
				
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
										
										parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
										
				keyboardNavigation:"off",
				
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:"center",
						
				shadow:0,

				spinner:"spinner4",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",
				
				autoHeight:"off",						
				forceFullWidth:"off",						
										
										
										
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,						
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffsetContainer: ".header"	
			});
							
		});	//ready

		//isotope
		jQuery(document).ready(function() {
			var $container = $('.iso-call');
			// init
			$container.isotope({
				// options
				itemSelector: '.services-project, .project-post',
				masonry: {
				    columnWidth: '.default-size'
				}
			});	
		});	//ready
	</script>
</body>

</html>