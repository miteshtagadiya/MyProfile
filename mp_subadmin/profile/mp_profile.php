<?php 
include ("../include/header.php");
include ("../include/menu.php");
include	("../mp_connect.php");
$eid=$_SESSION['employee_id'];

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
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Add Profile</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" action="mp_profile_insert.php" enctype="multipart/form-data" method="post">
                                     
										<div class="form-group">
											<label>Add Image</label>
											<input type="file" class="filestyle" data-buttonname="btn-white" name="profile" placeholder="Maximum 10 Images" multiple />
										</div>
									
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