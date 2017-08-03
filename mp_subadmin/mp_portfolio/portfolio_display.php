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
$query="select * from mp_portfolio where employee_id='$id'";
$data=mysqli_query($con,$query);


?>


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row" style="margin-bottom:20px; margin-top:30px;">
                    <div class="col-sm-12">
                        <h4 class="page-title" style="text-align:center;">Portfolio </h4>
					</div>
				</div>
				
			   
			   <div class="row" style="margin-bottom:20px;">
						<center><a href="portfolio_main.php" style="color: white;">
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="addimage" value="submit">
                                        Add New Portfolio
									</a>	</button>
						</center>
				</div>
				
				
                <!-- Page-Title -->

				
				
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                           <?php $sql="select * from mp_portfolio where employee_id='$id'";
								 $data1=mysqli_query($con,$sql);
								 $count=mysqli_num_rows($data1);
								 
							if($count>1)
							{   ?>
                            
                            <table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>No.</th>
                                        <th>Title Name</th>
                                        <th>Portfolio Image</th>
                                        <th width="50%">Description</th>
                                        <th>Date</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php $count=1; while($rec=mysqli_fetch_array($data))
											{ ?>
										
										<tr>
										<td><?php echo $count; $count++; ?></td>
                                        <td><?php echo $rec['portfolio_title']; ?></td>
                                        <td><img src="./portfolio_image/<?php echo $eid?>/<?php echo $rec['portfolio_main_image']; ?>" height="30px" width="60px"></img></td>
                                        <td class="col-md-6"><?php echo $rec['portfolio_description']; ?></td>
                                        <td><?php echo $rec['portfolio_date']; ?></td>
										<td><a href="portfolio_update.php?id=<?php echo $rec['portfolio_id']; ?>"><img src="../img/update.png" alt="Update" height="20px"></a></td>
										<td><a href="portfolio_delete.php?id=<?php echo $rec['portfolio_id']; ?>"><img src="../img/delete.png" alt="Delete" width="20px"></a></td>
										<td><button type="submit" onclick="window.location.href='./portfolio_sub_image_display.php?id=<?php echo $rec['portfolio_id']; ?>'">View All Image</button></td>
                                    </tr>
												
											<?php	} ?>
                                </tbody>
							</table>
							
							<?php } else if($count==1){?>
							
							<table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>No.</th>
                                        <th>Title Name</th>
                                        <th>Portfolio Image</th>
                                        <th width="50%">Description</th>
                                        <th>Date</th>
                                        <th>Update</th>
                                        
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php $count=1; while($rec=mysqli_fetch_array($data))
											{ ?>
										
										<tr>
										<td><?php echo $count; $count++; ?></td>
                                        <td><?php echo $rec['portfolio_title']; ?></td>
                                        <td><img src="./portfolio_image/<?php echo $eid?>/<?php echo $rec['portfolio_main_image']; ?>" height="30px" width="60px"></img></td>
                                        <td class="col-md-6"><?php echo $rec['portfolio_description']; ?></td>
                                        <td><?php echo $rec['portfolio_date']; ?></td>
										<td><a href="portfolio_update.php?id=<?php echo $rec['portfolio_id']; ?>"><img src="../img/update.png" alt="Update" height="20px"></a></td>
										
										<td><button type="submit" onclick="window.location.href='./portfolio_sub_image_display.php?id=<?php echo $rec['portfolio_id']; ?>'">View All Image</button></td>
                                    </tr>
												
											<?php	} ?>
                                </tbody>
							</table>
							
							<?php } ?>
						</div>
					</div>
				</div>
               



<?php include ("../include/footer.php");?>
              
              