
<?php 

function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));

        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }

        return rmdir($path);
    }

    else if (is_file($path) === true)
    {
        return unlink($path);
    }

    return false;
}

$theme_id = $_REQUEST['theme_id'];

include('../mp_connect.php');	

// delete query

$sql = "select * from mp_theme where theme_id = '$theme_id'"; 

$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{
unlink("../../mp_subadmmin/theme/".$row['theme_icon']);
Delete("../../mp_subadmmin/theme/".$row['theme_name']);

}

$sql1 = "delete from mp_theme where theme_id = '$theme_id'"; 

$result1 = mysqli_query($con,$sql1);

if(!$result1)
{
	echo mysqli_error($conn);	
}
else
{
	header('location:view_theme.php');
}

?>
