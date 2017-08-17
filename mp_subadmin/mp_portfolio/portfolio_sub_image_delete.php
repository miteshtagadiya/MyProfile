<!--
    Code for delet subimages
-->
<?php
include('../mp_connect.php');

session_start();
$pid=$_SESSION['$pid'];
$eid=$_SESSION['employee_id'];
$emailid=$_SESSION['email_id'];
$id=$_GET['id'];
$query1="select a.portfolio_id,a.employee_id,a.portfolio_title,b.portfolio_image_id,b.portfolio_image_url,b.portfolio_id from mp_portfolio a,mp_portfolio_image b where a.portfolio_id=b.portfolio_id and portfolio_image_id='$id'";
$data1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($data);
$portfolioid=$row1['portfolio_id'];

//$sql="select * from mp_portfolio_image where portfolio_image_id='$id'";
//$data=mysqli_query($con,$sql);
//$rec=mysqli_fetch_array($data);
//$path="./portfolio_image/$emailid/portfolio_subimage/";
//unlink("$path".$rec['portfolio_image_url']);

$query="delete from mp_portfolio_image where portfolio_image_id='$id'";

if(mysqli_query($con,$query))
{	
	//unlink("$path".$rec['portfolio_image_url']);
	header("location:portfolio_sub_image_display.php?id=".$pid);
}
else
{
	echo "not delete".mysqli_error();
}

?>