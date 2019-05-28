<?php 
    //dapatkan id user yang didaftarkan saat login
    // $id_user = $this->session->userdata('id_user');
    // $user_aktif = $this->user_model->detail($id_user);
    // $konfigurasi = $this->konfigurasi_model->listing();
  ?>


  <?php 
	$id_user = $this->session->userdata('id_user');
	$user_aktif = $this->Crud_model->listingOne('tbl_user','id_user',$id_user);
 
 ?>

<!-- start: header -->
<header class="header">
	<div class="logo-container">
		<a href="../" class="logo">
			<img src="<?php echo base_url('assets/octopus/') ?>assets/images/logo.png" height="35" alt="JSOFT Admin" />
		</a>
		<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<!-- start: search & user box -->
	<div class="header-right">

		<form action="pages-search-results.html" class="search nav-form">
			<div class="input-group input-search">
				<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>

		<span class="separator"></span>

		<ul class="notifications">

			<li>
				<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
					<i class="fa fa-envelope"></i>
					<span class="badge">4</span>
				</a>

				<div class="dropdown-menu notification-menu">
					<div class="notification-title">
						<span class="pull-right label label-default">230</span>
						Messages
					</div>

					<div class="content">
						<ul>
							<li>
								<a href="#" class="clearfix">
									<figure class="image">
										<img src="<?php echo base_url('assets/octopus/') ?>assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
									</figure>
									<span class="title">Joseph Doe</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</a>
							</li>
						</ul>

						<hr />

						<div class="text-right">
							<a href="#" class="view-more">View All</a>
						</div>
					</div>
				</div>
			</li>

		</ul>

		<span class="separator"></span>

		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<figure class="profile-picture">
					<img src="<?php echo base_url('assets/octopus/') ?>assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
				</figure>
				<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
					<span class="name"><?= $user_aktif->nama ?></span>
					<span class="role"><?= $user_aktif->akses_level ?></span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				<ul class="list-unstyled">
					<li class="divider"></li>
					<li>
						<a role="menuitem" tabindex="-1" href="<?= base_url('logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>
<!-- end: header -->
<div class="inner-wrapper">
