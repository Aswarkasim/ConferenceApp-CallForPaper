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

      echo form_open_multipart('admin/relat/add')

    ?>
    <form class="forms-sample" method="post">
      
      <div class="form-group">
        <label for="">Nama Instansi <small class="text text-danger">*</small></label>
        <input type="text" class="form-control" id="" placeholder="Nama Instansi" name="nama_relat">
      </div>

      <div class="form-group">
        <label for="">Logo<small class="text text-danger">*</small></label>
        <input type="file" class="form-control" id="" name="logo">
      </div>

      <div class="form-group">
        <label for="">Type<small class="text text-danger">*</small></label>
        <select name="type" id="" class="form-control">
          <option value="organized">Organized</option>
          <option value="sponsor">Sponsor</option>
          <option value="media_partner">Mendia Partner</option>
        </select>
      </div>

      <br>
      <button type="submit" class="btn btn-success mr-2">Simpan</button>
      <a href="<?php echo base_url('admin/relat') ?>" class="btn btn-danger">Batal</a>
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

