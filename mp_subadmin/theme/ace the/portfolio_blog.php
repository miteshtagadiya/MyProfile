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
                <a class="navbar-brand" href="index.php?eid=<?php echo $_REQUEST['eid']; ?>"><?php if ($employeeid == " ") { echo "Mitesh Tagadiya"; } else { echo $rec['firstname']."&nbsp"; echo $rec['lastname']; } ?></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?eid=<?php echo $_REQUEST['eid']; ?>">Home</a></li>
					<li><a href="portfolio.php?eid=<?php echo $_REQUEST['eid']; ?>">Portfolio</a></li>
                    <li><a href="contactus.php?eid=<?php echo $_REQUEST['eid']; ?>">Contactus</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
 <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
			<?php if($employeeid == " ") { ?>
                <div class="item" style="background-image: url(images/slider/bg1.jpg)">
   
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg2.jpg)">

                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg3.jpg)">

                </div><!--/.item-->
				<?php } else  {
					
				while ($rec2=mysqli_fetch_array($data2)) {?>
				
				                <div class="item" style="background-image: url(../../mp_portfolio/portfolio_image/<?php echo $rec['email_id']; ?>/portfolio_subimage/<?php echo $rec2['portfolio_image_url']; ?>)">
   
								</div>
				<?php } } ?>
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
				<?php if($employeeid == " ") { ?>
                <h4><strong>Project Name : </strong>xyz</h4>
				
                <h4><strong>Project Date:</strong>1-1-2001</h4>
				
                <h4><strong>Description:</strong>xyz</h4>
                <p>Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet</p>
				<?php } else { ?>
				<h4><strong>Project Name : </strong><?php echo $rec1['portfolio_title']; ?></h4>
				
                <h4><strong>Project Date : </strong><?php echo $rec1['portfolio_date']; ?></h4>
				
                <h4><strong>Description : </strong></h4>
                <p><?php echo $rec1['portfolio_description']; ?></p>
								
				<?php }?>
                </div>
			</div><!--/.row-->
        </div>
    </section><!--/#recent-works-->
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