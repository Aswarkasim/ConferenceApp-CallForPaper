<!-- Modal Primary -->
<a class="modal-basic btn btn-danger btn-xs" href="#modalDeleteTglPenting<?= $row->id_tgl_penting ?>">
<i class="fa fa-trash-o"></i></a>

<div id="modalDeleteTglPenting<?= $row->id_tgl_penting ?>" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h4>Anda yakin ingin menghapus <?= $row->deskripsi ?> ?</h4>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <h4>Hapus <?= $row->deskripsi ?> ?</h4>
                    <p>Anda yakin ingin menghapus <?= $row->deskripsi ?> ?</p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="<?= base_url('admin/seminar/deleteTglPenting/'.$row->id_tgl_penting) ?>" class="btn btn-danger">Hapus</a>
                    <button class="btn btn-default modal-dismiss">Batal</button>
                </div>
            </div>
        </footer>
    </section>
</div>
