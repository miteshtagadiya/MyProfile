<?php
include ('../mp_connect.php');
include ("../include/header.php");
include ("../include/menu.php");
$id=$_REQUEST['id'];

if(isset($_POST['submit']))
{
	$field=$_POST['fieldname'];
	$category=$_POST['category'];
	
	$query="update mp_field set field_name='$field' ,category_id='$category' where field_id='$id'";
	if(mysqli_query($con,$query))
	{
		header("location:mp_field_display.php");
	}
	else{
		header("location:mp_field_update.php");
	}
	
}
$query="select * from mp_field where field_id='$id'";
$data=mysqli_query($con,$query);
$rec=mysqli_fetch_array($data);

?>


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

               


                <div class="row">
                    
					<div class="col-sm-3">
                    </div>
					
					
					<div class="col-sm-6">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Field</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" method="post">
                                        
                                        
										
										
										 <div class="form-group">
                                            <label>Field Name</label>
                                            <input type="text" class="form-control" placeholder="Enter category" name="fieldname" value="<?php echo $rec[1]?>">
                                        </div>
										<?php 
										include ('../mp_connect.php');
										$id3=$rec['category_id'];
										$query3=mysqli_query($con,"select * from mp_category where category_id='$id3'");
										$rec3=mysqli_fetch_array($query3);
										?>
										<div class="form-group">
                                            <label>Category</label>
											<select class="form-control select2" name="category">
											<option>--Select Category--</option>
											<?php
											include ('../mp_connect.php');
											$query=mysqli_query($con,"select * from mp_category");
											while($row=mysqli_fetch_array($query))
											{
											?>
											<option value="<?php echo $row['category_id']?>"><?php echo $row['category_name'];?></option>
											<?php 
											}
											?>
											</select>
										</div>
                                        
										                                       
										
										<div class="form-group text-right m-b-0">
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit" value="submit">
                                        Update
										</button>
										<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                        Cancel
										</button>
										</div>
										
										

                                    </form>
                                </div>
								
							   
                                


                            </div>
                        </div>
                    </div>
					<div class="col-sm-3">
                    </div>
					
                </div>



               




              


<?php include ("../include/footer.php");?>