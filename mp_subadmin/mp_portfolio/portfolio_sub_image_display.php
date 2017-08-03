<?php

include('../mp_connect.php');

session_start();

if(!isset($_SESSION['employee_id']))
{
		header("location:../../mp_user/mp_user_registration/index.php");
}
else
{
$employeeid=$_SESSION['employee_id'];
}

$id=$_GET['id'];
$_SESSION['$pid']=$id;

$emailid=$_SESSION['email_id'];
$query="select * from mp_portfolio_image where portfolio_id='$id'";
$data=mysqli_query($con,$query);
//$row=mysqli_fetch_array($data);

$query1="select * from mp_portfolio where portfolio_id='$id'";
$data1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($data1);
$portfolioid=$row1['portfolio_id'];
$title=$row1['portfolio_title'];

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

              <div class="row" style="margin-bottom:20px; margin-top:30px;">
                    <div class="col-sm-12">
                        <h4 class="page-title" style="text-align:center;"><?php echo $title; ?> Images</h4>
					</div>
				</div>
			   
			   <?php $rec1=mysqli_fetch_array($data);
					$count1=mysqli_num_rows($data);	
					if($count1<=10) {	?>
			   
			   <form method="post" action="portfolio_sub_image_add.php?id=<?php echo $row1['portfolio_id']; ?>">
			   <div class="form-group text-right m-b-0">
						<center>
										<button class="btn btn-primary waves-effect waves-light" type="submit" name="addimage" value="submit">
                                        Add Image
										</button>
						</center>
				</div>
				</form>

				<div class="row port">
                    <div class="portfolioContainer">

					     <!--random color array  
						  <?php 					
							//$color_arrar = array('yellow ','green ','pink ');
							//$size_of_array = sizeof($color_arrar);
							//$n = rand(0,$size_of_array-1);
							//$class = $color_arrar[$n%3];
						   ?> -->
                         <?php
											
							$color_arrar = array('#679E37','#F8A724','#414141','#E53935','#5B6ABF','#1D87E4','#00887A','#E53935','#1D87E4','#778F9B','#378D3B','#00887A','#F16613','#94EC0C','#EB3F79','#CAFFFD','#FF8435','#F9DAD8','#029AE4','#8C6D62','#778F9B','#FDD687','#7D56C1','#FF0136','#00887A','#8BF8D8');
							$x=0;
							while($row=mysqli_fetch_array($data)){ 
							$x++;
							$class= $color_arrar[$x%10];?>
						<div class="col-sm-6 col-lg-3 col-md-4">
                           
							<div class="gal-detail thumb" style="position: relative;float: left;overflow: hidden; background-color: <?php echo $class; ?>">
                               <a href="./portfolio_image/<?php echo $emailid; ?>/portfolio_subimage/<?php echo $row['portfolio_image_url'];?>" class="image-popup" title="<?php echo $title; ?>">
                                    <img src="./portfolio_image/<?php echo $emailid; ?>/portfolio_subimage/<?php echo $row['portfolio_image_url'];?>" class="thumb-img" alt="<?php echo $row['portfolio_image_url'];?>" height="180px">
                               </a>

                                
								<div style="background-color: <?php echo $class; ?>;">
								
									<table>
									<tr> 
									<td><a href="portfolio_sub_image_update.php?id=<?php echo $row['portfolio_image_id']; ?>" style="position: relative; margin-left: 30px; color: white;"><b>Update</b></a></td>
									<td><a href="portfolio_sub_image_delete.php?id=<?php echo $row['portfolio_image_id']; ?>" style="position: relative; margin-left: 80px; color: white;"><b>Delete</b></a></td>
									</tr>
									</table>
								</div>
								
								<!--a href="portfolio_sub_image_update.php?id=<?php echo $row['portfolio_image_id']; ?>" style="position: relative; margin-left: 80px;"><img src="../img/delete.png" style="height: 25px; width: 25px; background-color: #fff; border-radius: 50%; border: 2px solid black;" alt="delete"></img></a>-->
								
                            </div>
                        </div>
						
							<?php } ?>
							
							

<!--<a href="portfolio_update.php" style="position: relative; margin-left: -50px;"><img src="../img/up2.png" style="height: 50px; width: 50px; background-color: #fff; border-radius: 50%; border: 3px solid black;" alt="update"></img></a>-->
                   
                    </div>
                </div> 
				<?php } else if($count1>10) { ?>

									<div class="row port">
                    <div class="portfolioContainer">

					     <!--random color array  
						  <?php 					
							//$color_arrar = array('yellow ','green ','pink ');
							//$size_of_array = sizeof($color_arrar);
							//$n = rand(0,$size_of_array-1);
							//$class = $color_arrar[$n%3];
						   ?> -->
                         <?php
											
							$color_arrar = array('#679E37','#F8A724','#414141','#E53935','#5B6ABF','#1D87E4','#00887A','#E53935','#1D87E4','#778F9B','#378D3B','#00887A','#F16613','#94EC0C','#EB3F79','#CAFFFD','#FF8435','#F9DAD8','#029AE4','#8C6D62','#778F9B','#FDD687','#7D56C1','#FF0136','#00887A','#8BF8D8');
							$x=0;
							while($row=mysqli_fetch_array($data)){ 
							$x++;
							$class= $color_arrar[$x%10];?>
						<div class="col-sm-6 col-lg-3 col-md-4">
                           
							<div class="gal-detail thumb" style="position: relative;float: left;overflow: hidden; background-color: <?php echo $class; ?>">
                               <a href="./portfolio_image/<?php echo $emailid; ?>/portfolio_subimage/<?php echo $row['portfolio_image_url'];?>" class="image-popup" title="<?php echo $title; ?>">
                                    <img src="./portfolio_image/<?php echo $emailid; ?>/portfolio_subimage/<?php echo $row['portfolio_image_url'];?>" class="thumb-img" alt="<?php echo $row['portfolio_image_url'];?>" height="180px">
                               </a>

                                
								<div style="background-color: <?php echo $class; ?>;">
								
									<table>
									<tr> 
									<td><a href="portfolio_sub_image_update.php?id=<?php echo $row['portfolio_image_id']; ?>" style="position: relative; margin-left: 30px; color: white;"><b>Update</b></a></td>
									<td><a href="portfolio_sub_image_delete.php?id=<?php echo $row['portfolio_image_id']; ?>" style="position: relative; margin-left: 80px; color: white;"><b>Delete</b></a></td>
									</tr>
									</table>
								</div>
								
								<!--a href="portfolio_sub_image_update.php?id=<?php echo $row['portfolio_image_id']; ?>" style="position: relative; margin-left: 80px;"><img src="../img/delete.png" style="height: 25px; width: 25px; background-color: #fff; border-radius: 50%; border: 2px solid black;" alt="delete"></img></a>-->
								
                            </div>
                        </div>
						
							<?php } ?>
							
							

<!--<a href="portfolio_update.php" style="position: relative; margin-left: -50px;"><img src="../img/up2.png" style="height: 50px; width: 50px; background-color: #fff; border-radius: 50%; border: 3px solid black;" alt="update"></img></a>-->
                   
                    </div>
                </div> 
				
				<?php } ?>
					
<?php include ("../include/footer.php"); ?>