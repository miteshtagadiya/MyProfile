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
<html lang="en">

<!-- Mirrored from premiumlayers.com/demos/construction/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:29:42 GMT -->
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
    <link rel="stylesheet" type="text/css" href="vendors/js-flickr-gallery/css/js-flickr-gallery.css" media="screen" />
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
    
    
	 <section id="aboutus" class="row">
       			
			<div class="col-sm-4">
			</div>
			                <div class="col-sm-4 member3_1 member">
                                <div class="row m0" >
                                    <div class="row m0 memImg" >
								<?php 	if (isset($_REQUEST['eid']))
					{  ?>
                                        <img src="../../profile/profile/<?php echo $rec1['profile_url']; ?>" alt="">
										
					<?php } else { ?>
										<img src="images/team/mem3.png" alt="">
					<?php } ?>
                                    </div>
                                    <div class="row m0 memberIntro">
                                        <div class="row m0 name"><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo $rec['firstname']."&nbsp"; echo $rec['lastname']; } ?></div>
                                        
                                        <div class="row m0">
                                            <ul class="list-inline memberSocial">
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

		</section>
	
	
    <section id="nr_services" class="row">
        <div class="container">
            <div class="row sectionTitles">
                <h2 class="sectionTitle">Skill</h2>
                <div class="sectionSubTitle">what your proffetion</div>
            </div>
			
		   <div class="row m0 text-center col-sm-12">
		   <?php 
				if($employeeid == " ")
					{  ?>
		   
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                            
                            <div class="serviceName" style="margin-top:40%;" data-hover="PHP">PHP</div><br>
							<div class="serviceName" data-hover="70%">70%</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                           
                            <div class="serviceName" style="margin-top:40%;" data-hover="JAVA">JAVA</div><br>
							<div class="serviceName" data-hover="70%">70%</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                            
                            <div class="serviceName" style="margin-top:40%;" data-hover="Android">Android</div><br>
							<div class="serviceName" data-hover="70%">70%</div>
                        </div>
                    </div>
                </div>
				<div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                            
                            <div class="serviceName" style="margin-top:40%;" data-hover="JAVA">JAVA</div><br>
							<div class="serviceName" data-hover="70%">70%</div>
                        </div>
                    </div>
                </div>
					<?php } else {
							while($rec2=mysqli_fetch_array($data2)) {?>
						<div class="col-sm-3">
							<div class="row m0 service">
								<div class="row m0 innerRow">
                            
									<div class="serviceName" style="margin-top:40%;" data-hover="<?php echo $rec2['skill_name']; ?>"><?php echo $rec2['skill_name']; ?></div><br>
									<div class="serviceName" data-hover="<?php echo $rec2['skill_capicity']; ?>"><?php echo $rec2['skill_capicity']; ?></div>
							</div>
						</div>
                </div>
				
				
					<?php } } ?>
            </div>
			
        </div>
    </section> <!--Services-->
    

	
	 <section id="aboutus" class="row">
        <div class="container">
            <div class="row">
	
				<div class="row aboutContent">
                        <div class="row aboutUsTexts m0 member">
                            <div class="fleft textsPart">
                                <div class="row sectionTitles" style="margin-left:35%;">
								<h2 class="sectionTitle">Education</h2>
								<div class="sectionSubTitle">what your proffetion</div>
								</div>	
								
                                <!--<div class="textsPart" style="clear:both; margin-top:10px;">
                                        <h4><b>Degree:</b>&nbspBE </h4>
                                        <h4><b>Passing Year:</b>&nbsp2013-2016 </h4>
										<h4><b>Percentage:</b>&nbsp9.7 </h4>
										<h4><b>Place:</b>&nbspsurat </h4>
										<h4><b>Institute:</b>&nbspvnsgu </h4>
                                    </div>
									-->
						
									
					<div class="row m0 recentPostWidget widgetS" style="margin-left:36%;">
					<div class="col-sm-5">
					</div>
                        
                        <div class="row m0 recentblogs">
						<?php 
						if($employeeid == " ") 
						{  ?>
						
                            <div class="media recentblog">
                                
                                        <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBE </h4>
                                        <h4><b>Passing Year:</b>&nbsp2013-2016 </h4>
										<h4><b>Percentage:</b>&nbsp9.7 </h4>
										<h4><b>Place:</b>&nbspsurat </h4>
										<h4><b>Institute:</b>&nbspvnsgu </h4>
                                
                            </div>
						
                            <div class="media recentblog">
                                
                                   <center>     <h4>BE </h4></center>
                                        <h4><b>Passing Year:</b>&nbsp2013-2016 </h4>
										<h4><b>Percentage:</b>&nbsp9.7 </h4>
										<h4><b>Place:</b>&nbspsurat </h4>
										<h4><b>Institute:</b>&nbspvnsgu </h4>
                                
                            </div>
                            <div class="media recentblog">
                                
                                        <center><h4>BE </h4></center>
                                        <h4><b>Passing Year:</b>&nbsp2013-2016 </h4>
										<h4><b>Percentage:</b>&nbsp9.7 </h4>
										<h4><b>Place:</b>&nbspsurat </h4>
										<h4><b>Institute:</b>&nbspvnsgu </h4>
                                
                            </div>
							
						<?php }  else { ?>
							
							<div class="media recentblog">
                                
                                        <h4><?php echo $rec3['education_type']; ?></h4>
                                        <h4><b>Passing Year:</b>&nbsp&nbsp&nbsp<?php echo $rec3['education_year']; ?> </h4>
										<h4><b>Percentage:</b>&nbsp&nbsp&nbsp<?php echo $rec3['education_percentage']; ?> </h4>
										<h4><b>Place:</b>&nbsp&nbsp&nbsp<?php echo $rec3['education_place']; ?> </h4>
										<h4><b>Institute:</b>&nbsp&nbsp&nbsp<?php echo $rec3['education_institute']; ?> </h4>
                                
                            </div>
							
						<?php } ?>
                        </div>
                    </div>
								
                            </div>
							
                           
                        </div>
                        
                    </div>
				</div>
			</div>
		</section>
	
	
	
	
	
    
    
    
  
   
    
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
    <script src="vendors/masonary/masonry.pkgd.min.js"></script>
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:42 GMT -->
</html>