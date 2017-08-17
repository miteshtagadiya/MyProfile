<!--
    Updates Portfolio details
-->

<?php 
session_start();
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");
$eid=$_SESSION['employee_id'];
$query1="select a.portfolio_id,a.employee_id,a.portfolio_title,b.portfolio_image_id,b.portfolio_subject,b.portfolio_image_url,b.portfolio_id from mp_portfolio a,mp_portfolio_image b where a.portfolio_id=b.portfolio_id and employee_id='$eid'";
$data1=mysqli_query($con,$query1);
$rec1=mysqli_fetch_array($data1);

$emailid=$_SESSION['email_id'];
$id=$_GET['id'];
$query="select * from mp_portfolio where portfolio_id='$id'";
$data=mysqli_query($con,$query);
$rec=mysqli_fetch_array($data);
if(isset($_POST['submit']))
{
	$emailid=$_SESSION['email_id'];
	$portfolioid=$_SESSION['portfolio_id'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$portfoliodate=date('Y-m-d');
	$path="./portfolio_image/$emailid/";
	$i=$_FILES['mainimage']['name'];
	if(empty($i))
	{
		$i=$rec['portfolio_main_image'];
	}
	else
	{
			$i=$_FILES['mainimage']['name'];
		move_uploaded_file($_FILES['mainimage']['tmp_name'],"$path".$i);
	}
	
	
	$query="update mp_portfolio set portfolio_title='$title' ,portfolio_main_image='$i' ,portfolio_description='$description' ,portfolio_date ='$portfoliodate' ,employee_id='$eid' where portfolio_id='$id'";
	if(mysqli_query($con,$query))
	{
		header("location:portfolio_display.php");
	}
	else
	{
		header("location:portfolio_update.php");
	}
}


?>

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    
					<div class="col-sm-3">
                    </div>
					<div class="col-sm-6" style="margin-top:50px;">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Portfolio</b></h4>
                            <div class="row">
                               
							   <div class="col-md-12" >
                                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
                                        
										 <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Portfolio Title ex.PhotoShop or WordPress etc." name="title" value="<?php echo $rec['portfolio_title'];?>">
                                        </div>
                                        
										<div class="form-group">
											<label>Title Image</label>
											<div>
												<img src="./portfolio_image/<?php echo $emailid; ?>/<?php echo $rec['portfolio_main_image']; ?>" height="100px" width="100px"></img>
											</div>
											<input type="file" class="filestyle" data-buttonname="btn-white" name="mainimage" value="<?php echo $rec['portfolio_main_image']; ?>">
										</div>
										
										<div class="form-group">
                                            <label>Description</label>
                                            <textarea class="ckeditor" rows="5" name="description"><?php echo $rec['portfolio_description'];?></textarea>
                                        </div>
										<div class="form-group text-right m-b-0">
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit" value="submit">
                                        Submit
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

<?php include ("../include/footer.php"); ?>