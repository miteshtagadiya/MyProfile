<!--
    Code for insert the portfolio details
-->

<?php
include('../mp_connect.php');

session_start();

if(isset($_POST['submit']))
{
	$emailid=$_SESSION['email_id'];
	$employeeid=$_SESSION['employee_id'];
	$title=$_POST['title'];
	
	
	$description=$_POST['description'];
	$portfoliodate=date('Y-m-d');
	$path="./portfolio_image/$emailid/";
	$i=$_FILES['mainimage']['name'];
		move_uploaded_file($_FILES['mainimage']['tmp_name'],"$path".$i);
	//mkdir("./portfolio_image/$emailid/portfolio_subimage/$title",0777,true);
	$query="insert into mp_portfolio(portfolio_title,portfolio_main_image,portfolio_description,portfolio_date,employee_id) values('$title','$i','$description','$portfoliodate','$employeeid')";
	if(mysqli_query($con,$query))
	{
		$title=$_POST['title'];
		$sql="select * from mp_portfolio where portfolio_title='$title' and employee_id='$employeeid'";
		$data=mysqli_query($con,$sql);
		$rec=mysqli_fetch_array($data);
		$_SESSION['portfolio_id']=$rec['portfolio_id'];
		$id=$rec['portfolio_id'];
		header("location:portfolio_sub_image.php?id=".$id);
	}
	else
	{
		header("location:portfolio_main.php");
	}
}

?>