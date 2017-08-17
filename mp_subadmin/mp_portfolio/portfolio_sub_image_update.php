<!--
    Updates the portfolio subimage
-->

<?php 

include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");
$eid=$_SESSION['employee_id'];

$emailid=$_SESSION['email_id'];
$id1=$_GET['id'];
$query="select * from mp_portfolio_image where portfolio_image_id='$id1'";
$data=mysqli_query($con,$query);
$rec=mysqli_fetch_array($data);
if(isset($_POST['submit']))
{
	
	
	
	$query1="select a.portfolio_id,a.employee_id,a.portfolio_title,b.portfolio_image_id,b.portfolio_image_url,b.portfolio_id from mp_portfolio a,mp_portfolio_image b where a.portfolio_id=b.portfolio_id and portfolio_image_id='$id1'";
	$data=mysqli_query($con,$query1);
	$row=mysqli_fetch_array($data);
	
	
	$portfolioid=$row['portfolio_id'];

	$path="./portfolio_image/$emailid/portfolio_subimage/";
	$i=$_FILES['addimage']['name'];
	if(empty($i))
	{
			$i=$rec['portfolio_image_url'];
	}
	else
	{
		$i=$_FILES['addimage']['name'];
		move_uploaded_file($_FILES['addimage']['tmp_name'],"$path".$i);
	}
	$query="update mp_portfolio_image set portfolio_image_url='$i', portfolio_id='$portfolioid' where portfolio_image_id='$id1'";
	if(mysqli_query($con,$query))
	{
		header("location:portfolio_sub_image_display.php?id=".$portfolioid);
	}
	else
	{
		echo "portfolio_sub_iamge_update";
	}
}


?>
?>

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    
					<div class="col-sm-3">
                    </div>
					
					
					<div class="col-sm-6">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Portfolio Image</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
                                        
										<div class="form-group">
											<label>Add Image</label>
											<div>
												<img src="./portfolio_image/<?php echo $emailid; ?>/portfolio_subimage/<?php echo $rec['portfolio_image_url']; ?>" height="100px" width="100px"></img>
											</div>
											<input type="file" class="filestyle" data-buttonname="btn-white" name="addimage" value="<?php echo $rec['portfolio_image_url']; ?>">
										</div>
										
										<div class="form-group text-right m-b-0">
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit" value="submit">
                                        Submit
										</button>
										<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                        Cancel
										</button>
										</div>
										
										

                                    </form>
                                </div>
								
                            </div>
                        </div>
                    </div>
					<div class="col-sm-3">
                    </div>
					
                </div>

<?php include ("../include/footer.php"); ?>