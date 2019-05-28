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

      echo form_open_multipart('admin/file_pendukung/add')

    ?>
    <form class="forms-sample" method="post">
      <div class="form-group">
        <label for="">Nama File <small class="text text-danger">*</small></label>
        <input type="text" class="form-control" id="" placeholder="Nama File" name="nama_file">
      </div>

      <div class="form-group">
        <label for="">parent</label>
        <select name="is_parent" class="form-control">
          <option value="0">Tidak ada parent</option>
          <?php
            $parent = $this->db->get_where('tbl_file_pendukung', array('is_parent'=>0));
            foreach($parent->result() as $row){ ?>
              <option value="<?= $row->id_file ?>"><?= $row->nama_file ?></option>
          <?php  } ?>
        </select>
      </div>

      <div class="form-group">
        <label for="">File<small class="text text-danger">*</small></label>
        <input type="file" class="form-control" id="" name="file">
      </div>

      <div class="form-group">
        <label for="exampleTextarea1">Deskripsi</label>
        <textarea class="form-control" id="exampleTextarea1" rows="2" name="deskripsi"></textarea>
      </div><br>
      <button type="submit" class="btn btn-success mr-2">Simpan</button>
      <a href="<?php echo base_url('admin/file_pendukung') ?>" class="btn btn-danger">Batal</a>
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

