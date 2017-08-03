<?php 
include ("../include/header.php");
include ("../include/menu.php");
include('../mp_connect.php');

$emailid=$_SESSION['email_id'];
$employeeid=$_SESSION['employee_id'];

$id=$_GET['id'];	
	
if(isset($_POST['submit']))
{
	$emailid=$_SESSION['email_id'];
	$employeeid=$_SESSION['employee_id'];
	$skill=$_POST['skill'];
	$capicity=$_POST['capicity'];
	
	$query="update mp_skill set skill_name='$skill' ,skill_capicity='$capicity' ,employee_id='$employeeid' where skill_id='$id'";
	if(mysqli_query($con,$query))
	{
		header("location:mp_skill_display.php");
	}
	else
	{
		header("location:mp_skill_update.php");
	}
}

$query="select * from mp_skill where skill_id='$id'";
$data=mysqli_query($con,$query);
$rec=mysqli_fetch_array($data);
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
                               
							   <div class="col-md-12" >
                                    <form class="form" role="form" enctype="multipart/form-data" method="post">
                                        <div class="col-sm-6">
										<div class="form-group">
                                            <label for="exampleInputEmail1">Skill name</label>
                                            <input type="text" class="form-control" placeholder="Enter skill name" name="skill" value="<?php echo $rec['skill_name']; ?>">
                                        </div>
										</div>
                                        
										<div class="col-sm-6">
										<div class="form-group">
                                            <label>Capicity</label>
                                            <input name="capicity" type="text" id="range_01" value="<?php echo $rec['skill_capicity']; ?>">
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



               
<?php include ('../include/footer.php');?>