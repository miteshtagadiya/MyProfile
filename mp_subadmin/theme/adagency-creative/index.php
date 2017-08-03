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

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from rivathemes.net/html/adagency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 07:12:22 GMT -->
<head>
<title><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo $rec['firstname']."&nbsp"; echo $rec['lastname']; } ?></title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/color-01.css" id="site-color"/>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/colorbox.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/responsive.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" media="screen" href="assets-newsletters/css/quick_newsletter.css"> 

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
                	<h1>Home</h1>
                </div>
               
            </div>
        </div>
	</div>
                </div>
               
            </div>
        </div>
	</div>
	
	
  
</div>

<!-- main content start	//-->
<div class="container main-content">

            	<div class="row">
				<div class="span4">
				</div>
					<div class="span4 project project web design portfolio-item">
                        <?php if ($employeeid == " ") { echo "<img src='images/projects/portfolio/3c/1.jpg' alt='Project 1'>"; } else { ?> <img src="../../profile/profile/<?php echo $rec1['profile_url']; ?>" alt="Display your profile image"> <?php } ?>
						
						<center><h1 style="margin-top:10px;"><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo $rec['firstname']."&nbsp"; echo $rec['lastname']; } ?></h1></center>
                    </div>
					
				</div>
</div>

				
		<div class="span12">
			<!-- skills block header	//-->
            <div class="block-header-bg">
            	<h2 class="block-header">our skills</h2>
			</div>
		</div>
		<div class="span3">
		</div>
		
		<div class="span6">
           	<div class="block-content">
				<?php 
									if($employeeid == " ")
									{  ?>
				<!-- skills item 1	//-->
                <section class="skill">
                	<p>html</p>
                    <span data-skill="50%"></span>
                </section>
				<!-- skills item 2	//-->
                <section class="skill">
                	<p>css</p>
                    <span data-skill="80%"></span>
                </section>
				<!-- skills item 3	//-->
                <section class="skill">
                	<p>design</p>
                    <span data-skill="85%"></span>
                </section>
				<!-- skills item 4	//-->
                <section class="skill">
                	<p>wordpress</p>
                    <span data-skill="70%"></span>
                </section>
				<!-- skills item 5	//-->
                <section class="skill">
                	<p>support</p>
                    <span data-skill="85%"></span>
                </section>
				<?php	} else { 
				
				while($rec2=mysqli_fetch_array($data2)){
				?>
				<section class="skill">
                	<p><?php echo $rec2['skill_name']; ?></p>
                    <span data-skill="<?php echo $rec2['skill_capicity']."%"; ?>"></span>
                </section>
				<?php 
				}
				}
				?>
				
			</div>
		</div>

	<div class="span12">
		<div class="single-project">
			
                <div class="block-header-bg">
                    <h2 class="block-header">Education</h2>
                </div>
				<?php if($employeeid == " ")
									{  ?>
                <div class="single-project-details">
                	<ul>
                    	<li><span>Degree:</span> "Quisque quam enim"</li>
                    	<li><span>Year:</span> John Doe</li>
                    	<li><span>Percentage:</span> 12 Jul, 2012</li>
                    	<li><span>Place:</span> Praesent dictum lorem condimentum, rutrum sem eu, placerat nulla. Phasellus at nibh nulla. Nullam congue massa ipsum, in suscipit metus lobortis faucibus.</li>
						<li><span>Institute:</span> vnsgu</li>
                    </ul>
                </div>
                
				<div class="single-project-details">
                	<ul>
                    	<li><span>Degree:</span> "Quisque quam enim"</li>
                    	<li><span>Year:</span> John Doe</li>
                    	<li><span>Percentage:</span> 12 Jul, 2012</li>
                    	<li><span>Place:</span> Praesent dictum lorem condimentum, rutrum sem eu, placerat nulla. Phasellus at nibh nulla. Nullam congue massa ipsum, in suscipit metus lobortis faucibus.</li>
						<li><span>Institute:</span> vnsgu</li>
                    </ul>
                </div>
				
				<div class="single-project-details">
                	<ul>
                    	<li><span>Degree:</span> "Quisque quam enim"</li>
                    	<li><span>Year:</span> John Doe</li>
                    	<li><span>Percentage:</span> 12 Jul, 2012</li>
                    	<li><span>Place:</span> Praesent dictum lorem condimentum, rutrum sem eu, placerat nulla. Phasellus at nibh nulla. Nullam congue massa ipsum, in suscipit metus lobortis faucibus.</li>
						<li><span>Institute:</span> vnsgu</li>
                    </ul>
                </div>
									<?php	} else {
				while($rec3=mysqli_fetch_array($data3)){
				?>
				<div class="single-project-details">
                	<ul>
                    	<li><span>Degree:</span> <?php echo $rec3['education_type'] ?></li>
                    	<li><span>Year:</span> <?php echo $rec3['education_year']; ?></li>
                    	<li><span>Percentage:</span> <?php echo $rec3['education_percentage']; ?></li>
                    	<li><span>Place:</span> <?php echo $rec3['education_place']; ?></li>
						<li><span>Institute:</span> <?php echo $rec3['education_institute']; ?></li>
                    </ul>
                </div>
									<?php }	}
									?>
            </div>
	</div>
		

		
		
<footer class="site-footer">

    
	<!-- footer copyright start	//-->
    <div class="pattern-bg">
    	<div class="container">
        	<div class="row">
            	<div class="span12">
                	<center><p class="copyright">Copyright © 2016 <a href="index.html">My Profile</a>. All rights reserved. <i class="icon-arrow-up" id="to-the-top"></i></p></center>
                </div>
            </div>
        </div>
    </div>
	<!-- footer copyright end	//-->

</footer>
<!-- site footer end	//-->



</body>

<!-- Mirrored from rivathemes.net/html/adagency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 07:14:25 GMT -->
</html>