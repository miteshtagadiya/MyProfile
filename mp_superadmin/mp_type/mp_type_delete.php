<?php
include ("../mp_connect.php");
$id=$_GET['id'];

$query="delete from mp_type where type_id='$id'";
if(mysqli_query($con,$query))
{
	header("location:mp_type_display.php");
}else
{
	header("location:mp_type_display.php");
}

?>