<?php
require 'db_conn.php';
page_protect();
?>
<!doctype html>

<head><title>Gladiator Gym Management System ,A Complete Fitness Management & Administration System</title>
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
	<!-- Tagsinput -->
	<link rel="stylesheet" href="../../css/plugins/tagsinput/jquery.tagsinput.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="../../css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="../../css/themes.css">


	<!-- jQuery -->
	<script src="../../js/jquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<!-- slimScroll -->
	<script src="../../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="../../js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="../../js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="../../js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="../../js/plugins/validation/jquery.validate.min.js"></script>
	<script src="../../js/plugins/validation/additional-methods.min.js"></script>
	<!-- TagsInput -->
	<script src="../../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
	<!-- Custom file upload -->
	<script src="../../js/plugins/fileupload/bootstrap-fileupload.min.js"></script>

	<!-- Theme framework -->
	<script src="../../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../../js/demonstration.min.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="../../img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="../../img/apple-touch-icon-precomposed.png" />
<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	

	<!-- Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="../css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="../css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="../css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="../css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="../css/themes.css">


	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<!-- slimScroll -->
	<script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="../js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="../js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="../js/plugins/validation/jquery.validate.min.js"></script>
	<script src="../js/plugins/validation/additional-methods.min.js"></script>

	<!-- Theme framework -->
	<script src="../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../js/demonstration.min.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="../img/apple-touch-icon-precomposed.png" />
    <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
<script src="js/demonstration.min.js"></script>
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
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
</head><body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="index.php" id="brand">
			Gladiator Gym</a>			
			<ul class='main-nav'>
				<li class='active'>
					<a href="index.php">
						<i class="icon-home"></i>
						<span>Dashboard</span>
                        
					</a>
				</li>
                
				<li>
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
						<h1>Dashboard</h1>
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
							<a href="#">Dashboard</a>
							
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
						<div class="box box-color box-bordered">
						  <div class="box-title">
							<h3> 
							Edit user profile <span class="alert-info">(You will be required to Login Again After Profile Update) </span></h3>
						  </div>
							<div class="box-content nopadding">
                            <?php
$user_id_auth = $_SESSION['user_data'];

?>
								<form action="submit_changed_details.php" class="form-horizontal form-bordered"  method="post" id="bb">
									<div class="control-group">
										
										<div class="controls">
                                          <p>Login_ID  </p>
                                          <p>
                                            <input type="text" name="login_id" value="<?php
echo $_SESSION['user_data'];
?>" class="uneditable-input"  readonly/>
                                            <span class="help-block">*You cannot change your Username</span></p>
										</div>
								  </div>
									
								  <div class="control-group">
										
									<div class="controls">
									  <p>Full Name </p>
									  <span id="sprytextfield3">
									  <input type="text" name="full_name" id="textfield2"  data-rule-required="true" data-rule-minlength="3" value="<?php
echo $_SESSION['full_name'];
?>" maxlength="25">
									  <span class="textfieldRequiredMsg">A value is required.</span></span></div>
										
								  </div>
									<div class="control-group">
										
										<div class="controls">
										  <p>Sex  </p>
											<p><span id="sprytextfield2">
											  <input type="text" name="sex"  data-rule-required="true" data-rule-minlength="3" value="<?php
echo $_SESSION['sex'];
?>" class="uneditable-input"  readonly>
										    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
										</div>
									</div>
      
									<div class="control-group">
										
										<div class="controls">
											<p>Password</p>
											<p><span class="uneditable-input">*********</span> <a href="change_pwd.php" class="btn">Change password</a>
											  <span class="help-block">*For security reasons hidden</span></p>
										</div>
									</div>
									
									<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Submit">
										<button type="button" class="btn">Cancel</button>
									</div>
							  </form>
						  </div>
						</div>
				  </div>
			  </div>
		  </div>
</div></div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
</script>
<div class="alert alert-info">
<center>
									<h4>Gladiator Gym Management System,A Complete Fitness Management & Administration System</h4>
									<p><a href="http://voxforem.in/">Developed By Voxforem Technologies</a></p>
									</center>
								</div>
			</div>
		</div></div>
		
	
		
	</body>

	</html>


