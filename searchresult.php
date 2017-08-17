<!--
    This page is displayes after record is searched by users
-->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <!-- DataTables -->
        <link href="./assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

 <link rel="stylesheet" href="./assets/plugins/magnific-popup/dist/magnific-popup.css"/>
 <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="./assets/css/core.css" rel="stylesheet" type="text/css" />
 <link href="./assets/css/components.css" rel="stylesheet" type="text/css" />
 <link href="./assets/css/icons.css" rel="stylesheet" type="text/css" />
 <link href="./assets/css/pages.css" rel="stylesheet" type="text/css" />
 <link href="./assets/css/menu.css" rel="stylesheet" type="text/css" />
 <link href="./assets/css/responsive.css" rel="stylesheet" type="text/css" />
    
<!-- Internal stylesheet for this page -->    

<style>
.container
{
	padding-right: 15px;
	padding-left:14px;
}

.logo, .menu
{
	background-color: pink;
	display: inline-block;
	margin:5px;
}

.logo
{
		height:70px;
}

.menu
{
	background-color: #d91c23;
	float: right;
	color: white;
	margin-top:10px;
	
}

.menu1
{
	float:right;
	padding:10px;
	color: #d91c23;
}

.menu a
{
	
	background-color: #d91c23;
    border: 0 none;
    color: #fff;
    padding: 4px 12px;
    text-align: center;
    text-decoration: none;
    transition: border .25s linear 0s,color .25s linear 0s,background-color .25s linear 0s;
}

.menu a:hover
{
	background-color: orange;
}

li a:hover
{
	background-color: orange;
}

.background
{
	background:url("./header.jpg") no-repeat center top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 29em;
}

.search
{
	width: 780px;
    margin: 0 auto;
    padding: 134px 0 0 0;
}

.search-title
{
	font: 34px 'roboto_condensedregular';
    color: #fff;
    text-shadow: 1px 1px 2px #000;
    padding: 5px 0;
}

.search-box
{
	background-color: #f9dd1f;
    position: relative;
    border: 3px solid #666;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    padding: 10px;
    position: relative;
	box-sizing: border-box;
}

.search-box #global_search
{
	background: #fff none repeat scroll 0 0;
    border-color: #c0c0c0 #d9d9d9 #d9d9d9;
    border-image: none;
    border-radius: 1px;
    border-style: solid;
    border-width: 0;
    box-sizing: border-box;
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    color: #a8a7a7;
    display: inline-block;
    font-size: 19px;
    height: 48px;
    width: 80%;
    margin: 0;
    padding: 0 8px;
    -webkit-border-top-left-radius: 4px;
    -webkit-border-bottom-left-radius: 4px;
    -moz-border-radius-topleft: 4px;
    -moz-border-radius-bottomleft: 4px;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

.search-box .btn-style
{
	box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    height: 48px;
    display: inline-block;
    font: 20px 'roboto_condensedregular';
    letter-spacing: 1px;
    outline: 0 none;
    -webkit-border-top-right-radius: 4px;
    -webkit-border-bottom-right-radius: 4px;
    -moz-border-radius-topright: 4px;
    -moz-border-radius-bottomright: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    background: #b0161c;
    background-image: -ms-linear-gradient(top,#e11e25 0,#b0161c 100%);
    background-image: -moz-linear-gradient(top,#e11e25 0,#b0161c 100%);
    background-image: -o-linear-gradient(top,#e11e25 0,#b0161c 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#e11e25),color-stop(100,#b0161c));
    background-image: -webkit-linear-gradient(top,#e11e25 0,#b0161c 100%);
    background-image: linear-gradient(to bottom,#e11e25 0,#b0161c 100%);
    transition: border .25s linear 0s,color .25s linear 0s,background-color .25s linear 0s;
	width: 149px;
    margin: 0 0 0 -5px;
    border: 0;
}

form
{
	display: block;
    margin-top: 0em;
	box-sizing: border-box;
}

.red-box
{
	background-color: #d61c23;
    height: 95px;
}

.inside-content
{
	position: relative;
    width: 998px;
    margin: 0 auto;
}

.facebook
{
	width: 300px;
    position: absolute;
    top: -25px;
    left: 100px;
    z-index: 500;
    text-align: center;
}

.twitter
{
	width: 300px;
    position: absolute;
    top: -25px;
    left: 362px;
    z-index: 500;
    text-align: center;
}

.google
{
	width: 300px;
    position: absolute;
    top: -25px;
    left: 590px;
    z-index: 500;
    text-align: center;
}

.reqir-text
{
	margin: 0;
    padding: 0 0 5px 0;
    color: #fff;
    font-size: 18px;
    font-weight: 900;
    text-decoration: none;
}

.img
{
	border: 0;
    display: inline-block;
	max-width: 100%;
    height: auto;
}

a
{
	text-decoration:none;
}

.searchbar
{
	background-color: #ce241b;
    padding: 4px 0;
    -webkit-box-shadow: -1px 9px 5px -4px rgba(135,135,135,1);
    -moz-box-shadow: -1px 9px 5px -4px rgba(135,135,135,1);
    box-shadow: -1px 9px 5px -4px rgba(135,135,135,1);
	font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
    color: #000;
    font-weight: none;
}

.wrapper
{
	position: relative;
    width: auto;
    margin: 0 auto;
}

#global_search1
{
	float: left;
    margin-left: 5px;
    border: 0;
    background: url(https://sec-img.tradeindia.com/new_website1/ti-new-design-ver3/search-icon.png) no-repeat left center;
    background-color: #FFF;
    width: 100%;
    height: 30px;
    padding-left: 20px;
    color: #8b8282;
    font-weight: 700;
    font-size: 13px;
    line-height: 30px;
}

.newdesign
{
	background-color: #ffe13b;
    color: #202020;
	line-height: 32px;
    height: 30px;
    display: inline-block;
    margin-left: 5px;
    text-decoration: none;
    padding: 0 20px;
    border: 0;
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    text-align: center;
    font-family: Tahoma;
    font-size: 15px;
    font-weight: bold;
	float:left;
}

.left
{
	float: left;
}

#navigation ul
{
	list-style-type: none;
    margin: 18px;
    padding: 0;
    background-color:#ce241b;
}

#navigation li a {
	font: 20px 'roboto_condensedregular';
    letter-spacing: 1px;
    display: block;
    color: #fff;
    padding: 8px 0 8px 16px;
    text-decoration: none;
	border:1px solid white;
}

.fonts
{
	font: 'roboto_condensedregular';
    letter-spacing: 1px;
}

.imghover img:hover
{
	opacity:1.0;
	
}

.imghover img
{
	height:236px;
	width:143px;
	transition: all 1s ease;
	opacity:0.3;
	
}

.float1
{
	float: left;
}

.boxstyle
{
	margin-top:19px; 
	background-color:white; 
	box-shadow: 0 6px 15px 0 rgba(0, 0, 0, 0.2), 0 10px 15px 0 rgba(0, 0, 0, 0.19);
}

.logoimg
{
	width:170px;
}

span
{
	height: 2px;
    width: 20px;
    background-color: #fff;
    display: block;
    margin-bottom: 5px;
    -webkit-transition: -webkit-transform 0.5s ease;
    transition: -webkit-transform 0.5s ease;
    transition: transform .5s ease;

}

.lines
{
	display:none;
	float:left;
	margin-left:10px;
	margin-top:7px;
}

.navbar-toggle 
{
    border: 0;
    position: relative;
    width: 292px;
    height: 60px;
    padding: 0;
    margin: 0;
    cursor: pointer;
}


<!--@media (max-width: 991px)-->
#navigation {
    position: static;
    top: 60px;
    left: 0;
    width: 100%;
    display: none;
    height: 338px;
    padding-bottom: 0;
    overflow: auto;
    border-top: 1px solid #e7e7e7;
    border-bottom: 1px solid #e7e7e7;
    background-color: #fff;
    margin-top: 0px;
}

@media (max-width:991px)
{
#global_search1 
{ 
    width: 159.5%;
}

.newdesign
{
    margin-left: 216px;
}

.newdesign
{
	margin-left:29%;
}

#navigation {
    position: static;
    top: 60px;
    left: 0;
    width: 100%;
    display: none;
    height: 338px;
    padding-bottom: 0;
    overflow: auto;
    border-top: 1px solid #e7e7e7;
    border-bottom: 1px solid #e7e7e7;
    background-color: #fff;
    margin-top: 0px;
}

#navigation ul li
{
		display:block;

}

.lines
{
	display:block;
}

.boxstyle 
{
    height: 268px;
    margin-top: 20px;
    padding-top: 1px;
    width: 73%;
	margin-left:13%
}

.wrapper 
{
    margin: 0 auto 0 0;
    width: auto;
}

.navbar-toggle 
{
    width: 7%;
}
}

@media (max-width:767px)
{
	ul li
{
	display:none;
}

#navigation {
    position: static;
    top: 60px;
    left: 0;
    width: 100%;
    display: none;
    height: 338px;
    padding-bottom: 0;
    overflow: auto;
    border-top: 1px solid #e7e7e7;
    border-bottom: 1px solid #e7e7e7;
    background-color: #fff;
    margin-top: 0px;
}

.wrapper 
{
    margin: 0 auto 0 0;
    width: auto;
}

#navigation ul li
{
		display:block;

}

.newdesign
{
	margin-left:5px;
}

.lines
{
	display:block;
	margin-top:7px;
}

span {
    background-color: #fff;
    height: 2px;
 
}

.boxstyle 
{
    height: 519px;
    margin-top: 20px;
    padding-top: 1px;
    width: 73%;
}

.wrapper 
{
    margin: 79px auto 0 0;
    width: auto;
}

.searchbar 
{
    font-size: 14px;
    padding: 4px 0 34px;
}

#global_search1
{
    width: 68%;
}

.navbar-toggle 
{
    width: 10%;
}
}

@media (max-width:479px)
{
.logoimg
{
	width:130px;
}

.boxstyle
{
	height:565px;
	margin-top:50px;
}


.newdesign
{
	margin-left:34%;
	margin-top:10px;
}

#global_search1 
{
    width: 100%;
}

.lines 
{
    display: block;
    margin-top: -62px;
}

span 
{
    background-color: #ce241b;
    display: block;
    height: 3px;
    margin-bottom: 5px;
    transition: transform 0.5s ease 0s;
    width: 20px;
}

.navbar-toggle 
{
    width: 16%;
}

}

@media (max-width:320px)
{
.logoimg 
{
    width: 87px;
}

.newdesign 
{
    margin-left: 31%;
    margin-top: 10px;
}

.h4, h4 
{
    font-size: 14px;
}

.h2, h2 
{
    font-size: 28px;
}

.boxstyle {
    height: 565px;
    margin-top: 50px;
}

}

<!--
.rslwrp {
    float: left;
    display: table;
    width: 100%;
}
.cntanr
{
    background: #fff;
    border: 1px solid #f7f7f7;
    box-shadow: 0 2px 2px rgba(0,0,0,.2);
    float: left;
    margin: 12px 0 0;
    padding: 15px 15px 10px;
    width: 100%;
}-->
</style>
</head>
<body>

<div class="col-xs-3" style="padding-left:22px;">
<div class="logo">
<a href="./index.php">
<img class="logoimg" src="./image/Bliss.bmp" height="70px"></img>
</a>
</div>



<div class="col-sm-9" style="padding-right:22px;">
<div class="menu">
<b><a href="./mp_user/mp_user_registration/index.php">Login</a></b>
</div>
<div class="menu1">
<a href="./mp_user/mp_user_registration/mp_user_registration.php" style="text-decoration:none; color:#d91c23;">
<b>SignUp</b>
</a>
</div>
</div>

<div class="col-sm-12">
<div class="searchbar wrapper" style="height:39px;">
      <form action="#" method="post" name="global_search_form">
        <input name="search_form_id" type="hidden" value="18">
		<div class="col-sm-6" style="padding-left:0px;">
		
        <input size="30" id="global_search1" value="Search Product/Service" name="keyword">
		</div>
        <input class="newdesign" id="search_btn" title="Search" name="Submit" type="Submit" value="Search">
							
							<!-- Mobile menu toggle-->
						<div class="menu-item">
                            <a class="navbar-toggle">
								<div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
							</a>
						</div>
                            <!-- End mobile menu toggle-->
      </form>
           <div class="clr"></div>
    

</div>
</div>

<!-- Displayes side menu in search result page -->
<div class="col-sm-3" id="navigation">
<?php
	include('./mp_connect.php');
	$sql1="select * from mp_category";
	$data1=mysqli_query($con,$sql1);
	
?>
    <ul>
	<?php while ($rec1=mysqli_fetch_array($data1)) {?>
		<li><a href="searchresult.php?cid=<?php echo $rec1['category_id']; ?>" ><?php echo $rec1['category_name']; ?></a></li>
	<?php } ?>
	</ul>
		
</div>

<div class="col-sm-6 boxstyle" style="margin-left:11%;">
	<div class="col-sm-3 imghover" style="margin:15px 0 15px 0; overflow:hidden;">
	    <a href="./image/Bliss.bmp" class="image-popup" title="Screenshot-1">
			<img src="./image/Bliss.bmp" width="100px;">
		</a>
	</div>
	<div class="col-sm-6">
		<h2 class="fonts"><b>Name</b></h2><br>
		<h4><img src="./image/degree.png" height="23px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbspBCA,MCA</b></h4>
		<h4><img src="./image/call1.png" height="20px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp9429333186</b></h4>
		<h4><img src="./image/email.png" height="17px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbspabc@gmail.com</b></h4>
		<h4><img src="./image/home.png" height="18px" width="22px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbspSurat</b></h4>
		<p class="menu float1"><b><a href="#">Get Root</a></b></p>
		<p class="menu float1"><b><a href="#">Visit Website</a></b></p>
		
	</div>
</div>


<!--  search result displays -->
<div class="col-sm-6 boxstyle" style="margin-left:11%;">
	<div class="col-sm-3 imghover" style="margin:15px 0 15px 0; overflow:hidden;">
		<a href="./image/Bliss.bmp" class="image-popup" title="Screenshot-1">
			<img src="./image/Bliss.bmp" height="236px" width="210px">
		</a>
	</div>
	<div class="col-sm-6">
		<h2 class="fonts"><b>Name</b></h2><br>
		<h4><img src="./image/degree.png" height="23px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbspBCA,MCA</b></h4>
		<h4><img src="./image/call1.png" height="20px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp9429333186</b></h4>
		<h4><img src="./image/email.png" height="17px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbspabc@gmail.com</b></h4>
		<h4><img src="./image/home.png" height="18px" width="22px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbspSurat</b></h4>
		<p class="menu float1"><b><a href="#">Get Root</a></b></p>
		<p class="menu float1"><b><a href="#">Visit Website</a></b></p>
		
		</div>
</div>
		
<div class="col-sm-6 boxstyle" style="margin-left:11%;">
	<div class="col-sm-3 imghover" style="margin:15px 0 15px 0; overflow:hidden;">
		<a href="./image/Bliss.bmp" class="image-popup" title="Screenshot-1">
			<img src="./image/Bliss.bmp" height="236px" width="210px">
		</a>
	</div>
	<div class="col-sm-6">
		<h2 class="fonts"><b>Name</b></h2><br>
		<h4><img src="./image/degree.png" height="23px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbspBCA,MCA</b></h4>
		<h4><img src="./image/call1.png" height="20px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp9429333186</b></h4>
		<h4><img src="./image/email.png" height="17px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbspabc@gmail.com</b></h4>
		<h4><img src="./image/home.png" height="18px" width="22px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbspSurat</b></h4>
		<h5 class="menu float1"><b><a href="#">Get Root</a></b></h5>
		<h5 class="menu float1"><b><a href="#">Visit Website</a></b></h5>		
	</div>
</div>



<div style="position:relative; clear:both; margin-bottom:-60px; padding-top:20px; border-top:1px solid rgba(0, 0, 0, 0.1)">
<center><p> 2016 © MyProfile.</p></center>
</div>



  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/detect.js"></script>
        <script src="./assets/js/fastclick.js"></script>

        <script src="./assets/js/jquery.slimscroll.js"></script>
        <script src="./assets/js/jquery.blockUI.js"></script>
        <script src="./assets/js/waves.js"></script>
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/jquery.nicescroll.js"></script>
        <script src="./assets/js/jquery.scrollTo.min.js"></script>

        <script src="./assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="./assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="./assets/plugins/counterup/jquery.counterup.min.js"></script>

       <!-- <script src="./assets/plugins/morris/morris.min.js"></script>-->
        <script src="./assets/plugins/raphael/raphael-min.js"></script>

        <script src="./assets/plugins/jquery-knob/jquery.knob.js"></script>


       <!-- <script src="./assets/pages/jquery.dashboard.js"></script>-->
        <script src="./assets/js/jquery.core.js"></script>
        <script src="./assets/js/jquery.app.js"></script>
		
		
		 <!-- Datatable js -->
        <script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="./assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="./assets/plugins/datatables/buttons.bootstrap.min.js"></script>
     <!--   <script src="./assets/plugins/datatables/jszip.min.js"></script>-->
        <script src="./assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="./assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="./assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="./assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="./assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Data table init -->
        <script src="./assets/pages/datatables.init.js"></script>
		
		 <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/detect.js"></script>
        <script src="./assets/js/fastclick.js"></script>

        <script src="./assets/js/jquery.slimscroll.js"></script>
        <script src="./assets/js/jquery.blockUI.js"></script>
        <script src="./assets/js/waves.js"></script>
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/jquery.nicescroll.js"></script>
        <script src="./assets/js/jquery.scrollTo.min.js"></script>

        <script src="./assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="./assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="./assets/plugins/counterup/jquery.counterup.min.js"></script>

        <script src="./assets/plugins/jquery-knob/jquery.knob.js"></script>
		
		   <script type="text/javascript" src="./assets/plugins/isotope/dist/isotope.pkgd.min.js"></script>
        <!-- Magnific popup -->
        <script type="text/javascript" src="./assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>
	


</body>
</html>