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

        //notifikassi
        if($this->session->flashdata('msg')){
          echo '<div class="alert alert-success"><i class="fa fa-check"></i>'; 
          echo $this->session->flashdata('msg');
          echo '</div>';
        }
      ?>


<div class="pull-left">
  <p>
  <a href="<?php echo base_url('admin/user/add') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
  </p>
</div>
<div class="clearfix">

</div>



      <div class="table-responsive">
        <table class="table table-bordered DataTables" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $no = 1; foreach($user as $row){ ?>

            <tr>
              <td width="5%"><?php echo $no++ ?></td>
              <td>
                <b><?php echo $row->nama ?></b><div class="clear-fix"></div><br>
                <i class="fa fa-user"></i> <?php echo $row->username ?> -
                <i class="fa fa-envelope"></i> <?php echo $row->email ?> -
                <i class="fa fa-list"></i> <?php echo $row->akses_level ?>
              </td>
              <td></td>
              <td>
              <a href="<?= base_url('admin/user/edit/'.$row->id_user) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                <?php include('delete.php') ?>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
      </div>
      </section>
