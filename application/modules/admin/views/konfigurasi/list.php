

<div class="col-md-12">
<div class="card">
<div class="card-body">

<div class="row">
  <div class="col-md-6">

    <?php

      echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');

      if(isset($error)){
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

	<div class="form-group">
		<label>Nomor Telepon resmi</label>
		<input type="text" name="telepon" class="form-control" placeholder="Nomor telepon resmi" value="<?= $konfigurasi->telepon ?>">
	</div>

	<div class="form-group">
		<label>Email resmi</label>
		<input type="text" name="email" class="form-control" placeholder="Email resmi" value="<?= $konfigurasi->email ?>">
	</div>

	<div class="form-group">
		<label>Website</label>
		<input type="url" name="website" class="form-control" placeholder="<?php echo base_url() ?>" value="<?= $konfigurasi->website ?>">
	</div>

	<div class="form-group">
		<label>Facebook account (URL)</label>
		<input type="url" name="facebook" class="form-control" placeholder="http://facebook.com/akun" value="<?= $konfigurasi->facebook ?>">
	</div>

	<div class="form-group">
		<label>Instagram account (URL)</label>
		<input type="url" name="instagram" class="form-control" placeholder="http://instagram.com/akun" value="<?= $konfigurasi->instagram ?>">
	</div>

	<div class="form-group">
		<label>Twitter account (URL)</label>
		<input type="url" name="twitter" class="form-control" placeholder="http://twitter.com/akun" value="<?= $konfigurasi->twitter ?>">
	</div>

</div>
  <div class="col-md-6">
    <div class="form-group">
		<label>Alamat Perusahaan/organisasi</label>
		<textarea name="alamat" placeholder="Alamat Perusahaan/organisasi" class="form-control"><?php echo $konfigurasi->alamat ?></textarea>
	</div>

	<div class="form-group">
		<label>Deskripsi Perusahaan/organisasi</label>
		<textarea name="deskripsi" placeholder="Deskripsi Perusahaan/organisasi" class="form-control"><?php echo $konfigurasi->deskripsi ?></textarea>
	</div>

	<div class="form-group">
		<label>Keywords Websites (Untuk SEO Google)</label>
		<textarea name="keywords" placeholder="Keyword Websites (Untuk SEO Google)" class="form-control"><?php echo $konfigurasi->keywords ?></textarea>
	</div>


	<div class="form-group">
		<label>Kode Google Map (pilih format iframe)</label>
		<textarea name="map" placeholder="Kode Google Map (pilih format iframe)" class="form-control"><?php echo $konfigurasi->map ?></textarea>
	</div>

	<div class="form-group">
		<label>Metatext (biasanya dari ggole untuk Analytic &amp; Webmaster)</label>
		<textarea name="metatext" placeholder="Metatext (biasanya dari ggole untuk Analytic &amp; Webmaster)" class="form-control"><?php echo $konfigurasi->metatext ?></textarea>
	</div>

	<h4>Google Maps</h4>
	<hr>
	<style type="text/css" media="screen">
		iframe{
			width: 100%;
			height: auto;
			min-height: 300px;
		}
	</style>
	<?php echo $konfigurasi->map ?>
	<hr>
	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-success">
			<i class="fa fa-save"></i> Simpan Konfigurasi
		</button>

		<button type="reset" name="submit" class="btn btn-default">
			<i class="fa fa-refresh"></i> Reset
		</button>
	</div>
</div>

</div>
</div>
</div>
