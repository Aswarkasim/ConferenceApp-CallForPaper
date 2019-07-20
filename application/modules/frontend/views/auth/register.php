<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12 text-center pb20">
                        <h2>Register<br><strong>as participant</strong></h2>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">

                        <h4>Basic<br><strong>Information</strong></h4>
                        <br>

                        <form method="post" action="<?php echo base_url('register') ?>">

                            <?php echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>'); ?>

                            <div class="row pt20">
                                <div class="form-group">
                                    <div class="col-md-3 text-right">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-8">
                                        <small class="text-muted">Contoh : Aswar Kasim</small>
                                        <input value="<?= set_value('nama_no_title') ?>" type="text" class="form-control" name="nama_no_title" placeholder="Nama tanpa gelar akademik">
                                    </div>
                                </div>
                            </div>

                            <div class="row pt20">
                                <div class="form-group">
                                    <div class="col-md-3 text-right">
                                        <label>Gender</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="gender" id="" class="form-control mt0">
                                            <option value="">--Gender--</option>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>

                                    </div>
                                </div>
                            </div>


                            <div class="row pt20">
                                <div class="form-group">
                                    <div class="col-md-3 text-right">
                                        <label>Institusi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input value="<?= set_value('institusi') ?>" type="text" class="form-control" name="institusi" placeholder="Institusi">

                                    </div>
                                </div>
                            </div>

                            <div class="row pt20">
                                <div class="form-group">
                                    <div class="col-md-3 text-right">
                                        <label>Alamat Lengkap</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="alamat" class="form-control"><?= set_value('alamat') ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt20">
                                <div class="form-group">
                                    <div class="col-md-3 text-right">
                                        <label>No Telepon</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input value="<?= set_value('telp') ?>" type="text" class="form-control" name="telp" placeholder="No Telepon">
                                    </div>
                                </div>
                            </div>



                    </div>
                </div>


                <!-- Login -->

                <script type="text/javascript">
                    $(function() {
                        $("#partisipan").change(function() {
                            if ($(this).val() == "presenter") {
                                $("#login-form").show();
                            } else {
                                $("#login-form").hide();
                            }
                        });
                    });
                </script>

                <div class="row pt20" id="login-form">
                    <div class="col-md-12">
                        <h4>Login<br><strong>Information</strong></h4>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-3 text-right">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-3 text-right">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-3 text-right">
                                    <label>Retype Password</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="re_password" placeholder="Retype Password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row md30">
                    <div class="col-md-offset-3">
                        <button class="btn btn-lg btn-warning btn-ghost" type="submit">Submit</button>
                    </div>

                    </form>
                    <br>
                    <br>
                    <br>
                </div>

            </div>

            <!-- Sidebar -->
            <?php $this->load->view('frontend/home/sidebar') ?>
            <!-- End Sidebar -->

        </div>
    </div>
</section>