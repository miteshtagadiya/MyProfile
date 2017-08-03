<!DOCTYPE html>
<html>
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="./assets/images/favicon_1.ico">

        <title>MyProfile</title>
		
		 <!-- Sweet Alert css -->
        <link href="./assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
		
		<!-- Bootstrap-timepicker -->
        <link href="./assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <!-- Bootstrap-colorpicker -->
		<link href="./assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <!-- Bootstrap-datepicker -->
		<link href="./assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <!-- Clockpicker -->
		<link href="./assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
        <!-- Daterangepicker -->
		<link href="./assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		
		
		        <!-- C3 Chart -->
        <link href="./assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />
        <!-- Custombox css -->
        <link href="./assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">

		
		
		<!-- Bootstrap-tagsinput css-->
        <link href="./assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <!-- switchery css-->
        <link href="./assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
        <!-- multiselect css-->
        <link href="./assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <!-- select2 css-->
        <link href="./assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap-select css-->
        <link href="./assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
        <!-- Bootstrap-touchspin css-->
        <link href="./assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
		
		<!-- DataTables -->
        <link href="./assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

       
       
		
		
		
		<link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="./assets/js/modernizr.min.js"></script>
		
		
		
		
    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="../index.php" class="logo"><img src="./img/logo1.png" style="height:50px; width:150px; margin-bottom:15px;"></img></a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            
                            

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><i class="ti-user m-r-5"></i>Hello Admin</a>
                                <ul class="dropdown-menu">
                                  
                                    <li><a href="../mp_user/mp_user_registration/index.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                            <a href="./approve/user_dashboard.php"><i class="md md-pages"></i>User</a>
                           
                        </li>
						
						
					 <li class="has-submenu">
                            <a href="./mp_category/mp_category_display.php"><i class="md md-pages"></i>Category</a>
                           
                        </li>

						<li class="has-submenu">
                            <a href="./mp_field/mp_field_display.php"><i class="md md-pages"></i>Field</a>
                           
                        </li>
						
						<li class="has-submenu">
                            <a href="./mp_type/mp_type_display.php"><i class="md md-pages"></i>Type</a>
                           
                        </li>
						
						<li class="has-submenu">
                            <a href="./Theme/view_theme.php"><i class="md md-pages"></i>Theme</a>
                          
                        </li>
					



                      
                  
                    </ul>
                    <!-- End navigation menu        -->
                </div>
            </div>
            </div>
        </header>

<?php 

include ("./mp_connect.php");
?>


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
               
				
				
                <!-- Page-Title -->

				
				
                <div class="row">
                    <div class="col-sm-12" style="margin-top:50px;">
                        
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./approve/user_approve_history.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Total Users
									</div>
									
								</div>
							</a>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./approve/user_deactivated_display.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where isapprove='2' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Deactivated Users
									</div>
									
								</div>
							</a>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./approve/user_approved_display.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where isapprove='1' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Approved Users
									</div>
									
								</div>
							</a>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./approve/user_approve_pending.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where isapprove='0' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											UnApproved Users
									</div>
									
								</div>
							</a>
							</div>
							
							
							<div class="col-md-6 col-sm-6 col-lg-3">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $date=date('Y-m-d'); $sql="select * from mp_registration where register_date='$date' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Users Joined Today
									</div>
									
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6 col-lg-3">
							<a href="./approve/user_active_display.php">
								<div class="mini-stat clearfix card-box">
									<span class="mini-stat-icon bg-success"><i class="ion-android-contacts text-white"></i></span>
									<div class="mini-stat-info text-right text-dark">
										<span class="counter text-dark"><?php $sql="select * from mp_registration where status='1' and type='employee'"; $data=mysqli_query($con,$sql); $rec=mysqli_num_rows($data); echo $rec;?></span>
											Active Users
									</div>
									
								</div>
							</a>
							</div>
							
							
							
					</div>
					
					
					<div class="row" style="margin-bottom:20px;">
                    <div class="col-sm-12">
                        <h4 class="page-title" style="text-align:center;">All Records </h4>
					</div>
				</div>
					
						<div class="card-box table-responsive">
							
							
							<table id="datatable-responsive"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>Id</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>E-mail</th>
                                        <th>Password</th>
                                        <th>Mobile No.</th>
										<th>Birth Date</th>
										<th>Gender</th>
										<th>Register Date</th>
										<th>Category</th>
										<th>Type</th>
										<th>Approve</th>
										<th>Status</th>
										<th>Update</th>
										<th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php $query="select * from mp_registration"; $data=mysqli_query($con,$query); 
										
											while($rec=mysqli_fetch_array($data))
											{ ?>
										
										<tr>
										<td><?php echo $rec['employee_id']; ?></td>
                                        <td><?php echo $rec['firstname']; ?></td>
                                        <td><?php echo $rec['lastname']; ?></td>
                                        <td><?php echo $rec['address']; ?></td>
                                        <td><?php echo $rec['country_name']; ?></td>
                                        <td><?php echo $rec['state_name']; ?></td>
                                        <td><?php echo $rec['city_name']; ?></td>
                                        <td><?php echo $rec['email_id']; ?></td>
                                        <td><?php echo $rec['password']; ?></td>
                                        <td><?php echo $rec['mobile_no']; ?></td>
										<td><?php echo $rec['date_of_birth']; ?></td>
										<td><?php echo $rec['gender']; ?></td>
										<td><?php echo $rec['register_date']; ?></td>
										<td><?php echo $rec['category_id']; ?></td>
										<td><?php echo $rec['type_id']; ?></td>
										<td><a href="#" style="color:red;">Deactivated</a><br>
											<a href="user_approve_update.php?id=<?php echo $rec['employee_id']; ?>" style="margin-left:80px; color:Green;">Approve(Approve this record)</a>
											</td>
										<td><?php echo $rec['status']; ?></td>
										<td><a href="user_update.php?id=<?php echo $rec['employee_id']; ?>"><img src="./img/update.png" alt="Delete" style="width:10%;height:10%;"></a></td>
										<td><a href="user_delete.php?id=<?php echo $rec['employee_id']; ?>"><img src="./img/delete.png" alt="Update" style="width:10%;height:10%;"></a></td>
                                    </tr>
												
											<?php	} ?>
                                </tbody>
							</table>
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
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/detect.js"></script>
        <script src="./assets/js/fastclick.js"></script>
        <script src="./assets/js/jquery.slimscroll.js"></script>
        <script src="./assets/js/jquery.blockUI.js"></script>
        <script src="./assets/js/waves.js"></script>
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/jquery.nicescroll.js"></script>
        <script src="./assets/js/jquery.scrollTo.min.js"></script>
		
		<!-- jQuery  -->

		 <!-- moment -->
        <script src="./assets/plugins/moment/moment.js"></script>
		
		 <!-- bootstrap-timepicker -->
     	<script src="./assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- bootstrap-colorpicker -->
     	<script src="./assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- bootstrap-datepicker -->
     	<script src="./assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- clockpicker -->
     	<script src="./assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
        <!-- daterangepicker -->
     	<script src="./assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


			
		<!-- Bootstrap-tagsinput  -->
        <script src="./assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <!-- Switchery  -->
        <script src="./assets/plugins/switchery/dist/switchery.min.js"></script>
        <!-- multiselect  -->
        <script type="text/javascript" src="./assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="./assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <!-- select2  -->
        <script src="./assets/plugins/select2/select2.min.js" type="text/javascript"></script>
        <!-- Bootstrap-select  -->
        <script src="./assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <!-- Bootstrap-filestyle  -->
        <script src="./assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <!-- Bootstrap-touchspin  -->
        <script src="./assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <!-- Bootstrap-maxlength  -->
        <script src="./assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
		
		 <!-- Datatable js -->
        <script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="./assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="./assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="./assets/plugins/datatables/jszip.min.js"></script>
        <script src="./assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="./assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="./assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="./assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="./assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.scroller.min.js"></script>
			
		 <!-- Modal-Effect -->
        <script src="./assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="./assets/plugins/custombox/dist/legacy.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="./assets/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="./assets/plugins/c3/c3.min.js"></script>
        <!-- opportunities.init.js -->
        <script type="text/javascript" src="./assets/pages/jquery.opportunities.init.js"></script>

		
		
        <!-- Data table init -->
        <script src="./assets/pages/datatables.init.js"></script>

		<!-- Moment  -->
        <script src="./assets/plugins/moment/moment.js"></script>

        <!-- Counterup js  -->
        <script src="./assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="./assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Sweetalert  -->
        <script src="./assets/plugins/sweetalert/dist/sweetalert.min.js"></script>

        <!-- skycons -->
        <script src="./assets/plugins/skyicons/skycons.min.js" type="text/javascript"></script>

        <!-- Peity -->
        <script src="./assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- Widget Custom -->
        <script src="./assets/pages/jquery.widgets.js"></script>

        <!-- Todojs  -->
        <script src="./assets/pages/jquery.todo.js"></script>

        <!-- chatjs  -->
        <script src="./assets/pages/jquery.chat.js"></script>

        <!-- Knob -->
        <script src="./assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Sparkline chart -->
        <script src="./assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <script src="./assets/js/jquery.core.js"></script>
        <script src="./assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();
            });
        </script>
		

		 <script src="./assets/js/jquery.core.js"></script>
        <script src="./assets/js/jquery.app.js"></script>
		

	
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

			
			
			
		

       
        

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "../assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>

		
			
    </body>


</html>
              
              