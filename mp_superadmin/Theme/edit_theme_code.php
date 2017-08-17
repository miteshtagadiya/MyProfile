<!-- The code for edit theme  -->

<?php


include('../mp_connect.php');

$theme_id = $_REQUEST['theme_id'];


if(isset($_POST['submit']))
{

// query


$_FILES['image']["tmp_name"];
$_FILES['image']['name'];
move_uploaded_file($_FILES['image']["tmp_name"],"../../mp_subadmin/theme/images/".$theme_id.$_FILES['image']['name']);

// query
$sql="update mp_theme set theme_icon='images/".$theme_id.$_FILES['image']['name']."' where theme_id=$theme_id";
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

?>
<!--/php-->





