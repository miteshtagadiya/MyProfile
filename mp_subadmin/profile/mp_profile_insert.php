<?php
include('../mp_connect.php');

session_start();

if(isset($_POST['submit']))
{
	$emailid=$_SESSION['email_id'];
	$employeeid=$_SESSION['employee_id'];
	
	$path="./profile/";
	$i=$_FILES['profile']['name'];
		move_uploaded_file($_FILES['profile']['tmp_name'],"$path".$i);
	//mkdir("./portfolio_image/$emailid/portfolio_subimage/$title",0777,true);
	$query="insert into mp_profile(profile_url,employee_id) values('$i','$employeeid')";
	if(mysqli_query($con,$query))
	{
		$que="select * from mp_keyword where employee_id='$employeeid'";
							$data=mysqli_query($con,$que);
							$rec=mysqli_fetch_array($data);
		
							$count1=mysqli_num_rows($data);
		
							if($count1>0)
							{
								//header('location:portfolio_sub_image_display.php?id='.$id);
								header('location:../education/mp_education_display.php');
							}
							else
							{
								header("location:../keyword/mp_keyword.php");
							}
		
	}
	else
	{
		mysqli_error();
	}
}

?>