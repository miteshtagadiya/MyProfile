<?php
include('../mp_connect.php');

session_start();
$eid=$_SESSION['employee_id'];
$id=$_GET['id'];

$query="delete from mp_education where education_id='$id'";

if(mysqli_query($con,$query))
{	
	
	header("location:mp_education_display.php");
}
else
{
	header("location:mp_education_display.php");
}

?>