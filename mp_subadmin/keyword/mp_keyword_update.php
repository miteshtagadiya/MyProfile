<?php
include('../mp_connect.php');

session_start();
$kid=$_GET['id'];
if(isset($_POST['submit']))
{
	$employeeid=$_SESSION['employee_id'];
	$keyword1=$_POST['keyword1'];
		$keyword2=$_POST['keyword2'];

	
	$query="update mp_keyword set keyword1='$keyword1',keyword2='$keyword2' where employee_id='$employeeid'";
	if(mysqli_query($con,$query))
	{

		header('location:mp_keyword_display.php');
	}
	else
	{
		header("location:mp_keyword_update.php");
	}
}

$sql="select * from mp_keyword where keyword_id='$kid'";
$data=mysqli_query($con,$sql);
$rec=mysqli_fetch_array($data);

	

?>


<?php 
include ("../include/header.php");
include ("../include/menu.php");
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
					<div class="">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Portfolio</b></h4>


								<div class="row">
                               
							   
                                    <form role="form" enctype="multipart/form-data" method="post">
                                        
										
										<div class="col-sm-12">
											<div class="form-group">
                                            <label>Keyword 1</label>
                                            <input type="text" class="form-control" placeholder="Enter Keyword." name="keyword1" value="<?php echo $rec['keyword1']; ?>">
											</div>
											
											<div class="form-group">
                                            <label>Keyword 2</label>
                                            <input type="text" class="form-control" placeholder="Enter Keyword." name="keyword2" value="<?php echo $rec['keyword2']; ?>">
											</div>
                                        </div>
										
										
										<div class="col-sm-12">
										
										
										<div class="form-group text-right m-b-0">
										<center>
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit" value="submit">
                                        Submit
										</button>
										<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                        Cancel
										</button>
										</center>
										</div>
										
										</div>

                                    </form>
                                
								
							   
                                


								</div>		
                       
						</div>
						<div class="col-sm-3">
						</div>
					</div>
                </div>
			</div>
				


               




              

<?php include ("../include/footer.php"); ?>