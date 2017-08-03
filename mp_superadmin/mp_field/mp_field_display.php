<?php 
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");

$query="select * from mp_field";
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
                        <h4 class="page-title" style="text-align:center;">Field</h4>
					</div>
				</div>
				
				
				<div class="row" style="margin-bottom:20px;">
					<div class="col-sm-12">
							<center><a href="index.php">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light">Add New Field</button>
							</a></center>
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
                                        <th>Field Name</th>
										<th>Category Name</th>
										<th>Delete</th>
										<th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php $count=1; while($rec = mysqli_fetch_array($data)) { ?>
                                    <tr>
                                        <td><?php echo $count; $count++; ?></td>
                                        <td><?php echo $rec['field_name']; ?></td>
										<?php 
										$cid=$rec['category_id'];
										$query1="select * from mp_category where category_id='$cid'";
										$data1=mysqli_query($con,$query1);
										$rec1=mysqli_fetch_array($data1);
										
										?>
										<td><?php echo $rec1['category_name']; ?></td>
										<td><a href="mp_field_delete.php?id=<?php echo $rec['field_id']; ?>"><img src="../img/delete.png" alt="Delete" style="width:10%;height:10%;"></a></td>
										<td><a href="mp_field_update.php?id=<?php echo $rec['field_id']; ?>"><img src="../img/update.png" alt="Update" style="width:10%;height:10%;"></a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


               




              


<?php include ("../include/footer.php");?>