<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12 text-center pb20">
                        <h2><br><strong>Paper</strong></h2>
                    </div>
                </div>


                <div class="row mt40">
                    <div class="col-md-12">



                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button class="panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                    <h4 class="bold"><i class="fa fa-edit"></i> Upload Paper</h4>
                                </button>
                            </div>
                            <div id="collapse1" class="panel-collapse open collapse in" aria-expanded="true" style="">
                                <div class="panel-body">

                                    <div class="row mt10">
                                        <div class="col-md-3">
                                            <b>Judul Abstrak</b>
                                            <div class="pull-right">:</div>
                                        </div>
                                        <div class="col-md-9 pl0">
                                            <?= $paper->judul ?>
                                        </div>
                                    </div>
                                    <div class="row mt10">
                                        <div class="col-md-3">
                                            <b>Full paper</b>
                                            <div class="pull-right">:</div>
                                        </div>
                                        <div class="col-md-9 pl0">
                                            <a href=""><i class="fa fa-print"></i> Fullpaper</a>
                                        </div>
                                    </div>



                                    <div class="pull-right">
                                        <a href="<?= base_url('frontend/paper/edit/' . $paper->id_paper) ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        </form>

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