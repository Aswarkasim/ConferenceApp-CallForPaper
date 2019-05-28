<section class="blog">
  <div class="container">
      <div class="row">

          <div class="col-md-9">

            <div class="row">
                <div class="col-md-12 text-center pb20">
                    <h2><?= $title ?></h2>
                </div>
            </div>


            <div class="row mt40">
                <div class="col-md-12">
                    <span>
                        <label for="" class="alert alert-warning block">
                            <?= $pesan ?>
                        </label><br>
                        <a href="<?= base_url('frontend/abstrak') ?>"  class="btn btn-primary"><i class="fa fa-back"></i> Kembali</a>
                    </span>
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
