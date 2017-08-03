<?php

//$employeeid=$_GET['employee_id'];
include('../mp_connect.php');
if (isset($_REQUEST['id']))
{
$employeeid=$_REQUEST['eid'];

$id1=$_REQUEST['id'];;

$reg="select * from mp_registration where employee_id='$employeeid'";
$data=mysqli_query($con,$reg);
$rec=mysqli_fetch_array($data);

$portfolio="select * from mp_portfolio where portfolio_id='$id1'";
$data1=mysqli_query($con,$portfolio);
$rec1=mysqli_fetch_array($data1);

$portimg="select * from mp_portfolio_image where portfolio_id='$id1'";
$data2=mysqli_query($con,$portimg);
}
else
{
	$employeeid="";
}
?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from rivathemes.net/html/adagency/blog-article.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 07:21:35 GMT -->
<head>
<title>My Profile</title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/color-01.css" id="site-color"/>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/responsive.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" media="screen" href="assets-newsletters/css/quick_newsletter.css"> 
<link rel="stylesheet" href="css/colorbox.css" />

<link href="css/tango/skin.css" rel="stylesheet" type="text/css" />

<!-- LayerSlider styles -->
<link rel="stylesheet" href="css/layerslider/layerslider.css" type="text/css">

<script src="js/jquery.js"></script>
<script type="text/javascript" src="assets-newsletters/scripts/quick_newsletter.js"></script> 

<script src="js/html5.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
 <script src="js/jquery.colorbox.js"></script>

<!-- jQuery with jQuery Easing, and jQuery Transit JS -->
<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="js/jquery-transit-modified.js" type="text/javascript"></script>
 
<!-- LayerSlider from Kreatura Media with Transitions -->
<script src="js/layerslider.transitions.js" type="text/javascript"></script>
<script src="js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

<script src="js/custom.js"></script>
<!--[if IE]>
<link rel="stylesheet" href="./css/ie-style.css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" href="./css/ie-8-style.css" />
<![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- pattern background start //-->
<div class="pattern-bg">
	
	<!-- contact phone start //-->
    <div class="container">
		<div class="row">
			<div class="span12">
				<div class="top-bar-item">Call us: <span><?php if ($employeeid == " ") { echo "+1 234 56 78"; } else { echo "+91".$rec['mobile_no']; } ?></span></div>
				<div class="top-bar-item hidden-phone hidden-tablet">Email us: <span><?php if ($employeeid == " ") { echo "example@mail.com"; } else { echo $rec['email_id']; } ?></span></div>
			</div>
		</div>
	</div>
	<!-- contact phone end //-->
    
	<!-- site menu start //-->
    <div class="site-menu-bg">
    	
        <div class="container">
			<div class="row">
            
				<!-- site logo start	//-->
                <div class="span4">
                    <div class="logo"><a href="index.php?eid=<?php echo $_REQUEST['eid']; ?>"><?php if ($employeeid == " ") { echo "<span>Mitesh</span> Tagadiya"; } else { echo "<span>".$rec['firstname']."&nbsp"."</span>"; echo $rec['lastname']; } ?>
     </a></div>
		        </div>
				<!-- site logo end	//-->
                
				<!-- navigation start	//-->
				<div class="span8">
					<!-- desktop navigation start	//-->
                    <nav class="desktop-nav">
                        <ul>
                            <li>
                                <a href="index.php?eid=<?php echo $_REQUEST['eid']; ?>">home</a>
                               
                            </li>
                           
                           
                            <li>
                                <a href="portfolio.php?eid=<?php echo $_REQUEST['eid']; ?>">Portfolio</a>
                              
				
                            </li>
                            
                            <li><a href="contactus.php?eid=<?php echo $_REQUEST['eid']; ?>">contacts</a></li>
                        </ul>
                    </nav>
					<!-- desktop navigation end	//-->
                    
                    <!-- mobile navigation start //-->
                    <nav class="mobile-nav">
                    	<i class="icon-align-justify"></i>
                        <ul>
                            <li>
                                <a href="index.php?eid=<?php echo $_REQUEST['eid']; ?>">home</a>
                               
                            </li>
                            
                            <li>
                                <a href="portfolio.php?eid=<?php echo $_REQUEST['eid']; ?>">Portfolio</a>
                            </li>
                            
                            <li><a href="contactus.php?eid=<?php echo $_REQUEST['eid']; ?>">contacts</a></li>
                        </ul>
   		      </nav>
                    <!-- mobile navigation end //-->
                </div>
				<!-- navigation end	//-->
                
            </div>
        </div>
        
    </div>
	<!-- site menu end //-->
	
	
	<div class="page-title">
        <div class="container">
        	<div class="row">
                <div class="span6">
                	<div class="page-title">
        <div class="container">
        	<div class="row">
                <div class="span6">
                	<h1>Portfolio Image</h1>
                </div>
               
            </div>
        </div>
	</div>
                </div>
               
            </div>
        </div>
	</div>
	
	
  
</div>
<!-- pattern background end //-->

<!-- main content start	//-->
<div class="container main-content">

	<!-- main content row start	//-->
    <div class="row">
    	
        <!-- blog start	//-->
        <div class="span12 blog-single">
        
        
            <article class="blog-article-wrapper">
                <div class="single-portfolio-images">
					<ul class="slides">
					<?php if($employeeid == " ") { ?>
						<li><a href="#"><figure><img src="images/blog/2.jpg" alt="Blog Article 1"></figure></a></li>
						<li><a href="#"><figure><img src="images/blog/6.jpg" alt="Blog Article 1"></figure></a></li>
						<li><a href="#"><figure><img src="images/blog/7.jpg" alt="Blog Article 1"></figure></a></li>
						<li><a href="#"><figure><img src="images/blog/7.jpg" alt="Blog Article 1"></figure></a></li>
						<li><a href="#"><figure><img src="images/blog/7.jpg" alt="Blog Article 1"></figure></a></li>
						<li><a href="#"><figure><img src="images/blog/7.jpg" alt="Blog Article 1"></figure></a></li>
						<li><a href="#"><figure><img src="images/blog/7.jpg" alt="Blog Article 1"></figure></a></li>
						<li><a href="#"><figure><img src="images/blog/7.jpg" alt="Blog Article 1"></figure></a></li>
					<?php } 
					else 
					{
						while ($rec2=mysqli_fetch_array($data2)) {
						?>
							<li><a href="#"><figure><img src="../../mp_portfolio/portfolio_image/<?php echo $rec['email_id']; ?>/portfolio_subimage/<?php echo $rec2['portfolio_image_url']; ?>" alt="Blog Article 1"></figure></a></li>
					
						<?php } 
					}
					?>
					</ul>
				</div>
               <div class="blog-article">
			   <?php if($employeeid == " ") { ?>
	 
                    <h3>PHP</h3>
					<h3>Date:</h3>
					<h3>Description:</h3>
					<p>A PHP developer is responsible for writing server-side web application logic. PHP developers usually develop back-end components, connect the application with the other (often third-party) web services, and support the front-end developers by integrating their work with the application. They are also often required to develop and integrate plugins for certain popular frameworks.

Writing a good job description and advertisement for a PHP developer requires attention to detail. When you are looking for an advanced PHP web developer, posting a generic web developer description in your job ad will bring numerous applications from people who may have little knowledge about good programming practices.

PHP is a difficult language to tame, and puts a greater than usual burden on the developer to ensure the application’s stability and performance. This article will provide you with a sample PHP developer job description that will help you write a perfect job ad, and assure that you easily find and hire the person that matches your specific criteria.</p>
             <?php } else { ?>
			        <h3><?php echo $rec1['portfolio_title']; ?></h3>
					<h3>Date:&nbsp<?php echo $rec1['portfolio_date']; ?> </h3>
					<h3>Description:</h3>
					<?php echo $rec1['portfolio_description']; ?>
			 <?php } ?> 
				</div>
            </article>
        	<!-- single blog article content end //-->

        
            
       </div>
        <!-- blog end	//-->
    	
    	<!-- sidebar start	//-->
      
    
 	</div>
	<!-- main content row end	//-->

</div>
<!-- main content end	//-->

<!-- site footer start	//-->

<!-- site footer start	//-->
<footer class="site-footer">

	<!-- footer widgets start	//-->
    <div class="container">
        <div class="row">
        
  			<!-- footer about widget start	//-->
			
            </div>
  			<!-- footer about widget start	//-->
            
  			
            
  			<!-- footer newsletters widget start	//-->
            
        </div>
    </div>
	<!-- footer widgets end	//-->
    
	<!-- footer copyright start	//-->
    <div class="pattern-bg">
    	<div class="container">
        	<div class="row">
            	<div class="span12">
                	<center><p class="copyright">Copyright © 2016 <a href="index.php">My Profile</a>. All rights reserved. <i class="icon-arrow-up" id="to-the-top"></i></p></center>
                </div>
            </div>
        </div>
    </div>
	<!-- footer copyright end	//-->

</footer>
<!-- site footer end	//-->



</body>

<!-- Mirrored from rivathemes.net/html/adagency/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 07:14:25 GMT -->
</html>