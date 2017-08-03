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

    <!--Slider-->
    <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
		<?php if($employeeid == " ") { ?>
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img1.png" alt="" />
                    </div>
                </div>
            </div>
			
			 <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img1.png" alt="" />
                    </div>
                </div>
            </div>
			
			 <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img1.png" alt="" />
                    </div>
                </div>
            </div>
			
			 <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img1.png" alt="" />
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->
		<?php } else  {
					
				while ($rec2=mysqli_fetch_array($data2)) {?>
			 <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="../../mp_portfolio/portfolio_image/<?php echo $rec['email_id']; ?>/portfolio_subimage/<?php echo $rec2['portfolio_image_url']; ?>" alt="" />
                    </div>
                </div>
		</div> <?php } } ?>
    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->

<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
				<?php if($employeeid == " ") { ?>
                <h4><strong>Project Name : </strong>xyz</h4>
				
                <h4><strong>Project Date:</strong>1-1-2001</h4>
				
                <h4><strong>Description:</strong>xyz</h4>
                <p class="no-margin">Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet</p>
				<?php } else { ?>
				<h4><strong>Project Name : </strong><?php echo $rec1['portfolio_title']; ?></h4>
				
                <h4><strong>Project Date : </strong><?php echo $rec1['portfolio_date']; ?></h4>
				
                <h4><strong>Description : </strong></h4>
                <p class="no-margin"><?php echo $rec1['portfolio_description']; ?></p>
								
				<?php }?>
			</div>
        </div>
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