
<!-- Card -->

<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h4><b><?php echo $title; ?></b></h4>
  </header>
  <div class="panel-body">


<div class="row">
  <div class="col-md-6">

  <?php 
        
        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>'); 
    
        echo form_open('admin/subtema/edit/'.$subtema->id_subtema);
    ?>
        <form action="" method="post">
            <div class="form-group">
            <input type="hidden" name="id_subtema" value="<?= $subtema->id_subtema ?>">
                <label for="exampleInputName1">Subtema<small class="text text-danger">*</small></label>
                <input type="text" class="form-control" name="subtema" value="<?= $subtema->subtema ?>">
            </div>

            <div class="form-group">
                    <label for="exampleInputName1">Reviewer<small class="text text-danger">*</small></label><br>
                    <select name="id_reviewer" id="" class="form-control">
                        <option value="">---Pilih Reviewer----</option>\
                        <?php foreach($reviewer as $row){ ?>
                        <option value="<?= $row->id_reviewer ?>" <?php if($subtema->id_reviewer==$row->id_reviewer){echo "selected";} ?>>
                          <?= $row->nama_reviewer ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>

            <div class="form-group">
                    <label for="exampleInputName1">Icon<small class="text text-danger">*</small></label>
                    <input type="text" class="form-control" name="icon" value="<?= $subtema->icon ?>">
                </div>

            <div class="form-group">
                <label>Deskkripsi</label>
                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"><?= $subtema->deskripsi ?></textarea>
            </div>

            <br>
            <button type="submit" class="btn btn-success mr-2"><i class="fa fa-save"></i>     Simpan</button>
            <a href="<?php echo base_url('admin/subtema') ?>" class="btn btn-danger">Batal</a>

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



        

