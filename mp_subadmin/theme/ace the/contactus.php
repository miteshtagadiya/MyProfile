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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']); } ?> </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<?php 
					if (isset($_REQUEST['eid']))
					{  ?>
                <a class="navbar-brand" href="index.php?eid=<?php echo $_REQUEST['eid']; ?>"><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']); } ?></a>
				<?php } else { ?>
				 <a class="navbar-brand" href="index.php"><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']); } ?></a>
				<?php } ?>
			</div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
					<?php 
					if (isset($_REQUEST['eid']))
					{  ?>				
                    <li><a href="index.php?eid=<?php echo $_REQUEST['eid']; ?>">Home</a></li>
					<li><a href="portfolio.php?eid=<?php echo $_REQUEST['eid']; ?>">Portfolio</a></li>
                    <li><a href="contactus.php?eid=<?php echo $_REQUEST['eid']; ?>">Contactus</a></li>
					<?php } else { ?>
                    <li><a href="index.php">Home</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="contactus.php">Contactus</a></li>				
					<?php } ?>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title">
        <div class="container">
            <div class="row">
                    <h1><center>Contact Us</center></h1>
            </div>
        </div>
    </section><!--/#title-->    

    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3><b><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']); } ?></b></h3><br>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
					<?php if ($employeeid == " ") { ?>
                        <div class="col-sm-7">
                            <div class="form-group">
								<h5>Address </h5><h4> B-2/302 Royal Township,sarthana jakatnaka,Surat</h4><br>
                            </div>
                            <div class="form-group">
                                <h5>Contact Number </h5><h4> 990909448 9712444665</h4><br>
                            </div>
                            <div class="form-group">
                                <h5>Email </h5><h4> chiragpansuriya67@gmail.com</h4>
                            </div>
                        </div>
					<?php } else { ?>
                        <div class="col-sm-7">
                            <div class="form-group">
								<h5>Address </h5><h4> <?php echo $rec1['contactus_address']; ?></h4><br>
                            </div>
                            <div class="form-group">
                                <h5>Contact Number </h5><h4> <?php if($rec1['contactus_phone_1']== " " ) { echo $rec1['contactus_phone_2']; } elseif($rec1['contactus_phone_2']== " "){ echo $rec1['contactus_phone_1']; } else { echo $rec1['contactus_phone_1'].','.$rec1['contactus_phone_2'];}?></h4><br>
                            </div>
                            <div class="form-group">
                                <h5>Email </h5><h4> <?php echo $rec1['contactus_emailid']; ?></h4>
                            </div>
                        </div>				
					<?php } ?>
                        <div class="col-sm-5">
                             <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Website">
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4">
			<br><br>
			    <textarea name="message" id="message" required="required" class="form-control"  rows="8" placeholder="Message"></textarea>
				<button type="submit" class="btn btn-primary btn-lg">Send Message</button>
            </div><!--/.col-sm-4-->
        </div>
		<div class="row">
		    <h4>My Location</h4>
            <iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed"></iframe>
		</div>
    </section><!--/#contact-page-->

  
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                     &copy; 2016 My Profile. All Rights Reserved.
                </div><div class="col-sm-5"></div>
				<div class="col-sm-1"><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></div>
	</div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>