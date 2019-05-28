<section class="blog">
  <div class="container">
      <div class="row">

          <div class="col-md-12">

            <div class="row">
                <div class="col-md-12 text-center pb20">
                    <h2>Abstrak<br><strong><?= $abstrak->nama_with_title ?></strong></h2>
                </div>
            </div>

            <div class="row">
                
               

            </div>


            <div class="row mt40">
                <div class="col-md-12">

                    

                    <!-- Panel -->
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                <h4 class="bold"><?= $abstrak->judul ?></h4>
                            </button>
                        </div>
                        <div id="collapse1" class="panel-collapse open collapse in" aria-expanded="true" style="">
                            <div class="panel-body">

                                <div class="text-center">
                                    <h3><b><?= $abstrak->judul ?></b></h3>
                                    <p><i><?= $abstrak->author ?></i></p>
                                    <p><?= $abstrak->institusi ?></p>
                                </div>

                                <p><b>Abstrak</b></p>
                                <p><?= $abstrak->konten ?></p>
                                <br>
                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Keyword</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $abstrak->keywords ?>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Topik</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $abstrak->subtema ?>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Nama Presenter</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $abstrak->presenter ?>
                                    </div>
                                </div>

                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Author</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <?= $abstrak->author ?>
                                    </div>
                                </div>

                                <?php 
                                    

                                    form_open('rev/beranda/detailAbstrak/'.$abstrak->id_abstrak)
                                ?>

                                <form method="post">
                                <div class="row mt10">
                                    <div class="col-md-3">
                                        <b>Status Abstrak</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-3 pl0">
                                    <?php echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>'); ?>
                                        <select name="is_accept" class="form-control mt0">
                                            <option value="none">- Pilih Status -</option>
                                            <option value="perbaikan" <?php if($abstrak->is_accept=="perbaikan"){echo "selected";} ?>>Revise</option>
                                            <option value="diterima" <?php if($abstrak->is_accept=="diterima"){echo "selected";} ?>>Accepted</option>
                                            <option value="ditolak" <?php if($abstrak->is_accept=="ditolak"){echo "selected";} ?>>Not Accepted</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <?php 
                                foreach($komentar as $row){ ?>
                                <div class="row mt10 bg-grey">
                                    <div class="container-fluid">
                                        <br>
                                        <b>Komentar <i> (<?= $row->tgl_update ?>) </i>:</b>
                                        <p><?= $row->komentar ?></p>
                                        <br>
                                    </div>
                                </div>

                                <?php  } ?>

                                <div class="row">
                                    <div class="col-md-3">
                                        <b>Komentar</b><div class="pull-right">:</div>
                                    </div>
                                    <div class="col-md-9 pl0">
                                         <textarea name="komentar" id="editor" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row mt10">
                                
                                        <a class="btn btn-primary" href="<?= base_url('rev_beranda') ?>">
                                            <i class="fa fa-arrow-left"></i> Kembali
                                        </a>

                                   <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-upload"></i> Submit
                                   </button>
                                </div>
                                </form>

                                <?php echo form_close() ?>

                            </div>
                        </div>
                    </div>
                    <!-- End Panel -->
                </div>
            </div>






           

          </div>

      </div>
  </div>
</section>
