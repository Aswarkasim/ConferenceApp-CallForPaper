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
                   

                   echo form_open_multipart('frontend/payment/edit/'.$payment->id_pembayaran);
                 ?>
                    <!-- Panel -->
                    <form method="post">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                <h4 class="bold"><i class="fa fa-edit"></i> Payment</h4>
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
                                        <option value="tunai" <?php if($payment->metode=="tunai"){echo "selected";}  ?>>Tunai</option>
                                        <option value="transfer" <?php if($payment->metode=="transfer"){echo "selected";}  ?>>Transfer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt20">
                                <div class="col-md-3">Tanggal Pembayaran</div>
                                <div class="col-md-9">
                                    <input type="date" name="tgl_pembayaran" value="<?= $payment->tgl_pembayaran ?>">
                                </div>
                            </div>

                            <div class="row mt20">
                                <div class="col-md-3">Dari Bank</div>
                                <div class="col-md-9">
                                    <input type="text" name="dari_bank" placeholder="Dari Bank" value="<?= $payment->dari_bank ?>">
                                </div>
                            </div>

                            <div class="row mt20">
                                <div class="col-md-3">Nama Rekening</div>
                                <div class="col-md-9">
                                    <input type="text" name="nama_rekening" placeholder="Nama Rekening" value="<?= $payment->nama_rekening ?>">
                                </div>
                            </div>

                            <div class="row mt20">
                                <div class="col-md-3">No. Rekening</div>
                                <div class="col-md-9">
                                    <input type="text" name="no_rekening" placeholder="No. Rekening" value="<?= $payment->no_rekening ?>">
                                </div>
                            </div>

                            <div class="row mt20">
                                <div class="col-md-3">Jumlah Bayar</div>
                                <div class="col-md-9">
                                    <input type="number" name="jumlah_bayar" placeholder="Contoh : 120000" value="<?= $payment->jumlah_bayar ?>">
                                    <small>Tuliskan hanya angka</small>
                                </div>
                            </div>


                            <div class="row mt20">
                                <div class="col-md-3">Bukti Pembayaran</div>
                                <div class="col-md-9">
                                    <input type="file" name="bukti_pembayaran">
                                    <img src="<?= base_url('assets/uploads/images/payment/'.$payment->bukti_pembayaran) ?>" width="70%" alt="">
                                </div>
                            </div>
                                                            

                            <div class="row mt20">
                                <div class="col-md-3">Informasi Lainnya</div>
                                <div class="col-md-9">
                                    <textarea name="keterangan" id="" cols="30" rows="5"><?= $payment->keterangan ?></textarea>
                                </div>
                            </div>


                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-upload"></i> Submit
                                </button>
                            </div>
                            </form>

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



