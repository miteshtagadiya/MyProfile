<!--
    This page is inserts the data into the database.
-->
<?php

include ('../mp_connect.php');

if(isset($_POST['submit'])){

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobileno=$_POST['mobileno'];
	$dob=$_POST['dateofbirth'];
	$dateofbirth=date("Y-m-d",strtotime($dob));
	$gender=$_POST['gender'];
	$registerdate=date('Y-m-d');
	mkdir("../../mp_subadmin/mp_portfolio/portfolio_image/$email",0777,true);
	mkdir("../../mp_subadmin/mp_portfolio/portfolio_image/$email/portfolio_subimage",0777,true);
	$category=$_POST['category'];
	$field=implode(',', $_POST['field']);
	$typeid=$_POST['type'];
	$isapprove=0;
	$type='employee';
	
	$query="insert into mp_registration(firstname,lastname,address,country_name,state_name,city_name,email_id,password,mobile_no,date_of_birth,gender,register_date,category_id,field_id,type_id,isapprove,type) values('$firstname','$lastname','$address','$country','$state','$city','$email','$password','$mobileno','$dateofbirth','$gender','$registerdate','$category','$field','$typeid','$isapprove','$type')" or die("unable to insert");
	if(mysqli_query($con,$query)){
		header('location:index.php');
	}else
	{
	    header('location:mp_user_registration.php');
	}
}

?>