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
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <h1>Portfolio</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->     

    <section id="portfolio" class="container main"> 

					<?php if ($employeeid == " ") 
				  { ?>	
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item1.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                                 
            </li>
            <!--/Item 1--> 

            <!--Item 2-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item2.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item2.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 2-->

            <!--Item 3-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item3.jpg">
                    <div class="overlay">
                    </div>
                   <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-3" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item3.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 3--> 

            <!--Item 4-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item4.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item4.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 4--> 

            <!--Item 5-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item5.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-5" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item5.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 5--> 

            <!--Item 6-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item6.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-6" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item6.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 6-->                 

            <!--Item 7-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item1.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 7-->

            <!--Item 8-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item5.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-8" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item5.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 8-->
            
            <!--Item 9-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item1.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-9" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 9--> 

            <!--Item 10-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item2.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-10" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item2.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 10-->

            <!--Item 11-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item3.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-11" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item3.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 11--> 

            <!--Item 12-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item4.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <small>Portfolio item short description</small>
                </div>
                <div id="modal-12" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item4.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 12-->                

        </ul>
				  <?php } else { while($rec1=mysqli_fetch_array($data1)) { ?>
		
		<ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img alt=" " src="../../mp_portfolio/portfolio_image/<?php echo $rec['email_id']; ?>/<?php echo $rec1['portfolio_main_image']; ?>" height="250px">
                    <div class="overlay">
                    </div>
                    <div class="links center">
                     <a href="portfolio_blog.php?id=<?php echo $rec1['portfolio_id']; ?>&eid=<?php echo $employeeid; ?>"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5><?php echo $rec1['portfolio_title']; ?></h5>
                </div>
                                 
            </li>
			</ul>
				  <?php } } ?>
    </section>

 
<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2016 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
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
