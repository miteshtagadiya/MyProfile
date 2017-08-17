<?php 
include('../include/header.php');
include('../include/menu.php');

include('../mp_connect.php');

if(!isset($_SESSION['employee_id']))
{
		header("location:../../mp_user/mp_user_registration/index.php");
}
else
{
$employeeid=$_SESSION['employee_id'];
}

$sql = "select * from mp_theme";
$result = mysqli_query($con,$sql);


$sql11 = "select * from mp_registration where employee_id = $id";

$result11 = mysqli_query($con,$sql11);

$row11 = mysqli_fetch_array($result11);

$theme_id = $row11['theme_id'];

?>

        <!-- Theme display   -->

        <div class="wrapper" style="margin-top:175px;">
            <div class="container" >

                <!-- Page-Title -->
                <center>
				<div class="row" style="margin-top:30px;">
                    <div class="col-sm-12">
                        
                        <h4 class="page-title">Select Your Theme</h4>
                       

                    </div>
                </div>
				</center>
                <!-- Page-Title -->


                <div class="row port">
                    <div class="portfolioContainer">
                       
					<?php 
					while($row = mysqli_fetch_assoc($result))
					{
					?>

					   <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                            <div class="gal-detail thumb">
                                <a href="<?php echo $row['theme_icon'];?>" class="image-popup" title="Screenshot-1">
                                    <img src="<?php echo $row['theme_icon'];?>" style="width:260px;height:200px;" class="thumb-img" alt="work-thumbnail">
                                </a>
								<?php
								
								if($theme_id == $row['theme_id'])
								{
								?>			
								<a href="#" style="margin-top:10px;" class="btn btn-primary waves-effect waves-light"
									   role="button">Selected</a>
								<?php
								
								}
								else
								{
								?>	   
								<a href="theme_apply.php?id=<?php echo $row['theme_id'];?>" style="margin-top:10px;" class="btn btn-primary waves-effect waves-light"
									   role="button">Apply Theme</a>
									   
								<?php
								
								}
								
								?>   
								<a href="<?php echo $row['theme_url'];?>?eid=<?php echo $id;?>" style="margin-top:10px;" class="btn btn-default waves-effect waves-light m-l-5"
									   role="button" target="_blank">Preview</a>
                            </div>
                        </div>

						  <?php
						}
						?>		
                    </div>
                </div> 
            </div> 
        </div>

<?php 
include('../include/footer.php');
?>
