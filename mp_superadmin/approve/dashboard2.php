<?php 
include ("../include/header.php");
include ("../include/menu.php");
include ("mp_connect.php");
?>


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
               
				
				
                <!-- Page-Title -->

				
				
                <div class="row">
                    <div class="col-sm-12">
                        
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="#total">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration"; $data=mysql_query($sql); $rec=mysql_num_rows($data); echo $rec;?></span>
											Total Users
									</div>
									
								</div>
							</a>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="#suspend">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where isapprove='2'"; $data=mysql_query($sql); $rec=mysql_num_rows($data); echo $rec;?></span>
											Suspended Users
									</div>
									
								</div>
							</a>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where isapprove='0'"; $data=mysql_query($sql); $rec=mysql_num_rows($data); echo $rec;?></span>
											UnApproved Users
									</div>
									
								</div>
							
							</div>
							
							
							<div class="col-md-6 col-sm-6 col-lg-3">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $date=date('Y-m-d'); $sql="select * from mp_registration where register_date='$date'"; $data=mysql_query($sql); $rec=mysql_num_rows($data); echo $rec;?></span>
											Users Joined Today
									</div>
									
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where status='1'"; $data=mysql_query($sql); $rec=mysql_num_rows($data); echo $rec;?></span>
											Active Users
									</div>
									
								</div>
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
								<?php $query="select * from mp_registration"; $data=mysql_query($query); 
										
											while($rec=mysql_fetch_array($data))
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
										<td><a href="#" style="color:red;">Suspended</a><br>
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
						
						<div class="col-lg-8">

                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Enveto Market Pty Ltd. </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-info">Hot</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>The Coca-Cola Company </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-purple">Cold</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>



                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Dribbble LLC </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-warning">In-progress</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>



                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Coderthemes design </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-danger">Lost</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>



                        <div class="card-box">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>WrapMarket LLC </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-success">Won</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
						
					</div>
					
							
							
				</div>
<?php include ("../include/footer.php");?>
              
              