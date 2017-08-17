<!-- code for delete the portfolio -->

<?php
include('../mp_connect.php');

session_start();
$eid=$_SESSION['employee_id'];
$id=$_GET['id'];

$query="delete from mp_portfolio where portfolio_id='$id'";

if(mysqli_query($con,$query))
{	
	
	header("location:portfolio_display.php");
}
else
{
	echo "not delete".mysqli_error();
}

?>