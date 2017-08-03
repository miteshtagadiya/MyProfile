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
                    
					
					
				<div class="col-sm-12">
					<div class="">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Portfolio</b></h4>


								<div class="row">
                               
							   
                                    <form role="form" action="portfolio_insert.php" enctype="multipart/form-data" method="post">
                                        <div class="col-sm-6">
											<div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Portfolio Title ex.PhotoShop or WordPress etc." name="title">
											</div>
                                        </div>
										
										<div class="col-sm-6">
											<div class="form-group">
											<label>Title Image</label>
											<input type="file" class="filestyle" data-buttonname="btn-white" name="mainimage">
											</div>
										</div>
										
										<div class="col-sm-12">
										<div class="form-group">
                                            <label>Description</label>
                                            <textarea class="ckeditor" rows="5" name="description"></textarea>
                                        </div>
										<div class="col-sm-12">
										
										
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
										
										</div>
										</div>

                                    </form>
                                
								
							   
                                


								</div>		
                       
						</div>
						<div class="col-sm-3">
						</div>
					</div>
                </div>
			</div>
				


               




              

<?php include ("../include/footer.php"); ?>