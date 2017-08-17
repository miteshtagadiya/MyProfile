<!--
    Code for update education details
-->

<?php
include('../mp_connect.php');

session_start();
$id=$_GET['id'];
$eid=$_SESSION['employee_id'];

$sql="select * from mp_education where education_id='$id'";
$data1=mysqli_query($con,$sql);
$rec1=mysqli_fetch_array($data1);
if(isset($_POST['submit']))
{	
	$degree=$_POST['degree'];
	$percentage=$_POST['percentage'];
	$employeeid=$_SESSION['employee_id'];
	$syear=$_POST['syear'];
	$eyear=$_POST['eyear'];
	$year1=array($syear,$eyear);
	$year=implode("-",$year1);
	$place=$_POST['place'];
	$institute=$_POST['institute'];
	$path="./marksheet/";
	$i=$_FILES['marksheet']['name'];
	
	if(empty($i))
	{
		$i=$rec1['marksheet_file'];
	}
	else
	{
			$i=$_FILES['marksheet']['name'];
		move_uploaded_file($_FILES['marksheet']['tmp_name'],"$path".$i);
	}
		
	$query="update mp_education set education_type='$degree' , education_year='$year' , education_percentage='$percentage' , education_place='$place' , education_institute='$institute' , employee_id='$eid' where education_id='$id'";
	if(mysqli_query($con,$query))
	{
		
			header("location:mp_education_display.php");
	}
	else
	{
			header("location:mp_education_update.php?id=".$id);
	}
}

$sql="select * from mp_education where education_id='$id'";
$data1=mysqli_query($con,$sql);
$rec1=mysqli_fetch_array($data1);

?>

<?php 
include ("../include/header.php");
include ("../include/menu.php");

?>

        <div class="wrapper">
            <div class="container">
                <div class="row">
					<div class="col-sm-12">
                        <div class="card-box" style="margin-top:50px;"> 
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Education</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
									<?php include('../mp_connect.php');?>
                                    <form class="form" role="form" method="post" enctype="multipart/form-data">
                                        
                                        
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" class="form-control" placeholder="Enter Degree ex.Bca,Science etc." name="degree" value="<?php echo $rec1['education_type'];?>">
                                        </div>
										</div>
										
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Percentage</label>
                                            <input type="text" class="form-control" placeholder="Enter Percentage" name="percentage" value="<?php echo $rec1['education_percentage'];?>">
                                        </div>
										</div>
										
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Starting Year</label>
											<select class="form-control select2" name="syear" >
											<option value="">--Select Starting Year--</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											</select>
										</div>
										</div>
										
										      
										<div class="col-sm-6">		  
										<div class="form-group">
                                            <label>Place</label>
                                            <input type="text" class="form-control" placeholder="Enter Place" name="place" value="<?php echo $rec1['education_place'];?>">
                                        </div>
                                        </div>
										
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Ending Year</label>
											<select class="form-control select2" name="eyear">
											<option value="">--Select Ending Year--</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											</select>
										</div>
										</div>
										
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Institute</label>
                                            <input type="text" class="form-control" placeholder="Enter name of institute" name="institute" value="<?php echo $rec1['education_institute'];?>">
                                        </div>
										</div>
										<div class="col-sm-12">	
										
										<center>
										<button class="btn btn-primary waves-effect waves-light" type="submit" value="submit" name="submit">
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
                    </div>
					
                </div>

<?php include ("../include/footer.php");?>