<?php

//$employeeid=$_GET['employee_id'];
include('../mp_connect.php');
if (isset($_REQUEST['id']))
{
$employeeid=$_REQUEST['eid'];
$id1=$_GET['id'];


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
	$employeeid=0;
	$reg="select * from mp_registration where employee_id='$employeeid'";
$data=mysqli_query($con,$reg);
$rec=mysqli_fetch_array($data);


}


?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from rivathemes.net/html/magnis/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 06:54:08 GMT -->
<head>
<title><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo $rec['firstname']."&nbsp"; echo $rec['lastname']; } ?></title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Euphoria+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" media="screen" href="assets-newsletters/css/quick_newsletter.css"> 
<link rel="stylesheet" type="text/css" href="css/tango/skin.css" />
<link rel="stylesheet" href="css/colorbox.css" />
<link rel="stylesheet" href="css/layerslider/layerslider.css" />
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/responsive.css" />
<link rel="stylesheet" href="css/color-01.css" id="site-color" />
<!--[if IE]>
<link rel="stylesheet" href="./css/ie-style.css" />
<![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>


<body>

<!-- header start //-->
<div class="container">
	<div class="row">
		<div class="span5">
        	<!-- site logo	//-->
        	<a href="#"><div class="site-logo"><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo $rec['firstname']."&nbsp"; echo $rec['lastname']; } ?></div></a>
            <!-- site description //-->
            
        </div>
        <div class="span7">
        	<!-- header social buttons //-->
        	<div class="header-social-buttons">
            	<a href="#"><i class="icon-facebook"></i></a>
            	<a href="#"><i class="icon-twitter"></i></a>
            	<a href="#"><i class="icon-rss"></i></a>
            </div>
            <!-- header contacts //-->
            
            <!-- site desktop menu start //-->
            <nav class="site-desktop-menu">
            	<ul>
                	<?php 
					if (isset($_REQUEST['eid']))
					{  ?>
                	<li>
                    	<a href="index.php?eid=<?php echo $_REQUEST['eid']; ?>">home</a>
                       
                    </li>
                	<li>
                    	<a href="portfolio.php?eid=<?php echo $_REQUEST['eid']; ?>">Portfolio</a>
                        
					</li>
                	<li><a href="contactus.php?eid=<?php echo $_REQUEST['eid']; ?>">Contactus</a>
                    	
                    </li>
                    <?php } else { ?>
						
					<li>
                    	<a href="index.php">home</a>
                       
                    </li>
                	<li>
                    	<a href="portfolio.php">Portfolio</a>
                        
					</li>
                	<li><a href="contactus.php">Contactus</a>
                    	
                    </li>	
						
					<?php } ?>
                </ul>
</nav>
            <!-- site desktop menu end //-->
            <!-- site desktop menu start //-->
            <nav class="site-mobile-menu">
            	<i class="icon-reorder"></i>
            	<ul>
                	<?php 
					if (isset($_REQUEST['eid']))
					{  ?>
                	<li>
                    	<a href="index.php?eid=<?php echo $_REQUEST['eid']; ?>">home</a>
                       
                    </li>
                	<li>
                    	<a href="portfolio.php?eid=<?php echo $_REQUEST['eid']; ?>">Portfolio</a>
                        
					</li>
                	<li><a href="contactus.php?eid=<?php echo $_REQUEST['eid']; ?>">Contactus</a>
                    	
                    </li>
                    <?php } else { ?>
						
					<li>
                    	<a href="index.php">home</a>
                       
                    </li>
                	<li>
                    	<a href="portfolio.php">Portfolio</a>
                        
					</li>
                	<li><a href="contactus.php">Contactus</a>
                    	
                    </li>	
						
					<?php } ?>
                </ul>
</nav>
            <!-- site desktop menu end //-->
        </div>
    </div>
</div>
<div class="gray-line"></div>

<!-- header end //-->

    <!-- slider start #1 //-->
		<div id="layerslider-container-fw" class="home-slider">
			
			<div id="layerslider" style="width: 100%; height: 550px; margin: 0px auto; ">
			<?php if($employeeid == " ") { ?>	
				<div class="ls-layer" style="slidedirection: right; transition2d: 24,25,27,28; ">

					<img src="images/layerslider/slide-1-bg.jpg" class="ls-bg" alt="Slide background">
				</div>

				<div class="ls-layer" style="slidedirection: right; transition2d: 110,111,112,113; ">

					<img src="images/layerslider/slide-2-bg.jpg" class="ls-bg" alt="Slide background">
				</div>

				<div class="ls-layer" style="slidedirection: right; transition2d: 92,93,105; ">

					<img src="images/layerslider/slide-3-bg.jpg" class="ls-bg" alt="Slide background">

				</div>
			<?php } else { 
			
			while ($rec2=mysqli_fetch_array($data2)) {  ?>
				<div class="ls-layer" style="slidedirection: right; transition2d: 24,25,27,28; ">

					<img src="../../mp_portfolio/portfolio_image/<?php echo $rec['email_id']; ?>/portfolio_subimage/<?php echo $rec2['portfolio_image_url']; ?>" class="ls-bg" alt="Slide background">
				</div>
				
				
			<?php } } ?>
			</div>
						
		</div>
     <!-- slider end #1 //-->

	 <?php if($employeeid == " ") { ?>
	 
		 <div class="span12">
	 <br><h2>PHP</h2><br>
					<h2><b>Date:</b>  &nbsp6/6/2016</h2><br>
	<br><h2>Description:</h2><br>
				<div class="main-content-block" style="margin-bottom:30px; margin-top:-20px;">
                	<p class="page-intro">Suspendisse a odio congue, condimentum leo a, suscipit justo. Nulla non laoreet augue, vel vestibulum dolor.</p>
                    <p>enean vitae nisi pharetra, condimentum arcu id, condimentum lectus. Donec velit diam, pellentesque a convallis nec, ullamcorper sit amet tortor. Pellentesque eros dolor, hendrerit semper nisi eu, lobortis tincidunt sem.</p>
                </div>
				
		</div>
		
	 <?php } else { ?>
	 
	 <div class="span12">
	 <br><h2><?php echo $rec1['portfolio_title']; ?></h2><br>
					<h2><b>Date:</b>  &nbsp<?php echo $rec1['portfolio_date']; ?></h2><br>
	<br><h2>Description:</h2><br>
				<div class="main-content-block" style="margin-bottom:30px; margin-top:-20px;">
                	
                    <p><?php echo $rec1['portfolio_description']; ?></p>
                </div>
				
		</div>
		 
	 <?php } ?>

<!-- bottom line start //-->
<div class="bottom-line">
	<div class="container">
    	<div class="row">
        	<div class="span12">
				<center><p>My Profile © 2016 All rights reserved.</p></center>
            </div>
        </div>
    </div>
</div>
<!-- bottom line end //-->

<!-- to the top start //-->
<div id="to-the-top"><i class="icon-angle-up"></i></div>
<!-- to the top end //-->


</body>
<!-- scripts start //-->
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/layerslider.transitions.js"></script>
<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="js/jquery-transit-modified.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="assets-newsletters/scripts/quick_newsletter.js"></script> 
<script src="js/jquery.colorbox.js"></script>
<script src="js/custom.js"></script>
<script>
jQuery(document).ready(function() {
});
</script>
<!-- scripts end //-->


<!-- Mirrored from rivathemes.net/html/magnis/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 06:56:08 GMT -->
</html>