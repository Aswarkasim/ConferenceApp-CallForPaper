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


<div class="row">
  <div class="col-md-6">

    <?php

      echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');

      if(isset($error)){
        echo '<div class="alert alert-warning">';
        echo $error;
        echo '</div>';
      }

      echo form_open_multipart('admin/seminar/addTglPenting')

    ?>
    
        <form class="" action="" method="post">
        <div class="form-group">
            <label class="col-sm-3 control-label">Deskripsi</label>
            <div class="col-sm-9">
            <input type="hidden" name="id_fasilitas">
            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Tanggal</label>
            <div class="col-sm-9">
            <input type="date" class="form-control" name="tanggal">
            </div>
        </div>

            <div class="pull-right">
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
                <a href="<?php echo base_url('admin/seminar/readTglPenting') ?>" class="btn btn-danger">Batal</a>
            </div>
        </form>
    <?php echo form_close(); ?>
  </div>

  <div class="col-md-4">
    <h5>Petunjuk !</h5>
    <p>1. Lengkapi semua form kemudian tekan simpan</p>
    <p>2. Tanda * menandakan wajib diisi</p>
  </div>
</div>

</div>
</div>
</div>


</div>

</section>

