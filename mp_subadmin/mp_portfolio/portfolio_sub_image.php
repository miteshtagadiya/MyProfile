<?php 
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");

$id=$_GET['id'];
//$query="select m.portfolio_id,m.portfolio_title,m.employee_id,s.portfolio_image_id,s.portfolio_image_url from mp_portfolio m,mp_portfolio_image s where m.portfolio_id=s.portfolio_id and portfolio_id='$id'";
$query="select * from mp_portfolio where portfolio_id='$id'";
$data=mysqli_query($con,$query);
$rec=mysqli_fetch_array($data);
?>

        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

               


                <div class="row">
                    
					<div class="col-sm-3">
                    </div>
					
					
					<div class="col-sm-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Portfolio Image for <?php echo $rec['portfolio_title'];?></b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" action="portfolio_sub_image_insert.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="post">
                                        
										<div class="form-group">
											<label>Add Image</label>
											<input type="file" class="filestyle" data-buttonname="btn-white" name="addimage[]" multiple />
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