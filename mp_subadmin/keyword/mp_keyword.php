<?php 
include ("../include/header.php");
include ("../include/menu.php");
?>

        <!-- index page of keyword -->

        <div class="wrapper">
            <div class="container">
            <div class="row">
                    
					<div class="col-sm-3">
					</div>
					
				<div class="col-sm-6">
					<div class="">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Keyword</b></h4>
								<div class="row">
                                    <form role="form" action="mp_keyword_insert.php" enctype="multipart/form-data" method="post">
										<div class="col-sm-12">
											<div class="form-group">
                                            <label>Keyword 1</label>
                                            <input type="text" class="form-control" placeholder="Enter Keyword." name="keyword1">
											</div>
                                        </div>
										
										<div class="col-sm-12">
											<div class="form-group">
                                            <label>Keyword 2</label>
                                            <input type="text" class="form-control" placeholder="Enter Keyword." name="keyword2">
											</div>
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
										
                                    </form>
								</div>		
						</div>
						<div class="col-sm-3">
						</div>
					</div>
                </div>
			</div>

<?php include ("../include/footer.php"); ?>