<?php 
include ("../include/header.php");
?>
<style>


.logo, .menu
{
	display: inline-block;
	margin:5px;
}

.logo
{
		height:70px;
}

.menu
{
	background-color: #d91c23;
	float: right;
	color: white;
	margin-top:10px;
	
}

.menu1
{
	float:right;
	padding:10px;
	color: #d91c23;
}

.menu a
{
	
	background-color: #d91c23;
    border: 0 none;
    color: #fff;
    padding: 4px 12px;
	margin-right: -2px;
    text-align: center;
    text-decoration: none;
    transition: border .25s linear 0s,color .25s linear 0s,background-color .25s linear 0s;
}

.menu a:hover
{
	background-color: orange;
}


.logoimg
{
	width:170px;
}

@media (max-width:991px)
{


}




@media (max-width:767px)
{


}

@media (max-width:479px)
{
.logoimg
{
	width:130px;
}
}



@media (max-width:320px)
{
.logoimg 
{
    width: 87px;
}
}

</style>
<script language="javascript" type="text/javascript">
function getXMLHTTP() {
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getField(category_id) {		
		
		var strURL="Field.php?category="+category_id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('fielddiv').innerHTML=req.responseText;
												
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
</script>
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
</head>

        <!-- =======================
             ===== START PAGE ======
             ======================= -->

<div class="col-sm-3" style="padding-left:22px;">
<div class="logo">
<a href="../../index.php">
<img src="../image/logo.png" style="height:100px; width:250px;"></img>
</a>
</div>
</div>

<div class="col-sm-9" style="padding-right:22px;  margin-top:10px;">
<div class="menu">
<b><a href="./index.php">Login</a></b>
</div>

<div class="menu">
<b><a href="./mp_user_registration.php">SignUp</a></b>
</div>

</div>
			 
			 
      


                <div class="row">
                    
					<div class="col-sm-3">
                    </div>
					
					
					<div class="col-sm-6" style="margin-top:120px;">
                        <div class="card-box" style="box-shadow: 0 6px 15px 0 rgba(0, 0, 0, 0.2), 0 10px 15px 0 rgba(0, 0, 0, 0.19);">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Registration</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
									<?php include('../mp_connect.php');?>
                                    <form class="form-horizontal" role="form" method="post">
                                        
										 <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" id="fname" placeholder="Enter Firstname" name="firstname">
                                        </div>
                                        
										<div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" id="lname" placeholder="Enter Lastname" name="lastname">
                                        </div>
										
										<div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="5" id="address" name="address" required></textarea>
                                        </div>                                        
										
										<div class="form-group">
                                            <label>Country</label>
											<select class="form-control select2" name="country" id="countryid">
											<option value="">--Select Country--</option>
											<option value="India">India</option>
											</select>
										</div>
										
										<div class="form-group">
                                            <label>State</label>
											<select class="form-control select2" name="state" id="stateid">
											<option value="">--Select State--</option>
											<option value="Gujarat">Gujarat</option>
											</select>
										</div>
										
										<div class="form-group">
                                            <label>City</label>
											<select class="form-control select2" name="city" id="cityid">
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
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                        </div>
                                        
										<div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                        </div>

										<div class="form-group">
                                            <label>Mobile No.</label>
                                            <input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobileno" name="mobileno" required>
                                        </div>
									
										<div class="form-group">
											
											<label>Birth Date</label>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="mm/dd/yyyy" name="dateofbirth" id="datepicker-autoclose" required>
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
                                            <input type="radio" value="male" name="gender" checked>
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
											<select class="form-control select2" name="category" onChange="getField(this.value)">
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
                                            <label>Field</label>
											<select class="form-control select2" data-placeholder="Choose ..." id="fielddiv" name="field">
										
											</select>
										</div>
										
										<div class="form-group">
                                            <label>Type</label>
											<select class="form-control select2" name="type">
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
										
										<div class="form-group text-right m-b-0">
										<center>
										
										<button class="btn btn-default waves-effect waves-light m-l-5" type="submit" value="submit" name="submit" onclick="return validation();">
                                        Registration
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
								<p>Already have an account? <a href="index.php" style="color:#ce241b;" class="m-l-5"><b>Sign In</b></a></p>
							</div>
							</div>
					<div class="col-sm-3">
                    </div>
					
                </div>



               




              


<?php include ("../include/footer.php");

include ('../mp_connect.php');

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
	mkdir("../../mp_subadmin/mp_portfolio/portfolio_image/$email",0777,true);
	mkdir("../../mp_subadmin/mp_portfolio/portfolio_image/$email/portfolio_subimage",0777,true);
	$category=$_POST['category'];
	$field=$_POST['field'];
	$typeid=$_POST['type'];
	$isapprove=0;
	$type='employee';
	
	$sql="select * from mp_registration where email_id='$email' ";
	$result=mysqli_query($con,$sql);
	$counts=mysqli_num_rows($result);
	if($counts==1)
	{
		echo "<script> alert('Your Email address allready use please enter deferent email address') </script>";
	}
	else{
	$query="insert into mp_registration(firstname,lastname,address,country_name,state_name,city_name,email_id,password,mobile_no,date_of_birth,gender,register_date,category_id,field_id,type_id,isapprove,type) values('$firstname','$lastname','$address','$country','$state','$city','$email','$password','$mobileno','$dateofbirth','$gender','$registerdate','$category','$field','$typeid','$isapprove','$type')" or die("unable to insert");
	if(mysqli_query($con,$query)){
		header('location:index.php');
	}else
	{
	    header('location:mp_user_registration.php');
	}
	}
}

?>