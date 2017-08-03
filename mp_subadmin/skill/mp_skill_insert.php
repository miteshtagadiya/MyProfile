<?php
include('../mp_connect.php');

session_start();
$emailid=$_SESSION['email_id'];
$employeeid=$_SESSION['employee_id'];
	
	
if(isset($_POST['submit']))
{
	$emailid=$_SESSION['email_id'];
	$employeeid=$_SESSION['employee_id'];
	$skill=$_POST['skill'];
	$capicity=$_POST['capicity'];
	
	$query="insert into mp_skill(skill_name,skill_capicity,employee_id) values('$skill','$capicity','$employeeid')";
	if(mysqli_query($con,$query))
	{
		$que2="select * from mp_portfolio where employee_id='$employeeid'";
							$data2=mysqli_query($con,$que2);
							$rec2=mysqli_fetch_array($data2);
		
							$count3=mysqli_num_rows($data2);
								if($count3>0)
								{
									$que3="select * from mp_contactus where employee_id='$employeeid'";
									$data3=mysqli_query($con,$que3);
									$rec3=mysqli_fetch_array($data3);
		
									$count4=mysqli_num_rows($data3);
									if($count4>0)
									{
									header('location:mp_skill_display.php');
									}
									else
									{
										header('location:../contact/contactus.php');
									}
								}
								else
								{
									header('location:../mp_portfolio/portfolio_main.php');
								}
		
	}
	else
	{
		header('location:mp_skill.php');
	}
}

?>