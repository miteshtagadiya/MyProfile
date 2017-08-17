<!-- Code for update the password -->

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
?>

        <div class="wrapper">
            <div class="container">

               


                <div class="row">
                    
					<div class="col-sm-3">
                    </div>
					
					
					<div class="col-sm-6">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Password</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
                                <form class="form-horizontal" role="form" method="post">
                                        
										 <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control" id="fname" placeholder="Enter Old Password"  name="old_pass">
                                        </div>
                                        
										<div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" class="form-control" id="lname" placeholder="Enter New Password"  name="new_pass">
                                        </div>

										<div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" id="lname" placeholder="Enter Confirm Password"  name="confirm_pass">
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
	$old_pass=$_POST['old_pass'];
	$new_pass=$_POST['new_pass'];
	$confirm_pass=$_POST['confirm_pass'];
	
	
	$sql="select * from mp_registration where employee_id='$eid' ";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($row['password']==$old_pass){
		if($new_pass==$confirm_pass){
			
				$query="update mp_registration set password='$confirm_pass' where employee_id='$eid'";
				if(mysqli_query($con,$query))
				{
					header("location:../../mp_user/mp_user_registration/mp_user_logout.php");
				}
				else
				{
					header("location:mp_profile_password_update.php");
				}	
		}
		else{
			echo "<script>alert('Password not same');</script>";
		}
	}
	else
	{
		echo "<script>alert('Wrong old Password');</script>";
	}	
	
}

?>