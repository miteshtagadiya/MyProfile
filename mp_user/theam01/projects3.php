<?php
include('./include/header.php');
include('./include/menu.php');
?>   
    <section id="pageCover" class="row projectPage">
        
        <div class="row pageTitle">Portfolio</div>
        <div class="row pageBreadcrumbs">
            
        </div>
    </section>
    
    <section id="projects" class="row fullWidth col3 page">        
        <div class="container">
            <div class="row">
        <div class="row filters m0">
        </div>
                <div class="row projects m0 js-masonry" data-masonry-options='{ "columnWidth": 200, "itemSelector": ".project" }'>
                    <?php
							$p_sql="select * from mp_portfolio where employee_id='$eid'";
							$p_result=mysqli_query($con,$p_sql);
							while($emp_port=mysqli_fetch_array($p_result))
							{						
						?>
					<div class="project mix catHouses">
                        <a href="blog3.php?id=<?php echo $emp_port['portfolio_id'];?>">
                            <img src="../../mp_subadmin/mp_portfolio/portfolio_image/<?php echo $_SESSION['email_id']."/".$emp_port['portfolio_main_image'];?>" alt="Project 1" width="360px" height="263.25px" class="projectImg">
                        </a>
                        <div class="projectDetails row m0">
                            <div class="fleft nameType">
                                <div class="row m0 projectName"><?php echo $emp_port['portfolio_title'];?></div>
                                <div class="row m0 projectType"><?php
								$date=date_create($emp_port['portfolio_date']);
								$_SESSION["p_date"]=date_format($date,"d-M-Y");
								echo date_format($date,"d-M-Y");								
								?></div>
                            </div>
                            <div class="fright projectIcons btn-group" role="group">
                                <a href="blog3.php?id=<?php echo $emp_port['portfolio_id'];?>" class="btn btn-default"><i class="fa fa-search"></i></a>
                                
                            </div>
                        </div>
					</div>
							<?php } ?>
				</div>
					
                
            </div>
        </div>
    </section> <!--Projects-->    
    
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
                       My Profile 
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
    
    
    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    <script src="vendors/mixitup/jquery.mixitup.js"></script>
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/projects3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:51 GMT -->
</html>