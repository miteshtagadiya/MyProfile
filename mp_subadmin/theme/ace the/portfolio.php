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


$portfolio="select * from mp_portfolio where employee_id='$employeeid'";
$data1=mysqli_query($con,$portfolio);

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
                    <h1><center>Portfolio</center></h1>
            </div>
        </div>
    </section><!--/#title-->  

    <section id="portfolio" class="container">
 					<?php if ($employeeid == " ") 
				  { ?>       
        <ul class="portfolio-items col-3">
            <li class="portfolio-item apps">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item1.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="portfolio_blog.html"><i class="icon-eye-open"></i></a>             
                    </div>              
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla bootstrap">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item2.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                         <a class="preview btn btn-danger" href="portfolio_blog.html" ><i class="icon-eye-open"></i></a>               
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item bootstrap wordpress">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item3.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                         <a href="portfolio_blog.html" class="preview btn btn-danger"><i class="icon-eye-open"></i></a>          
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla wordpress apps">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item4.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                         <a href="portfolio_blog.html" class="preview btn btn-danger"><i  class="icon-eye-open"></i></a>           
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item5.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                         <a href="portfolio_blog.html" class="preview btn btn-danger"><i class="icon-eye-open"></i></a>          
                    </div>    
                </div>       
            </li><!--/.portfolio-item-->
            <li class="portfolio-item wordpress html">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item6.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a href="portfolio_blog.html" class="preview btn btn-danger"><i class="icon-eye-open"></i></a>          
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
        </ul>
				  <?php } else { while($rec1=mysqli_fetch_array($data1)) { ?>
	  <ul class="portfolio-items col-3">
            <li class="portfolio-item apps">
                <div class="item-inner">
                    <img src="../../mp_portfolio/portfolio_image/<?php echo $rec['email_id']; ?>/<?php echo $rec1['portfolio_main_image']; ?>" alt="" height="250px">
                    <h5><?php echo $rec1['portfolio_title']; ?></h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="portfolio_blog.php?id=<?php echo $rec1['portfolio_id']; ?>&eid=<?php echo $employeeid; ?>"><i class="icon-eye-open"></i></a>             
                    </div>              
                </div>           
            </li><!--/.portfolio-item-->
       </ul>
				  <?php } }?>
	</section><!--/#portfolio-->

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
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
