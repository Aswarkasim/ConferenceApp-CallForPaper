<!-- Modal Primary -->
<a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger btn-xs" href="#modalDeleteSpeaker<?= $row->id_relat ?>">
<i class="fa fa-trash-o"></i></a>

<div id="modalDeleteSpeaker<?= $row->id_relat ?>" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Anda yakin?</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <h4>Warning</h4>
                    <p>Anda yakin ingin menghapus <b><?= $row->nama_relat ?></b> </p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="<?= base_url('admin/relat/delete/'.$row->id_relat) ?>" class="btn btn-danger">Hapus</a>
                    <button class="btn btn-default modal-dismiss">Batal</button>
                </div>
            </div>
        </footer>
    </section>
</div>

