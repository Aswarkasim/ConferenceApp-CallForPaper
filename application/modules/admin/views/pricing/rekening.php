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

      echo form_open_multipart('admin/seminar/addPricing')

    ?>
    
        <form class="" action="" method="post">


        <div class="form-group">
            <label class="col-sm-3 control-label">Nama Rekening</label>
            <div class="col-sm-9">
            <input type="text" name="nama_rekening" class="form-control" placeholder="Nama Rekening" value="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Nama Bank</label>
            <div class="col-sm-9">
            <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank" value="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">No. Rekening</label>
            <div class="col-sm-9">
            <input type="text" name="no_rekening" class="form-control" placeholder="No Rekening" value="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Negara</label>
            <div class="col-sm-9">
            <input type="text" name="negara" class="form-control" placeholder="negara" value="">
            </div>
        </div>

            <div class="pull-right">
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
                <a href="<?php echo base_url('admin/seminar/negara') ?>" class="btn btn-danger">Batal</a>
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

