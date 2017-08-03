<?php
include('./include/header.php');
include('./include/menu.php');
$id=$_REQUEST['id'];
?>
    <section id="nr_slider" class="row">
        <div class="mainSliderContainer">
            <div class="mainSlider" >
                <ul>
				 <?php
							$pi_sql="select * from mp_portfolio_image where portfolio_id='$id'";
							$pi_result=mysqli_query($con,$pi_sql);
							while($emp_port_img=mysqli_fetch_array($pi_result))
							{						
						?>
                    <!-- SLIDE  -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="../../mp_subadmin/mp_portfolio/portfolio_image/<?php echo $_SESSION['email_id']."/portfolio_subimage/".$emp_port_img['portfolio_image_url'];?>" alt="slidebg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                   
                     
                     <div class="caption sfr str"  
                           data-x="center" 
                           data-y="140" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h2><strong> Portfolio</strong></h2>
                       </div>
                                            
                    </li>
							<?php } ?>		
                   </ul>
            </div>
        </div>
        
        <div class="container sliderAfterTriangle"></div> <!--Triangle After Slider-->
    </section> <!--Slider-->
    
     
 <!-- <section id="pageCover" class="row blogPage"> 
        
        <div class="row pageTitle">Portfolio Image<?php echo $id?></div>
       
    </section>
   !-->
	<section id="services" class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
						<div class="row m0 whatOffer">
                            <div class="col-sm-12">
                                <div class="row m0 whatOfferInner">
							<?php
							$p_sql="select * from mp_portfolio where portfolio_id='$id'";
							$p_result=mysqli_query($con,$p_sql);
							$emp_port=mysqli_fetch_array($p_result);
                            ?>
							<h3><?php echo $emp_port['portfolio_title'];?></h3>
                                    <span><?php echo $emp_port['portfolio_title'];?></span>  <p>
									<?php echo $emp_port['portfolio_description'];?>
									</p>
                                </div>
                            </div>
                        </div>
						</div>
					</div>
				</div>
			</div>
		</section>
						
	
    <section id="blogs" class="row">
        <div class="container">
            <div class="row">
			 <?php
							$pi_sql="select * from mp_portfolio_image where portfolio_id='$id'";
							$pi_result=mysqli_query($con,$pi_sql);
							while($emp_port_img=mysqli_fetch_array($pi_result))
							{						
						?>
                <div class="col-sm-4 blog">
                    <div class="row m0 blogInner">
                        <div class="row m0 blogDateTime">
                            <i class="fa fa-calendar"></i> <?php echo $_SESSION["p_date"];?>
                        </div>
                        <div class="row m0 featureImg">
                           
                                <img src="../../mp_subadmin/mp_portfolio/portfolio_image/<?php echo $_SESSION['email_id']."/portfolio_subimage/".$emp_port_img['portfolio_image_url'];?>" width="358px" height="309.61px" alt="Faceted Search Has Landed">
                          
                        </div>
                       
                    </div>
                </div>
							<?php } ?>
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

<!-- Mirrored from premiumlayers.com/demos/construction/blog3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:51 GMT -->
</html>