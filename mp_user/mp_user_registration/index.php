<?php 
include ("../include/header.php");?>
 <link href="../assets/css/home.css" rel="stylesheet" type="text/css" />


        <!-- =======================
             ===== START PAGE ======
             ======================= -->


<div class="col-xs-3" style="padding-left:22px;">
<div class="logo">
<a href="../../index.php">
<img src="../image/logo.png" style="height:100px; width:250px;"></img>
</a>
</div>
</div>

<div class="col-sm-9" style="padding-right:22px;  margin-top:5px;">
<div class="menu">
<b><a href="./index.php">Login</a></b>
</div>
<div class="menu" style="margin-right:5px;">
<b><a href="./mp_user_registration.php">SignUp</a></b>
</div>

</div>


<!--
<div class="col-sm-12">
<div class="searchbar wrapper" style="height:39px;">
      <form action="#" method="post" name="global_search_form">
        <input name="search_form_id" type="hidden" value="18">
		<div class="col-sm-6" style="padding-left:0px;">
		
        <input size="30" id="global_search1" value="Search Product/Service" name="keyword">
		</div>
        <input class="newdesign" id="search_btn" title="Search" name="Submit" type="Submit" value="Search">
							
      </form>
           <div class="clr"></div>
    

</div>
</div>-->


        <div class="row" style="background-color:white">
                    
					<div class="col-sm-3">
                    </div>
					
					
					<div class="col-sm-6" style="margin-top:120px;">
                        <div class="card-box" style="box-shadow: 0 6px 15px 0 rgba(0, 0, 0, 0.2), 0 10px 15px 0 rgba(0, 0, 0, 0.19);">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;">Sign In to <b>MY PROFILE</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
									<?php include('../mp_connect.php');?>
                                    <form class="form-horizontal" role="form"  method="POST">
                                        
										
										<div class="form-group">
                                            <label>User Name</label>
                                            <input type="email" class="form-control" placeholder="Username" name="username" required>
                                        </div>
                                        
										<div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                                        </div>
										
										<div class="form-group ">
										<div class="col-xs-12">
											<div class="checkbox checkbox-primary">
												<input id="checkbox-signup" type="checkbox">
													<label for="checkbox-signup">
														Remember me
													</label>
											</div>
                        
										</div>
										</div>
										
										<div class="form-group text-right m-b-0">
										<center>
										<button class="btn waves-effect waves-light" style="background-color:#ce241b; color:#fff;" type="submit" value="Log In" name="login">
                                        Log In
										</button>
										</center>
										</div>
										
										<div class="form-group m-t-30 m-b-0">
											<div class="col-sm-12">
												<a href="mp_forgot_password.php" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
											</div>
										</div>

                                    </form>
                                </div>
								
							   
                                


                            </div>
							
							
                        </div>
                    </div>
					
					<div class="row">
							<div class="col-sm-12 text-center">
								<p>Don't have an account? <a href="mp_user_registration.php" style="color:#ce241b;" class="m-l-5"><b>Sign Up</b></a></p>
							</div>
							</div>
					<div class="col-sm-3">
                    </div>
					
                </div>

<?php include ("../include/footer.php");
include("../mp_connect.php");

session_start();

if(isset($_POST['login']))
{
	
	$user_id=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select * from mp_registration where email_id='$user_id' and password='$password'";
	$result=mysqli_query($con,$sql);
	$counts=mysqli_num_rows($result);
	if($counts==1)
	{
	$sql2="select * from mp_registration where email_id='$user_id' and password='$password' and type='admin'";
	$results=mysqli_query($con,$sql2);
	$row8=mysqli_fetch_array($results);
	
	$counts=mysqli_num_rows($results);
	
	if($counts==1)
	{
		header('location:../../mp_superadmin/index.php');
	}
	else
	{
	$sql="select * from mp_registration where email_id='$user_id' and password='$password' and type='employee'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($row['isapprove']==1)
	{
	$count=mysqli_num_rows($result);
	
	if($count==1)
	{
		$eid=$row['employee_id'];
		$query1="update mp_registration set status='1' where employee_id='$eid'";
		$data1=mysqli_query($con,$query1);
		$_SESSION['employee_id']=$row['employee_id'];
		$_SESSION['user_firstname']=$row['firstname'];
		$_SESSION['email_id']=$row['email_id'];
		$_SESSION['user_lastname']=$row['lastname'];
		$eid=$row['employee_id'];
		
		$que="select * from mp_education where employee_id='$eid'";
		$data=mysqli_query($con,$que);
		$rec=mysqli_fetch_array($data);
		
		$count1=mysqli_num_rows($data);
		
		
		if($count1>0)
		{
					
					$que1="select * from mp_skill where employee_id='$eid'";
						$data1=mysqli_query($con,$que1);
						$rec1=mysqli_fetch_array($data1);
		
						$count2=mysqli_num_rows($data1);
						
						if($count2>0)
						{
							$que2="select * from mp_portfolio where employee_id='$eid'";
							$data2=mysqli_query($con,$que2);
							$rec2=mysqli_fetch_array($data2);
		
							$count3=mysqli_num_rows($data2);
								if($count3>0)
								{
									$que3="select * from mp_contactus where employee_id='$eid'";
									$data3=mysqli_query($con,$que3);
									$rec3=mysqli_fetch_array($data3);
		
									$count4=mysqli_num_rows($data3);
									if($count4>0)
									{
										$query4="select * from mp_profile where employee_id='$eid'";
										$data4=mysqli_query($con,$query4);
										$rec4=mysqli_fetch_array($data4);
										
										$count5=mysqli_num_rows($data4);
										
										if($count5>0)
										{
											$query5="select * from mp_keyword where employee_id='$eid'";
											$data5=mysqli_query($con,$query5);
											$rec5=mysqli_fetch_array($data5);
										
											$count6=mysqli_num_rows($data5);
										
											if($count6>0)
											{
												header('location:../../mp_subadmin/education/mp_education_display.php');
											}
											else
											{
												header('location:../../mp_subadmin/keyword/mp_keyword.php');
											}
										}
										else
										{
											header('location:../../mp_subadmin/profile/mp_profile.php');
										}
									}
									else
									{
										header('location:../../mp_subadmin/contact/contactus.php');
									}
								}
								else
								{
									header('location:../../mp_subadmin/mp_portfolio/portfolio_main.php');
								}
						}
						else
						{
							header('location:../../mp_subadmin/skill/mp_skill.php');
						}
		
			
		}
		else
		{
			header('location:../../mp_subadmin/education/mp_education.php');
		}
	
	}
		
	}
else if($row['isapprove']==2)
{
	$_SESSION['error_text']="You are suspended";
	header('location:page_error.php');
}
else
{
	$_SESSION['error_text']="You are not Approve";
	header('location:page_error.php');
}	
}
	}
	
	else{
		echo "<script> alert('Wrong username or password..')</script>";
	}
}
?>