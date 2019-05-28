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

      echo form_open_multipart('admin/speaker/add')

    ?>
    <form class="forms-sample" method="post">
      
      <div class="form-group">
        <label for="">Nama Lengkap <small class="text text-danger">*</small></label>
        <input type="text" class="form-control" id="" placeholder="Nama Lengkap" name="nama_speaker">
      </div>

      <div class="form-group">
        <label for="">Institusi<small class="text text-danger">*</small></label>
        <input type="text" class="form-control" id="" name="institusi" placeholder="Institusi">
      </div>

      <div class="form-group">
        <label for="">Foto<small class="text text-danger">*</small></label>
        <input type="file" class="form-control" id="" name="foto">
      </div>

      <div class="form-group">
        <label for="">Jenis Speaker<small class="text text-danger">*</small></label>
        <select name="jenis_speaker" id="" class="form-control">
          <option value="1">Speaker</option>
          <option value="2">Keynote Speaker</option>
        </select>
      </div>

      

      <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea class="form-control" id="" rows="2" name="deskripsi"></textarea>
      </div><br>
      <button type="submit" class="btn btn-success mr-2">Simpan</button>
      <a href="<?php echo base_url('admin/user') ?>" class="btn btn-danger">Batal</a>
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

