
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/octopus/') ?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?= base_url('assets/octopus/') ?>assets/vendor/font-awesome/css/font-awesome.css" />
		<!-- <link rel="stylesheet" href="<?= base_url('assets/octopus/') ?>assets/vendor/magnific-popup/magnific-popup.css" /> -->
		<link rel="stylesheet" href="<?= base_url('assets/octopus/') ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/octopus/') ?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/octopus/') ?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/octopus/') ?>assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<!-- <script src="<?= base_url('assets/octopus/') ?>assets/vendor/modernizr/modernizr.js"></script> -->

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="<?= base_url('assets/octopus/') ?>assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">

                    <?php 

                        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');
                        echo form_open('admin/login') 
                        
                    ?>
						<form action="" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
								</div>
								<div class="input-group input-group-icon">
									<input type="password" name="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
							</div>

						</form>
                        <?php echo form_close() ?>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?= base_url('assets/octopus/') ?>assets/vendor/jquery/jquery.js"></script>
		<script src="<?= base_url('assets/octopus/') ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url('assets/octopus/') ?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= base_url('assets/octopus/') ?>assets/javascripts/theme.custom.js"></script>
	

	</body>
</html>