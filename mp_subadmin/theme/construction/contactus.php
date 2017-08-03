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


$contact="select * from mp_contactus where employee_id='$employeeid'";
$data1=mysqli_query($con,$contact);
$rec1=mysqli_fetch_array($data1);

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from premiumlayers.com/demos/construction/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:52 GMT -->
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
    
    <section id="pageCover" class="row">
        <div class="row pageTitle">Contact us</div>
    </section>
    
    <section id="contacts" class="row">
        <div class="container">
            <div class="row">
                <div class="row m0">
                    <div class="col-sm-6">
                        <div class="row m0">
                            <h3>Get in touch!</h3>
							<?php if ($employeeid == " ") { ?>
                            <ul class="list-inline">
                                <li><i class="fa fa-home"></i> lorem ipsum street</li><br><br>
                                <li><i class="fa fa-phone"></i> +399 (500) 321 9548</li><br><br>
                                <li><i class="fa fa-envelope"></i> info@domain.com</li>
                            </ul>
							<?php } else { ?>
							<ul class="list-inline">
								<h3><?php echo $rec['firstname'].'&nbsp'; echo $rec['lastname']; ?></h3>
                                <li><i class="fa fa-home"></i> <?php echo $rec1['contactus_address']; ?></li><br><br>
                                <li><i class="fa fa-phone"></i> <?php if($rec1['contactus_phone_1']== " " ) { echo $rec1['contactus_phone_2']; } elseif($rec1['contactus_phone_2']== " "){ echo $rec1['contactus_phone_1']; } else { echo $rec1['contactus_phone_1'].','.$rec1['contactus_phone_2'];}?></li><br><br>
                                <li><i class="fa fa-envelope"></i><?php echo $rec1['contactus_emailid']; ?></li>
                            </ul>
							<?php } ?> 
                        </div>                        
                    </div>
                    <div class="col-sm-6">
                        <div class="row m0 commentForm">
                            <form class="row m0" id="contactForm" method="post" name="contact" action="http://premiumlayers.com/demos/construction/contact_process.php">
                                <div class="col-sm-6 p0 commenterInfoInputs">
                                    <div class="row m0">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" name="name" id="name"  placeholder="Name">
                                        </div>
                                        <label for="name" class="m0"></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="e-mail">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                            <input type="url"  name="url" id="url" class="form-control" placeholder="website">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p0">
                                    <div class="row m0">                                        
                                        <div class="input-group">
                                            <textarea placeholder="Message" name="message" id="message" class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-default" type="submit">send message</button>
                                    </div>
                                </div>
                            </form>
                            <div id="success">
                                <span class="green textcenter">
                                    <p>Your message was sent successfully! I will be in touch as soon as I can.</p>
                                </span>
                            </div>
                            <div id="error">
                                <span>
                                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                                </span>
                            </div>
                        </div>                       
                    </div>
                </div>                
                <div class="row m0">
                    <h3>Find us on Google Map</h3>
                    <div id="mapBox"></div>
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
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    <script src="vendors/mixitup/jquery.mixitup.js"></script>
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/contact.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:54 GMT -->
</html>