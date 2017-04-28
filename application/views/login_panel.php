
<html lang="en" class="no-js">
<!-- start: HEAD -->
	<head>
		<title>Clip-One - Responsive Admin Template</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/fonts/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/css/main-responsive.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/css/theme_light.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="<?php echo base_url();?>assests/admin/assets/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example1">
		<div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="logo">
				<img src="<?php echo base_url();?>assests/admin/assets/images/logo_2.png" 
							width="270px" heigh="270px">
			</div>
			<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>Sign in to your account</h3>
				<p>
					Please enter your name and password to log in.
				</p>
				<?=form_open('Login/login',array('class'=>'form-login'));?>
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="username" placeholder="Username">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Password">
								<i class="fa fa-lock"></i> </span>
						</div>
						<?php echo $this->session->flashdata('notif');?>
						<div class="form-actions">
							
							<button type="submit" class="btn btn-bricky pull-right">
								Login <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
						
					</fieldset>
				 <?=form_close();?>
			</div>
			<!-- end: LOGIN BOX -->
			<!-- start: COPYRIGHT -->
			<div class="copyright">
				2017 &copy; SIPUMA.
			</div>
			<!-- end: COPYRIGHT -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo base_url();?>assests/admin/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="<?php echo base_url();?>assests/admin/assets/js/login.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>