<?php 
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");


if(!isset($_SESSION['employee_id']))
{
		header("location:../../mp_user/mp_user_registration/index.php");
}
else
{
		$id=$_SESSION['employee_id'];
}


$eid=$_SESSION['email_id'];
$query="select * from mp_education where employee_id='$id'";
$data=mysqli_query($con,$query);


?>


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row" style="margin-bottom:20px; margin-top: 30px;">
                    <div class="col-sm-12">
                        <h4 class="page-title" style="text-align:center;">Education </h4>
					</div>
				</div>
				
			   
			   <div class="row" style="margin-bottom:20px;">
						<center><a href="mp_education.php" style="color: white;">
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="addimage" value="submit">
                                        Add New Education
									</a>	</button>
						</center>
				</div>
				
				
                <!-- Page-Title -->

				
				
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                           <?php $sql="select * from mp_education where employee_id='$id'";
								 $data1=mysqli_query($con,$sql);
								 $count=mysqli_num_rows($data1);
								 
							if($count>1)
							{   ?>
                            
                            <table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>No.</th>
                                        <th>Degree</th>
                                        <th>Year</th>
                                        <th>percentage</th>
                                        <th>place</th>
										<th>Institute</th>
										
                                        <th>Update</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php $count=1; while($rec=mysqli_fetch_array($data))
											{ ?>
										
										<tr>
										<td><?php echo $count; $count++; ?></td>
                                        <td><?php echo $rec['education_type']; ?></td>
										<td><?php echo $rec['education_year']; ?></td>
										<td><?php echo $rec['education_percentage']; ?></td>
										<td><?php echo $rec['education_place']; ?></td>
										<td><?php echo $rec['education_institute']; ?></td>
                                        
                                       
										<td><a href="mp_education_update.php?id=<?php echo $rec['education_id']; ?>"><img src="../img/update.png" alt="Update" height="20px"></a></td>
										<td><a href="mp_education_delete.php?id=<?php echo $rec['education_id']; ?>"><img src="../img/delete.png" alt="Delete" width="20px"></a></td>
										
                                    </tr>
												
											<?php	} ?>
                                </tbody>
							</table>
							
							<?php } else if($count==1){?>
							
							<table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>No.</th>
                                        <th>Degree</th>
                                        <th>Year</th>
                                        <th>percentage</th>
                                        <th>place</th>
										<th>Institute</th>
										
                                        <th>Update</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php $count=1; while($rec=mysqli_fetch_array($data))
											{ ?>
										
										<tr>
										<td><?php echo $count; $count++; ?></td>
                                        <td><?php echo $rec['education_type']; ?></td>
										<td><?php echo $rec['education_year']; ?></td>
										<td><?php echo $rec['education_percentage']; ?></td>
										<td><?php echo $rec['education_place']; ?></td>
										<td><?php echo $rec['education_institute']; ?></td>
                                        
                                       
										<td><a href="mp_education_update.php?id=<?php echo $rec['education_id']; ?>"><img src="../img/update.png" alt="Update" height="20px"></a></td>
								
										
                                    </tr>
												
											<?php	} ?>
                                </tbody>
							</table>
							
							<?php } ?>
						</div>
					</div>
				</div>
               



<?php include ("../include/footer.php");?>
              
              