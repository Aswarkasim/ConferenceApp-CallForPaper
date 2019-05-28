<!-- Card -->

<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h3 class="panel-title"><b><?php echo $title; ?></b></h3>
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

      echo form_open_multipart('admin/seminar/editFasilitas/'.$fasilitas->id_fasilitas)

    ?>
    
        <form class="" action="" method="post">
        <div class="form-group">
            <label class="col-sm-3 control-label">Nama Fasilitas</label>
            <div class="col-sm-9">
            <input type="hidden" name="id_fasilitas" value="<?= $fasilitas->id_fasilitas ?>">
            <input type="text" name="nama_fasilitas" class="form-control" placeholder="Nama Fasilitas" value="<?= $fasilitas->nama_fasilitas ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Icon</label>
            <div class="col-sm-9">
            <input type="text" name="icon" class="form-control" placeholder="Icon" value="<?= $fasilitas->icon ?>">
            <a href="https://fontawesome.com" target="_blank">Lihat referensi Icon</a>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Deskripsi</label>
            <div class="col-sm-9">
            <textarea name="deskripsi" class="form-control" rows="8" cols="80"><?= $fasilitas->deskripsi ?></textarea>
            </div>
        </div>

            <div class="pull-right">
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
                <a href="<?php echo base_url('admin/seminar/readFasilitas') ?>" class="btn btn-danger">Batal</a>
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

