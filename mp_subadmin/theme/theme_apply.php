<?php
session_start();

if(isset($_SESSION['employee_id']))
{

include('../mp_connect.php');

$id = $_REQUEST['id'];

$q = "update mp_registration set theme_id = ".$id." where employee_id=".$_SESSION['employee_id'];


mysqli_query($con,$q);

header('location:theme.php');
}
?>