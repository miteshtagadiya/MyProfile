<?php

include('../mp_connect.php');
if (isset($_REQUEST['eid']))
{
$employeeid=$_REQUEST['eid'];
}
else
{
	$employeeid="";
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']); } ?></title>
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
                <center>
                    <p>
					<?php 	if (isset($_REQUEST['eid']))
					{  ?>
                                        <img src="../../profile/profile/<?php echo $rec1['profile_url']; ?>" alt="" height="300px" width="300px" >
										
					<?php } else { ?>
										<img src="images/sample/team1.jpg" alt="" height="300px" width="300px"  >
					<?php } ?>
					</p>
                    <h3><strong> <?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']); } ?> </strong></h3>
				</center>
            </div>
        </div>
    </section><!--/#title-->

    <section id="about-us" class="container">
        <div class="row">
		<center><h2>My Skills</h2></center>
		<div class="col-sm-3"></div>
            <div class="col-sm-6">
                
                <div>
				<?php 
				if($employeeid == " ")
					{  ?>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span>HTML/CSS</span>
                        </div>
                    </div>
					<?php } else { 
				   while($rec2=mysqli_fetch_array($data2)) {
					   ?>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $rec2['skill_capicity']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rec2['skill_capicity']; ?>%;">
                            <span><?php echo $rec2['skill_name']; ?></span>
                        </div>
                    </div>
					  <?php } } ?>
                </div>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->

    </section><!--/#about-us-->
	
	
    <section id="about-us" class="container">
        <div class="row">
		<center><h2>Education</h2></center>
            <div class="col-sm-6">
                
                <div>
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
				
				
				
				
				
				</div>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->

    </section><!--/#about-us-->

 
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