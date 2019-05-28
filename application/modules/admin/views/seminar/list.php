
<div class="row">
  <div class="col-md-12">
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

          if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
          }

          if(isset($error)){
            echo $error;
          }
        ?>

          <?php echo form_open_multipart('admin/seminar/') ?>
            <div class="form-group">
              <label class="col-sm-3 control-label">Judul Seminar<span class="required">*</span></label>
              <div class="col-sm-9">
                <input type="text" name="nama_seminar" class="form-control" placeholder="Judul Seminar" required="" value="<?= $seminar->nama_seminar ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Tema Seminar</label>
              <div class="col-sm-9">
                <input type="text" name="tema" class="form-control" placeholder="Tema Seminar" value="<?= $seminar->tema_seminar ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Tanggal Pelaksanaan</label>
              <div class="col-sm-4">
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Pelaksanaan" value="<?= $seminar->tanggal ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Jam Pelaksanaan</label>
              <div class="col-sm-4">
                <input type="time" name="jam" class="form-control" placeholder="Jam Pelaksanaan" value="<?= $seminar->jam ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Tempat Pelaksanaan</label>
              <div class="col-sm-4">
                <input type="text" name="tempat" class="form-control" placeholder="Tempat Pelaksanaan" value="<?= $seminar->tempat ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Contact Person</label>
              <div class="col-sm-4">
                <input type="text" name="cp" class="form-control" placeholder="contact person" value="<?= $seminar->cp ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Email</label>
              <div class="col-sm-4">
                <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $seminar->email ?>">
              </div>
            </div>

            
            <div class="form-group">
              <label class="col-sm-3 control-label">Pendaftaran</label>
              <div class="col-sm-5">
                <select class="form-control" name="is_pendaftaran" id="">
                  <option value="1" <?php if($seminar->is_pendaftaran=="1"){echo "selected";} ?>>Aktif</option>
                  <option value="0" <?php if($seminar->is_pendaftaran=="0"){echo "selected";} ?>>Non-Aktif</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Submit Abstrak</label>
              <div class="col-sm-5">
                <select class="form-control" name="is_submit_abstrak" id="">
                  <option value="1" <?php if($seminar->is_submit_abstrak=="1"){echo "selected";} ?>>Aktif</option>
                  <option value="0" <?php if($seminar->is_submit_abstrak=="0"){echo "selected";} ?>>Non-Aktif</option>
                </select>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-3 control-label">Submit Paper</label>
              <div class="col-sm-5">
                <select class="form-control" name="is_submit_paper" id="">
                  <option value="1" <?php if($seminar->is_submit_paper=="1"){echo "selected";} ?>>Aktif</option>
                  <option value="0" <?php if($seminar->is_submit_paper=="0"){echo "selected";} ?>>Non-Aktif</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Deskripsi</label>
              <div class="col-sm-9">
                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"><?=  $seminar->deskripsi_seminar ?></textarea>
              </div>
            </div>

          </div>

          <div class="col-md-6">
          <div class="form-group">
              <label class="col-sm-3 control-label">Banner</label>
              <div class="col-sm-4">
                <input type="file" name = "banner">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9">
                <img src="<?php echo base_url()."assets/uploads/images/".$seminar->banner ?>" alt="" width="100%">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Google Map Link</label>
              <div class="col-sm-9">
                <textarea name="gmap" class="form-control" cols="30" rows="10"><?= $seminar->gmap ?></textarea>
              </div>
            </div>

            

            <h4>Google Maps</h4>
          <hr>
            <style type="text/css" media="screen">
              iframe{
                width: 100%;
                height: auto;
                min-height: 300px;
              }
            </style>
            <?php echo $seminar->gmap ?>
            <hr>
            
          </div>
        </div>
        

        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-success">
            <i class="fa fa-save"></i> Simpan Konfigurasi
          </button>

          <button type="reset" name="submit" class="btn btn-default">
            <i class="fa fa-refresh"></i> Reset
          </button>
        </div>

        <?php echo form_close() ?>

  </div>
</section>



  </div>



</div>
