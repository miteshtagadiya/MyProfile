<?php
include ("../mp_connect.php");
$id=$_GET['id'];

$query="delete from mp_field where field_id='$id'";
if(mysqli_query($con,$query))
{
	header("location:mp_field_display.php");
}else
{
	echo "unable to delete";
}

?>