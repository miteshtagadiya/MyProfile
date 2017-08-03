<?php

include("../mp_connect.php");
session_start();
$eid=$_SESSION['employee_id'];

$query1="update mp_registration set status='0' where employee_id='$eid'";
$data1=mysqli_query($con,$query1);
session_unset();
session_destroy();
header("location:index.php");
//header("location:mp_login_check1.php");

?>