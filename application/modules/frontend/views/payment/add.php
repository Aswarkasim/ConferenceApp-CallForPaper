<section class="blog">
  <div class="container">
      <div class="row">

          <div class="col-md-9">

            <div class="row">
                <div class="col-md-12 text-center pb20">
                <h2><strong>Payment</strong></h2>
                </div>
            </div>


            <div class="row mt40">
                <div class="col-md-12">

                    
                <?php 
                   

                   echo form_open_multipart('frontend/payment/add');
                 ?>
                    <!-- Panel -->
                    <form method="post">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                <h4 class="bold"><i class="fa fa-edit"></i> Upload Paper</h4>
                            </button>
                        </div>
                        <div id="collapse1" class="panel-collapse open collapse in" aria-expanded="true" style="">
                            <div class="panel-body">

                            <?php 
                            
                            echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');

                            if(isset($error)){
                              echo '<div class="alert alert-warning">';
                              echo $error;
                              echo '</div>';
                            }
                            
                            ?>

                    <form action="" method="post">
                        <div class="row mt20">
                            <div class="col-md-3">Metode Pembayaran</div>
                            <div class="col-md-9">
                                <select name="metode_pembayaran" class="form-control mt0">
                                    <option value="">--Metode Pembayaran--</option>
                                    <option value="tunai">Tunai</option>
                                    <option value="transfer">Transfer</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt20">
                            <div class="col-md-3">Tanggal Pembayaran</div>
                            <div class="col-md-9">
                                <input type="date" name="tgl_pembayaran">
                            </div>
                        </div>

                        <div class="row mt20">
                            <div class="col-md-3">Dari Bank</div>
                            <div class="col-md-9">
                                <input type="text" name="dari_bank" placeholder="Dari Bank">
                            </div>
                        </div>

                        <div class="row mt20">
                            <div class="col-md-3">Nama Rekening</div>
                            <div class="col-md-9">
                                <input type="text" name="nama_rekening" placeholder="Nama Rekening">
                            </div>
                        </div>

                        <div class="row mt20">
                            <div class="col-md-3">No. Rekening</div>
                            <div class="col-md-9">
                                <input type="text" name="no_rekening" placeholder="No. Rekening">
                            </div>
                        </div>

                        <div class="row mt20">
                            <div class="col-md-3">Jumlah Bayar</div>
                            <div class="col-md-9">
                                <input type="number" name="jumlah_bayar" placeholder="Contoh : 120000">
                                <small>Tuliskan hanya angka</small>
                            </div>
                        </div>


                        <div class="row mt20">
                            <div class="col-md-3">Bukti Pembayaran</div>
                            <div class="col-md-9">
                                <input type="file" name="bukti">
                            </div>
                        </div>
                                                        

                        <div class="row mt20">
                            <div class="col-md-3">Informasi Lainnya</div>
                            <div class="col-md-9">
                                <textarea name="keterangan" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                                

                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-upload"></i> Submit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- End Panel -->

                    <?php echo form_close()  ?>

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

