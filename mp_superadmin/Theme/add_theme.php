<?php 
include ("../include/header.php");
include ("../include/menu.php");
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
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Upload Theme</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" action="upload_theme.php" method="post" name="f1" id="f1" enctype="multipart/form-data">
                                        
                                        
										
										
		                                  
		
										
										
										
                                        <div class="form-group">
											<label>Theme Image</label>
											<input type="file" name="image" class="filestyle" data-buttonname="btn-white">
										</div>
										
										
                                        <div class="form-group">
											<label>Choose a Zip File To Upload</label>
											<input type="file" class="filestyle" name="zip_file" id="zip_file" data-buttonname="btn-white">
										</div>
										
										
										
										
										<div class="form-group text-right m-b-0">
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                        Upload
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



               




              


<?php include ("../include/footer.php");?>