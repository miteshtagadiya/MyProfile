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


$profile="select * from mp_profile where employee_id='$employeeid'";
$data1=mysqli_query($con,$profile);
$rec1=mysqli_fetch_array($data1);

$skill="select * from mp_skill where employee_id='$employeeid'";
$data2=mysqli_query($con,$skill);


$education="select * from mp_education where employee_id='$employeeid'";
$data3=mysqli_query($con,$education);
$rec3=mysqli_fetch_array($data3);

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
        	<div class="site-logo"><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo $rec['firstname']."&nbsp"; echo $rec['lastname']; } ?></div>
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

<div class="span4">
</div>



 <div class="row">
            <div class="span6">
				<div class="main-content-block">
					
				<div class="main-content-block-entry">
                    	<div class="row">
                        	<div class="span4">
                            	<div class="team-member team-member-first">
								<?php 	if (isset($_REQUEST['eid']))
					{  ?>
                                	<figure><img src="../../profile/profile/<?php echo $rec1['profile_url']; ?>" alt=""></figure>
					<?php } else { ?>
								<figure><img src="images/pages/team-1.jpg" alt=""></figure>	
					<?php } ?>
                                    <div class="soc-buttons">
                                    	<a href="#"><i class="icon-twitter"></i></a>
                                    	<a href="#"><i class="icon-facebook"></i></a>
                                    	<a href="#"><i class="icon-linkedin"></i></a>
                                    </div>
                                    <div class="desc">
                                    	<p class="name"><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo $rec['firstname']."&nbsp"; echo $rec['lastname']; } ?></p>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<div class="gray-line"></div>

<!-- header end //-->
<div class="span2">
</div>
<div class="span8">
            	<div class="main-content-block">
                	<h2 style="margin-left:45%;">skills</h2>
                            <div class="main-content-block-entry">
                            	
								<?php 
									if($employeeid == " ")
									{  ?>
								<div class="magnis-skills">
                                	<section>
                                    	<div class="skill-title">HTML</div>
                                        <div class="skill-value" data-skill-value="95"></div>
                                    </section>
                                	<section>
                                    	<div class="skill-title">CSS</div>
                                        <div class="skill-value" data-skill-value="91"></div>
                                    </section>
                                	<section>
                                    	<div class="skill-title">Design</div>
                                        <div class="skill-value" data-skill-value="97"></div>
                                    </section>
                                	<section>
                                    	<div class="skill-title">Mark Up</div>
                                        <div class="skill-value" data-skill-value="89"></div>
                                    </section>
                                	<section>
                                    	<div class="skill-title">WordPress</div>
                                        <div class="skill-value" data-skill-value="92"></div>
                                    </section>
                                </div>
								
								<?php	} else { 
								while ($rec2=mysqli_fetch_array($data2)) {?>
								
								
										<div class="magnis-skills">
											<section>
												<div class="skill-title"><?php echo $rec2['skill_name']; ?></div>
												<div class="skill-value" data-skill-value="<?php echo $rec2['skill_capicity']; ?>"></div>
											</section>
                                	
										</div>
								
								<?php } } ?>
                            </div>
				</div>
            </div>

			
			
	<div class="container">
    	<div class="row">
		<div class="span3">
		</div>
			<div class="span6">
            	
            	<div class="main-content-block">		
						<h2 style="margin-left:40%;">Education</h2>
					
					<?php 
						if($employeeid == " ") 
						{  ?>
								<div class="single-project-details">
						<h3><b>B.E.</b></h3><br>
                        <p><span>Year:</span> "Quisque Quam Enim"</p>
                        <p><span>Percentage:</span> John Doe</p>
                        <p><span>Place:</span> 12 Jul, 2012</p>
                        <p><span>Institute:</span> Praesent dictum lorem condimentum, rutrum sem.</p>
					</div>
					<div class="single-project-details">
						<h3><b>B.E.</b></h3><br>
                        <p><span>Year:</span> "Quisque Quam Enim"</p>
                        <p><span>Percentage:</span> John Doe</p>
                        <p><span>Place:</span> 12 Jul, 2012</p>
                        <p><span>Institute:</span> Praesent dictum lorem condimentum, rutrum sem.</p>
					</div>
					<div class="single-project-details">
						<h3><b>B.E.</b></h3><br>
                        <p><span>Year:</span> "Quisque Quam Enim"</p>
                        <p><span>Percentage:</span> John Doe</p>
                        <p><span>Place:</span> 12 Jul, 2012</p>
                        <p><span>Institute:</span> Praesent dictum lorem condimentum, rutrum sem.</p>
					</div>
					<?php	}  else {?>
					<div class="single-project-details">
						<h3><b><?php echo $rec3['education_type']; ?></b></h3><br>
                        <p><span>Year:</span><?php echo $rec3['education_year']; ?></p>
                        <p><span>Percentage:</span><?php echo $rec3['education_percentage']; ?></p>
                        <p><span>Place:</span><?php echo $rec3['education_place']; ?></p>
                        <p><span>Institute:</span><?php echo $rec3['education_institute']; ?></p>
					</div>
					<?php } ?>
                </div>
            </div>
         </div>
    </div>


<!-- bottom line start //-->
<div class="bottom-line">
	<div class="container">
    	<div class="row">
        	<div class="span6">
            	<p>My Profile © 2016 All rights reserved.</p>
            </div>
        	
        </div>
    </div>
</div>
<!-- bottom line end //-->

<!-- to the top start //-->
<div id="to-the-top"><i class="icon-angle-up"></i></div>
<!-- to the top end //-->

<!-- site settings start //-->

<!-- site settings end //-->

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