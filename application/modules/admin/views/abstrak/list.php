<!-- Card -->

<section class="panel panel-primary">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h2 class="panel-title"><?php echo $title; ?></h2>
  </header>
  <div class="panel-body">

    <table class="table table-bordered DataTables">
      <thead>
        <tr>
          <th width="50px" align="center">No</th>
          <th>Nama Peserta</th>
          <th>Status</th>
          <th width="100px">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($abstrak as $row) { ?>
          <tr>
            <td><?php if ($row->is_read == "0") {
                  echo " <span class='label label-success'>$no</span>";
                } else {
                  echo $no;
                } ?></td>
            <td>
              <b><a href="<?= base_url('admin/peserta/pesertaDetail/' . $row->id_peserta) ?>"><?= $row->nama_no_title ?></a></b><br>
              <i class="fa fa-building"></i> <?= $row->institusi ?>
            </td>
            <td>
              <?php
              if ($row->is_accept == 'diterima') {
                echo "<span class='btn btn-success btn-xs'><i class='fa fa-check-square-o'></i> Diterima</span>";
              } else if ($row->is_accept == 'perbaikan') {
                echo "<span class='btn btn-success btn-xs'><i class='fa fa-reply'></i> Perbaikan</span>";
              } else {
                echo "<span class='btn btn-danger btn-xs'><i class='fa fa-warning'></i> Ditolak</span>";
              }
              ?>
            </td>
            <td>
              <?php include('delete.php') ?>
            </td>
          </tr>
          <?php $no++;
        } ?>
      </tbody>
    </table>

  </div>
</section>