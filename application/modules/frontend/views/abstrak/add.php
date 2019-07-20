<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12 text-center pb20">
                        <h2>Upload<br><strong>Abstrak</strong></h2>
                    </div>
                </div>


                <div class="row mt40">
                    <div class="col-md-12">



                        <!-- Panel -->
                        <form method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <button class="panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                        <h4 class="bold"><i class="fa fa-edit"></i> Upload Abstrak</h4>
                                    </button>
                                </div>
                                <div id="collapse1" class="panel-collapse open collapse in" aria-expanded="true" style="">
                                    <div class="panel-body">

                                        <?php

                                        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');

                                        if ($this->session->flashdata('msg')) {
                                            echo '<div class="alert alert-warning">';
                                            echo $this->session->flashdata('msg');
                                            echo '</div>';
                                        }

                                        echo form_open('abstrak/add');
                                        ?>

                                        <form action="" method="post">
                                            <div class="row mt20">
                                                <div class="col-md-3">Subtema</div>
                                                <div class="col-md-9">
                                                    <select name="subtema" class="form-control mt0" id="">

                                                        <option value="">--Subtema--</option>
                                                        <?php foreach ($subtema as $row) { ?>
                                                            <option value="<?= $row->id_subtema ?>"><?= $row->subtema ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mt20">
                                                <div class="col-md-3">Judul</div>
                                                <div class="col-md-9">
                                                    <input type="text" name="judul" value="<?php set_value('judul') ?>" placeholder="Judul">
                                                </div>
                                            </div>

                                            <div class="row mt20">
                                                <div class="col-md-3">Konten Abstrak</div>
                                                <div class="col-md-9">
                                                    <textarea name="konten" id="editor" cols="30" rows="10"><?php set_value('konten') ?></textarea>
                                                </div>
                                            </div>


                                            <div class="row mt20">
                                                <div class="col-md-3">Keyword</div>
                                                <div class="col-md-9">
                                                    <input type="text" name="keywords" value="<?php set_value('keyword') ?>" placeholder="Keyword">
                                                </div>
                                            </div>

                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-upload"></i> Submit
                                                </button>
                                            </div>

                                        </form>

                                        <?php echo form_close() ?>

                                    </div>
                                </div>
                            </div>
                        </form>
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