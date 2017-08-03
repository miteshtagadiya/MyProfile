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
  <section id="about-us" class="container main">

       
		
        <div class="row-fluid">
            <div class="span4"></div>
			<div class="span3">
                <div class="box">
                    <p>
								<?php 	if (isset($_REQUEST['eid']))
					{  ?>
                                        <img src="../../profile/profile/<?php echo $rec1['profile_url']; ?>" alt="">
										
					<?php } else { ?>
										<img src="images/sample/team1.jpg" alt="" >
					<?php } ?>
					</p>
                    <h5><center><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']); } ?></center></h5>
                </div>
            </div>

        </div>
			 <hr>
                <h2><center>My Skills</center></h2>
			 <hr>
        <div class="row-fluid">
            <div class="span5">

                <div>
				<?php 
				if($employeeid == " ")
					{  ?>
                    <div class="progress"><div class="bar" style="width: 80%; text-align:left; padding-left:10px;">Wordpress</div></div>
                   <?php } else { 
				   while($rec2=mysqli_fetch_array($data2)) {
					   ?>
					 <div class="progress"><div class="bar" style="width: <?php echo $rec2['skill_capicity']; ?>%; text-align:left; padding-left:10px;"><?php echo $rec2['skill_name']; ?></div><p>&nbsp<?php echo $rec2['skill_capicity']; ?>%<p></div>
                   
				   <?php } } ?>
				</div>
            </div>
        </div>
			 <hr>
                <h2><center>Education</center></h2>
			 <hr>
		<div class="row-fluid">
				<?php 
						if($employeeid == " ") 
						{  ?>
            <div class="span3">
                <div>
                                        <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBE </h4>
                                        <h4><b>Passing Year:</b>&nbsp2013-2016 </h4>
										<h4><b>Percentage:</b>&nbsp9.7 </h4>
										<h4><b>Place:</b>&nbspsurat </h4>
										<h4><b>Institute:</b>&nbspvnsgu </h4> </div>
            </div>
						<?php } else { 
							while($rec3=mysqli_fetch_array($data3)){
						?>
            <div class="span3">
                <div>
                                        <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $rec3['education_type']; ?></h4>
                                        <h4><b>Passing Year:</b>&nbsp&nbsp&nbsp<?php echo $rec3['education_year']; ?> </h4>
										<h4><b>Percentage:</b>&nbsp&nbsp&nbsp<?php echo $rec3['education_percentage']; ?> </h4>
										<h4><b>Place:</b>&nbsp&nbsp&nbsp<?php echo $rec3['education_place']; ?> </h4>
										<h4><b>Institute:</b>&nbsp&nbsp&nbsp<?php echo $rec3['education_institute']; ?> </h4>
               </div>						
						<?php } } ?>
        </div>


	</section>


    <!-- / .title -->   

  

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

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>