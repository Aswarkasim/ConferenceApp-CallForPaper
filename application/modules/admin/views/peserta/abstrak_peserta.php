<!-- Card -->

<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h2 class="panel-title"><b>Abstrak</b></h2>
  </header>
  <div class="panel-body">

<div class="row">
  <div class="col-md-12">
    <div class="text-center">
      <h3><b><?= $abstrak->judul ?></b></h3>
      <h5><i><?= $abstrak->author ?></i> </h5><br>
      <h5><?= $abstrak->institusi ?></h5>
    </div>
    <br>
    <br>
    <h4><b>Abstrak</b></h4>
    <?php echo $abstrak->konten ?>
    <br><br>
    <table class="table">
      <tr>
        <th width="200px">Keyword</th>
        <td><?= $abstrak->keywords ?></td>
      </tr>
      <tr>
        <th>Topik</th>
        <td><?= $abstrak->subtema ?></td>
      </tr>
      <tr>
        <th>Type</th>
        <td><?= $abstrak->type ?></td>
      </tr>
      <tr>
        <th>Nama Presenter</th>
        <td><?= $abstrak->presenter ?></td>
      </tr>

      <tr>
        <th>Author</th>
        <td><?= $abstrak->author ?></td>
      </tr>

      <tr>
        <th>Full Paper</th>
        <td><a href=""><i class="fa fa-save"></i> <?= $abstrak->paper ?></a> </td>
      </tr>

      <tr>
        <th>Status Abstrak</th>
        <?php echo form_open('admin/peserta/pesertaDetail/'.$abstrak->id_peserta) ?>
        <form action="" method="post">
        <td>
          <?php
             // include('ubah_status.php')
             echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');
            ?>
              
                  <input type="hidden" name="id_peserta" value="<?= $abstrak->id_peserta ?>">
                    <select name="is_accept" class="form-control" style="width:200px">
                      <option value="none">- Pilih Status -</option>
                      <option value="perbaikan" <?php if($abstrak->is_accept=="perbaikan"){echo "selected";} ?>>Perbaikan</option>
                      <option value="diterima" <?php if($abstrak->is_accept=="diterima"){echo "selected";} ?>>Diterima</option>
                      <option value="ditolak" <?php if($abstrak->is_accept=="ditolak"){echo "selected";} ?>>Ditolak</option>
                    </select>
            
        </td>
      </tr>
          <th>Komentar Reviewer <br> <small class="text-danger">diisi oleh reviewer</small></th>
          <td>

              <textarea class="form-control" name="komentar" cols="30" rows="10"><?= $abstrak->komentar ?></textarea><br>
              <button class="btn btn-primary" type="submit" name="simpan"><i class="fa fa-save"></i> Simpan</button>
              <button class="btn btn-primary" type="submit" name="simpan_r"><i class="fa  fa-reply"></i> Simpan & kembali ke list</button>
          </td>
      <tr>
      
      </tr>
      
      </form>
      <?= form_close() ?>
    </table>
  </div>
</div>

</div>
</section>