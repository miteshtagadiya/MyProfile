<?php 
include ("../include/header.php");
include ("../include/menu.php");

?>

        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

               


                <div class="row">
                  
					
					<div class="col-sm-12">
                        <div class="card-box" style="margin-top:50px;">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Education</b></h4>


                            <div class="row">
                               
							   <div class="col-md-12" >
									<?php include('../mp_connect.php');?>
                                    <form class="form" role="form" action="mp_education_insert.php" method="post" enctype="multipart/form-data">
                                        
                                        
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" class="form-control" placeholder="Enter Degree ex.Bca,Science etc." name="degree">
                                        </div>
										</div>
										
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Percentage</label>
                                            <input type="text" class="form-control" placeholder="Enter Percentage" name="percentage">
                                        </div>
										</div>
										
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Starting Year</label>
											<select class="form-control select2" name="syear">
											<option value="">--Select Starting Year--</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2012">2011</option>
											<option value="2012">2010</option>
											<option value="2012">2009</option>
											<option value="2012">2008</option>
											<option value="2012">2007</option>
											<option value="2012">2006</option>
											<option value="2012">2005</option>
											<option value="2012">2004</option>
											<option value="2012">2003</option>
											<option value="2012">2002</option>
											<option value="2012">2001</option>
											<option value="2012">2000</option>
											<option value="2012">1999</option>
											<option value="2012">1998</option>
											<option value="2012">1997</option>
											<option value="2012">1996</option>
											<option value="2012">1995</option>
											<option value="2012">1994</option>
											<option value="2012">1993</option>
											<option value="2012">1992</option>
											<option value="2012">1990</option>
											<option value="2012">1989</option>
											<option value="2012">1988</option>
											<option value="2012">1987</option>
											<option value="2012">1986</option>
											<option value="2012">1985</option>
											<option value="2012">1984</option>
											<option value="2012">1983</option>
											<option value="2012">1982</option>
											<option value="2012">1981</option>
											<option value="2012">1980</option>
											</select>
										</div>
										</div>
										
										      
										<div class="col-sm-6">		  
										<div class="form-group">
                                            <label>Place</label>
                                            <input type="text" class="form-control" placeholder="Enter Place" name="place">
                                        </div>
                                        </div>
										
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Ending Year</label>
											<select class="form-control select2" name="eyear">
											<option value="">--Select Ending Year--</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2012">2011</option>
											<option value="2012">2010</option>
											<option value="2012">2009</option>
											<option value="2012">2008</option>
											<option value="2012">2007</option>
											<option value="2012">2006</option>
											<option value="2012">2005</option>
											<option value="2012">2004</option>
											<option value="2012">2003</option>
											<option value="2012">2002</option>
											<option value="2012">2001</option>
											<option value="2012">2000</option>
											<option value="2012">1999</option>
											<option value="2012">1998</option>
											<option value="2012">1997</option>
											<option value="2012">1996</option>
											<option value="2012">1995</option>
											<option value="2012">1994</option>
											<option value="2012">1993</option>
											<option value="2012">1992</option>
											<option value="2012">1990</option>
											<option value="2012">1989</option>
											<option value="2012">1988</option>
											<option value="2012">1987</option>
											<option value="2012">1986</option>
											<option value="2012">1985</option>
											<option value="2012">1984</option>
											<option value="2012">1983</option>
											<option value="2012">1982</option>
											<option value="2012">1981</option>
											<option value="2012">1980</option>
											</select>
										</div>
										</div>
										
										<div class="col-sm-6">	
										<div class="form-group">
                                            <label>Institute</label>
                                            <input type="text" class="form-control" placeholder="Enter name of institute" name="institute">
                                        </div>
										</div>
										
										
										<div class="col-sm-12">	
										
										<center>
										<button class="btn btn-primary waves-effect waves-light" type="submit" value="submit" name="submit">
										Submit
										</button>
										<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                        Cancel
										</button>
										</center>
										</div>
										

                                    </form>
                                </div>
								
							   
                                


                            </div>
                        </div>
                    </div>
					
					
                    </div>
					
                </div>



               




              


<?php include ("../include/footer.php");?>