<?php 
include ("../include/header.php");
include ("../include/menu.php");
?>


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row" style="margin-bottom:20px; margin-top:30px;">
                    <div class="col-sm-12">
                        <h4 class="page-title" style="text-align:center;">Theme Record</h4>
					</div>
				</div>
				
				
				<div class="row" style="margin-bottom:20px;">
					<div class="col-sm-12">
							<center><a href="add_theme.php">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light">Add New Data</button>
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
                                        <th>Theme Image</th>
                                        <th>Theme Name</th>
                                        <th>Theme Path</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
								
                                    <?php

include("../mp_connect.php");

// select query

$sql = "select * from mp_theme";

$result = mysqli_query($con,$sql);

$i=1;

while($row = mysqli_fetch_array($result))
{
?>

<tr>				
<td><?php echo $i++; ?></td>
<td><image src="../../mp_subadmin/theme/<?php echo $row['theme_icon']; ?>" style="width:200px;height:200px;"/></td>                                                    
<td><?php echo $row['theme_name']; ?></td>
<td><?php echo $row['theme_url']; ?></td>

<td><a href='edit_theme.php?theme_id=<?php echo $row['theme_id'] ?>' ><img src='../img/update.png' style='width:25px;height:25px;'></img></a></td>

<?php 

// select query

$sql1 = "select * from mp_registration where theme_id='".$row['theme_id']."'";

$result1 = mysqli_query($con,$sql1);

$cnt = mysqli_num_rows($result1);

if($cnt > 0)
{ 
?>

<td><font color="#">Can`t  be  deleted</td>

<?php 
}
elseif($cnt==0)
{ 
?>														

<td><a href='delete_theme.php?theme_id=<?php echo $row['theme_id'] ?>' ><img src='../img/delete.png' style='width:25px;height:25px;'></img></a></td>

<?php
} 
?>

</tr>                                            

<?php
}
?>

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




               



<?php include ("../include/footer.php");?>
              
              