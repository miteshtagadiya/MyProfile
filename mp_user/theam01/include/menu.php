<?php
include('../../mp_connect.php');
	
		$eid=$_SESSION['employee_id'];
?>		
   <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid container">
            <div class="row m04m">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav">
                        <span class="bars">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                        <span class="btn-text">Select Page</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li class="active "><a href="./">Home</a></li>
                        
                        <li class=" dropdown">
                            <a href="./projects3.php">Portfolio</a>
                            <ul class="dropdown-menu" role="menu">
							<?php
							$p_sql="select * from mp_portfolio where employee_id='$eid'";
							$p_result=mysqli_query($con,$p_sql);
							while($emp_port=mysqli_fetch_array($p_result))
							{
							?>
                                <li><a href="blog3.php?id=<?php echo $emp_port['portfolio_id'];?>"><?php echo $emp_port['portfolio_title'];?></a></li>
                              <?php
								}
							  ?> 
                            </ul>
                        </li>
                      
                        <li class=" dropdown">
                            <a href="contact.php">contact</a>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> <!--Main Nav-->