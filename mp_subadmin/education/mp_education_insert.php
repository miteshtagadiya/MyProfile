<!--
    Code for insert education details
-->

<?php
include('../mp_connect.php');

session_start();
$eid=$_SESSION['employee_id'];
if(isset($_POST['submit']))
{	
	$degree=$_POST['degree'];
	$percentage=$_POST['percentage'];
	$employeeid=$_SESSION['employee_id'];
	$syear=$_POST['syear'];
	$eyear=$_POST['eyear'];
	$year1=array($syear,$eyear);
	$year=implode("-",$year1);
	$place=$_POST['place'];
	$institute=$_POST['institute'];
	$path="./marksheet/";
	$i=$_FILES['marksheet']['name'];
		move_uploaded_file($_FILES['marksheet']['tmp_name'],"$path".$i);
	
	$query="insert into mp_education(education_type,education_year,education_percentage,education_place,education_institute,employee_id) values('$degree','$year','$percentage','$place','$institute','$eid')";
	if(mysqli_query($con,$query))
	{
						$que1="select * from mp_skill where employee_id='$eid'";
						$data1=mysqli_query($con,$que1);
						$rec1=mysqli_fetch_array($data1);
		
						$count2=mysqli_num_rows($data1);
						
						if($count2>0)
						{
							$que2="select * from mp_portfolio where employee_id='$eid'";
							$data2=mysqli_query($con,$que2);
							$rec2=mysqli_fetch_array($data2);
		
							$count3=mysqli_num_rows($data2);
								if($count3>0)
								{
									$que3="select * from mp_contactus where employee_id='$eid'";
									$data3=mysqli_query($con,$que3);
									$rec3=mysqli_fetch_array($data3);
		
									$count4=mysqli_num_rows($data3);
									if($count4>0)
									{
									header('location:../../mp_subadmin/education/mp_education_display.php');
									}
									else
									{
										header('location:../../mp_subadmin/contact/contactus.php');
									}
								}
								else
								{
									header('location:../../mp_subadmin/mp_portfolio/portfolio_main.php');
								}
						}
						else
						{
							header('location:../../mp_subadmin/skill/mp_skill.php');
						}
			
	}
	else
	{
		header("location:mp_education.php");
	}
}

?>