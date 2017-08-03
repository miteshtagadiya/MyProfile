<?php 
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");


$id=$_SESSION['employee_id'];
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
				
				
                <!-- Page-Title -->

				
				
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                           
                            
                            <table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>No.</th>
                                        <th>Title Name</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php $count=1; while($rec=mysqli_fetch_array($data))
											{ ?>
										
										<tr>
										<td><?php echo $count; $count++; ?></td>
                                        <td><?php echo $rec['portfolio_title']; ?></td>
										<td><button type="submit" onclick="window.location.href='./portfolio_sub_image_display.php?id=<?php echo $rec['portfolio_id']; ?>'">View All Image</button></td>
										</tr>
												
											<?php	} ?>
                                </tbody>
							</table>
						</div>
					</div>
				</div>
               



<?php include ("../include/footer.php");?>
              
              