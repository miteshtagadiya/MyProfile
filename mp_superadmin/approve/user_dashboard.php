<?php 
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");
?>


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
               
				
				
                <!-- Page-Title -->

				
				
                <div class="row">
                    <div class="col-sm-12" style=" margin-top: 50px;">
                        
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./user_approve_history.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Total Users
									</div>
									
								</div>
							</a>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./user_deactivated_display.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where isapprove='2' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Deactivated Users
									</div>
									
								</div>
							</a>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./user_approved_display.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where isapprove='1' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Approved Users
									</div>
									
								</div>
							</a>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./user_approve_pending.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where isapprove='0' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											UnApproved Users
									</div>
									
								</div>
							</a>
							</div>
							
							
							<div class="col-md-6 col-sm-6 col-lg-3">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $date=date('Y-m-d'); $sql="select * from mp_registration where register_date='$date' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Users Joined Today
									</div>
									
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./user_active_display.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where status='1' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Active Users
									</div>
									
								</div>
							</a>
							</div>
							
							
							
					</div>
					
					
					<div class="row" style="margin-bottom:20px;">
                    <div class="col-sm-12">
                        <h4 class="page-title" style="text-align:center;">All Records </h4>
					</div>
				</div>
					
						<div class="card-box table-responsive">
							
							
							<table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>Id</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>E-mail</th>
                                        <th>Password</th>
                                        <th>Mobile No.</th>
										<th>Birth Date</th>
										<th>Gender</th>
										<th>Register Date</th>
										<th>Category</th>
										<th>Type</th>
										<th>Approve</th>
										<th>Status</th>
										<th>Update</th>
										<th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php $query="select * from mp_registration"; $data=mysqli_query($con,$query); 
										
											while($rec=mysqli_fetch_array($data))
											{ ?>
										
										<tr>
										<td><?php echo $rec['employee_id']; ?></td>
                                        <td><?php echo $rec['firstname']; ?></td>
                                        <td><?php echo $rec['lastname']; ?></td>
                                        <td><?php echo $rec['address']; ?></td>
                                        <td><?php echo $rec['country_name']; ?></td>
                                        <td><?php echo $rec['state_name']; ?></td>
                                        <td><?php echo $rec['city_name']; ?></td>
                                        <td><?php echo $rec['email_id']; ?></td>
                                        <td><?php echo $rec['password']; ?></td>
                                        <td><?php echo $rec['mobile_no']; ?></td>
										<td><?php echo $rec['date_of_birth']; ?></td>
										<td><?php echo $rec['gender']; ?></td>
										<td><?php echo $rec['register_date']; ?></td>
										<td><?php echo $rec['category_id']; ?></td>
										<td><?php echo $rec['type_id']; ?></td>
										<td><a href="#" style="color:red;">Deactivated</a><br>
											<a href="user_approve_update.php?id=<?php echo $rec['employee_id']; ?>" style="margin-left:80px; color:Green;">Approve(Approve this record)</a>
											</td>
										<td><?php echo $rec['status']; ?></td>
										<td><a href="user_update.php?id=<?php echo $rec['employee_id']; ?>"><img src="../img/update.png" alt="Delete" style="width:10%;height:10%;"></a></td>
										<td><a href="user_delete.php?id=<?php echo $rec['employee_id']; ?>"><img src="../img/delete.png" alt="Update" style="width:10%;height:10%;"></a></td>
                                    </tr>
												
											<?php	} ?>
                                </tbody>
							</table>
						</div>
					</div>
					
							
							
				</div>
<?php include ("../include/footer.php");?>
              
              