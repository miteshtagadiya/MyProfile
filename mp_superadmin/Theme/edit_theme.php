<?php 
include ("../include/header.php");
include ("../include/menu.php");
include('../mp_connect.php');

$theme_id = $_REQUEST['theme_id'];

$q = "select * from mp_theme where theme_id = '$theme_id'";

$r1 = mysqli_query($con,$q);		

$f1 = mysqli_fetch_assoc($r1);

?>

        <!-- The code for display update themes page-->

        <div class="wrapper">
            <div class="container">
                <div class="row">
					<div class="col-sm-3">
                    </div>
					<div class="col-sm-6">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Edit Theme</b></h4>
                            <div class="row">
                               
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" action="edit_theme_code.php?theme_id=<?php echo $theme_id;?>" method="post" name="f1" id="f1" enctype="multipart/form-data">
                                        <div class="form-group">
											<label>Theme Image</label>
											<input type="file" name="image" class="filestyle" data-buttonname="btn-white">
										</div>
										<div class="form-group text-right m-b-0">
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                        Upload
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