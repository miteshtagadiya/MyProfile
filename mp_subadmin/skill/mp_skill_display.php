<?php

include('../mp_connect.php');

session_start();

if(!isset($_SESSION['employee_id']))
{
		header("location:../../mp_user/mp_user_registration/index.php");
}
else
{
$employeeid=$_SESSION['employee_id'];
}


$emailid=$_SESSION['email_id'];
$query="select * from mp_skill where employee_id='$employeeid'";
$data=mysqli_query($con,$query);


?>
<?php 
include ("../include/header.php");
include ("../include/menu.php");

?>

       <!-- Displays the sills -->

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
					
						
						<div class="row" style="margin-bottom:20px; margin-top:30px;">
							<div class="col-sm-12">
								<h4 class="page-title" style="text-align:center;">Skill </h4>
							</div>
							</div>
				
			   
							<div class="row" style="margin-bottom:20px;">
								<center><a href="mp_skill.php" style="color: white;">
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="addimage" value="submit">
                                        Add New Skill
									</a>	</button>
								</center>
							</div>
						
					
						<div class="card-box table-responsive">
						<?php $count=mysqli_num_rows($data);
							   if($count>1) {?>
							
                            <table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>No.</th>
                                        <th>Skill Name</th>
                                        <th>Skill Capacity</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php $count=1; while($rec=mysqli_fetch_array($data))
											{ ?>
										
										<tr>
										<td><?php echo $count; $count++; ?></td>
                                        <td><?php echo $rec['skill_name']; ?></td>
                                        <td><p class="font-600"><?php echo $rec['skill_capicity']; ?>%</span></p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-success progress-bar-striped progress-animated wow animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rec['skill_capicity']; ?>%">
                                              </div><!-- /.progress-bar .progress-bar-danger -->
											  
                                            </div></td>
                                        
										<td><a href="mp_skill_update.php?id=<?php echo $rec['skill_id']; ?>"><img src="../img/update.png" alt="Update" height="20px"></a></td>
										<td><a href="mp_skill_delete.php?id=<?php echo $rec['skill_id']; ?>"><img src="../img/delete.png" alt="Delete" width="20px"></a></td>
										
                                    </tr>
												
											<?php	} ?>
                                </tbody>
							</table>
							   <?php } else if($count==1) { ?>
							    <table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>No.</th>
                                        <th>Skill Name</th>
                                        <th>Skill Capacity</th>
                                        <th>Update</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php $count=1; while($rec=mysqli_fetch_array($data))
											{ ?>
										
										<tr>
										<td><?php echo $count; $count++; ?></td>
                                        <td><?php echo $rec['skill_name']; ?></td>
                                        <td><p class="font-600"><?php echo $rec['skill_capicity']; ?>%</span></p>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-success progress-bar-striped progress-animated wow animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rec['skill_capicity']; ?>%">
                                              </div><!-- /.progress-bar .progress-bar-danger -->
											  
                                            </div></td>
                                        
										<td><a href="mp_skill_update.php?id=<?php echo $rec['skill_id']; ?>"><img src="../img/update.png" alt="Update" height="20px"></a></td>
										
										
                                    </tr>
												
											<?php	} ?>
                                </tbody>
							</table>
							   <?php } ?>
						</div>
					</div>
				</div>

<?php include("../include/footer.php"); ?>