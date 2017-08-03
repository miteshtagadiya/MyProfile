<?php

include ('../mp_connect.php');

if(isset($_POST['submit'])){

	$category=$_POST['categoryname'];
	
	$query="insert into mp_category(category_name) values('$category')";
	if(mysqli_query($con,$query)){
		header('location:mp_category_display.php');
	}else
	{
	    header('location:index.php');
	}
}

?>