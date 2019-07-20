<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-12 text-center pb20">
                        <h2>Paper<br><strong><?= $paper->judul ?></strong></h2>
                    </div>
                </div>

                <div class="row">



                </div>


                <div class="row mt40">
                    <div class="col-md-12">



                        <!-- Panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button class="panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                    <h4 class="bold"><?= $paper->judul ?></h4>
                                </button>
                            </div>
                            <div id="collapse1" class="panel-collapse open collapse in" aria-expanded="true" style="">
                                <div class="panel-body">

                                    <div class="text-center">
                                        <h3><b><?= $paper->judul ?></b></h3>
                                        <p><?= $paper->institusi ?></p>
                                    </div>

                                    <div class="row mt10">
                                        <div class="col-md-3">
                                            <b>Presenter</b>
                                            <div class="pull-right">:</div>
                                        </div>
                                        <div class="col-md-3 pl0">
                                            <?= $paper->nama_no_title ?>
                                        </div>
                                    </div>

                                    <div class="row mt10">
                                        <div class="col-md-3">
                                            <b>File Paper</b>
                                            <div class="pull-right">:</div>
                                        </div>
                                        <div class="col-md-3 pl0">
                                            <?= $paper->file ?>
                                            <a class="btn btn-primary" href="<?= base_url('rev/beranda/download/' . $paper->file) ?>">
                                                <i class="fa fa-download"></i> Download
                                            </a>
                                        </div>
                                    </div>



                                    <?php


                                    form_open('rev/beranda/detailAbstrak/' . $paper->id_paper)
                                    ?>

                                    <form method="post">
                                        <div class="row mt10">
                                            <div class="col-md-3">
                                                <b>Status Abstrak</b>
                                                <div class="pull-right">:</div>
                                            </div>
                                            <div class="col-md-3 pl0">
                                                <?php echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>'); ?>
                                                <select name="is_accept" class="form-control mt0">
                                                    <option value="none">- Pilih Status -</option>
                                                    <option value="perbaikan" <?php if ($paper->is_accept == "perbaikan") {
                                                                                    echo "selected";
                                                                                } ?>>Revise</option>
                                                    <option value="diterima" <?php if ($paper->is_accept == "diterima") {
                                                                                    echo "selected";
                                                                                } ?>>Accepted</option>
                                                    <option value="ditolak" <?php if ($paper->is_accept == "ditolak") {
                                                                                echo "selected";
                                                                            } ?>>Not Accepted</option>
                                                </select>
                                            </div>
                                        </div>

                                        <?php
                                        foreach ($komentar as $row) { ?>
                                            <div class="row mt10 bg-grey">
                                                <div class="container-fluid">
                                                    <br>
                                                    <b>Komentar <i> (<?= $row->tgl_update ?>) </i>:</b>
                                                    <p><?= $row->komentar ?></p>
                                                    <br>
                                                </div>
                                            </div>

                                        <?php  } ?>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Komentar</b>
                                                <div class="pull-right">:</div>
                                            </div>
                                            <div class="col-md-9 pl0">
                                                <textarea name="komentar" id="editor" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mt10">

                                            <a class="btn btn-primary" href="<?= base_url('rev_paperList') ?>">
                                                <i class="fa fa-arrow-left"></i> Kembali
                                            </a>

                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-upload"></i> Submit
                                            </button>
                                        </div>
                                    </form>

                                    <?php echo form_close() ?>

                                </div>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>
                </div>





            </div>

        </div>
    </div>
</section>