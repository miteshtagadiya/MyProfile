<!--
    Code for insert new keyword
-->
<?php
include('../mp_connect.php');

session_start();

if(isset($_POST['submit']))
{
	$employeeid=$_SESSION['employee_id'];
	$keyword1=$_POST['keyword1'];
	$keyword2=$_POST['keyword2'];
	
	$query="insert into mp_keyword(keyword1,keyword2,employee_id) values('$keyword1','$keyword2','$employeeid')";
	if(mysqli_query($con,$query))
	{

		header('location:../education/mp_education_display.php');
	}
	else
	{
		header("location:mp_keyword_insert.php");
	}
}
	

?>