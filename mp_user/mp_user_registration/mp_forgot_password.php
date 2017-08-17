<?php 
include ("../include/header.php");
include ("../include/menu.php");

?>

        <!-- This page is for send the password email -->

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    
					<div class="col-sm-3">
                    </div>
					
					<div class="col-sm-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;">RESET PASSWORD</h4>

							<div class="alert alert-info alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								×
							</button>
							Enter your <b>Email</b> and instructions will be sent to you!
						</div>
							
                            <div class="row">
                               
							   <div class="col-md-12" >
									<?php include('../mp_connect.php');?>
                                    <form class="form-horizontal" role="form" action="mp_forgot_check.php" method="post">
                                        
										
										<div class="form-group">
                                            
                                            <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                                        </div>
                                        
										<div class="form-group text-right m-b-0">
										<center>
										<button class="btn btn-primary waves-effect waves-light" type="submit" value="Log In" name="login">
                                        Log In
										</button>
										</center>
										</div>
										
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php include ("../include/footer.php");?>