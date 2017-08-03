<?php
include('./include/header.php');
include('./include/menu.php');

?>    
    <section id="nr_slider" class="row">
        <div class="mainSliderContainer">
            <div class="mainSlider" >
                <ul>
                    <li data-transition="boxslide" data-slotamount="7" >
					<?php
					$pr_sql="select * from mp_profile where employee_id='$eid'";
							$pr_result=mysqli_query($con,$pr_sql);
							$emp_pr=mysqli_fetch_array($pr_result);
					?>
                       <img src="../../mp_subadmin/profile/profile/<?php echo $emp_pr['profile_url']; ?>" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="center" 
                           data-y="140" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h2><?php echo ucwords($fname); ?>  <strong><?php echo ucwords($lname);?></strong></h2>
                       </div>
                       <div class="caption sfl stl"  
                           data-x="center" 
                           data-y="225" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                            <div class="cont-row"><span class="bb1">
							<?php
								$k_sql="select * from mp_keyword where employee_id='$eid'";
								$k_result=mysqli_query($con,$k_sql);
								$emp_key=mysqli_fetch_array($k_result);
								echo ucwords($emp_key['keyword']);
							?>
							
							
							</span></div>
                       </div>
                      
                </ul>
            </div>
        </div>
        
        <div class="container sliderAfterTriangle"></div> <!--Triangle After Slider-->
    </section> <!--Slider-->
    
    <section id="nr_services" class="row">
        <div class="container">
            <div class="row sectionTitles">
                <h2 class="sectionTitle">Skill</h2>
                <div class="sectionSubTitle">what your proffetion</div>
            </div>
			
		   <div class="row m0 text-center col-sm-12">
		   <?php
					$s_sql="select * from mp_skill where employee_id='$eid'";
					$s_result=mysqli_query($con,$s_sql);
					while($emp_skill=mysqli_fetch_array($s_result))
					{
		   ?>
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                            <div class="serviceName" style="margin-top:80px;" data-hover="<?php echo $emp_skill['skill_name'];?>"><?php echo $emp_skill['skill_name'];?></div><br>
							<div class="serviceName" data-hover="<?php echo $emp_skill['skill_capicity'];?>%"><?php echo $emp_skill['skill_capicity'];?>%</div>
                        </div>
                    </div>
                </div>
				<?php
				}
				?>
            </div>
			
        </div>
    </section> <!--Services-->
    

	
	 <section id="aboutus" class="row">
        <div class="container">
            <div class="row">
	
				<div class="row aboutContent">
                        <div class="row aboutUsTexts m0 member">
                            <div class="fleft textsPart">
                                <div class="row sectionTitles" style="margin-left:35%;">
								<h2 class="sectionTitle">Education</h2>
								<div class="sectionSubTitle">what your proffetion</div>
								</div>	
								 <div class="fleft aboutImg" style="margin-left:50%;">
									<img src="images/team/about-us.png" alt="">
								</div>
                                <?php
								$e_sql="select * from mp_education where employee_id='$eid'";
								$e_result=mysqli_query($con,$e_sql);
								while($emp_edu=mysqli_fetch_array($e_result))
								{
								
								?>
								<div class="textsPart" style="clear:both; margin-top:10px;">
                                        <h4><b>Degree:</b>&nbsp<?php echo $emp_edu['education_type'];?> </h4>
                                        <h4><b>Year:</b>&nbsp<?php echo $emp_edu['education_year'];?> </h4>
										<h4><b>Percentage:</b>&nbsp<?php echo $emp_edu['education_percentage'];?> </h4>
										<h4><b>Place:</b>&nbsp<?php echo $emp_edu['education_place'];?> </h4>
										<h4><b>Institute:</b>&nbsp<?php echo $emp_edu['education_institute'];?> </h4>
                                  </div>
								<?php
								}
								?>	
                            </div>
                           
                        </div>
                        
                    </div>
				</div>
			</div>
		</section>
	
	
	
	
	
    
    
    
  
   
    
    <footer id="nr_footer" class="row">
        <div class="container">
            <div class="row goTop">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </div>
            <div class="row twitterSlide">                
                <div class="owl-carousel twitterSlider">
                    <div class="item">
                        <i class="fa fa-twitter"></i><br>
						My Profile
                    </div>
                    <div class="item">
                        <i class="fa fa-twitter"></i><br>
						MY Profile
						</div>
                </div>
            </div>
            <div class="footerWidget row">
                <div class="col-sm-6 widget">
                    <div class="getInTouch_widget row">
                        <div class="widgetHeader row m0"><img src="images/whiteSquare.png" alt="">Get in touch</div>        
                        <div class="row getInTouch_tab m0">
                            <ul class="nav nav-tabs nav-justified" role="tablist" id="getInTouch_tab">
                              <li role="presentation" class="active"><a href="#contactPhone" aria-controls="contactPhone" role="tab" data-toggle="tab"><i class="fa fa-phone"></i></a></li>
                              <li role="presentation"><a href="#contactEmail" aria-controls="contactEmail" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i></a></li>
                              <li role="presentation"><a href="#contactHome" aria-controls="contactHome" role="tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                            </ul>

                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="contactPhone"><i class="fa fa-phone"></i> call us at: +399 (500) 321 9548</div>
                              <div role="tabpanel" class="tab-pane" id="contactEmail"><i class="fa fa-envelope"></i>email us at: support@construction.com</div>
                              <div role="tabpanel" class="tab-pane" id="contactHome"><i class="fa fa-home"></i>Pawsar, Bicrompur, Munshigonj.</div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-sm-6 widget">
                    <div class="row flickrSlider">
                        <div class="widgetHeader row m0"><img src="images/whiteSquare.png" alt="">Flickr Gallery</div>        
                        <div class="row flickrSliderRow m0">
                            <div data-toggle="jsfg" data-tags="dogs" data-per-page="5" data-set-id="72157650377967655"></div>
                        </div>                        
                    </div>    
                </div>
            </div>
            <div class="row copyrightRow">
                &copy; 2016 <a href="#">My Profile</a>, All Rights Reserved
            </div>
        </div>
    </footer>
	
   
	<?php
					$pr_sql="select * from mp_profile where employee_id='$eid'";
							$pr_result=mysqli_query($con,$pr_sql);
							$emp_pr=mysqli_fetch_array($pr_result);
					?>
   <img src="../../mp_subadmin/profile/profile/<?php echo $emp_pr['profile_url']; ?>" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       
    
    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    <script src="vendors/mixitup/jquery.mixitup.js"></script>
    <script src="vendors/masonary/masonry.pkgd.min.js"></script>
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:42 GMT -->
</html>