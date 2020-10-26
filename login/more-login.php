

<!doctype html>
<html>
<head><title>Gladiator Gym Management System ,A Complete Fitness Management & Administration System</title>
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


</head>

<body class='login'>
	<div class="wrapper" style="height: 50%;">
	<br> 
		<h1><a href="index.html"><img src="gladiator_logo.png" alt="" class='retina-ready' width="200" height="200"><br>
		</a></h1>
		
		<div class="login-body">
		  <h2>SIGN IN</h2>
			<form action="secure_login.php" method='post' class='form-horizontal form-validate' id="bb">
				<div class="control-group">
										<div class="controls">
										  <input type="text" placeholder="User ID" class="input-large" name="user_id_auth" id="textfield" data-rule-minlength="6" data-rule-required="true"></div>
			  </div><p>
                                      <div class="control-group">  
				
                <div class="controls">
											<input type="password" name="pass_key" id="pwfield" class="input-large" data-rule-required="true" data-rule-minlength="6" placeholder="Passcode">
										</div>
                </div>
										
										
			  <div class="submit">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
			</form>
			<div class="forget">
				<a href="ajax_f.php"><span>Forgot password?</span></a>
			</div>
		</div>
		
	</div>
	<br><br>
	<div class="login-footer">
		<div class="alert alert-info">
									<center>
									<h4>Gladiator Gym Management System,A Complete Fitness Management & Administration System</h4>
									<p><a href="http://voxforem.in/">Developed By Voxforem Technologies</a></p>
									</center>
								</div>
		</div>
 
		

		
	</body>

	</html>
