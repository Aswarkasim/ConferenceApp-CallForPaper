
<section class="blog">
  <div class="container">
      <div class="row">

          <div class="col-md-9">

            <div class="row">
                <div class="col-md-12 text-center pb20">
                    <h2>Edit Profil</h2>
                    <h2><strong><?= $peserta->nama_no_title ?></strong></h2>
                </div>
            </div>


            <div class="row mt40">
                <div class="col-md-12">

                    
                
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="panel-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                <h4 class="bold"><i class="fa fa-edit"></i> <?= $peserta->nama_no_title ?></h4>
                            </button>
                        </div>
                        <div id="collapse1" class="panel-collapse open collapse in" aria-expanded="true" style="">
                            <div class="panel-body">

                               
<form method="post" action="<?php echo base_url('frontend/beranda/edit/'.$peserta->id_peserta) ?>">
        
        <?php echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>'); ?>
        
        <div class="col-md-12">
        <h4>Basic<br><strong>Information</strong></h4>
        <br>
        
        <div class="row pt20">
            <div class="form-group">
                <div class="col-md-3 text-right">
                    <label>Nama Lengkap</label>
                </div>
                <div class="col-md-8">
                    <small class="text-muted">Contoh : Aswar Kasim</small>
                    <input type="text"  value="<?= $peserta->nama_no_title ?>" class="form-control" name="nama_no_title" placeholder="Nama tanpa gelar akademik">
                    <small class="text-muted">Contoh : Dr. Aswar Kasim, S.Pd. A.C.A.</small>
                    <input type="text" class="form-control" value="<?= $peserta->nama_with_title ?>" name="nama_with_title" placeholder="Nama dengan gelar akademik">
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
                        <option <?php if($peserta->gender=="laki-laki"){echo "selected";} ?> value="laki-laki">Laki-laki</option>
                        <option <?php if($peserta->gender=="perempuan"){echo "selected";} ?> value="perempuan">Perempuan</option>
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
                    <input type="text" value="<?= $peserta->institusi ?>" class="form-control" name="institusi" placeholder="Institusi">                                
                </div>
            </div>
        </div>
        
        <div class="row pt20">
            <div class="form-group">
                <div class="col-md-3 text-right">
                    <label>Alamat Lengkap</label>
                </div>
                <div class="col-md-8">
                    <textarea name="alamat" class="form-control"><?= $peserta->alamat ?></textarea>
                </div>
            </div>
        </div>
        
        <div class="row pt20">
            <div class="form-group">
                <div class="col-md-3 text-right">
                    <label>No Telepon</label>
                </div>
                <div class="col-md-8">
                    <input type="text" value="<?= $peserta->telp ?>" class="form-control" name="telp" placeholder="No Telepon">
                </div>
            </div>
        </div>
        
        <div class="row pt20">
            <div class="form-group">
                <div class="col-md-3 text-right">
                    <label>Fax</label>
                </div>
                <div class="col-md-8">
                    <input type="text" value="<?= $peserta->fax ?>" class="form-control" name="fax" placeholder="Fax">
                </div>
            </div>
        </div>
        
                
        
        <!-- Login -->
        <div class="row pt20">
            <div class="col-md-12">
            <h4>Login<br><strong>Information</strong></h4>
            <br>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3 text-right">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $peserta->email ?>" disabled type="email" class="form-control" name="email" placeholder="Email">
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
            </div>  
        </div>
        
        </form>

                            </div>
                        </div>
                    </div>
                    </form>

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

