<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12 text-center pb20">
                        <h2>User<br><strong>Dashboard</strong></h2>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3">
                        <div class="price-box">
                            <h5><strong>Abstrak</strong></h5>
                            <i class="fa fa-book size-4x"></i>
                            <a href="<?= base_url('abstrak') ?>" class="btn btn-primary mt20">More <i class="fa fa-arrow-circle-right"></i></a>
                            <?php
                            if ($abstrak) {
                                echo '<i class="fa fa-check size-2x" style="color:#4c51e0"></i>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="price-box">
                            <h5><strong>Payment</strong></h5>
                            <i class="fa fa-cube size-4x"></i>
                            <a href="<?= base_url('payment') ?>" class="btn btn-primary mt20">More <i class="fa fa-arrow-circle-right"></i></a>
                            <?php
                            if ($payment) {
                                echo '<i class="fa fa-check size-2x" style="color:#4c51e0"></i>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="price-box">
                            <h5><strong>Paper</strong></h5>
                            <i class="fa fa-file size-4x"></i>
                            <a href="<?= base_url('paper') ?>" class="btn btn-primary mt20">More <i class="fa fa-arrow-circle-right"></i></a>
                            <?php
                            if ($paper) {
                                echo '<i class="fa fa-check size-2x" style="color:#4c51e0"></i>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="price-box">
                            <h5><strong>Profil</strong></h5>
                            <i class="fa fa-user size-4x"></i>
                            <a href="<?= base_url('profil') ?>" class="btn btn-primary mt20">More <i class="fa fa-arrow-circle-right"></i></a>
                            <?php
                            if ($peserta) {
                                echo '<i class="fa fa-check size-2x" style="color:#4c51e0"></i>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-12 mt20">

                        <?php
                        $percent = 0;
                        if ($peserta) {
                            $percent = $percent + 25;
                        }
                        if ($payment) {
                            $percent = $percent + 25;
                        }
                        if ($paper) {
                            $percent = $percent + 25;
                        }
                        if ($abstrak) {
                            $percent = $percent + 25;
                        }
                        ?>
                        <h5 class="bold">Progress</h5>
                        <div class="progress" data-percent="<?= $percent ?>%">
                            <div class="progress-bar" style="width: <?= $percent ?>%;">
                                <span class="progress-bar-tooltip"><?= $percent ?>%</span>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="row mt40">
                    <div class="col-md-12">



                        <!-- Panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button class="panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                    <h4 class="bold"><?= $peserta->nama_no_title ?></h4>
                                </button>
                            </div>
                            <div id="collapse1" class="panel-collapse open collapse in" aria-expanded="true" style="">
                                <div class="panel-body">



                                    <div class="row mt20">
                                        <div class="col-md-3">Nama</div>
                                        <div class="col-md-3"><?= $peserta->nama_no_title ?></div>
                                    </div>

                                    <div class="row mt20">
                                        <div class="col-md-3">Gender</div>
                                        <div class="col-md-3"><?= $peserta->gender ?></div>
                                    </div>

                                    <div class="row mt20">
                                        <div class="col-md-3">Institusi</div>
                                        <div class="col-md-3"><?= $peserta->institusi ?></div>
                                    </div>

                                    <div class="row mt20">
                                        <div class="col-md-3">Alamat Lengkap</div>
                                        <div class="col-md-3"><?= $peserta->alamat ?></div>
                                    </div>

                                    <div class="row mt20">
                                        <div class="col-md-3">Telp.</div>
                                        <div class="col-md-3"><?= $peserta->telp ?></div>
                                    </div>

                                    <div class="pull-right">
                                        <a href="<?php echo base_url('frontend/beranda/edit/' . $peserta->id_peserta) ?>" class="btn btn-primary">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
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