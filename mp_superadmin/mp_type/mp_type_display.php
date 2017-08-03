<?php 
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");

$query="select * from mp_type";
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
                        <h4 class="page-title" style="text-align:center;">Type</h4>
					</div>
				</div>
				
				
				<div class="row" style="margin-bottom:20px;">
					<div class="col-sm-12">
							<center><a href="index.php">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light">Add New Type</button>
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
                                        <th>Type Name</th>
										<th>Delete</th>
										<th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php $count=1; while($rec = mysqli_fetch_array($data)) { ?>
                                    <tr>
                                        <td><?php echo $count; $count++; ?></td>
                                        <td><?php echo $rec['type_name']; ?></td>
										<td><a href="mp_type_delete.php?id=<?php echo $rec['type_id']; ?>"><img src="../img/delete.png" alt="Delete" style="width:10%;height:10%;"></a></td>
										<td><a href="mp_type_update.php?id=<?php echo $rec['type_id']; ?>"><img src="../img/update.png" alt="Update" style="width:10%;height:10%;"></a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


               




              


<?php include ("../include/footer.php");?>