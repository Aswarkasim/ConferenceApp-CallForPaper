<!-- Card -->

<section class="panel panel-primary">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h5 class=""><b><?php echo $title; ?></b></h5>
  </header>
  <div class="panel-body">

  <p>

  <?php
     echo form_open('admin/paper/detail/'.$paper->id_paper);
     echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');

  ?>


    <form action="" method="post">
      <div class="form-group">
        <label for=""><b>Accept</b></label>
        <div class="row">
          <div class="col-md-2">
            <input type="hidden" name="id_paper" value="<?= $paper->id_paper ?>">
            <select name="is_accept" class="form-control" id="">
                <option value="none">- Pilih Status -</option>
                <option value="perbaikan" <?php if($paper->is_accept=="perbaikan"){echo "selected";} ?>>Perbaikan</option>
                <option value="diterima" <?php if($paper->is_accept=="diterima"){echo "selected";} ?>>Diterima</option>
                <option value="ditolak" <?php if($paper->is_accept=="ditolak"){echo "selected";} ?>>Ditolak</option>
            </select>
          </div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-primary" name="simpan"><i class="fa fa-save"></i> Submit</button>
            <button type="submit" class="btn btn-primary" name="simpan_r"><i class="fa fa-reply"></i> Submit & kembali ke list</button>
          </div>
          <div class="col-md-6">
            <div class="pull-right">
              <a href="<?php echo base_url('admin/paper')  ?>" class="btn btn-success"><i class="fa fa-backward"></i> Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </form>
    <?php echo form_close() ?>  
  </p>

  <br>
    
  <iframe src="<?php echo base_url('assets/uploads/files/'.$paper->file) ?>" width="100%" height="800" allowfullscreen webkitallowfullscreen></iframe>    

  </div>
  </section>

  