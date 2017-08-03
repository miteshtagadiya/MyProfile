<?php
include('../mp_connect.php');

session_start();
$eid=$_SESSION['employee_id'];
$id=$_GET['id'];
if(isset($_POST['submit']))
{
	$pid=$_SESSION['$pid'];
	$employeeid=$_SESSION['employee_id'];
	$emailid=$_SESSION['email_id'];
	
	$query1="select * from mp_portfolio where portfolio_id='$id'";
	$data=mysqli_query($con,$query1);
	$row=mysqli_fetch_array($data);
	
	$title=$row['portfolio_title'];
	$portfolio_id=$id;
	$portfolioid=$row['portfolio_id'];
	$image = $_FILES['addimage']['tmp_name'];
	$imagename = $_FILES['addimage']['name'];
	$title=$row['portfolio_title'];
	$len = count($image);
	
	$sql="select * from mp_portfolio_image where portfolio_id='$id'";
	$data1=mysqli_query($con,$sql);
	$count1=mysqli_num_rows($data1);
	$c=11-$count1;
	
	if($len>$c)
	{
		
		echo '<script language="javascript">';
		echo 'alert("message successfully sent")';
		echo '</script>';
		header('location:portfolio_sub_image_add.php?id='.$id);
		
		
		//echo "YOU CAN UPLOAD MAXIMUM 10 IMAGES";
	}
	else
	{
	$path="./portfolio_image/$emailid/portfolio_subimage/";
			for ($i = 0; $i < $len; $i++) 
			{
             
					if(move_uploaded_file($image[$i], "$path".$imagename[$i])) 
					{
						$query="insert into mp_portfolio_image(portfolio_image_url,portfolio_id) values('$imagename[$i]','$portfolioid')";
						if(mysqli_query($con,$query))
						{

							header('location:portfolio_sub_image_display.php?id='.$id);
						}
						else
						{
							header("location:portfolio_sub_image_add.php");
						}
					}
			}
	}
}
?>