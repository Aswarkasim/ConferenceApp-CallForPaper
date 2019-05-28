<a class="btn-xs modal-with-zoom-anim btn 

<?php 
    if($abstrak->is_accept== "1"){
        echo " btn-success";
    }else{
        echo " btn-danger";
    }
  ?>

" href="#modalAnimEditKonf<?= $abstrak->id_abstrak ?>">
    
    <?php 
        if($abstrak->is_accept== "1"){
            echo "<i class='fa fa-check-square-o'></i> diterima";
        }else{
            echo "<i class='fa fa-warning'></i> ditolak";
        }
     ?>
</a>
            

<!-- Modal Animation -->
<div id="modalAnimEditKonf<?= $abstrak->id_abstrak ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
    <section class="panel">
      <header class="panel-heading">
        <h5>Ubah Status</h5>
      </header>
      <div class="panel-body">
        <div class="modal-wrapper">
          <table class="table">

            <tr>
              <th align="left">Ubah Stats</th>
                <td>

                  <?php echo form_open('admin/abstrak/editStat/'.$abstrak->id_abstrak) ?>
                  <form action="" method="post">
                  <input type="hidden" name="id_peserta" value="<?= $abstrak->id_peserta ?>">
                    <select name="is_accept" id="" class="form-control">
                      <option value="proses">Proses</option>
                      <option value="1" <?php if($abstrak->is_accept=="1"){echo "selected";} ?>>diterima</option>
                      <option value="0" <?php if($abstrak->is_accept=="0"){echo "selected";} ?>>ditolak</option>
                    </select>
                  
                </td>
             </tr>
              
          </table>
        </div>
      </div>
      <footer class="panel-footer">
          <div class="text-right">
            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
            <button class="btn btn-default modal-dismiss">Batal</button>
          
          </div>
          </form>
          <?= form_close() ?>
      </footer>
    </section>
  </div>
