<!-- Card -->

<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h2 class="panel-title"><?php echo $title; ?></h2>
  </header>
  <div class="panel-body">

    <?php

    echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');

    if (isset($error)) {
      echo '<div class="alert alert-warning">';
      echo $error;
      echo '</div>';
    }

    //notifikassi
    if ($this->session->flashdata('msg')) {
      echo '<div class="alert alert-success"><i class="fa fa-check"></i>';
      echo $this->session->flashdata('msg');
      echo '</div>';
    }
    ?>

    <div class="pull-left">
      <p>
        <a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
      </p>
    </div>
    <div class="clearfix">

    </div>

    <!-- table -->
    <div class="table-responsive">
      <table class="table table-bordered DataTables" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Peserta</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama Peserta</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $no = 1;
          foreach ($peserta as $peserta) { ?>

            <tr>
              <td width="5%"><?php echo $no++ ?></td>
              <td>
                <h5><b><a href="<?= base_url('admin/peserta/pesertaDetail/' . $peserta->id_peserta) ?>"><?= $peserta->nama_no_title ?></a></b></h5>
                <div class="clearfix"></div>
                <p> <?= $peserta->email ?> - <?= $peserta->institusi ?></p>
              </td>
              <td>
                <?php
                if ($peserta->status_pembayaran == 'Lunas') {
                  echo "<span class='btn btn-success btn-xs'><i class='fa fa-check-square-o'></i> Lunas</span>";
                } else {
                  echo "<span class='btn btn-danger btn-xs'><i class='fa fa-warning'></i> Belum Lunas</span>";
                }
                ?>
              </td>
              <td>
                <button type="button" name="button" class="btn btn-sm btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</button>
                <button type="button" name="button" class="btn btn-sm btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <!-- table -->

  </div>
</section>