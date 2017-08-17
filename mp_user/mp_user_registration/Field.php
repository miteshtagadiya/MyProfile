<!-- For displaying field on user side-->

<?php
$con = new mysqli('localhost', 'root', '',"myprofile");
if ($con->connect_errno) {
die('Could not connect: ' . $con->connect_error);
}

$country=intval($_GET['category']);

$query="SELECT field_id,field_name FROM mp_field WHERE category_id='$country'";
$result=$con->query($query);

?>
<select class="form-control select2" data-placeholder="Choose ..." name="field">
<?php while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
    <option value=<?php echo $row['field_id']?>><?php echo $row['field_name']?></option>
<?php } ?>
</select>
