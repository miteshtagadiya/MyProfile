<?php
include ('../mp_connect.php');
include ("../include/header.php");
include ("../include/menu.php");
$id=$_REQUEST['id'];

if(isset($_POST['submit']))
{
	$category=$_POST['categoryname'];
	
	$query="update mp_category set category_name='$category' where category_id='$id'";
	if(mysqli_query($con,$query))
	{
		header("location:mp_category_display.php");
	}
	else{
		header("location:mp_category_update.php");
	}
	
}
$query="select * from mp_category where category_id='$id'";
$data=mysqli_query($con,$query);
$rec=mysqli_fetch_array($data);

?>


        <!-- Update category code  -->

        <div class="wrapper">
            <div class="container">
                <div class="row">
					<div class="col-sm-3">
                    </div>
					<div class="col-sm-6">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Category</b></h4>
                            <div class="row">
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" method="post">
										 <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" class="form-control" placeholder="Enter category" name="categoryname" value="<?php echo $rec[1]?>">
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