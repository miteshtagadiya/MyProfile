<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MyProfile</title>
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

<!-- internal stylesheet for search page -->    
<style>
.container
{
	padding-right: 15px;
	padding-left:14px;
}

.logo, .menu
{
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
	margin-right: -2px;
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

/*
.imghover img:hover
{
	opacity:1.0;
	
}

.imghover img
{
	height:236px;
	width:200px;
	transition: all 1s ease;
	opacity:0.3;
	
}
*/


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
    width: 0px;
    height: 0px;
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

.main, .sub {
  list-style: none;
  padding: 0;
  margin: 0;
}

.main a {
  display: block;
  text-decoration: none;
  padding: 10px;
  color: #000;
}

.main li:hover .sub {
  display: block;
  max-height: 100%;
}

.sub a {
  background-color: #999;
}

.sub a:hover {
  background-color: #666;
}


.sub {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
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

<div class="col-xs-3" style="padding-left:22px;     margin-bottom: 36px;">
<div class="logo">
<a href="./index.php">
<img src="./image/logo.png" style="height:100px; width:250px;"></img>
</a>
</div>
</div>

<div class="col-sm-9" style="padding-right:22px; margin-top: 17px;">
<div class="menu">
<b><a href="./mp_user/mp_user_registration/index.php">Login</a></b>
</div>
<div class="menu">
<b><a href="./mp_user/mp_user_registration/mp_user_registration.php">SignUp</a></b>
</div>

</div>

<div class="col-sm-12">
<div class="searchbar wrapper" style="height:39px;">
      <form action="search.php" method="get" name="global_search_form">
        <input name="search_form_id" type="hidden" value="18">
		<div class="col-sm-6" style="padding-left:0px;">
		
        <input size="30" id="global_search1" placeholder="Search Keyword" name="keyword" >
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

<!--
    Search Querys for search anything from database
-->

<div class="col-sm-3" id="navigation" style="height:100%; position:absolute; margin-top:13%;">

<?php
	include('./mp_connect.php');
	
	
	$sql1="select * from mp_category";
	$data1=mysqli_query($con,$sql1);
	
?>

	<ul class="main"> 
	<?php while ($rec1=mysqli_fetch_array($data1)) {?>
		<li><a href="search.php?field_id=<?php echo $rec1['category_id']; ?>" ><?php echo $rec1['category_name']; ?></a>
		<ul class="sub">
		<?php 
		$caid=$rec1['category_id'];
		$sql23="select * from mp_field where category_id='$caid'";
		$data23=mysqli_query($con,$sql23);
		
		while ($rec23=mysqli_fetch_array($data23)) {
		?>
			<li><a href="search.php?field_id=<?php echo $rec23['field_id']; ?>" ><?php echo $rec23['field_name']; ?></a></li>
		<?php } ?>
		</ul>
		</li>
	<?php } ?>
	</ul>
</div> 



<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) {
	if($lat2 == 0 && $lon2 == 0)
	{
		return "Please Enable the Location to get the Distance.";
	}
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return round(($miles * 1.609344),2)." KM";
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}
$employee_id = array();
$employeeid_full = array();
$employeeid_half = array();
include("./mp_connect.php");
if(isset($_REQUEST['latitude']))
	$latitude = $_REQUEST['latitude'];
else
	$latitude = 0;
if(isset($_REQUEST['longitude']))
	$longitude = $_REQUEST['longitude'];
else
	$longitude = 0;

if(isset($_REQUEST['keyword']))
{
$q = $_REQUEST['keyword'];


$query1 = "select employee_id from mp_registration where firstname = '".$q."' and lastname = '".$q."'";
$query2 = "select employee_id from mp_registration where firstname = '".$q."'";
$query3 = "select employee_id from mp_registration where lastname = '".$q."'";
//$query4 = "select employee_id from mp_registration where firstname LIKE '%".$q."%'";
//$query5 = "select employee_id from mp_registration where lastname LIKE '%".$q."%'";

$query6 = "select employee_id from mp_category c,mp_registration r where r.category_id = c.category_id and c.category_name = '".$q."'";
$query7 = "select employee_id from mp_category c,mp_registration r where r.category_id = c.category_id and c.category_name LIKE '%".$q."%'";

$query8 = "select employee_id from mp_keyword where keyword1 = '".$q."' or keyword2 = '".$q."'";
$query9 = "select employee_id from mp_keyword where keyword1 = '".$q."'";
$query10 = "select employee_id from mp_keyword where keyword2 = '".$q."'";
$query11 = "select employee_id from mp_keyword where keyword1 LIKE '%".$q."%'";
$query12 = "select employee_id from mp_keyword where keyword2 LIKE '%".$q."%'";

$query13 = "select employee_id from mp_field f,mp_registration r where r.field_id = f.field_id and f.field_name = '".$q."'";
$query14 = "select employee_id from mp_field f,mp_registration r where r.field_id = f.field_id and f.field_name LIKE '%".$q."%'";

//$query19 = "select employee_id from mp_registration where city_name = '".$q."' and state_name = '".$q."' and country_name = '".$q."'";
//$query20 = "select employee_id from mp_registration where city_name = '".$q."'";
//$query21 = "select employee_id from mp_registration where state_name = '".$q."'";
//$query22 = "select employee_id from mp_registration where country_name = '".$q."'";
//$query23 = "select employee_id from mp_registration where city_name LIKE '%".$q."%'";
//$query24 = "select employee_id from mp_registration where state_name LIKE '%".$q."%'";
//$query25 = "select employee_id from mp_registration where country_name LIKE '%".$q."%'";


$words = explode(" ",$q);

$result1 = mysqli_query($con,$query1);
$result2 = mysqli_query($con,$query2);
$result3 = mysqli_query($con,$query3);
//$result4 = mysqli_query($con,$query4);
//$result5 = mysqli_query($con,$query5);
$result6 = mysqli_query($con,$query6);
$result7 = mysqli_query($con,$query7);
$result8 = mysqli_query($con,$query8);
$result9 = mysqli_query($con,$query9);
$result10 = mysqli_query($con,$query10);
$result11 = mysqli_query($con,$query11);
$result12 = mysqli_query($con,$query12);
$result13 = mysqli_query($con,$query13);
$result14 = mysqli_query($con,$query14);

//$result19 = mysqli_query($con,$query19);
//$result20 = mysqli_query($con,$query20);
//$result21 = mysqli_query($con,$query21);
//$result22 = mysqli_query($con,$query22);
//$result23 = mysqli_query($con,$query23);
//$result24 = mysqli_query($con,$query24);
//$result25 = mysqli_query($con,$query25);


if(mysqli_num_rows($result1) > 0)
{
	while($row1 = mysqli_fetch_array($result1))
	{
		array_push($employee_id,$row1['employee_id']);
	}
}
if(mysqli_num_rows($result2) > 0)
{
	while($row2 = mysqli_fetch_array($result2))
	{
		array_push($employee_id,$row2['employee_id']);
	}
}
if(mysqli_num_rows($result3) > 0)
{
	while($row3 = mysqli_fetch_array($result3))
	{
		array_push($employee_id,$row3['employee_id']);
	}
}
//if(mysqli_num_rows($result4) > 0)
//{
//	while($row4 = mysqli_fetch_array($result4))
//	{
//		array_push($employee_id,$row4['employee_id']);
//	}
//}
//if(mysqli_num_rows($result5) > 0)
//{
//	while($row5 = mysqli_fetch_array($result5))
//	{
//		array_push($employee_id,$row5['employee_id']);
//	}
//}
if(mysqli_num_rows($result6) > 0)
{
	while($row6 = mysqli_fetch_array($result6))
	{
		array_push($employee_id,$row6['employee_id']);
	}
}
if(mysqli_num_rows($result7) > 0)
{
	while($row7 = mysqli_fetch_array($result7))
	{
		array_push($employee_id,$row7['employee_id']);
	}
}
if(mysqli_num_rows($result8) > 0)
{
	while($row8 = mysqli_fetch_array($result8))
	{
		array_push($employee_id,$row8['employee_id']);
	}
}
if(mysqli_num_rows($result9) > 0)
{
	while($row9 = mysqli_fetch_array($result9))
	{
		array_push($employee_id,$row9['employee_id']);
	}
}
if(mysqli_num_rows($result10) > 0)
{
	while($row10 = mysqli_fetch_array($result10))
	{
		array_push($employee_id,$row10['employee_id']);
	}
}
if(mysqli_num_rows($result11) > 0)
{
	while($row11 = mysqli_fetch_array($result11))
	{
		array_push($employee_id,$row11['employee_id']);
	}
}
if(mysqli_num_rows($result12) > 0)
{
	while($row12 = mysqli_fetch_array($result12))
	{
		array_push($employee_id,$row12['employee_id']);
	}
}
if(mysqli_num_rows($result13) > 0)
{
	while($row13 = mysqli_fetch_array($result13))
	{
		array_push($employee_id,$row13['employee_id']);
	}
}
if(mysqli_num_rows($result14) > 0)
{
	while($row14 = mysqli_fetch_array($result14))
	{
		array_push($employee_id,$row14['employee_id']);
	}
}

//if(mysqli_num_rows($result19) > 0)
//{
//	while($row19 = mysqli_fetch_array($result19))
//	{
//		array_push($employee_id,$row19['employee_id']);
//	}
//}
//if(mysqli_num_rows($result20) > 0)
//{
//	while($row20 = mysqli_fetch_array($result20))
//	{
//		array_push($employee_id,$row20['employee_id']);
//	}
//}
//if(mysqli_num_rows($result21) > 0)
//{
//	while($row21 = mysqli_fetch_array($result21))
//	{
//		array_push($employee_id,$row21['employee_id']);
//	}
//}
//if(mysqli_num_rows($result22) > 0)
//{
//	while($row22 = mysqli_fetch_array($result22))
//	{
//		array_push($employee_id,$row22['employee_id']);
//	}
//}
//if(mysqli_num_rows($result23) > 0)
//{
//	while($row23 = mysqli_fetch_array($result23))
//	{
//		array_push($employee_id,$row23['employee_id']);
//	}
//}
//if(mysqli_num_rows($result24) > 0)
//{
//	while($row24 = mysqli_fetch_array($result24))
//	{
//		array_push($employee_id,$row24['employee_id']);
//	}
//}
//if(mysqli_num_rows($result25) > 0)
//{
//	while($row25 = mysqli_fetch_array($result25))
//	{
//		array_push($employee_id,$row25['employee_id']);
//	}
//}

$full_words = array_count_values($employee_id);
$half_employeeid = array();
for($i = 0 ;$i<count($words);$i++)
{
	$query15 = "select employee_id from mp_keyword where keyword1 = '".$words[$i]."' or keyword2 = '".$words[$i]."'";
	$query27 = "select employee_id from mp_keyword where keyword1 = '".$words[$i]."'";
	$query28 = "select employee_id from mp_keyword where keyword2 = '".$words[$i]."'";
	$query29 = "select employee_id from mp_keyword where keyword1 LIKE '%".$words[$i]."%'";
	$query30 = "select employee_id from mp_keyword where keyword2 LIKE '%".$words[$i]."%'";
	$query16 = "select employee_id from mp_keyword where keyword1 LIKE '%".$words[$i]."%' or keyword2 LIKE '%".$words[$i]."%'";
	$query17 = "select employee_id from mp_category c,mp_registration r where r.category_id = c.category_id and c.category_name LIKE '%".$words[$i]."%'";
	$query18 = "select employee_id from mp_field f,mp_registration r where r.field_id = f.field_id and f.field_name  LIKE '%".$words[$i]."%'";
	//$query26 = "select employee_id from mp_registration where city_name = '".$words[$i]."' or state_name = '".$words[$i]."' or country_name = '".$words[$i]."'";

	$result15 = mysqli_query($con,$query15);
	$result16 = mysqli_query($con,$query16);
	$result17 = mysqli_query($con,$query17);
	$result18 = mysqli_query($con,$query18);
	$result27 = mysqli_query($con,$query27);
	$result28 = mysqli_query($con,$query28);
	$result29 = mysqli_query($con,$query29);
	$result30 = mysqli_query($con,$query30);
	//$result26 = mysqli_query($con,$query26);
	if(mysqli_num_rows($result15) > 0)
	{
		while($row15 = mysqli_fetch_array($result15))
		{
			array_push($half_employeeid,$row15['employee_id']);
		}
	}
	if(mysqli_num_rows($result16) > 0)
	{
		while($row16 = mysqli_fetch_array($result16))
		{
			array_push($half_employeeid,$row16['employee_id']);
		}
	}
	if(mysqli_num_rows($result17) > 0)
	{
		while($row17 = mysqli_fetch_array($result17))
		{
			array_push($half_employeeid,$row17['employee_id']);
		}
	}
	if(mysqli_num_rows($result18) > 0)
	{
		while($row18 = mysqli_fetch_array($result18))
		{
			array_push($half_employeeid,$row18['employee_id']);
		}
	}
	if(mysqli_num_rows($result27) > 0)
	{
		while($row27 = mysqli_fetch_array($result27))
		{
			array_push($half_employeeid,$row27['employee_id']);
		}
	}
	if(mysqli_num_rows($result28) > 0)
	{
		while($row28 = mysqli_fetch_array($result28))
		{
			array_push($half_employeeid,$row28['employee_id']);
		}
	}
	if(mysqli_num_rows($result29) > 0)
	{
		while($row29 = mysqli_fetch_array($result29))
		{
			array_push($half_employeeid,$row29['employee_id']);
		}
	}
	if(mysqli_num_rows($result30) > 0)
	{
		while($row30 = mysqli_fetch_array($result30))
		{
			array_push($half_employeeid,$row30['employee_id']);
		}
	}
//	if(mysqli_num_rows($result26) > 0)
//	{
//		while($row26 = mysqli_fetch_array($result26))
//		{
//			array_push($half_employeeid,$row26['employee_id']);
//		}
//	}
}

$half_words = array_count_values($half_employeeid);
$employeeid_full = array_keys($full_words);
$employeeid_half_temp = array_keys($half_words);
$employeeid_half = array_diff($employeeid_half_temp,$employeeid_full);
if(count($employeeid_full)>0)
{
	$full_ids = join(',',$employeeid_full);  
	$final_query1 = "select r.*,f.*,c.category_name,cont.latitude,cont.longitude,t.*,p.* from mp_field f,mp_profile p,mp_registration r,mp_contactus cont,mp_theme t,mp_category c where c.category_id=f.category_id and c.category_id = r.category_id and p.employee_id = r.employee_id and cont.employee_id = r.employee_id and t.theme_id = r.theme_id and r.field_id = f.field_id and r.employee_id in (".$full_ids.") ORDER BY FIELD(r.employee_id,".$full_ids.")";
	$final_result1 = mysqli_query($con,$final_query1) or die(mysqli_error($con));
	
}
if(count($employeeid_half)>0)
{
	$half_ids = join(',',$employeeid_half);
	$final_query2 = "select r.*,f.*,c.category_name,cont.latitude,cont.longitude,t.*,p.* from mp_field f,mp_profile p,mp_registration r,mp_contactus cont,mp_theme t,mp_category c where f.category_id=c.category_id and p.employee_id = r.employee_id and c.category_id = r.category_id and cont.employee_id = r.employee_id and t.theme_id = r.theme_id and r.field_id = f.field_id and r.employee_id in (".$half_ids.") ORDER BY FIELD(r.employee_id,".$half_ids.")";
	$final_result2 = mysqli_query($con,$final_query2) or die(mysqli_error($con));
}
}else if(isset($_REQUEST['field_id']))
{
	$fids=$_REQUEST['field_id'];
	$qry = "select employee_id,field_name from mp_registration r,mp_field f where f.field_id = r.field_id and r.field_id LIKE '%".$fids."%'";
	$result = mysqli_query($con,$qry);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{	
			$qry20 = "select field_name from mp_field where field_id = ".$_REQUEST['field_id'];
		$result20 = mysqli_query($con,$qry20);
		$row20 = mysqli_fetch_array($result20);
		$q = $row20['field_name'];
			array_push($employee_id,$row['employee_id']);
		}
		$full_words = array_count_values($employee_id);
		$employeeid_full = array_keys($full_words);
		$full_ids = join(',',$employeeid_full);  
		$final_query1 = "select r.*,f.*,c.category_name,cont.latitude,cont.longitude,t.*,p.* from mp_field f,mp_registration r,mp_contactus cont,mp_theme t,mp_category c,mp_profile p where c.category_id=f.category_id and c.category_id = r.category_id and cont.employee_id = r.employee_id and t.theme_id = r.theme_id and  p.employee_id = r.employee_id and r.field_id = f.field_id and r.employee_id in (".$full_ids.") ORDER BY FIELD(r.employee_id,".$full_ids.")";
		$final_result1 = mysqli_query($con,$final_query1) or die(mysqli_error($con));
	}else
	{
		$qry = "select field_name from mp_field where field_id = ".$_REQUEST['field_id'];
		$result = mysqli_query($con,$qry);
		$row = mysqli_fetch_array($result);
		$q = $row['field_name'];
	}
	
}
?>



<?php
				
					$i= 0;
					if(isset($final_result1))
					{
						$i = mysqli_num_rows($final_result1);
					}
					$j= 0;
					if(isset($final_result2))
					{
						$j = mysqli_num_rows($final_result2);
					}
					$count = $i + $j;
				?>
					
				<div class="col-sm-3">
				</div>	
					
				<p style="margin-bottom:15px;text-align:center;font-size:18px;color:#c03101; margin-left:21%; padding-top:186px;"> <?php echo $count; ?> Result(s) found for "<?php if(isset($q))echo $q; ?>" </p>
<?php
						if(isset($final_result1))
						{
							while($final_row1 = mysqli_fetch_array($final_result1))
							{
							?>
	 
	<div class="col-sm-3">
	</div>	
	 
<div class="col-sm-6 boxstyle" style="margin-left:11%;">
	<div class="col-sm-4 imghover" style="margin:15px 0 15px 0; overflow:hidden;">
		<a href="./mp_subadmin/profile/profile/<?php echo $final_row1['profile_url'] ?>" class="image-popup" title="<?php echo $final_row1['firstname']." ".$final_row1['lastname']; ?>">
			<img src="./mp_subadmin/profile/profile/<?php echo $final_row1['profile_url'] ?>" height="236px" style="width:180px;">
		</a>
	</div>
	<div class="col-sm-7" style="margin-left:30px;">
		<h2 class="fonts"><b><?php echo $final_row1['firstname']."&nbsp&nbsp".$final_row1['lastname']; ?></b></h2><br>
		<h4><img src="./image/degree.png" height="23px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $final_row1['field_name']; ?> </b></h4>
		<h4><img src="./image/call1.png" height="20px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $final_row1['mobile_no']; ?> </b></h4>
		<h4><img src="./image/email.png" height="17px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $final_row1['email_id']; ?> </b></h4>
		<h4><img src="./image/home.png" height="18px" width="22px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $final_row1['city_name'].",".$final_row1['state_name'].",".$final_row1['country_name']; ?></b></h4>
		
		<h5 class="menu float1"><b><a href="./mp_subadmin/theme/<?php echo $final_row1['theme_url']; ?>?eid=<?php echo $final_row1['employee_id']; ?>" target="_blank">Visit Website</a></b></h5>
		
	</div>
</div>			
						<?php } } ?>
						
						
						<?php
						if(isset($final_result2))
						{
							while($final_row2 = mysqli_fetch_array($final_result2))
							{
							?>
							
						<div class="col-sm-3">
	</div>	
							
						<div class="col-sm-6 boxstyle" style="margin-left:11%;">
	<div class="col-sm-4 imghover" style="margin:15px 0 15px 0; overflow:hidden;">
		<a href="./mp_subadmin/profile/profile/<?php echo $final_row2['profile_url'] ?>" class="image-popup" title="<?php echo $final_row2['firstname']." ".$final_row2['lastname']; ?>">
			<img src="./mp_subadmin/profile/profile/<?php echo $final_row2['profile_url'] ?>" height="236px" style="width:180px;">
		</a>
	</div>
	<div class="col-sm-7" style="margin-left:30px;">
		<h2 class="fonts"><b><?php echo $final_row2['firstname']."&nbsp&nbsp".$final_row2['lastname']; ?></b></h2><br>
		<h4><img src="./image/degree.png" height="23px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $final_row2['field_name']; ?> </b></h4>
		<h4><img src="./image/call1.png" height="20px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $final_row2['mobile_no']; ?> </b></h4>
		<h4><img src="./image/email.png" height="17px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $final_row2['email_id']; ?> </b></h4>
		<h4><img src="./image/home.png" height="18px" width="22px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $final_row2['city_name'].",".$final_row2['state_name'].",".$final_row2['country_name']; ?></b></h4>
		
		<h5 class="menu float1"><b><a href="./mp_subadmin/theme/<?php echo $final_row2['theme_url']; ?>?eid=<?php echo $final_row2['employee_id']; ?>" target="_blank">Visit Website</a></b></h5>
		
	</div>
</div>	
<?php } }  
	?>				
					


<!--						
<?php 


include ('mp_connect.php');
if(isset($_REQUEST['field_id']))
{
$fieldid=$_REQUEST['field_id'];

$query="select * from mp_registration where field_id='$fieldid' and type='employee'";
$data=mysqli_query($con,$query);


$query1="select * from mp_field where field_id='$fieldid'";
$data1=mysqli_query($con,$query1);
$rec1=mysqli_fetch_array($data1);

 

while($rec=mysqli_fetch_array($data)) {

$query3="select * from mp_registration where field_id='$fieldid'";
$data3=mysqli_query($con,$query3);
$rec3=mysqli_fetch_array($data3);


 $themeid=$rec3['theme_id'];
 
 $query2="select * from mp_theme where theme_id='$themeid'";
 $data2=mysqli_query($con,$query2);
 $rec2=mysqli_fetch_array($data2);
 
 $eid=$rec['employee_id'];
 
$query6="select * from mp_profile where employee_id='$eid'";
 $data6=mysqli_query($con,$query6);
 $rec6=mysqli_fetch_array($data6);

 ?>
 
 
<div class="col-sm-6 boxstyle" style="margin-left:11%;">
	<div class="col-sm-4 imghover" style="margin:15px 0 15px 0; overflow:hidden;">
		<a href="./mp_subadmin/profile/profile/<?php echo $rec6['profile_url'] ?>" class="image-popup" title="Screenshot-1">
			<img src="./mp_subadmin/profile/profile/<?php echo $rec6['profile_url'] ?>" height="236px" style="width:180px;">
		</a>
	</div>
	<div class="col-sm-6" style="margin-left:30px;">
		<h2 class="fonts"><b><?php echo $rec['firstname']."&nbsp&nbsp".$rec['lastname']; ?></b></h2><br>
		<h4><img src="./image/degree.png" height="23px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $rec1['field_name']; ?> </b></h4>
		<h4><img src="./image/call1.png" height="20px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $rec['mobile_no']; ?> </b></h4>
		<h4><img src="./image/email.png" height="17px" width="20px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $rec['email_id']; ?> </b></h4>
		<h4><img src="./image/home.png" height="18px" width="22px"></img><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $rec['city_name'].",".$rec['state_name'].",".$rec['country_name']; ?></b></h4>
		
		<h5 class="menu float1"><b><a href="./mp_subadmin/theme/<?php echo $rec2['theme_url']; ?>?eid=<?php echo $rec['employee_id']; ?>" target="_blank">Visit Website</a></b></h5>
		
	</div>
</div>

<?php } } ?>
-->

<div style="position:relative; clear:both;  padding-top:1.5%; border-top:1px solid rgba(0, 0, 0, 0.1); margin-top:48%; margin-bottom:-18%">
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
		
		<!--<script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>-->


</body>
</html>