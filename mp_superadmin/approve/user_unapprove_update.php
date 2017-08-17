<!-- Displays the unapproved users. -->
<?php
include("../mp_connect.php");

$id=$_GET['id'];

$query="update mp_registration set isapprove='0' where employee_id='$id'";
if(mysqli_query($con,$query))
{
	header("location:user_approve_pending.php");
}
else
{
	header("location:user_approve_pending.php");
}
?>