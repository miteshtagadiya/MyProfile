<?php
include("../mp_connect.php");

$id=$_GET['id'];

$query="update mp_registration set isapprove='2' where employee_id='$id'";
if(mysqli_query($con,$query))
{
	
	header("location:user_dashboard.php");
	
}
else
{
	echo "Value can't be changed.";
}
?>