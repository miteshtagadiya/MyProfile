<!-- This page is for update the user details -->

<?php

include ('../mp_connect.php');
$id=$_GET['id'];
if(isset($_POST['submit'])){

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobileno=$_POST['mobileno'];
	$dob=$_POST['dateofbirth'];
	$dateofbirth=date("Y-m-d",strtotime($dob));
	$gender=$_POST['gender'];
	$registerdate=date('Y-m-d');
	//mkdir("../../mp_subadmin/mp_portfolio/portfolio_image/$email",0777,true);
	//mkdir("../../mp_subadmin/mp_portfolio/portfolio_image/$email/portfolio_subimage",0777,true);
	$category=$_POST['category'];
	$type=$_POST['type'];
	$isapprove=$_POST['isapprove'];
	
	$query="update mp_registration set firstname='$firstname' ,lastname='$lastname',address='$address',country_name='$country',state_name='$state',city_name='$city',email_id='$email',password='$password',mobile_no='$mobileno',date_of_birth='dateofbirth',gender='$gender',register_date='$registerdate',category_id='$category',type_id='$type',isapprove='$isapprove' where employee_id='$id')" or die("unable to insert");
	if(mysqli_query($con,$query)){
		header('location:index.php');
	}else
	{
	    header('location:user_dashboard.php');
	}
}

$sql="select * from mp_registration where employee_id='$id'";
$data=mysqli_query($con,$sql);
$rec=mysqli_fetch_array($data);

?>

<?php 
include ("../include/header.php");
include ("../include/menu.php");

?>

        <div class="wrapper">
            <div class="container">
                <div class="row">
					<div class="col-sm-3">
                    </div>
					<div class="col-sm-6">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Registration</b></h4>

                            <div class="row">
                               
							   <div class="col-md-12" >
									<?php include('../mp_connect.php');?>
                                    <form class="form-horizontal" role="form" method="post">
										 <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Firstname" name="firstname" value="<?php echo $rec['firstname'];?>">
                                        </div>
                                        
										<div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Lastname" name="lastname" value="<?php echo $rec['lastname'];?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="5" name="address"><?php echo $rec['address'];?></textarea>
                                        </div>                                        
										
										<div class="form-group">
                                            <label>Country</label>
											<select class="form-control select2" name="country" id="countryid" value="<?php echo $rec['country_name'];?>">
											<option value="">--Select Country--</option>
											<option value="India">India</option>
											</select>
										</div>
										
										<div class="form-group">
                                            <label>State</label>
											<select class="form-control select2" name="state" id="stateid" value="<?php echo $rec['state_name'];?>">
											<option value="">--Select State--</option>
											<option value="Gujarat">Gujarat</option>
											</select>
										</div>
										
										<div class="form-group">
                                            <label>City</label>
											<select class="form-control select2" name="city" id="cityid" value="<?php echo $rec['city_name'];?>">
											<option value="">--Select City--</option>
											<option value="Anand(town)">Anand(town)</option>
											<option value="Anjar">Anjar</option>
											<option value="Ankleshwar">Ankleshwar</option>
											<option value="Baroda/Vadodara">Baroda/Vadodara</option>
											<option value="Bharuch">Bharuch</option>
											<option value="Bhavnagar">Bhavnagar</option>
											<option value="Bhuj">Bhuj</option>
											<option value="Dahod">Dahod</option>
											<option value="Dandi">Dandi</option>
											<option value="Dehgam">Dehgam</option>
											<option value="Dholka">Dholka</option>
											<option value="Dwarka">Dwarka</option>
											<option value="Gandhinagar">Gandhinagar</option>
											<option value="Godhra">Godhra</option>
											<option value="Idar">Idar</option>
											<option value="Jamnagar">Jamnagar</option>
											<option value="Junagadh">Junagadh</option>
											<option value="Kheda">Kheda</option>
											<option value="Mandvi">Mandvi</option>
											<option value="Mehsana">Mehsana</option>
											<option value="Nadiad">Nadiad</option>
											<option value="Patan">Patan</option>
											<option value="Porbandar">Porbandar</option>
											<option value="Rajkot">Rajkot</option>
											<option value="Somnath">Somnath</option>
											<option value="Surat">Surat</option>
											<option value="Vallabhi">Vallabhi</option>
											<option value="Valsad">Valsad</option>
											<option value="Vataman">Vataman</option>
											</select>
										</div>
										
										<div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?php echo $rec['email_id'];?>">
                                        </div>
                                        
										<div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $rec['password'];?>">
                                        </div>

										<div class="form-group">
                                            <label>Mobile No.</label>
                                            <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobileno" value="<?php echo $rec['mobile_no'];?>">
                                        </div>
									
										<div class="form-group">
											
											<label>Birth Date</label>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="mm/dd/yyyy" name="dateofbirth" id="datepicker-autoclose" value="<?php echo $rec['date_of_birth'];?>">
													<span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
												</div>
										</div>
										
										<div class="form-group">
										<table>
										<tr>
										<td><label style="margin-right:10px;">Gender</label></td>
										</tr>
										<tr>
										<td>
										<div class="radio radio-info radio-inline">
                                            <input type="radio" value="male" name="gender" >
                                            <label> Male </label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" value="female" name="gender" >
                                            <label> Female </label>
                                        </div>
										</td>
										</tr>
										</table>
										</div>
										
										<div class="form-group">
                                            <label>Category</label>
											<select class="form-control select2" name="category" value="<?php echo $rec['category_id'];?>">
											<option>--Select Category--</option>
											<?php
											$query=mysqli_query($con,"select * from mp_category");
											while($row=mysqli_fetch_array($query))
											{
											?>
											<option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></option>
											<?php 
											}
											?>
											</select>
										</div>
										
										<div class="form-group">
                                            <label>Type</label>
											<select class="form-control select2" name="type" value="<?php echo $rec['type_id'];?>">
											<option>--Select Type--</option>
											<?php
											$query=mysqli_query($con,"select * from mp_type");
											while($row=mysqli_fetch_array($query))
											{
											?>
											<option value="<?php echo $row['type_id']?>"><?php echo $row['type_name'];?></option>
											<?php 
											}
											?>
											</select>
										</div>
										
										
										<div class="form-group">
                                            <label>IsApprove</label>
                                            <input type="text" class="form-control" name="mobileno" value="<?php echo $rec['isapprove'];?>">
                                        </div>
										
										<div class="form-group text-right m-b-0">
										<center>
										<button class="btn btn-primary waves-effect waves-light" type="submit" value="submit" name="submit">
                                        Register
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
					
					<div class="row">
							<div class="col-sm-12 text-center">
								<p>Already have an account? <a href="index.php" class="text-primary m-l-5"><b>Sign In</b></a></p>
							</div>
							</div>
					<div class="col-sm-3">
                    </div>
					
                </div>

<?php include ("../include/footer.php");?>