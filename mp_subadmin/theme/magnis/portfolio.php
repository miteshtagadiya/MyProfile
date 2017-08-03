<?php

//$employeeid=$_GET['employee_id'];
include('../mp_connect.php');
if (isset($_REQUEST['eid']))
{
$employeeid=$_REQUEST['eid'];
}
else
{
	$employeeid=0;
}



$reg="select * from mp_registration where employee_id='$employeeid'";
$data=mysqli_query($con,$reg);
$rec=mysqli_fetch_array($data);


$portfolio="select * from mp_portfolio where employee_id='$employeeid'";
$data1=mysqli_query($con,$portfolio);

?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from rivathemes.net/html/magnis/portfolio-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 06:58:51 GMT -->
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

<!-- page header start //-->
<div class="page-header pattern-bg">
	<div class="container">
    	<div class="row">
        	<div class="span6">
            	<h2>Portfolio</h2>
            </div>
            
        </div>
    </div>
</div>
<!-- page header end //-->

<!-- main content start //-->
<div class="main-content">
	<div class="container">
    	<div class="row">
        	<div class="span12">
            
            <div class="main-content-block">
                
                <div id="portfolio-list" class="portfolio-3-columns">
                
                    <!-- sorting filters //-->
                  <?php if ($employeeid == " ") 
				  { ?>
						<!-- project item //-->
                    <div class="project-item sort-item web css">
						<div class="project-details">
							<p class="project-title"><a href="portfolio-image.php">PHP</a></p>
							<div class="buttons">
								<a href="portfolio-image.php"><i class="icon-link"></i></a>
								
							</div>
						</div>
						<img src="images/pages/project-1-1.jpg" alt="">
                    </div>
                    
                    <!-- project item //-->
                    <div class="project-item sort-item html">
					  <div class="project-details">
							<p class="project-title"><a href="portfolio-image.php">PHP</a></p>
							
							<div class="buttons">
								<a href="portfolio-image.php"><i class="icon-link"></i></a>
								
							</div>
						</div>
						<img src="images/pages/project-2-1.jpg" alt="">
                    </div>
                    
                    <!-- project item //-->
                    <div class="project-item sort-item design css">
					  <div class="project-details">
							<p class="project-title"><a href="portfolio-image.php">PHP</a></p>

							<div class="buttons">
								<a href="portfolio-image.php"><i class="icon-link"></i></a>
								
							</div>
						</div>
						<img src="images/pages/project-3-1.jpg" alt="">
                    </div>
                    
                    <!-- project item //-->
                    <div class="project-item sort-item markup">
					  <div class="project-details">
							<p class="project-title"><a href="portfolio-image.php">PHP</a></p>
							
							<div class="buttons">
								<a href="portfolio-image.php"><i class="icon-link"></i></a>
								
							</div>
						</div>
						<img src="images/pages/project-4-1.jpg" alt="">
                    </div>
                    
                    <!-- project item //-->
                    <div class="project-item sort-item">
					  <div class="project-details">
							<p class="project-title"><a href="portfolio-image.php">PHP</a></p>
							
							<div class="buttons">
								<a href="portfolio-image.php"><i class="icon-link"></i></a>
								
							</div>
						</div>
						<img src="images/pages/project-5-1.jpg" alt="">
                    </div>
                    
                    <!-- project item //-->
                    <div class="project-item sort-item wordpress html">
					  <div class="project-details">
							<p class="project-title"><a href="portfolio-image.php">PHP</a></p>
							
							<div class="buttons">
								<a href="portfolio-image.php"><i class="icon-link"></i></a>
					
							</div>
						</div>
						<img src="images/pages/project-6-1.jpg" alt="">
                    </div>
				<?php	}  else { 
					
					while($rec1=mysqli_fetch_array($data1)) { ?>  
					
						<div class="project-item sort-item wordpress html">
					  <div class="project-details">
							<p class="project-title"><a href="portfolio-image.php?id=<?php echo $rec1['portfolio_id']; ?>&eid=<?php echo $employeeid; ?>"><?php echo $rec1['portfolio_title']; ?></a></p>
							
							<div class="buttons">
								<a href="portfolio-image.php?id=<?php echo $rec1['portfolio_id']; ?>&eid=<?php echo $employeeid; ?>"><i class="icon-link"></i></a>
					
							</div>
						</div>
						<img src="../../mp_portfolio/portfolio_image/<?php echo $rec['email_id']; ?>/<?php echo $rec1['portfolio_main_image']; ?>" alt="">
                    </div>
                    
					<?php } }  ?>    
                </div>

        	</div>
            </div>
        </div>
    </div>
</div>
<!-- main content end //-->


<!-- bottom line start //-->
<div class="bottom-line">
	<div class="container">
    	<div class="row">
        	<div class="span6">
            	<p>My Profile © 2013 All rights reserved.</p>
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
	$('#portfolio-list').magnisSort({
		'showAll' : 1
	});
});
</script>
<!-- scripts end //-->


<!-- Mirrored from rivathemes.net/html/magnis/portfolio-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 06:58:51 GMT -->
</html>