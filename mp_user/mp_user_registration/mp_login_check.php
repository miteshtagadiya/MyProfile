<?php

include("../mp_connect.php");

session_start();

if(isset($_POST['login']))
{
	
	$user_id=$_POST['username'];
	$password=$_POST['password'];
	
	$sql2="select * from mp_registration where email_id='$user_id' and password='$password' and type='admin'";
	$results=mysqli_query($con,$sql2);
	$row8=mysqli_fetch_array($results);
	
	$counts=mysqli_num_rows($results);
	
	if($counts==1)
	{
		header('location:../../mp_superadmin/index.php');
	}
	else
	{
	$sql="select * from mp_registration where email_id='$user_id' and password='$password' and type='employee'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($row['isapprove']==1)
	{
	$count=mysqli_num_rows($result);
	
	if($count==1)
	{
		$eid=$row['employee_id'];
		$query1="update mp_registration set status='1' where employee_id='$eid'";
		$data1=mysqli_query($con,$query1);
		$_SESSION['employee_id']=$row['employee_id'];
		$_SESSION['user_firstname']=$row['firstname'];
		$_SESSION['email_id']=$row['email_id'];
		$_SESSION['user_lastname']=$row['lastname'];
		$eid=$row['employee_id'];
		
		$que="select * from mp_education where employee_id='$eid'";
		$data=mysqli_query($con,$que);
		$rec=mysqli_fetch_array($data);
		
		$count1=mysqli_num_rows($data);
		
		
		if($count1>0)
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
										$query4="select * from mp_profile where employee_id='$eid'";
										$data4=mysqli_query($con,$query4);
										$rec4=mysqli_fetch_array($data4);
										
										$count5=mysqli_num_rows($data4);
										
										if($count5>0)
										{
											$query5="select * from mp_keyword where employee_id='$eid'";
											$data5=mysqli_query($con,$query5);
											$rec5=mysqli_fetch_array($data5);
										
											$count6=mysqli_num_rows($data5);
										
											if($count6>0)
											{
												header('location:../../mp_subadmin/education/mp_education_display.php');
											}
											else
											{
												header('location:../../mp_subadmin/keyword/mp_keyword.php');
											}
										}
										else
										{
											header('location:../../mp_subadmin/profile/mp_profile.php');
										}
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
			header('location:../../mp_subadmin/education/mp_education.php');
		}
	//echo "<script> alert('Login..')</script>";
	}
	
	
	
else 
{
	echo "<script> alert('Wrong username or password..')</script>";
}	
	}
else if($row['isapprove']==2)
{
	echo "You are suspended";
}
else
{
	echo "You are not approved";
}	
}
}
?>