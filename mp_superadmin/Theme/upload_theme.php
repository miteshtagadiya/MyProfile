<?php
ob_start();
?>

<?php

error_reporting(E_ALL);

if(isset($_REQUEST['submit']))
{

if(isset($_FILES["zip_file"]["name"]) && isset($_FILES["image"]["name"])) 
{

$filename = $_FILES["zip_file"]["name"];

echo $filename;

$source = $_FILES["zip_file"]["tmp_name"];

echo $source;

$type = $_FILES["zip_file"]["type"];

//echo $type;

$name = explode(".", $filename);


$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');

foreach($accepted_types as $mime_type) 
{
if($mime_type == $type) 
{
$okay = true;
break;
} 
}



$path="C:\\wamp\\www\\myprofile\\mp_subadmin\\theme".'\\';

$filenoext = basename ($filename, '.zip');  // absolute path to the directory where zipper.php is in (lowercase)
$filenoext = basename ($filenoext, '.ZIP');  // absolute path to the directory where zipper.php is in (when uppercase)

$targetdir = $path . $filenoext; // target directory

echo $targetdir;

$targetzip = $path . $filename; // target zip file

echo $targetzip;


if(is_dir($targetdir)) 	
{ 

header('location:add_theme.php?e=1');
}

else
{

mkdir($targetdir, 0777);
if(move_uploaded_file($source, $targetzip)) 
{
$zip = new ZipArchive();
$x = $zip->open($targetzip);  // open the zip file to extract

if ($x === true) 
{
$zip->extractTo($targetdir); // place in the directory with same name  
$zip->close();
unlink($targetzip);

}


include('../mp_connect.php');

$file_path = $name[0]."/index.php";


$sql = "insert into mp_theme(theme_id,theme_name,theme_url) values('','".$name[0]."','".$file_path."')";

if(!mysqli_query($con,$sql))
{
	echo mysqli_error($con);
}
else
{
		$last_id=$con->insert_id;
	    $_FILES['image']["tmp_name"];
	    $_FILES['image']['name'];
		move_uploaded_file($_FILES['image']["tmp_name"],"../../mp_subadmin/theme/images/".$last_id.$_FILES['image']['name']);
		
		// query with file path
		
		$sql="update mp_theme set theme_icon='images/".$last_id.$_FILES['image']['name']."' where theme_id=$last_id";
		if(!mysqli_query($con,$sql))
		{
		     echo mysqli_error($con);
		}
		else
		{
			
			// path
	header('location:view_theme.php');
		}	
				
		
	
}
}
else 
{	
echo "</br> File moving  Problem....";
header('location : add_theme.php?q=1');
}

}


}	
else
{
echo '</br> File not fetched.....';
header('location : add_theme.php?u=1');
}
}

else
{
echo "<script> alert(ELSE); </script>";
}
?>