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

      echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');

      if(isset($error)){
        echo '<div class="alert alert-warning">';
        echo $error;
        echo '</div>';
      }
      ?>

    <div class="pull-left">
    <p>
        <a href="<?php echo base_url('admin/file_pendukung/add') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
    </p>
    </div>
    <div class="clearfix">
    </div>

  <!-- table -->
    <div class="table-responsive">
        <table class="table table-bordered DataTables" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th width="5%">No</th>
            <th width="10%">Nama File</th>
            <th width="40%">Deskripsi</th>
            <th width="10%">Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama File</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php $no = 1; foreach($file as $row){ ?>

                <tr>
                    <td><?= $no ?></td>
                    <td>
                      <?= $row->nama_file ?> <div class="clear-fix"></div>
                      <a href=""><?= character_limiter($row->file, 20)?></a>
                    </td>
                    <td><?= character_limiter($row->deskripsi,50)?></td>
                    <td>
                        <a href="<?= base_url('admin/file_pendukung/edit/'.$row->id_file) ?>" class="btn btn-sm btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <?php include('delete.php') ?>
                    </td>
                </tr>
        
            <?php $no++; } ?>
        </tbody>
        </table>
    </div>

  <!-- table -->

  </div>

  </section>

