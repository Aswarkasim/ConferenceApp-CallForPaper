<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h2 class="panel-title">Fasilitas Seminar</h2>
  </header>
  <div class="panel-body">

  <?php

echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');


//notifikassi
if($this->session->flashdata('msg')){
  echo '<div class="alert alert-success"><i class="fa fa-check"></i>'; 
  echo $this->session->flashdata('msg');
  echo '</div>';
}

?>

<div class="pull-left">
<p>
  <a href="<?php echo base_url('admin/seminar/addFasilitas') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
</p>
</div>
<div class="clearfix">
</div>


    <table class="table DataTables table-responsive table-bordered primary">
     <thead>
      <tr>
        <th width="20px">No</th>
        <th width="300px">Nama Fasilitas</th>
        <th width="200px">Icon</th>
        <th>Deskripsi</th>
        <th width="100px"></th>
      </tr>
      </thead>

      <tbody>
          <?php $no=1; foreach($fasilitas as $row): ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $row->nama_fasilitas ?></td>
            <td><?= $row->icon ?></td>
            <td><?= $row->deskripsi ?></td>
            <td>
                <a href="<?= base_url('admin/seminar/editFasilitas/'.$row->id_fasilitas) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                <?php include('delete.php') ?>
            </td>
          </tr>

          <?php $no++; endforeach ?>
      </tbody>  
    </table>
  </div>
</section>

