<!--
    Updates profile details
-->

<script>
	function validation(){
		var fname=document.getElementById("fname").value;
		var lname=document.getElementById("lname").value;
		var mobileno=document.getElementById("mobileno").value;
		
		var v_mobileno=/^[0-9]{10}$/;
		var v_name=/^[A-Za-z]+$/;
		if(!(v_name.test(fname))){
			alert("Wrong First name");
			return false;
		}
		if(!(v_name.test(lname))){
			alert("Wrong Last name");
			return false;
		}
		if(!(v_mobileno.test(mobileno))){
			alert("Wrong mobileno name");
			return false;
		}
		
		
	}
</script>
<?php 
session_start();
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");
$eid=$_SESSION['employee_id'];
$radiom=$radiof="";
$sql="select * from mp_registration where employee_id='$eid' ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if($row['gender']=="male"){
	$radiom="checked";
}
elseif($row['gender']=="female"){
	$radiof="checked";
}


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
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Personal Details</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
                                <form class="form-horizontal" role="form" method="post">
                                        
										 <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" id="fname" placeholder="Enter Firstname" value="<?php echo $row['firstname'];?>" name="firstname">
                                        </div>
                                        
										<div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" id="lname" placeholder="Enter Lastname" value="<?php echo $row['lastname'];?>" name="lastname">
                                        </div>
										
										<div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="5" id="address" name="address" required><?php echo $row['address'];?></textarea>
                                        </div>                                        
										
										<div class="form-group">
                                            <label>Mobile No.</label>
                                            <input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobileno" value="<?php echo $row['mobile_no'];?>" name="mobileno" required>
                                        </div>
									
										<div class="form-group">
											
											<label>Birth Date</label>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="mm/dd/yyyy" name="dateofbirth" value="<?php $date=date_create($row['date_of_birth']);echo date_format($date,"m/d/Y"); ?>" id="datepicker-autoclose" required>
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
                                            <input type="radio" value="male" name="gender" <?php echo $radiom;?>>
                                            <label> Male </label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" value="female" name="gender" <?php echo $radiof;?>>
                                            <label> Female </label>
                                        </div>
										</td>
										</tr>
										</table>
										</div>
						
										<div class="form-group text-right m-b-0">
										<center>
										<button class="btn waves-effect waves-light" style="background-color:#ce241b; color:#fff;" type="submit" value="submit" name="submit" onclick="return validation();">
                                        Update(save)
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

<?php include ("../include/footer.php");

if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$mobileno=$_POST['mobileno'];
	$dob=$_POST['dateofbirth'];
	$dateofbirth=date("Y-m-d",strtotime($dob));
	$gender=$_POST['gender'];
	
	$query="update mp_registration set firstname='$firstname',lastname='$lastname',address='$address',mobile_no='$mobileno',date_of_birth='$dateofbirth',gender='$gender' where employee_id='$eid'";
	if(mysqli_query($con,$query))
	{
		header("location:mp_profile_display.php");
	}
	else
	{
		header("location:mp_profile_details_update.php");
	}
	
}

?>