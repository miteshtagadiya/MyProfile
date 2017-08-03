<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myprofile";

$con=  mysql_connect($servername,$username,$password,$dbname) or die("fail to connect");

mysql_select_db("myprofile",$con);
?>
