<?php

include ('../mp_connect.php');

if(isset($_POST['submit'])){

	$field=$_POST['fieldname'];
	$category=$_POST['category'];
	
	$query="insert into mp_field(field_name,category_id) values('$field',$category)";
	if(mysqli_query($con,$query)){
		header('location:mp_field_display.php');
	}else
	{
	    header('location:index.php');
	}
}

?>