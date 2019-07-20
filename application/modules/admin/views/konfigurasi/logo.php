<div class="row">
    <div class="col-md-12">
        <!-- Card -->

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title"><?php echo $title; ?></h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">

                        <?php

                        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');

                        if (isset($error)) {
                            echo '<div class="alert alert-warning">';
                            echo $error;
                            echo '</div>';
                        }

                        echo form_open_multipart('admin/konfigurasi/logo')

                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="hidden" name="bantu" class="form-control" value="aa">
                                <input type="file" name="logo" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                            </div>
                        </form>
                        <?= form_close() ?>

                        <div class="form-group">
                            <br>
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/uploads/images/' . $konfigurasi->logo) ?>" class="" alt="Logo">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>



    </div>



</div>