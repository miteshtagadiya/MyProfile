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
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']); } ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <h2 class="pull-left" style="color: #2dcc70;"><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']); } ?></h2>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
					<?php 
					if (isset($_REQUEST['eid']))
					{  ?>
                        <li class="active"><a href="index.php?eid=<?php echo $_REQUEST['eid']; ?>">Home</a></li>
                        <li><a href="portfolio.php?eid=<?php echo $_REQUEST['eid']; ?>">Portfolio</a></li>
                        <li><a href="contact-us.php?eid=<?php echo $_REQUEST['eid']; ?>">Contact</a></li>
					<?php } else { ?> 
                        <li class="active"><a href="./index.php">Home</a></li>
                        <li><a href="/.portfolio.php">Portfolio</a></li>
                        <li><a href="/.contact-us.php">Contact</a></li>
					
					
					<?php } ?>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>

    <!-- /header -->

    <section class="no-margin">
        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed"></iframe>
    </section>

    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your First Name">
                        <label>Last Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>
<?php if ($employeeid == " ") { ?>
        <div class="span3">
            <h4> Address</h4>
            <p>
                <i class="icon-map-marker pull-left"></i> 1209 Willow Oaks Lane, New York<br>
                Lafayette, 1212,  United States
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;email@example.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+123 45 67 89
            </p>
           
		</div><?php } else { ?>
        <div class="span3">
            <h2> Address</h2>
            <h4><p>
                <i class="icon-map-marker pull-left"></i> <?php echo $rec1['contactus_address']; ?>
            </p></br>
            <p>
                <i class="icon-envelope"></i> &nbsp;<?php echo $rec1['contactus_emailid']; ?>
            </p></br>
            <p>
                <i class="icon-phone"></i> &nbsp;<?php if($rec1['contactus_phone_1']== " " ) { echo $rec1['contactus_phone_2']; } elseif($rec1['contactus_phone_2']== " "){ echo $rec1['contactus_phone_1']; } else { echo $rec1['contactus_phone_1'].','.$rec1['contactus_phone_2'];}?>
            </p></h4>
           
		</div
		
		
		
		<?php } ?>




    </div>

</section>


<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2016 My Profile. All Rights Reserved.
            </div>
            <!--/Copyright-->



            <div class="span7">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->



<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>   

</body>
</html>
