<?php

$not_read_pemb = $this->Crud_model->listingOneAll('tbl_konfirmasi_pembayaran', 'is_read', '0');
$not_read_abs = $this->Crud_model->listingOneAll('tbl_abstrak', 'is_read', '0');

?>

<font size="40px">
	<!-- start: sidebar -->
	<aside id="sidebar-left" class="sidebar-left">

		<div class="sidebar-header">
			<div class="sidebar-title">
				Navigation
			</div>
			<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>


		<div class="nano">
			<div class="nano-content">
				<nav id="menu" class="nav-main" role="navigation">
					<ul class="nav nav-main">

						<li class="nav-active">
							<a href="<?= base_url('admin') ?>">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Dashboard</span>
							</a>
						</li>

						<?php
						$akses_level = $this->session->userdata('akses_level');
						if ($akses_level == "Admin") {
							?>

							<li class="nav-parent">
								<a>
									<i class="fa fa-microphone" aria-hidden="true"></i>
									<span>Management Seminar</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="<?php echo base_url('admin/seminar'); ?>">Seminar</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin/subtema'); ?>">Sub Tema</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin/seminar/readTglPenting'); ?>">Important Date</a>
									</li>
								</ul>
							</li>


							<li>
								<a href="<?php echo base_url('admin/peserta'); ?>">
									<i class="fa  fa-th-list" aria-hidden="true"></i>
									<span>Peserta</span>
								</a>
							</li>
						<?php  } ?>

						<li>
							<a href="<?php echo base_url('admin/abstrak'); ?>">
								<span class="pull-right label label-primary"><?= count($not_read_abs); ?></span>
								<i class="fa fa-language" aria-hidden="true"></i>
								<span>Abstrak</span>
							</a>
						</li>

						<li>
							<a href="<?php echo base_url('admin/paper'); ?>">
								<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
								<span>Paper</span>
							</a>
						</li>

						<?php
						$akses_level = $this->session->userdata('akses_level');
						if ($akses_level == "Admin") {
							?>

							<li>
								<a href="<?php echo base_url('admin/konfirmasi'); ?>">
									<span class="pull-right label label-primary"><?= count($not_read_pemb) ?></span>
									<i class="fa  fa-money" aria-hidden="true"></i>
									<span>Konfirmasi Pembayaran</span>
								</a>
							</li>

							<li>
								<a href="<?php echo base_url('admin/file_pendukung'); ?>">
									<i class="fa  fa-file" aria-hidden="true"></i>
									<span>File Pendukung Informasi</span>
								</a>
							</li>

							<li class="nav-parent">
								<a>
									<i class="fa fa-user" aria-hidden="true"></i>
									<span>Management User</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="<?php echo base_url('admin/user'); ?>">List Admin</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin/user/reviewer'); ?>">List Reviewer</a>
									</li>
								</ul>
							</li>
							<li class="nav-parent">
								<a>
									<i class="fa fa-cogs" aria-hidden="true"></i>
									<span>Konfigurasi</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="<?php echo base_url('admin/konfigurasi'); ?>">Konfigurasi</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin/konfigurasi/logo'); ?>">Logo</a>
									</li>
								</ul>
							</li>


						<?php } ?>
						<hr class="separator">
						<div class="sidebar-widget widget-tasks">
							<div class="widget-header">
								<h6>Projects</h6>
								<div class="widget-toggle">+</div>
							</div>
							<div class="widget-content">
								<ul class="list-unstyled m-none">
									<li>
										<a href="<?php echo base_url(); ?>" target="_blank">
											<i class="fa fa-external-link" aria-hidden="true"></i>
											<span>Front-End</span>
										</a>
									</li>
								</ul>
							</div>
						</div>


					</ul>
				</nav>


			</div>

		</div>

	</aside>
	<!-- end: sidebar -->
</font>
<!-- Header konten -->
<section role="main" class="content-body">
	<header class="page-header">
		<h2><b>S</b>App</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Admin</span></li>
				<li><span><?php echo $title; ?></span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="#"></a>
		</div>
	</header>

	<!-- start: page -->