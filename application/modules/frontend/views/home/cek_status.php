<section class="blog">
  <div class="container">
      <div class="row">

          <div class="col-md-9">

            <div class="row">
                <div class="col-md-12 text-center pb20">
                    <h2>Cek<br><strong>Status</strong></h2>
                </div>
            </div>

            <div class="row">
                
               

            </div>


            <div class="row mt40">
                <div class="col-md-12">

                    <div class="input-group">
                        <div class="form-group subscribe-form-input alert alert-info">
                            <?= form_open('cek_status') ?>
                            <span class="input-group-btn subscribe-top">
                                <input type="text" name="id_peserta" class="top-subscribe-input bg-white" placeholder="Masukkan ID Anda" value="<?= set_value('id_peserta') ?>">
                            </span>
                            <span class="input-group-btn sign-btn">
                                <button class="subscribe-form-submit btn btn-primary" data-loading-text="Loading...">SUBMIT</button>
                            </span>
                            <?= form_close() ?>
                        </div>
                    </div>
                  <!-- Panel -->
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                <h4 class="bold"></h4>
                            </button>
                        </div>
                        <div id="collapse1" class="panel-collapse open collapse in" aria-expanded="true" style="">
                            <div class="panel-body">
                                <?php 
                                    if(isset($cek)){
                                        echo $cek;
                                    }
                                ?>
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
