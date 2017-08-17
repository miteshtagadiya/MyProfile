<!-- This code is foor insert new type -->

<?php

include ('../mp_connect.php');

if(isset($_POST['submit'])){

	$type=$_POST['typename'];
	
	$query="insert into mp_type(type_name) values('$type')";
	if(mysqli_query($con,$query)){
		header('location:mp_type_display.php');
	}else
	{
	    header('location:index.php');
	}
}

?>