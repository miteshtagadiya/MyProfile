<!--
    This code if for upload the edited theme
-->

<?php
include('../connect.php');

$tid = $_REQUEST['tid'];	

$dataURL = $_REQUEST['dataURL'];
$encodedData = explode(',', $dataURL);
$encodedData = $encodedData[1];
$decodedData = base64_decode($encodedData);

$sql = "select * from theme where theme_id=$tid";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$icon = $row['theme_icon'];

unlink($icon);

$img_path = "images/theme".$tid.".png";

$img_path2 = "../../../../vendor/Themes/".$img_path;

file_put_contents($img_path2,$decodedData);


$sql1 = "update theme set theme_icon='$img_path'  where theme_id=$tid";

$result1 = mysqli_query($conn,$sql1);		


?>