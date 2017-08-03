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
<html class="no-js" lang="en">

<!-- Mirrored from rivathemes.net/html/adagency/contactus.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 07:22:27 GMT -->
<head>
<title>My Profile</title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
<link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;hl=en&amp;sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 10,
    center: new google.maps.LatLng(-37.813611, 144.963056),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
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


<script src="../../../code.jquery.com/jquery-latest.js"></script>
<script src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>
<script src="assets/js/jquery.jigowatt.js"></script> <!-- AJAX Form Submit -->

<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
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
                	<h1>Contact Us</h1>
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

<!-- google map start //-->
<div id="map-canvas"></div>
<!-- google map end //-->

<!-- main content start	//-->
<div class="container main-content">

	<!-- main content row start	//-->
    <div class="row">
    
    	<div class="span6">
			<div class="block-header-bg">
        		<h2 class="block-header">general info</h2>
        	</div>
				<?php if ($employeeid == " ") { ?>
				
            <div class="page-content-item">
				<h3>Mitesh Tagadiya</h3>
                <p>1052 – 1054 Christchurch Road, Bournemouth, BH7 6DS</p>
                <p><i class="icon-phone"></i> +1 234 56 78</p>
                <p><i class="icon-envelope"></i> support@example.com</p>
                <p><i class="icon-globe"></i> www.example.com</p>
            </div>
				<?php }
						else
						{ ?>
			<div class="page-content-item">
				<h3> <?php echo $rec['firstname'].'&nbsp'; echo $rec['lastname']; ?></h3>
                <p> <?php echo $rec1['contactus_address']; ?></p>
                <p><i class="icon-phone"></i> <?php if($rec1['contactus_phone_1']== " " ) { echo $rec1['contactus_phone_2']; } elseif($rec1['contactus_phone_2']== " "){ echo $rec1['contactus_phone_1']; } else { echo $rec1['contactus_phone_1'].','.$rec1['contactus_phone_2'];}?></p>
                <p><i class="icon-envelope"></i> <?php echo $rec1['contactus_emailid']; ?></p>
             
            </div>
						<?php } ?>
        </div>
    
    	
    
    	<div class="span6">
			<div class="block-header-bg">
        		<h2 class="block-header">drop us a line</h2>
        	</div>
            <div class="blog-article-add-a-comment">
<!--
            	<form>
                	<p><label for="comment-name">Your name:</label><input type="text" id="comment-name"></p>
                	<p><label for="comment-email">Your email:</label><input type="email" id="comment-email"></p>
                	<p><label for="comment-entry">Your message:</label><textarea id="comment-entry"></textarea></p>
                    <p><input type="submit" value="Submit"></p>
                </form>
//-->

		<mark id="message"></mark>

		<form method="post" action="http://rivathemes.net/html/adagency/classes/contact.php" name="contactform" id="contactform" autocomplete="on">

			<fieldset>

				<legend>Contact Details</legend>

				<div>
					<label for="name" accesskey="U">Your Name</label>
					<input name="name" type="text" id="name" placeholder="Enter your name" required="required" />
				</div>
				<div>
					<label for="email" accesskey="E">Email</label>
					<input name="email" type="email" id="email" placeholder="Enter your Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
				</div>

				<div>
					<label for="phone" accesskey="P">Phone <small>(optional)</small></label>
					<input name="phone" type="tel" id="phone" size="30" placeholder="Enter your phone number" />
				</div>

				<div>
					<label for="website" accesskey="W">Website <small>(optional)</small></label>
					<input name="website" type="url" id="website" placeholder="Enter your website address" />
				</div>

			</fieldset>

			<fieldset>

				<legend>Your Comments</legend>

				<div>
					<label for="subject" accesskey="S">Subject</label>
					<select name="subject" id="subject" required="required">
						<option value=""></option>
						<option value="Support">Support</option>
						<option value="A Sale">Sales</option>
						<option value="A Bug fix">Report a bug</option>
					</select>
				</div>

				<div>
					<label for="comments" accesskey="C">Comments</label>
					<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Enter your comments" spellcheck="true" required="required"></textarea>
				</div>

<!--
				<div>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Choose option one?
					</label>
				</div>

				<div>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Or rather, option two?
					</label>
				</div>
//-->
				<div>
					<label for="agree" accesskey="A">Agree to terms</label>
					<input name="agree" type="checkbox" id="agree"/>
				</div>

			</fieldset>

		

			<input type="submit" class="submit" id="submit" value="Submit" />

		</form>


            </div>
        </div>
    
 	</div>
	<!-- main content row end	//-->

</div>
<!-- main content end	//-->

<!-- site footer start	//-->

<!-- site footer start	//-->
<footer class="site-footer">

    
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