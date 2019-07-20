<div class="col-md-12">
	<div class="card">
		<div class="card-body">

			<div class="row">
				<div class="col-md-6">

					<?php

					echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');

					if (isset($error)) {
						echo '<div class="alert alert-warning">';
						echo $error;
						echo '</div>';
					}

					echo form_open_multipart('admin/konfigurasi')

					?>
					<div class="form-group">
						<label>Nama Perusahaan/organisasi</label>
						<input type="text" name="namaweb" class="form-control" placeholder="Nama Perusahaan/organisasi" value="<?= $konfigurasi->namaweb ?>" required>
					</div>

					<div class="form-group">
						<label>Tagline</label>
						<input type="text" name="tagline" class="form-control" placeholder="Tagline" value="<?= $konfigurasi->tagline ?>">
					</div>

				</div>
			</div>
		</div>
	</div>