<!-- Modal Primary -->
<a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger" href="#modalDeleteFile<?= $row->id_file ?>">
<i class="fa fa-trash-o"></i></a>

<div id="modalDeleteFile<?= $row->id_file ?>" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Are you sure?</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <h4>Primary</h4>
                    <p>Are you sure that you want to delete this image?</p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="<?= base_url('admin/file_pendukung/delete/'.$row->id_file) ?>" class="btn btn-danger">Hapus</a>
                    <button class="btn btn-default modal-dismiss">Batal</button>
                </div>
            </div>
        </footer>
    </section>
</div>

