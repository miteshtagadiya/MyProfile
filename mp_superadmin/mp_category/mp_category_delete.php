<!--
    For delete category
-->

<?php
include ("../mp_connect.php");
$id=$_GET['id'];

$query="delete from mp_category where category_id='$id'";
if(mysqli_query($con,$query))
{
	header("location:mp_category_display.php");
}else
{
	echo "unable to delete";
}

?>