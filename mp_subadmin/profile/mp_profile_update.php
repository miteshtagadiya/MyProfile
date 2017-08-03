<?php 
session_start();
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");
$eid=$_SESSION['employee_id'];


if(isset($_POST['submit']))
{
	$query1="select * from mp_profile where employee_id='$eid'";
	$data=mysqli_query($con,$query1);
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
	
	
	$query="update mp_profile set profile_url='$i' where employee_id='$eid'";
	if(mysqli_query($con,$query))
	{
		header("location:mp_profile_display.php");
	}
	else
	{
		header("location:mp_profile_update.php");
	}
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
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Profile</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
                                        
										
										<div class="form-group">
											<label>Profile Image</label>
											<div>
											<?php
											$query1="select * from mp_profile where employee_id='$eid'";
											$data=mysqli_query($con,$query1);
											$rec=mysqli_fetch_array($data);
											?>	
											
												<img src="./profile/<?php echo $rec['profile_url']; ?>" height="100px" width="100px"></img>
											</div>
											<input type="file" class="filestyle" data-buttonname="btn-white" name="profile">
										</div>
										
									
										
										
										<div class="form-group text-right m-b-0">
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit" value="submit">
                                        Update
										</button>
										<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                        Cancel
										</button>
										</div>
										
										

                                    </form>
                                </div>
								
							   
                                


                            </div>
                        </div>
                    </div>
					<div class="col-sm-3">
                    </div>
					
                </div>

<?php include ("../include/footer.php"); ?>