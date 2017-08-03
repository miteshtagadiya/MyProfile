<?php
include('./include/header.php');
include('./include/menu.php');
?>   
    <section id="pageCover" class="row">
        <div class="row pageTitle">Contact us</div>
    </section>
    
    <section id="contacts" class="row">
        <div class="container">
            <div class="row">
                <div class="row m0">
                    <div class="col-sm-6">
                        <div class="row m0">
                            <h3>Get in touch!</h3>
                            <ul class="list-inline">
							<?php
							$c_sql="select * from mp_contactus where employee_id='$eid'";
							$c_result=mysqli_query($con,$c_sql);
							$emp_c=mysqli_fetch_array($c_result);
					?>
                                <li><i class="fa fa-home"></i> <?php echo $emp_c['contactus_address'];?></li><br><br>
                                <li><i class="fa fa-phone"></i> <?php echo $emp_c['contactus_phone_1'];?></li><br><br>
                                <li><i class="fa fa-envelope"></i> <?php echo $emp_c['contactus_emailid'];?></li>
                            </ul>
                        </div>                        
                    </div>
                    <div class="col-sm-6">
                        <div class="row m0 commentForm">
                            <form class="row m0" id="contactForm" method="post" name="contact" action="http://premiumlayers.com/demos/construction/contact_process.php">
                                <div class="col-sm-6 p0 commenterInfoInputs">
                                    <div class="row m0">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" name="name" id="name"  placeholder="Name">
                                        </div>
                                        <label for="name" class="m0"></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="e-mail">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                            <input type="url"  name="url" id="url" class="form-control" placeholder="website">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p0">
                                    <div class="row m0">                                        
                                        <div class="input-group">
                                            <textarea placeholder="Message" name="message" id="message" class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-default" type="submit">send message</button>
                                    </div>
                                </div>
                            </form>
                            <div id="success">
                                <span class="green textcenter">
                                    <p>Your message was sent successfully! I will be in touch as soon as I can.</p>
                                </span>
                            </div>
                            <div id="error">
                                <span>
                                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                                </span>
                            </div>
                        </div>                       
                    </div>
                </div>                
                <div class="row m0">
                    <h3>Find us on Google Map</h3>
                    <div id="gmaps-basic" class="gmaps"><span style="padding-top:100px;"></span></div>
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
    
		 <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>
	     <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- gmap js file -->
        <script src="../assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="../assets/pages/jquery.gmaps.js"></script>
       
    
    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    <script src="vendors/mixitup/jquery.mixitup.js"></script>
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
    <script src="js/contact.js"></script>
	
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript"> 
            var map;
            var marker;
            var myLatlng = new google.maps.LatLng(<?php echo $emp_c['latitude']; ?>,<?php echo $emp_c['longitude']; ?>);
            var geocoder = new google.maps.Geocoder();
            var infowindow = new google.maps.InfoWindow();
            function initialize(){
                var mapOptions = {
                    zoom: 18,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
		       
                map = new google.maps.Map(document.getElementById("gmaps-basic"), mapOptions);
                
                marker = new google.maps.Marker({
                    map: map,
                    position: myLatlng,
                    draggable: true 
                });     
                
                geocoder.geocode({'latLng': myLatlng }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#address').val(results[0].formatted_address);
                            $('#latitude').val(marker.getPosition().lat());
                            $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });

                               
                google.maps.event.addListener(marker, 'dragend', function() {

                geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#address').val(results[0].formatted_address);
                            $('#latitude').val(marker.getPosition().lat());
                            $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });
            
            }
            
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>  
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 18:30:54 GMT -->
</html>