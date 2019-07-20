<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12 text-center pb20">
                        <h2>Abstrak<br><strong><?= $abstrak->nama_no_title ?></strong></h2>
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
                                    <h4 class="bold"><?= $abstrak->judul ?></h4>
                                </button>
                            </div>
                            <div id="collapse1" class="panel-collapse open collapse in" aria-expanded="true" style="">
                                <div class="panel-body">

                                    <div class="text-center">
                                        <h3><b><?= $abstrak->judul ?></b></h3>
                                    </div>

                                    <p><b>Abstrak</b></p>
                                    <p><?= $abstrak->konten ?></p>
                                    <br>
                                    <div class="row mt10">
                                        <div class="col-md-3">
                                            <b>Keyword</b>
                                            <div class="pull-right">:</div>
                                        </div>
                                        <div class="col-md-9 pl0">
                                            <?= $abstrak->keywords ?>
                                        </div>
                                    </div>

                                    <div class="row mt10">
                                        <div class="col-md-3">
                                            <b>Topik</b>
                                            <div class="pull-right">:</div>
                                        </div>
                                        <div class="col-md-9 pl0">
                                            <?= $abstrak->subtema ?>
                                        </div>
                                    </div>


                                    <div class="row mt10">
                                        <div class="col-md-3">
                                            <b>Status Abstrak</b>
                                            <div class="pull-right">:</div>
                                        </div>
                                        <div class="col-md-9 pl0">
                                            <?php
                                            if ($abstrak->is_accept == 'diterima') {
                                                echo "<span class='label label-success label-xs'><i class='fa fa-check'></i> Accepted</span>";
                                            } else if ($abstrak->is_accept == 'perbaikan') {
                                                echo "<span class='label label-warning label-xs'><i class='fa fa-reply'></i> Revise</span>";
                                            } else if ($abstrak->is_accept == 'ditolak') {
                                                echo "<span class='label label-danger label-xs'><i class='fa fa-warning'></i> Not accepted</span>";
                                            } else {
                                                echo "<span class='label label-success label-xs'><i class='fa fa-reload'></i> Proses Review</span>";
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <?php foreach ($komentar as $row) { ?>
                                        <div class="row mt10 bg-grey">
                                            <div class="container-fluid">
                                                <br>
                                                <b>Komentar <i> (<?= $row->tgl_update ?>) </i>:</b>
                                                <p><?= $row->komentar ?></p>
                                                <br>
                                            </div>
                                        </div>

                                    <?php  } ?>

                                    <div class="row mt10">
                                        <a href="<?= base_url('frontend/abstrak/edit/' . $abstrak->id_abstrak) ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit/Revise</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>
                </div>








            </div>

            <!-- Sidebar -->
            <div class="col-md-3 sidebar">

                <?php $this->load->view('frontend/layout/sidebar') ?>

            </div>
            <!-- End Sidebar -->

        </div>
    </div>
</section>