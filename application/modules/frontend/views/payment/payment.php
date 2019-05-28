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
         
        
            </div>


            <div class="row mt40">
                <div class="col-md-12">

                    

                    <!-- Panel -->
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="panel-title"  aria-expanded="true">
                                
                            </button>
                        </div>
                        <div id="collapse1" aria style="">
                            <div class="panel-body">

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Nama</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $payment->nama_no_title ?>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Tanggal </b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $payment->tgl_pembayaran ?>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Bank Anda</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $payment->dari_bank ?>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>No. Rek. Anda</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $payment->no_rekening ?>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Jumlah Bayar</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $payment->jumlah_bayar ?>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Informasi Lain</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $payment->keterangan ?>
                                    </div>
                                </div>
                            

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Status</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                        <?php
                                            if($payment->status_pembayaran == 'valid'){
                                            echo "<span class='label label-success label-xs'><i class='fa fa-check'></i> Valid</span>";
                                            }else if($payment->status_pembayaran == 'proses'){
                                            echo "<span class='label label-warning label-xs'><i class='fa fa-reply'></i> Proses</span>";
                                            }else {
                                            echo "<span class='label label-danger label-xs'><i class='fa fa-warning'></i> Un-valid</span>";
                                            }
                                        ?>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Invoice</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <a href="<?= base_url('frontend/payment/invoice') ?>" target="_blank"><i class="fa fa-print"></i> Cetak Invoice</a>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Bukti Transaksi</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <img src="<?= base_url('assets/uploads/images/payment/'.$payment->bukti_pembayaran) ?>" alt="">
                                    </div>
                                </div>

                               
                                <div class="row mt10">
                                   <a href="<?= base_url('frontend/payment/edit/'.$payment->id_pembayaran) ?>"  class="btn btn-primary"><i class="fa fa-edit"></i> Edit/Revise</a>
                                </div>

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
