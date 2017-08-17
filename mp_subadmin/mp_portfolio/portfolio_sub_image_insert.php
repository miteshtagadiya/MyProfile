<!-- Subimage insert code -->

<?php
include('../mp_connect.php');

session_start();
$id=$_GET['id'];
$eid=$_SESSION['employee_id'];
if(isset($_POST['submit']))
{	
	$emailid=$_SESSION['email_id'];
	$employeeid=$_SESSION['employee_id'];
	
	$query1="select * from mp_portfolio where portfolio_id='$id'";
	$data=mysqli_query($con,$query1);
	$row=mysqli_fetch_array($data);
	
	$portfolio_id=$_SESSION['portfolio_id'];
	$portfolioid=$row['portfolio_id'];
	$title=$row['portfolio_title'];
	$image = $_FILES['addimage']['tmp_name'];
	$imagename = $_FILES['addimage']['name'];
	$len = count($image);
	$path="./portfolio_image/$emailid/portfolio_subimage/";
			for ($i = 0; $i < $len; $i++) 
			{
             
					if(move_uploaded_file($image[$i], "$path".$imagename[$i])) 
					{
						$query="insert into mp_portfolio_image(portfolio_image_url,portfolio_id) values('$imagename[$i]','$portfolioid')";
						if(mysqli_query($con,$query))
						{
							$que="select * from mp_contactus where employee_id='$eid'";
							$data=mysqli_query($con,$que);
							$rec=mysqli_fetch_array($data);
		
							$count1=mysqli_num_rows($data);
		
							if($count1>0)
							{
								//header('location:portfolio_sub_image_display.php?id='.$id);
								header('location:portfolio_display.php');
							}
							else
							{
								header("location:../contact/contactus.php");
							}
						}
						else
						{
							header("location:portfolio_sub_image.php");
						}
					}
			}
	
}

?>