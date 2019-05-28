<!-- Modal Primary -->
<a class="mb-xs mt-xs mr-xs modal-basic" href="#modalDeleteSubtema<?= $row->id_subtema ?>">
<i class="fa fa-trash-o"></i></a>

<div id="modalDeleteSubtema<?= $row->id_subtema ?>" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h4>Anda yakin ingin menghapus <?= $row->subtema ?> ?</h4>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <h4>Hapus <?= $row->subtema ?> ?</h4>
                    <p>Anda yakin ingin menghapus <?= $row->subtema ?> ?</p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="<?= base_url('admin/subtema/delete/'.$row->id_subtema) ?>" class="btn btn-danger">Hapus</a>
                    <button class="btn btn-default modal-dismiss">Batal</button>
                </div>
            </div>
        </footer>
    </section>
</div>

