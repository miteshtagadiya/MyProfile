<?php
include('../mp_connect.php');

session_start();

if(isset($_POST['submit']))
{
	$employeeid=$_SESSION['employee_id'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact1=$_POST['contact1'];
	$contact2=$_POST['contact2'];
	$email=$_POST['email'];
	$latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];
	
	$query="insert into mp_contactus(contactus_name,contactus_address,contactus_phone_1,contactus_phone_2,contactus_emailid,latitude,longitude,employee_id) values('$name','$address','$contact1','$contact2','$email','$latitude','$longitude','$employeeid')";
	if(mysqli_query($con,$query))
	{
							$que="select * from mp_profile where employee_id='$employeeid'";
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
								header("location:../profile/mp_profile.php");
							}
	}
	else
	{
		header("location:contactus.php");
	}
}

?>