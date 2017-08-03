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
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Skill</b></h4>


                            <div class="row">
                               
							   
                                    <form class="form" role="form" action="mp_skill_insert.php" enctype="multipart/form-data" method="post">
                                        <div class="col-sm-6">
										<div class="form-group">
                                            <label for="exampleInputEmail1">Skill name</label>
                                            <input type="text" class="form-control" placeholder="Enter skill name" name="skill">
                                        </div>
                                        </div>
										
										<div class="col-sm-6">
										<div class="form-group">
										<label for="exampleInputEmail1">Skill Capacity</label>
											
												<input name="capicity" type="text" id="range_01">
											
										</div>										
										</div>
										
										
										<div class="form-group text-right m-b-0">
										
										<center>
										
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit" value="submit">
                                        Submit
										</button>
										<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                        Cancel
										</button>
										<center>
										</div>
										
										

                                    </form>
								
							   
                                


                            </div>
                        </div>
                    </div>
					<div class="col-sm-3">
                    </div>
					
                </div>



               
<?php include ('../include/footer.php');?>