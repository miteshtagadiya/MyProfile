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

<!-- Mirrored from rivathemes.net/html/magnis/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 06:59:54 GMT -->
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
<ul>            	<?php 
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
            	<h2>Contact Us</h2>
            </div>
        </div>
    </div>
</div>
<!-- page header end //-->

<!-- main content start //-->
<div class="main-content">
	<div class="container">
    	<div class="row">
			
			<div class="span5">
			</div>
			<div class="span3">
				<div class="main-content-block">
                	<h2>general info</h2>
					
					<?php if ($employeeid == " ") { ?>
					
					<div class="main-content-block-entry contact-info">
						<h3>General Info</h3>
                    	<p><i class="icon-location-arrow"></i> 1052 – 1054 Christchurch Road, Bournemouth, BH7 6DS</p>
                    	<p><i class="icon-phone"></i> +1 234 56 78</p>
                    	<p><i class="icon-envelope"></i> <a href="#">sample@magnis.com</a></p>
                    	
					</div>
					
					<?php } else { ?>
					
					<div class="main-content-block-entry contact-info">
						<h3><?php echo $rec['firstname'].'&nbsp'; echo $rec['lastname']; ?></h3>
                    	<p><i class="icon-location-arrow"></i><?php echo $rec1['contactus_address']; ?></p>
                    	<p><i class="icon-phone"></i><?php if($rec1['contactus_phone_1']== " " ) { echo $rec1['contactus_phone_2']; } elseif($rec1['contactus_phone_2']== " "){ echo $rec1['contactus_phone_1']; } else { echo $rec1['contactus_phone_1'].','.$rec1['contactus_phone_2'];}?></p>
                    	<p><i class="icon-envelope"></i><?php echo $rec1['contactus_emailid']; ?></p>
                    	
					</div>
					
					<?php } ?>
				</div>
            </div>
			
			
			
        	<div class="span12">
				<div class="main-content-block">
                	<h2>drop us a line</h2>
					<div class="main-content-block-entry">
                    	<form class="add-comment-form">
	                        <p><textarea placeholder="your comment"></textarea></p>
                            <p><input type="text" placeholder="your name"> <input type="email" placeholder="your email"> <button type="submit"><i class="icon-ok-sign"></i> Submit</button></p>
                        </form>
                    </div>
				</div>
            </div>
            
                    
        </div>
    </div>
</div>
<!-- main content end //-->

<!-- google map start //-->
<div id="map-canvas" class="gmaps"></div>
<!-- google map end //-->

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
<script>
jQuery(document).ready(function() {
});
</script>

<!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- gmap js file -->
        <script src="./gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="./gmaps/jquery.gmaps.js"></script>
       

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript"> 
            var map;
            var marker;
			
			<?php if($employeeid == " "){ ?>
				var myLatlng = new google.maps.LatLng(-37.813611, 144.963056);
			<?php } else { ?>
			
            var myLatlng = new google.maps.LatLng(<?php echo $rec1['latitude']; ?>,<?php echo $rec1['longitude']; ?>);
			<?php } ?>
            var geocoder = new google.maps.Geocoder();
            var infowindow = new google.maps.InfoWindow();
            function initialize(){
                var mapOptions = {
                    zoom: 18,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
		       
                map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
                
                marker = new google.maps.Marker({
                    map: map,
                    position: myLatlng,
                    draggable: true 
                });     
                
                geocoder.geocode({'latLng': myLatlng }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#address').val(results[0].formatted_address);
                            $('#latitude').val(marker.getPosition().lat());
                            $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });

                               
                google.maps.event.addListener(marker, 'dragend', function() {

                geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#address').val(results[0].formatted_address);
                            $('#latitude').val(marker.getPosition().lat());
                            $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });
            
            }
            
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>  

<!-- Mirrored from rivathemes.net/html/magnis/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2015 06:59:54 GMT -->
</html>