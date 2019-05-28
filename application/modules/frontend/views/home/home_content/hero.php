<!-- Hero -->
<section id="hero" class="hero-fullscreen parallax" data-overlay-dark="2">
    <div class="background-image">
        <img src="<?php echo base_url('assets/uploads/images/'.$seminar->banner) ?>" alt="#">
    </div>

    <div class="container">
        <div class="row">

            <div class="hero-content-slider mt20" data-autoplay="true" data-speed="4000">

                <div>
                    <h1><?= $seminar->nama_seminar ?><br><strong><?= $seminar->tema_seminar ?></strong></h1>
                    <p class="lead"><?= character_limiter($seminar->deskripsi_seminar, 200) ?></p>
                    
                    <?php 
                        if($this->session->userdata('id_peserta')){  ?>
                            <a href="<?= base_url('beranda') ?>" class="btn btn-lg btn-primary btn-scroll"><i class="fa fa-dashboard"></i> Beranda</a>
                      <?php  }else if($this->session->userdata('id_reviewer')){ ?>
                            <a href="<?= base_url('rev_beranda') ?>" class="btn btn-lg btn-primary btn-scroll"><i class="fa fa-dashboard"></i> Beranda</a>
                       <?php }else{  ?>
                        <a href="<?= base_url('register') ?>" class="btn btn-lg btn-primary btn-scroll"><i class="fa fa-user-plus"></i> Register</a>
                        <a href="<?= base_url('register') ?>" class="btn btn-lg btn-primary btn-scroll"><i class="fa fa-sign-in-alt"></i> Login</a>
                       <?php } ?>
                    
                </div>


                <?php foreach($subtema as $row){ ?>

                <div>
                    <h1><strong><?= $row->subtema ?></strong></h1>
                    <p class="lead"><?= $row->deskripsi ?></p>
                    <?php 
                        if($this->session->userdata('id_peserta')){  ?>
                            <a href="<?= base_url('beranda') ?>" class="btn btn-lg btn-primary btn-scroll"><i class="fa fa-dashboard"></i> Beranda</a>
                      <?php  }else if($this->session->userdata('id_reviewer')){ ?>
                            <a href="<?= base_url('rev_beranda') ?>" class="btn btn-lg btn-primary btn-scroll"><i class="fa fa-dashboard"></i> Beranda</a>
                       <?php }else{  ?>
                        <a href="<?= base_url('register') ?>" class="btn btn-lg btn-primary btn-scroll"><i class="fa fa-user-plus"></i> Register</a>
                        <a href="<?= base_url('register') ?>" class="btn btn-lg btn-primary btn-scroll"><i class="fa fa-sign-in-alt"></i> Login</a>
                       <?php } ?>
                </div>
                <?php  } ?>





            </div>

        </div>
    </div>
</section>
<!-- End Hero -->