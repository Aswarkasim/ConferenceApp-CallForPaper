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

        //notifikassi
        if($this->session->flashdata('msg')){
          echo '<div class="alert alert-success"><i class="fa fa-check"></i>'; 
          echo $this->session->flashdata('msg');
          echo '</div>';
        }
      ?>


<div class="pull-left">
  <p>
    <?php include('add.php') ?>
  </p>
</div>
<div class="clearfix"></div>

  <!-- table -->
  <div class="table-responsive">
    <table class="table table-bordered DataTables" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="40px">No</th>
          <th>Subtema</th>
          <th>Reviewer</th>
          <th width="100px"> Icon</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach($subtema as $row){ ?>

        <tr>
            <td><?= $no ?></td>
            <td>
                <b><?= $row->subtema ?></b><div class="clear-fix"></div>
                <p><?= $row->deskripsi ?></p>
            </td>
            <td width="250px"><strong><?= $row->nama_reviewer ?></strong></td>
            <td>
              <i class="<?= $row->icon ?>"></i> <?= $row->icon ?>
            </td>
            <td width="100px">
                <a href="<?= base_url('admin/subtema/edit/'.$row->id_subtema) ?>"><i class="fa fa-edit"></i></a>
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
