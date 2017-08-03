<!DOCTYPE html>
<?php
include('../../mp_connect.php');
		session_start();
		$eid=$_SESSION['employee_id'];	
		$emailid=$_SESSION['email_id'];
		$fname=$_SESSION['user_firstname'];
		$lname=$_SESSION['user_lastname'];
	$sql="select * from mp_registration where employee_id='$eid'";
	$result=mysqli_query($con,$sql);
	$emp_reg=mysqli_fetch_array($result);
	
?>
<html lang="en">

<!-- Mirrored from premiumlayers.com/demos/construction/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:29:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $fname.' '.$lname; ?></title>
    
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
                    <li><a href="tel:123456789012"><i class="fa fa-phone"></i> 1234-5678-9012</a></li>
                    <li><a href="mailto:info@domain.com"><i class="fa fa-envelope-o"></i> info@domain.com</a></li>
                </ul>
               
            </div>
        </div>
    </section> <!--Top Strip-->
    
    <header class="row">
        <div class="container">
            <div class="row">
                <div class="logo col-sm-6">
                    <div class="row">
                        <a href="index.html" style="text-decoration:none; color:white;"><div class="caption sfr str"  
                           data-x="center" 
                           data-y="140" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h2><?php echo ucwords($fname); ?>  <strong><?php echo ucwords($lname);?></strong></h2>
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
    
