<div class="panel-body">
		<div class="thumb-info mb-md">
			<img src="<?php echo base_url('assets/octopus/'); ?>assets/images/!logged-user.jpg" class="rounded img-responsive" alt="John Doe">
			<div class="thumb-info-title">  
				<span class="thumb-info-inner"><?php echo $peserta->nama_with_title ?></span>
				<span class="thumb-info-type"><?= $peserta->partisipan ?></span>
			</div>
		</div>

		<div class="widget-toggle-expand mb-md">
			<div class="widget-header">
				<h6>Data Profil</h6>
				<div class="widget-toggle">+</div>
			</div>
			<div class="widget-content-collapsed">
			</div>
			<div class="widget-content-expanded">
				<table class="table">

          <tr>
            <th align="right">Institusi</th>
            <td><?= $peserta->institusi ?></td>
          </tr>
          <tr>
            <th align="right">No. Telepon</th>
            <td><?= $peserta->telp ?></td>
          </tr>
          <tr>
            <th align="right">Alamat</th>
            <td><?= $peserta->alamat ?></td>
          </tr>
          <tr>
            <th align="right">Email</th>
            <td><?= $peserta->email ?></td>
          </tr>
          <tr>
            <th align="right">Status Registrasi</th>
            <td>
              <?php
                if($peserta->status_pembayaran == 'valid'){
                  echo "<span class='btn btn-info btn-xs'><i class='fa fa-check-square-o'></i> Valid</span>";
                }else if($peserta->status_pembayaran == 'Proses'){
                  echo "<span class='btn btn-success btn-xs'><i class='fa fa-refresh'></i> Proses</span>";
                }else {
                  echo "<span class='btn btn-danger btn-xs'><i class='fa fa-warning'></i> Unvalid</span>";
                }
               ?>
               
            </td>
          </tr>
        </table>
			</div>
		</div>

		<hr class="dotted short">

	</div>
  



