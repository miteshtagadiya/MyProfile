<?php

include("../mp_connect.php");

$id=$_GET['id'];

$query="delete from mp_skill where skill_id='$id'";
if(mysqli_query($con,$query))
{
	header('location:mp_skill_display.php');
}
else
{
	header('location:mp_skill_display.php');
}


?>