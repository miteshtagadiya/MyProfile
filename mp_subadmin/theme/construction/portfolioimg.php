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
<html lang="en">

<!-- Mirrored from premiumlayers.com/demos/construction/blog3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:51 GMT -->
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
     <section id="nr_slider" class="row">
        <div class="mainSliderContainer">
            <div class="mainSlider" >
                <ul>
				<?php if($employeeid == " ") { ?>	
                    <!-- SLIDE  -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide1.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="center" 
                           data-y="140" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h2><strong>PHP</strong></h2>
                       </div>
                       
                                              
                    </li>  
					
					<li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                       
                       </div>
                       
                    </li>
					
					<li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                       
                       </div>
                       
                    </li>
					
					<li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                       
                       </div>
                       
                    </li>
					<li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                       
                       </div>
                       
                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                       
                       </div>
                       
                    </li>  
                    <!-- SLIDE 3 -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide3.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                       
                       </div>
                       
                    </li>                          
					
					<li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                       
                       </div>
                       
                    </li>
				<?php } else  {
					
				while ($rec2=mysqli_fetch_array($data2)) {  ?>
				
					<li data-transition="boxslide" data-slotamount="7" >
                       <img src="../../mp_portfolio/portfolio_image/<?php echo $rec['email_id']; ?>/portfolio_subimage/<?php echo $rec2['portfolio_image_url']; ?>" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                       
                       </div>
                       
                    </li>
				
				<?php } } ?>
                </ul>
            </div>
        </div>
        
        <div class="container sliderAfterTriangle"></div> <!--Triangle After Slider-->
    </section> <!--Slider-->
    
	<section id="services" class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
	 <div class="row m0 whatOffer">
                            <div class="col-sm-12">
							 <?php if($employeeid == " ") { ?>
                                <div class="row m0 whatOfferInner">
                                    <h3><b>Project Name:</b> &nbsp&nbspPHP <br><br><b>Date:</b> &nbsp&nbsp6/6/2016<br><br><b>Description:</b></h3>
									
                                    <span>construction</span>  gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis set odio sit amet nibh vulputate cursus a sit amet mauris. <br>
Morbi accumsan ipsum velit. Nam ntec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum
                                </div>
								
							 <?php } else { ?>

							 <div class="row m0 whatOfferInner">
                                    <h3><b>Project Name:</b> &nbsp&nbsp<?php echo $rec1['portfolio_title']; ?> <br><br><b>Date:</b> &nbsp&nbsp<?php echo $rec1['portfolio_date']; ?><br><br><b>Description:</b></h3>
									<?php echo $rec1['portfolio_description']; ?>
                                      
                                </div>
							 
							 <?php } ?>
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
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/blog3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:51 GMT -->
</html>