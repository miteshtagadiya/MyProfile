
    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="../../index.php" class="logo"><img src="../img/logo1.png" style="height:50px; width:150px; 	"></img></a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
					<?php include ("../mp_connect.php"); 
							
							if(!isset($_SESSION))
							{
								session_start();
								$fname=$_SESSION['user_firstname']; 
								$lname=$_SESSION['user_lastname']; 
								$id=$_SESSION['employee_id'];
							}
							else
							{
							$fname=$_SESSION['user_firstname']; 
							$lname=$_SESSION['user_lastname']; 
							$id=$_SESSION['employee_id'];
							}
					?>          
                            

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><i class="ti-user m-r-5"></i>Hi,<?php echo $fname." ".$lname;?></a>
                                <ul class="dropdown-menu">
                                  
                                    <li><a href="../../mp_user/mp_user_registration/mp_user_logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>
            <!-- End topbar -->


            <!-- Navbar Start -->
            <div class="navbar-custom">
                <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
					
					<li class="has-submenu">
                            <a href="../profile/mp_profile_display.php"><i class="md md-pages"></i>Profile</a>
                        </li>
					
					<li class="has-submenu">
                            <a href="../education/mp_education_display.php"><i class="md md-pages"></i>Education</a>
                           
                        </li>
					
					<li class="has-submenu">
                            <a href="../skill/mp_skill_display.php"><i class="md md-pages"></i>Skill</a>
                        </li>
					
					
					 <li class="has-submenu">
                            <a href="../mp_portfolio/portfolio_display.php"><i class="md md-pages"></i>Portfolio</a>
                        </li>
						
						<li class="has-submenu">
                            <a href="../mp_portfolio/portfolio_sub_image_table.php"><i class="md md-pages"></i>Portfolio Image</a>
                        </li>

						<li class="has-submenu">
                            <a href="../contact/contactus_display.php"><i class="md md-pages"></i>Contact US</a>
                        </li>
						

						<li class="has-submenu">
                            <a href="../keyword/mp_keyword_display.php"><i class="md md-pages"></i>Keyword</a>
                        </li>
                      
					  <li class="has-submenu">
                            <a href="../theme/theme.php"><i class="md md-pages"></i>Theme</a>
                        </li>
                  
                    </ul>
                    <!-- End navigation menu        -->
                </div>
            </div>
            </div>
        </header>