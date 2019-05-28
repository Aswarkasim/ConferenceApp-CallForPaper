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
    <a href="<?php echo base_url('admin/speaker/add') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
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
          <th>Nama Speaker</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Nama Speaker</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </tfoot>
      <tbody>
        <?php $no = 1; foreach($speaker as $row){ ?>

        <tr>
          <td width="5%"><?php echo $no++ ?></td>
          <td>
            <h5><b> <a href="#"><?= $row->nama_speaker ?></a></b></h5><div class="clearfix"></div>
            <p><?= $row->institusi ?></p>
          </td>
          <td align="center">
            <?php
              if($row->jenis_speaker == '2'){
                echo "<span class='btn btn-success btn-xs'><i class='fa fa-user'></i> Keynote Speaker</span>";
              }else {
                echo "<span class='btn btn-warning btn-xs'><i class='fa fa-user'></i> Speaker</span>";
              }
             ?>
          </td>
          <td>
            <a href="<?= base_url('admin/speaker/edit/'.$row->id_speaker) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
           <?php include('delete.php') ?>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- table -->

  </div>
  </section>
