<?php 
include ("../include/header.php");
include ("../include/menu.php");
include	("../mp_connect.php");
$eid=$_SESSION['employee_id'];
$query="select * from mp_portfolio where employee_id='$eid'";
$data=mysqli_query($con,$query);
$id=$_GET['id'];
$query1="select * from mp_portfolio where portfolio_id=$id";
$data=mysqli_query($con,$query1);
$rec1=mysqli_fetch_array($data);
$portfoliotitle=$rec1['portfolio_title'];
?>

        <!-- Add portfolio subimages -->

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    
					<div class="col-sm-3">
                    </div>
					<div class="col-sm-6">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Add Image for <?php echo $portfoliotitle; ?></b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" action="portfolio_sub_image_add_insert.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="post">
                                     
										<div class="form-group">
											<label>Add Image</label>
											<input type="file" class="filestyle" data-buttonname="btn-white" name="addimage[]" placeholder="Maximum 10 Images" multiple />
										</div>
										<?php
											$sql="select * from mp_portfolio_image where portfolio_id='$id'";
											$data1=mysqli_query($con,$sql);
											$count1=mysqli_num_rows($data1);
											$c=11-$count1;
										?>
										
										<b style="font-size:12px;">Upload Maximum <?php echo $c;?> Images</b>
										<div class="form-group text-right m-b-0">
										<center>
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit" value="submit">
                                        Submit
										</button>
										<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                        Cancel
										</button>
										</center>
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