﻿<?php
require 'db_conn.php';
page_protect();
?><!doctype html>

<head><title>Voxforem Gym Management System ,A Complete Fitness Management & Administration System</title>
	
		<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	

	<!-- Bootstrap -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="../../css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="../../css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="../../css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="../../css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="../../css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="../../css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="../../css/themes.css">
	<!-- Tagsinput -->
	<link rel="stylesheet" href="../../css/plugins/tagsinput/jquery.tagsinput.css">
	<!-- chosen -->
	<link rel="stylesheet" href="../../css/plugins/chosen/chosen.css">
	<!-- multi select -->
	<link rel="stylesheet" href="../../css/plugins/multiselect/multi-select.css">
	<!-- timepicker -->
	<link rel="stylesheet" href="../../css/plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- colorpicker -->
	<link rel="stylesheet" href="../../css/plugins/colorpicker/colorpicker.css">
	<!-- Datepicker -->
	<link rel="stylesheet" href="../../css/plugins/datepicker/datepicker.css">
	<!-- Plupload -->
	<link rel="stylesheet" href="../../css/plugins/plupload/jquery.plupload.queue.css">


	<!-- jQuery -->
	<script src="../../js/jquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.slider.js"></script>
	<!-- Bootstrap -->
	<script src="../../js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="../../js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Masked inputs -->
	<script src="../../js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
	<!-- TagsInput -->
	<script src="../../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
	<!-- Datepicker -->
	<script src="../../js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Timepicker -->
	<script src="../../js/plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<!-- Colorpicker -->
	<script src="../../js/plugins/colorpicker/bootstrap-colorpicker.js"></script>
	<!-- Chosen -->
	<script src="../../js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- MultiSelect -->
	<script src="../../js/plugins/multiselect/jquery.multi-select.js"></script>
	<!-- CKEditor -->
	<script src="../../js/plugins/ckeditor/ckeditor.js"></script>
	<!-- PLUpload -->
	<script src="../../js/plugins/plupload/plupload.full.js"></script>
	<script src="../../js/plugins/plupload/jquery.plupload.queue.js"></script>
	<!-- Custom file upload -->
	<script src="../../js/plugins/fileupload/bootstrap-fileupload.min.js"></script>

	<!-- Theme framework -->
	<script src="../../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../../js/demonstration.min.js"></script>
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">

	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
	<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
$(document).ready(function()
{
$(".country").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
} 
});

});
});
    </script>
<script type="text/javascript">
$(document).ready(function()
{
$(".country1").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "ajax_city1.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city1").html(html);
} 
});

});
});
    </script>



    <SCRIPT LANGUAGE="JavaScript">
function checkIt(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        status = "This field accepts numbers only."
        return false
    }
    status = ""
    return true
}
</SCRIPT>


<script type="text/javascript" src="webcam.js"></script>
</head>
<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="index.php" id="brand">
Voxforem Gym</a>			
			<ul class='main-nav'>
				<li>
					<a href="index.php">
						<i class="icon-home"></i>
						<span>Dashboard</span>
                        
					</a>
				</li>
                
				<li  class='active'>
					<a href="new_entry.php">
						<i class="icon-edit"></i>
						<span>New Registration</span>
						
					</a>    
					
				</li><li>
					<a href="payments.php">
						<i class="icon-edit"></i>
						<span>Payments</span>
						
					</a>
					
				</li>
<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-edit"></i>
						<span>Members</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="view_mem.php">View Members</a>
						</li><li>
							<a href="table_view.php">View / Enter Schedule</a>
						</li>
						</ul>
</li>
<li>
					<a href="change_values.php">
						<i class="icon-edit"></i>
						<span>Edit Subsciption Details</span>
						
					</a>
					
				</li><li>
					<a href="new_plan.php">
						<i class="icon-edit"></i>
						<span>New Plan</span>
						
					</a>
					
				</li>
<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-edit"></i>
						<span>Overview</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="over_members_month.php">Members per Month</a>
						</li><li>
							<a href="over_members_year.php">Members per Year</a>
						</li>
						<li>
							<a href="revenue_month.php">Income per month</a>
						</li>
</ul>
</li><li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-edit"></i>
						<span>Alerts</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="unpaid.php">Unpaid Members</a>
						</li><li>
							<a href="sub_end.php">Ending Membership</a>
						</li>
						</ul>
</li>
						<li>
							<a href="logout.php">Logout</a>
						</li>
						
					
				</li>
				
				
				
				
			</ul>
			<div class="user">
				<ul class="icon-nav">
					
					<li>
						<a href="logout.php" class='lock-screen' rel='tooltip' title="Sign Out" data-placement="bottom"><i class="icon-lock"></i></a>
					</li>
					
				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php
echo $_SESSION['full_name'];
if ($_SESSION['sex'] == 'male') {
    echo "<img src='men-ava.jpg'></a>";
} else {
    echo "<img src='women-ava.jpg'></a>";
}
?> 
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="more-userprofile.php">Edit profile</a>
						</li>
						<li>
							<a href="../../login/lock.php">Lock Screen</a>
						</li>
						
					</ul>
				</div>
			</div>
			<a href="#" class='toggle-mobile'><i class="icon-reorder"></i></a>
		</div>
	</div>
	
<div class="container-fluid" id="content">
  <div id="main">
	  <div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>New Registration</h1>
					</div>
					<div class="pull-right">
						
						<ul class="stats"><li class='blue'>
								<i class="icon-money"></i>
								<div class="details">
									<span class="big">INR <?php
$date  = date('Y-m');
$query = "select * from subsciption WHERE  paid_date LIKE '$date%'";

//echo $query;
$result  = mysqli_query($con, $query);
$revenue = 0;
if (mysqli_affected_rows($con) != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $revenue = $row['paid'] + $revenue;
    }
}
echo $revenue;
?></span>
									<span>Paid Income This Month</span>
								</div>
							</li><li class='brown'>
								<i class="icon-bolt"></i>
								<div class="details">
									<span class="big"><?php
$date  = date('Y-m');
$query = "select COUNT(*) from user_data WHERE wait='no'";

//echo $query;
$result = mysqli_query($con, $query);
$i      = 1;
if (mysqli_affected_rows($con) != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo $row['COUNT(*)'];
    }
}
$i = 1;
?></a>
									<span>Total Members </span>
								</div>
							</li>
							<li class='blue'>
								<i class="icon-shopping-cart"></i>
								<div class="details">
									<span class="big"><?php
$date  = date('Y-m');
$query = "select COUNT(*) from user_data WHERE joining LIKE '$date%'";

//echo $query;
$result = mysqli_query($con, $query);
$i      = 1;
if (mysqli_affected_rows($con) != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo $row['COUNT(*)'];
    }
}
$i = 1;
?></span>
									<span>Joined This Month</span>
								</div>
							</li>
							<li class='green'>
								<i class="icon-money"></i>
								<div class="details">
									<span class="big">INR <?php
$date  = date('Y-m');
$query = "select * from subsciption WHERE  paid_date LIKE '$date%'";

//echo $query;
$result  = mysqli_query($con, $query);
$revenue = 0;
if (mysqli_affected_rows($con) != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $revenue = $row['total'] + $revenue;
    }
}
echo $revenue;
?></span>
									<span>Income This Month</span>
								</div>
							</li>
							<li class='orange'>
								<i class="icon-calendar"></i>
								<div class="details">
									<span class="big"></span>
									<span><?php
echo date('Z');
?></span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="index.php">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="#">New Member</a>
							
						</li>
						
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="icon-remove"></i>
						</a>
					</div>
				</div>
					<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3><i class="icon-th-list"></i> New Member Registration </h3>
							</div>
							<div class="box-content nopadding">
								<form action="new_submit.php" method="POST" class='form-horizontal form-bordered'>



<div class="control-group">
										<label for="textfield" class="control-label">Membership ID :</label>
										<div class="controls">
											<input type="text" name="p_id" value="<?php
echo time();
?>" class="uneditable-input"  readonly/>
										</div>
									</div>



						<div class="control-group">
						<label for="textfield" class="control-label">Photo :</label>
						<div class="controls">
									<script language="JavaScript">
									document.write( webcam.get_html(300, 220) );
									</script>
						<script language="JavaScript">
							webcam.set_api_url( 'test.php' );
								webcam.set_quality( 100 ); // JPEG quality (1 - 100)
								webcam.set_shutter_sound( true ); // play shutter click sound
								webcam.set_hook( 'onComplete', 'my_completion_handler' );

								function take_snapshot(){
									// take snapshot and upload to server
									webcam.snap();
								}	
							</script>
						<input type=button  class="btn btn-primary" value="Take Snapshot"  onClick="take_snapshot()">	
						<input type=button  class="btn btn-danger" value="No camera?"  id="no_camera">	
				
						</div>
						</div>
						





<div class="control-group">
										<label for="textfield" class="control-label">Name :</label>
										<div class="controls"><span id="sprytextfield1">
										  <input type="text" name="p_name" id="textfield3" class="input-xlarge" data-rule-required="true" data-rule-minlength="4" placeholder="Member Name" maxlength="30">
									    <span class="textfieldRequiredMsg">A value is required.</span></span></div>
									</div>


<div class="control-group">
										<label for="emailfield" class="control-label">E-Mail :</label>
										<div class="controls">
											
										  <input type="text" name="email"  id="emailfield" class="input-xlarge" data-rule-minlength="5" placeholder="E-Mail" maxlength="60">
										</div>
									</div>
 <div class="control-group">
										<label for="textfield" class="control-label">Proof Given :</label>
										<div class="controls"><span id="spryselect1">
										  <select name="proof" id="bbb" data-rule-required="true" class="country1">
										    <option value="">-- Please select --</option>
										    <option value="PAN Card">PAN Card</option>
										    <option value="Voter Card">Voter Card</option>
<option value="Driving License">Driving License</option>
<option value="Passport">Passport</option>
<option value="College/School ID">College/School ID</option>
<option value="Aadhaar Card">Aadhaar Card</option>
<option value="Ration Card">Ration Card</option>
<option value="Bank Passbook">Bank Passbook</option>
<option value="Others">Others</option>
									    </select>
									    <span class="selectRequiredMsg">Please select an item.</span></span></div><div class="city1">
							
										</div>
									</div>



<div class="control-group">
										<label for="textfield" class="control-label">Age :</label>
										<div class="controls"><span id="sprytextfield2">
										  <input type="text" name="age" id="textfield4" class="input-xlarge" data-rule-required="true" data-rule-minlength="1" placeholder="Age" onKeyPress="return checkIt(event)" maxlength="3">
									    <span class="textfieldRequiredMsg">A value is required.</span></span></div>
									</div>


 <div class="control-group">
										<label for="textfield" class="control-label">Sex :</label>
										<div class="controls"><span id="spryselect1">
										  <select name="sex" id="bbb" data-rule-required="true">
										    <option value="">-- Please select --</option>
										    <option value="Male">Male</option>
										    <option value="Female">Female</option>
									    </select>
									    <span class="selectRequiredMsg">Please select an item.</span></span></div>
									</div>


 <div class="control-group">
										<label for="textfield" class="control-label">Date :</label>
										<div class="controls"><span id="sprytextfield3">
										  <input type="text" name="date" id="textfield22" class="input-medium datepick" value="<?php
echo date('Y-m-d');
?>">
									    <span class="textfieldRequiredMsg">A value is required.</span></span></div>
									</div>
 

 <div class="control-group">
										<label for="textfield" class="control-label">Address :</label>
										<div class="controls">
										 <input type="text" name="add" id="textfield5" class="input-xlarge" data-rule-required="true" data-rule-minlength="6" placeholder="Address">
										</div>
									</div>


    <div class="control-group">
										<label for="textfield" class="control-label">Contact :</label>
										<div class="controls"><span id="sprytextfield4">
										  <input type="text" name="contact" id="textfield6" class="input-xlarge" data-rule-required="true" data-rule-minlength="10" placeholder="Mobile / Phone" onKeyPress="return checkIt(event)" maxlength="10">
									    <span class="textfieldRequiredMsg">A value is required.</span></span></div>
									</div>

                                    
    <div class="control-group">
										<label for="textfield" class="control-label">Height :</label>
										<div class="controls">
										 <input type="text" name="height" id="textfield" class="input-large" data-rule-required="true" data-rule-minlength="1" placeholder="Height"  maxlength="10"> (In  FEET)
										</div>
									</div>


					<div class="control-group">
										<label for="textfield" class="control-label">Weight :</label>
										<div class="controls">
										 <input type="text" name="weight" id="textfield" class="input-large" data-rule-required="true" data-rule-minlength="1" placeholder="Weight"  maxlength="10"> (In Kgs)
										</div>
									</div>

<div class="control-group">
										<label for="textfield" class="control-label">Membership Type :</label>
										<div class="controls"><span id="spryselect2">
										  <select name="mem_type" id="id" data-rule-required="true" class="country">
										    <option value="">-- Please select --</option>
										    <?php

$query = "select * from mem_types";

//echo $query;
$result = mysqli_query($con, $query);

if (mysqli_affected_rows($con) != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<option value=" . $row['mem_type_id'] . ">" . $row['name'] . "</option>";
        
    }
}

?>
									    </select>
									    <span class="selectRequiredMsg">Please select an item.</span></span></div>
<div class="city">
							
										</div>
									</div>

									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										
									</div>
								</form>
							</div>
					</div>
						</div>
			
							</div>
						</div>
					</div>
				</div><div class="alert alert-info">
				<center>
									<h4>Voxforem Gym Management System,A Complete Fitness Management & Administration System</h4>
									<p><a href="http://voxforem.in/">Developed By Voxforem Technologies</a></p>
									</center>
								</div>
			</div>
		</div></div>
		
	
		
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
    </script>
	<script type="text/javascript">
    $(document).ready(function(){
        $("#no_camera").click(function(){

            $.ajax({
                type: 'POST',
                url: 'test.php',
                success: function(data) {
         alert('Default image succesfully uploaded.please continue..');
                    // $("p").text(data);

                }
            });
   });
});
</script>
</body>

	</html>

