<a class="btn-xs modal-with-zoom-anim btn 

<?php
if ($row->status_pembayaran == "proses") {
  echo " btn-warning";
} else if ($row->status_pembayaran == "valid") {
  echo " btn-success";
} else {
  echo " btn-danger";
}
?>

" href="#modalAnimEditKonf<?= $row->id_pembayaran ?>">

  <?php
  if ($row->status_pembayaran == "proses") {
    echo "<i class='fa fa-refresh'></i> Proses";
  } else if ($row->status_pembayaran == "valid") {
    echo "<i class='fa fa-check'></i> Valid";
  } else {
    echo "<i class='fa fa-warning'></i> Tidak valid";
  }
  ?>
</a>


<!-- Modal Animation -->
<div id="modalAnimEditKonf<?= $row->id_pembayaran ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
  <section class="panel">
    <header class="panel-heading">
      <h2 class="panel-title">Are you sure?</h2>
    </header>
    <div class="panel-body">
      <div class="modal-wrapper">
        <table class="table">
          <tr>
            <th align="right" width="200px"> Nama Peserta </th>
            <td><?= $row->nama_no_title ?></td>
          </tr>
          <tr>
            <th align="right">Jumlah Bayar</th>
            <td><?= $row->jumlah_bayar ?></td>
          </tr>

          <tr>
            <th align="right">Dari Rekening</th>
            <td><?= $row->no_rekening ?></td>
          </tr>

          <tr>
            <th align="right">Nama Rekening</th>
            <td><?= $row->nama_rekening ?></td>
          </tr>

          <tr>
            <th align="right">dari Bank</th>
            <td><?= $row->dari_bank ?></td>
          </tr>

          <tr>
            <th align="right">Destinasi Bank</th>
            <td><?= $row->destinasi_bank ?></td>
          </tr>

          <tr>
            <th align="right">Bukti Transfer</th>
            <td><img src="<?= base_url('assets/uploads/images/payment/') . $row->bukti_pembayaran ?>" width="100%"></td>
          </tr>

          <tr>
            <th align="right">Ubah Stats</th>
            <td>

              <?php echo form_open('admin/Konfirmasi/ubahKonf/' . $row->id_pembayaran) ?>
              <form action="" method="post">
                <input type="hidden">
                <select name="status_pembayaran" id="" class="form-control">
                  <option value="proses">Proses</option>
                  <option value="valid" <?php if ($row->status_pembayaran == "valid") {
                                          echo "selected";
                                        } ?>>Valid</option>
                  <option value="un-Valid" <?php if ($row->status_pembayaran == "un-valid") {
                                              echo "selected";
                                            } ?>>Un-Valid</option>
                </select>

            </td>
          </tr>

        </table>
      </div>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-md-12 text-right">
          <input type="submit" name="submit" class="btn btn-success" value="Simpan">
          <button class="btn btn-default modal-dismiss">Batal</button>

        </div>
      </div>
      </form>
    </footer>
  </section>
</div>