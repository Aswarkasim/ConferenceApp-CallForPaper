<section class="blog">
  <div class="container">
      <div class="row">

          <div class="col-md-9">

            <div class="row">
                <div class="col-md-12 text-center pb20">
                    <h2><strong>Payment</strong></h2>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">

                <h4>Konfirmasi<br><strong>Pembayaran</strong></h4>
                <br>

                <?php 

                    echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');

                    if($this->session->flashdata('msg')){
                        echo '<div class="alert alert-warning">';
                        echo $this->session->flashdata('msg');
                        echo '</div>';
                    }

                    if(isset($error)){
                        echo '<div class="alert alert-warning">';
                        echo $error;
                        echo '</div>';
                    }


                    echo form_open_multipart('payment_part')

                ?>

                <form action="" method="post">

                <div class="row pt20">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label>ID Peserta</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="id_peserta" class="form-control" placeholder="No Pendaftaran">
                            </div>
                        </div>
                    </div>
                   

                    <div class="row pt20">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label>Metode Pembayaran</label>
                            </div>
                            <div class="col-md-8">
                                <select name="metode" id="" class="form-control mt0">
                                    <option value="">-- Pilih metode --</option>
                                    <option value="Tunai">Tunai</option>
                                    <option value="Transfer">Transfer</option>
                                   
                                </select>
                                
                            </div>
                        </div>
                    </div>

                    

                    <div class="row pt20">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label>Transaksi pada</label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" name="tgl_pembayaran" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row pt20">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label>Jumlah Bayar</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="jumlah_bayar" class="form-control" placeholder="Contoh : 500.000">
                            </div>
                        </div>
                    </div>

                    <div class="row pt20">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label>Dari Bank</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name = "dari_bank"class="form-control" placeholder="Contoh : BNI">
                                <small>Contoh : BNI</small>
                            </div>
                        </div>
                    </div>

                    <div class="row pt20">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label>Nama Pemilik Rekening</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama_rekening" class="form-control" placeholder="Contoh : 500.000">
                            </div>
                        </div>
                    </div>

                    <div class="row pt20">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label>No Rekening</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="no_rekening" class="form-control" placeholder="Contoh : 128414331">
                            </div>
                        </div>
                    </div>
              
                    <div class="row pt20">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label>Upload Slip</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="bukti">
                            </div>
                        </div>
                    </div>

                    <div class="row pt20">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label>Keterangan</label>
                            </div>
                            <div class="col-md-8">
                                <textarea name="keterangan" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                </div>  
            </div>


            <div class="row pt20">
                <div class="col-md-offset-3">
                <button class="btn btn-lg btn-warning btn-ghost" type="submit">Submit</button>
                <button class="btn btn-lg btn-warning" type="submit">Batal</button>
                </div>
            </div>

            </form>
            <?php form_close() ?>

          <br><br>
          </div>


          <!-- Sidebar -->
          <?php  $this->load->view('frontend/home/sidebar') ?>
          <!-- End Sidebar -->

      </div>
  </div>
</section>
