<!--
    Code for update contact details
-->

<?php 
session_start();
include ("../include/header.php");
include ("../include/menu.php");
include ("../mp_connect.php");
$eid=$_SESSION['employee_id'];
$query1="select contactus_id from mp_contactus where employee_id='$eid'";
$data1=mysqli_query($con,$query1);
$rec1=mysqli_fetch_array($data1);
$id=$rec1['contactus_id'];

if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact1=$_POST['contact1'];
	$contact2=$_POST['contact2'];
	$email=$_POST['email'];
	$latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];
	$employeeid=$eid;
	$query="update mp_contactus set contactus_name='$name' ,contactus_address='$address' ,contactus_phone_1='$contact1' ,contactus_phone_2='$contact2' ,contactus_emailid='$email' ,latitude='$latitude' ,longitude='$longitude' where employee_id='$eid'";
	if(mysqli_query($con,$query))
	{
		header("location:contactus_display.php");
	}
	else{
		header("location:contactus_update.php");
	}
	
}
$query="select * from mp_contactus where employee_id='$eid'";
$data=mysqli_query($con,$query);
$rec=mysqli_fetch_array($data);

?>
?>

        <div class="wrapper">
            <div class="container">

               

			<div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="card-box" style="margin-top:50px;">
									 <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Contact US</b></h4>
                                <div class="row">
                                 

								
									<div class="row">
										<form method="post">
											<div class="col-sm-6">
											
												<div class="form-group">
													<label>Name</label>
													<input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $rec['contactus_name']; ?>">
												</div>
										
										
												<div class="form-group">
													<label>Address</label>
													<textarea class="form-control" rows="5" name="address"><?php echo $rec['contactus_address']; ?></textarea>
												</div>    								
											</div>
										<div class="col-sm-6">
											
											<div class="form-group">
                                            <label>Contact number1</label>
                                            <input type="text" class="form-control" placeholder="Enter contact no.1" name="contact1" value="<?php echo $rec['contactus_phone_1']; ?>">
											</div>
										
											<div class="form-group">
                                            <label>Contact number2</label>
                                            <input type="text" class="form-control" placeholder="Enter contact no.2" name="contact2" value="<?php echo $rec['contactus_phone_2']; ?>">
											</div>
										
											<div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?php echo $rec['contactus_emailid']; ?>">
											</div>
										</div>
											
										
									</div>	
										<div class="row">
										<div style="background-color:#5D9CEC;border-radius:10px; margin :9px;padding : 1px;">
										<p><center><font color="white" size=5%><b>Google Map</b></font></center></p>
										</div>
										</div>
										
										<div class="form-group">
											
												
												<label>Map Address</label>
												<input type="text" id="address" class="form-control">
											
										</div>
                                        
										<div class="row" style="margin-top:10px;">  
										<div class="form-group">
											<label class="col-sm-6">Latitude</label>
											<label class="col-sm-6">Longitude</label>
										
											<div class="col-sm-6">
												<input type="text" id="latitude" class="form-control" name="latitude">
											</div>
											<div class="col-sm-6">
												<input type="text" id="longitude" class="form-control" name="longitude">
												</div>
										</div>
																 
										</div>	
															 
                                </div>
								<br>
								<div id="gmaps-basic" class="gmaps"><span style="padding-top:100px;"></span></div>
								
								<div class="form-group">
										<div class="form-group text-right m-b-0">
											<center style="padding-top:50px;">
											<button class="btn btn-primary waves-effect waves-light" type="submit" name="submit" value="submit">
												Update
											</button>
											<button type="reset" class="btn btn-default waves-effect waves-light m-l-5" name="reset">
												Cancel
											</button>
											</center>
										</div>
								</div>
										
                            </div>
                        </div>
                    </div>

                </div>
		<!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12" style="text-align:center;">
                                2016 © MyProfile.
                            </div>
                            
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- End wrapper -->
		 <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>
		
		<!-- jQuery  -->

		 <!-- moment -->
        <script src="../assets/plugins/moment/moment.js"></script>
		
		 <!-- bootstrap-timepicker -->
     	<script src="../assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- bootstrap-colorpicker -->
     	<script src="../assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- bootstrap-datepicker -->
     	<script src="../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- clockpicker -->
     	<script src="../assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
        <!-- daterangepicker -->
     	<script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


	     <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- gmap js file -->
        <script src="../assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="../assets/pages/jquery.gmaps.js"></script>
       	
		<!-- Bootstrap-tagsinput  -->
        <script src="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <!-- Switchery  -->
        <script src="../assets/plugins/switchery/dist/switchery.min.js"></script>
        <!-- multiselect  -->
        <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="../assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <!-- select2  -->
        <script src="../assets/plugins/select2/select2.min.js" type="text/javascript"></script>
        <!-- Bootstrap-select  -->
        <script src="../assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <!-- Bootstrap-filestyle  -->
        <script src="../assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <!-- Bootstrap-touchspin  -->
        <script src="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <!-- Bootstrap-maxlength  -->
        <script src="../assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
		
		 <!-- Datatable js -->
        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="../assets/plugins/datatables/jszip.min.js"></script>
        <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Data table init -->
        <script src="../assets/pages/datatables.init.js"></script>
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>
		<script>
            jQuery(document).ready(function() {

                //advance multiselect start
                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });

                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
				  maximumSelectionLength: 2
				});

			   $('.selectpicker').selectpicker();
	            $(":file").filestyle({input: false});
				 // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-autoclose').datepicker({
                	autoclose: true,
                	todayHighlight: true
                });
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple-date').datepicker({
                    format: "mm/dd/yyyy",
					clearBtn: true,
					multidate: true,
					multidateSeparator: ","
                });
                jQuery('#date-range').datepicker({
                    toggleActive: true
                });


				//Date range picker
				$('.input-daterange-datepicker').daterangepicker({
					buttonClasses: ['btn', 'btn-sm'],
		            applyClass: 'btn-default',
		            cancelClass: 'btn-white'
				});
		        $('.input-daterange-timepicker').daterangepicker({
		            timePicker: true,
		            format: 'MM/DD/YYYY h:mm A',
		            timePickerIncrement: 30,
		            timePicker12Hour: true,
		            timePickerSeconds: false,
		            buttonClasses: ['btn', 'btn-sm'],
		            applyClass: 'btn-default',
		            cancelClass: 'btn-white'
		        });
		        $('.input-limit-datepicker').daterangepicker({
		            format: 'MM/DD/YYYY',
		            minDate: '06/01/2015',
		            maxDate: '06/30/2015',
		            buttonClasses: ['btn', 'btn-sm'],
		            applyClass: 'btn-default',
		            cancelClass: 'btn-white',
		            dateLimit: {
		                days: 6
		            }
		        });

		        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

		        $('#reportrange').daterangepicker({
		            format: 'MM/DD/YYYY',
		            startDate: moment().subtract(29, 'days'),
		            endDate: moment(),
		            minDate: '01/01/2012',
		            maxDate: '12/31/2015',
		            dateLimit: {
		                days: 60
		            },
		            showDropdowns: true,
		            showWeekNumbers: true,
		            timePicker: false,
		            timePickerIncrement: 1,
		            timePicker12Hour: true,
		            ranges: {
		                'Today': [moment(), moment()],
		                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
		                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
		                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
		                'This Month': [moment().startOf('month'), moment().endOf('month')],
		                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		            },
		            opens: 'left',
		            drops: 'down',
		            buttonClasses: ['btn', 'btn-sm'],
		            applyClass: 'btn-default',
		            cancelClass: 'btn-white',
		            separator: ' to ',
		            locale: {
		                applyLabel: 'Submit',
		                cancelLabel: 'Cancel',
		                fromLabel: 'From',
		                toLabel: 'To',
		                customRangeLabel: 'Custom',
		                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
		                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
		                firstDay: 1
		            }
		        }, function (start, end, label) {
		            console.log(start.toISOString(), end.toISOString(), label);
		            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		        });
	            });

	        </script>

			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript"> 
            var map;
            var marker;
            var myLatlng = new google.maps.LatLng(<?php echo $rec['latitude']; ?>,<?php echo $rec['longitude']; ?>);
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "../../assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>
			
    </body>

</html>