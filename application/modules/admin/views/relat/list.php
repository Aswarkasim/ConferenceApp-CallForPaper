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
    <a href="<?php echo base_url('admin/relat/add') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
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
          <th width="250px">Logo</th>
          <th>Nama Sponsor</th>
          <th>Aksi</th>
        </tr>
      </thead>
    
      <tbody>
        <?php $no = 1; foreach($relat as $row){ ?>

        <tr>
          <td width="5%"><?php echo $no++ ?></td>
          <td align="center">
            <img width="200px" src="<?= base_url('assets/uploads/images/'.$row->logo) ?>" alt="">
          </td>
          <td><?= $row->nama_relat ?></td>
          <td>
            <a href="<?= base_url('admin/relat/edit/'.$row->id_relat) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
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
