<section class="blog">
  <div class="container">
      <div class="row">

          <div class="col-md-9">

            <div class="row">

                    <div class="col-md-12 text-center pb20">
                        <h2>Login<br><strong>as participant</strong></h2>
                    </div>
                    
                   

                    <div class="col-md-8 col-md-offset-2 contact box-style">
                        <div id="message-info"></div>
                        <!-- Forms can be functional only on server. Upload to your server when testing. -->
                        <?php

                            if(isset($pesan_er)){
                                echo '<div class="alert alert-warning">';
                                echo $pesan_er;
                                echo '</div>'; 
                            }
                        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>'); 
                        echo form_open('login_participant') 
                    ?>
                       
                        <form id="contactform" method="post">

                          <div class="col-sm-12">
                              <input type="email" name="email" id="name" placeholder="Email *">
                          </div>
                          <div class="col-sm-12">
                              <input type="password" name="password" id="password" placeholder="Password *">
                          </div>

                            <div class="col-md-12">
                                <input type="submit" class="submit btn btn-lg btn-primary" id="submit" value="Login">
                            </div>

                        </form>
                    </div>

                    <?= form_close() ?>

                </div>

          </div>

          <!-- Sidebar -->
          <?php  $this->load->view('frontend/home/sidebar') ?>
          <!-- End Sidebar -->

      </div>
  </div>
</section>
