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
<html lang="en">

<!-- Mirrored from premiumlayers.com/demos/construction/projects3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo $rec['firstname']."&nbsp"; echo $rec['lastname']; } ?></title>
    
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">    
    <link rel="stylesheet" type="text/css" href="vendors/rs-plugin/css/settings.css" media="screen" />
    
    <link rel="stylesheet" type="text/css" href="vendors/lightbox/css/lightbox.css" media="screen" />
    
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <!--Construction Styles-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="pageloader" class="row m0">
        <div class="loader-item"><img src="images/loader.gif" alt="loading"></div>
    </div>   
    <section id="nr_topStrip" class="row">
        <div class="container">
            <div class="row">
                <ul class="list-inline c-info fleft">
                    <li><a href="mailto:info@domain.com"><i class="fa fa-envelope-o"></i><?php if ($employeeid == " ") { echo "info@domain.com"; } else { echo $rec['email_id']; } ?></a></li>
                </ul>
                
            </div>
        </div>
    </section> <!--Top Strip-->
    
    <header class="row">
        <div class="container">
            <div class="row">
                <div class="logo col-sm-6">
                    <div class="row">
                        <a href="index.php" style="text-decoration:none; color:white;"><div class="caption sfr str"  
                           data-x="center" 
                           data-y="140" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h2><?php if ($employeeid == " ") { echo "Mitesh"."<strong>"."Tagadiya"."</strong>"; } else { echo $rec['firstname']."&nbsp"; echo "<strong>".$rec['lastname']."</strong>"; } ?></h2>
                       </div></a>
                    </div>
                </div>
                <div class="social_nav col-sm-6">
                    <div class="row">
                        <ul class="list-inline fright">
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header> <!--Header-->
    
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid container">
            <div class="row m04m">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav">
                        <span class="bars">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                        <span class="btn-text">Select Page</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
					
                       <?php 
					if (isset($_REQUEST['eid']))
					{  ?>
					<li class="active "><a href="index.php?eid=<?php echo $_REQUEST['eid']; ?>">Home</a></li>
                        
                        <li class=" dropdown">
                            <a href="./portfolio.php?eid=<?php echo $_REQUEST['eid']; ?>">Portfolio</a>
                            
                        </li>
                      
                        <li class=" dropdown">
                            <a href="contactus.php?eid=<?php echo $_REQUEST['eid']; ?>">contact</a>
                            
                        </li>
					<?php }
else 
{ ?>
				<li class="active "><a href="index.php">Home</a></li>
                        
                        <li class=" dropdown">
                            <a href="./portfolio.php">Portfolio</a>
                            
                        </li>
                      
                        <li class=" dropdown">
                            <a href="contactus.php">contact</a>
                            
                        </li>

<?php } 	?>
                    </ul>
                </div>
            </div>
        </div>
    </nav> <!--Main Nav-->
    
    <section id="pageCover" class="row projectPage">
        
        <div class="row pageTitle">Portfolio</div>
        <div class="row pageBreadcrumbs">
            
        </div>
    </section>
    
    <section id="projects" class="row fullWidth col3 page">        
        <div class="container">
            <div class="row">
        <div class="row filters m0">
            <button type="button" class="collapsed project_filderButton visible-xs" data-toggle="collapse" data-target="#filters">
                <span class="btn-text"><i class="fa fa-filter"></i> Project Filter</span>
            </button>
            
        </div>
                <div class="row projects m0 js-masonry" data-masonry-options='{ "columnWidth": 200, "itemSelector": ".project" }'>
					<?php if ($employeeid == " ") 
				  { ?>	

				   <div class="project mix catHouses">
                        <a href="portfolioimg.php">
                            <img src="images/projects/project1.png" alt="Project 1" class="projectImg">
                        </a>
                        <div class="projectDetails row m0">
                            <div class="fleft nameType">
                                <div class="row m0 projectName">Central Hospital</div>
                                <div class="row m0 projectType">building</div>
                            </div>
                            <div class="fright projectIcons btn-group" role="group">
                                <a href="portfolioimg.php" class="btn btn-default"><i class="fa fa-search"></i></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="project mix catHospital">
                        <a href="portfolioimg.php">
                            <img src="images/projects/project2.png" alt="Project 1" class="projectImg">
                        </a>
                        <div class="projectDetails row m0">
                            <div class="fleft nameType">
                                <div class="row m0 projectName">Construction CEO</div>
                                <div class="row m0 projectType">ceo, architect</div>
                            </div>
                            <div class="fright projectIcons btn-group" role="group">
                                <a href="portfolioimg.php" class="btn btn-default"><i class="fa fa-search"></i></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="project mix catFlats">
                        <a href="portfolioimg.php">
                            <img src="images/projects/project3.png" alt="Project 1" class="projectImg">
                        </a>
                        <div class="projectDetails row m0">
                            <div class="fleft nameType">
                                <div class="row m0 projectName">Workder Accessories</div>
                                <div class="row m0 projectType">tools, accessories</div>
                            </div>
                            <div class="fright projectIcons btn-group" role="group">
                                <a href="portfolioimg.php" class="btn btn-default"><i class="fa fa-search"></i></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="project mix catSchools">
						<a href="portfolioimg.php">
					<img src="images/projects/project4.png" alt="Project 1" class="projectImg">
                        </a>
                        <div class="projectDetails row m0">
                            <div class="fleft nameType">
                                <div class="row m0 projectName">Rebuilding an old University</div>
                                <div class="row m0 projectType">university, building</div>
                            </div>
                            <div class="fright projectIcons btn-group" role="group">
                                <a href="portfolioimg.php" class="btn btn-default"><i class="fa fa-search"></i></a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="project mix catUniversities">
                        <a href="portfolioimg.php">
                            <img src="images/projects/project5.png" alt="Project 1" class="projectImg">
                        </a>
                        <div class="projectDetails row m0">
                            <div class="fleft nameType">
                                <div class="row m0 projectName">Construction Tools</div>
                                <div class="row m0 projectType">tools, assets</div>
                            </div>
                            <div class="fright projectIcons btn-group" role="group">
                                <a href="portfolioimg.php" class="btn btn-default"><i class="fa fa-search"></i></a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="project mix catOffices">
                        <a href="portfolioimg.php">
                            <img src="images/projects/project6.png" alt="Project 1" class="projectImg">
                        </a>
                        <div class="projectDetails row m0">
                            <div class="fleft nameType">
                                <div class="row m0 projectName">Big Trucks on Action</div>
                                <div class="row m0 projectType">cat, building</div>
                            </div>
                            <div class="fright projectIcons btn-group" role="group">
                                <a href="portfolioimg.php" class="btn btn-default"><i class="fa fa-search"></i></a>
                               
                            </div>
                        </div>
                    </div>
					
				  <?php } else { 
				  
					while($rec1=mysqli_fetch_array($data1)) { ?>
				  
					<div class="project mix catOffices">
                        <a href="portfolioimg.php?id=<?php echo $rec1['portfolio_id']; ?>&eid=<?php echo $employeeid; ?>">
                            <img src="../../mp_portfolio/portfolio_image/<?php echo $rec['email_id']; ?>/<?php echo $rec1['portfolio_main_image']; ?>" alt="" class="projectImg" height="250px">
                        </a>
                        <div class="projectDetails row m0">
                            <div class="fleft nameType">
                                <div class="row m0 projectName"><?php echo $rec1['portfolio_title']; ?></div>
                            </div>
                            <div class="fright projectIcons btn-group" role="group">
                                <a href="portfolioimg.php?id=<?php echo $rec1['portfolio_id']; ?>&eid=<?php echo $employeeid; ?>" class="btn btn-default"><i class="fa fa-search"></i></a>
                               
                            </div>
                        </div>
                    </div>
				  
				  <?php } } ?>
                </div>  
               
            </div>
        </div>
    </section> <!--Projects-->    
    
    <footer id="nr_footer" class="row">
        <div class="container">
            <div class="row goTop">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </div>
           
           
            <div class="row copyrightRow">
                &copy; 2016 <a href="#">My Profile</a>, All Rights Reserved
            </div>
        </div>
    </footer>
    
    
    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    <script src="vendors/mixitup/jquery.mixitup.js"></script>
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/projects3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:51 GMT -->
</html>