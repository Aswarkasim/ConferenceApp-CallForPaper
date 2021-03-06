<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12 text-center pb20">
                        <h2>Profil<br><strong><?= $peserta->nama_no_title ?></strong></h2>
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