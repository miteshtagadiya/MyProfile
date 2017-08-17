<!--
    Displays prfile details
--> 

<?php 
session_start();
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");
$eid=$_SESSION['employee_id'];


if(isset($_POST['submit']))
{
	$query="select * from mp_profile where employee_id='$eid'";
	$data=mysqli_query($con,$query);
	$rec=mysqli_fetch_array($data);
	$path="./profile/";
	$i=$_FILES['profile']['name'];
	if(empty($i))
	{
		$i=$rec['profile_url'];
	}
	else
	{
			$i=$_FILES['profile']['name'];
		move_uploaded_file($_FILES['profile']['tmp_name'],"$path".$i);
	}
	
	
	$query1="update mp_profile set profile_url='$i' where employee_id='$eid'";
	if(mysqli_query($con,$query1))
	{
		header("location:mp_profile_display.php");
	}
	else
	{
		header("location:mp_profile_update.php");
	}
}


?>

       <div class="wrapper">
            <div class="container">


                <!-- Page-Title -->
					<div class="row">
                    	<div class="col-md-2"></div>
						<div class="col-md-8" style="margin-top:30px;">
                    		<div class="card-box m-t-20">
                    
                                <div class="profile-info-name" style="padding:15px;">
								<?php
					$query="select * from mp_profile where employee_id='$eid'";
					$data=mysqli_query($con,$query);
					$rec=mysqli_fetch_array($data);
					?>	
                                <center><img src="./profile/<?php echo $rec['profile_url']; ?>" style="border-radius:20px;" height="250px" width="250px"></img> </center>
								</div>
                           						
								<h4 class="m-t-0 header-title"><b>Personal Information</b></h4>
								<div class="p-20">
																<?php
					$query="select * from mp_registration where employee_id='$eid'";
					$data=mysqli_query($con,$query);
					$rec=mysqli_fetch_array($data);
					?>
									<div class="about-info-p">
                                        <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted"><?php echo ucfirst($rec['firstname'])."&nbsp"; echo ucfirst($rec['lastname']);?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $rec['mobile_no'] ?></p>
                                    </div>
									
                                    <div class="about-info-p">
                                        <strong>Email</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $rec['email_id'] ?></p>
                                    </div>
                                    <div class="about-info-p m-b-0">
                                        <strong>Location</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $rec['address'].",".$rec['city_name'].",".$rec['state_name'].",".$rec['country_name'] ; ?></p>
                                    </div>
									<div class="about-info-p">
                                        <strong>DOB</strong>
                                        <br>
                                        <p class="text-muted"><?php $date=date_create($rec['date_of_birth']);echo date_format($date,"d-M-Y"); ?></p>
                                    </div>
									<div class="about-info-p">
                                        <strong>Gender</strong>
                                        <br>
                                        <p class="text-muted"><?php echo ucfirst($rec['gender']) ?></p>
                                    </div>
									<div class="about-info-p">
                                        <strong>Type</strong>
                                        <br>
                                        <p class="text-muted">
					<?php
					$tid=$rec['type_id'];
					$query="select * from mp_type where type_id='$tid'";
					$data=mysqli_query($con,$query);
					$rec=mysqli_fetch_array($data);
					echo $rec['type_name'];
					?></p>
                                    </div>									
								</div>
							</div>

	


                        </div>
						<div class="col-md-2" style="margin-top:30px;">
						<div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="mp_profile_update.php">Change Profile</a></li>
                                <li><a href="mp_profile_details_update.php">Edit Details</a></li>
								<li><a href="mp_profile_password_update.php">Change Password</a></li>
								<li><a href="#custom-modal" data-animation="fadein" data-plugin="custommodal"
                                                            data-overlaySpeed="200" data-overlayColor="#36404a">Deactive Your Account</a></li>
                            </ul>
                        </div>
						</div>

                    </div>
					                <div id="custom-modal" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title">Deactive</h4>
                    <div class="custom-modal-text text-left">
                        <form role="form" method="POST">
                            <div class="form-group">
                                <label for="name">Why you are delete your account</label>
                                <input type="text" class="form-control" name="review" placeholder="Enter Reason">
                            </div>
							<button type="submit" class="btn btn-default waves-effect waves-light" name="submit">Deactive</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.close();">Cancel</button>
                        </form>
                    </div>
                </div>

 <!-- Modal-Effect -->
        <script src="../assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="../assets/plugins/custombox/dist/legacy.min.js"></script>

<?php include ("../include/footer.php"); 
if(isset($_POST['submit'])){
					
					$query="update mp_registration set isapprove='2' where employee_id='$eid'";
					if(mysqli_query($con,$query)){				
					header("location:../../mp_user/mp_user_registration/mp_user_logout.php");
					}
	
}
?>