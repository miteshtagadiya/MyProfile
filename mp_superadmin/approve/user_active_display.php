<!--
    This page displayes active user in the system
-->

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
                <div class="row" style="margin-bottom:20px; margin-top: 30px;">
                    <div class="col-sm-12">
                        <h4 class="page-title" style="text-align:center;">Approved Records </h4>
					</div>
				</div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
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
										<th>Status</th>
										<th>Approve</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								<?php $query="select * from mp_registration where status='1' and type='employee'"; $data=mysqli_query($con,$query); 
										
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
										<td><?php echo $rec['status']; ?></td>
										<td><a href="#" style="color:green;">Approved</a><br>
											<a href="user_deactivate_update.php?id=<?php echo $rec['employee_id']; ?>" style="margin-left:80px; color:red;">Deactivate(Deactivate this record)
                                            </a>
								        </td>
                                    </tr>
												
											<?php	} ?>
                                </tbody>
							</table>

						</div>
					</div>
				</div>



<?php include ("../include/footer.php");?>
              
              