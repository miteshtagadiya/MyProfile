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
                        <div class="card-box">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;">Sign In to <b>MY PROFILE</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
									<?php include('../mp_connect.php');?>
                                    <form class="form-horizontal" role="form" action="mp_login_check.php" method="post">
                                        
										
										<div class="form-group">
                                            <label>User Name</label>
                                            <input type="email" class="form-control" placeholder="Username" name="username" required>
                                        </div>
                                        
										<div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                                        </div>
										
										<div class="form-group ">
										<div class="col-xs-12">
											<div class="checkbox checkbox-primary">
												<input id="checkbox-signup" type="checkbox">
													<label for="checkbox-signup">
														Remember me
													</label>
											</div>
                        
										</div>
										</div>
										
										<div class="form-group text-right m-b-0">
										<center>
										<button class="btn btn-primary waves-effect waves-light" type="submit" value="Log In" name="login">
                                        Log In
										</button>
										</center>
										</div>
										
										<div class="form-group m-t-30 m-b-0">
											<div class="col-sm-12">
												<a href="mp_forgot_password.php" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
											</div>
										</div>

                                    </form>
                                </div>
								
							   
                                


                            </div>
							
							
                        </div>
                    </div>
					
					<div class="row">
							<div class="col-sm-12 text-center">
								<p>Don't have an account? <a href="mp_user_registration.php" class="text-primary m-l-5"><b>Sign Up</b></a></p>
							</div>
							</div>
					<div class="col-sm-3">
                    </div>
					
                </div>



               




              


<?php include ("../include/footer.php");?>