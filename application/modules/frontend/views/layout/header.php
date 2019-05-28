
<?php
    
    if($this->session->userdata('id_peserta')){
        $id_peserta = $this->session->userdata('id_peserta');
        $peserta    = $this->Crud_model->listingOne('tbl_peserta','id_peserta', $id_peserta);
        $nama_akun  = $peserta->nama_no_title;
        $beranda    = 'beranda';
        $logout     = 'logout_participant';
    }else if($this->session->userdata('id_reviewer')){
        $id_reviewer = $this->session->userdata('id_reviewer');
        $reviewer    = $this->Crud_model->listingOne('tbl_reviewer','id_reviewer', $id_reviewer);
        $nama_akun  = $reviewer->nama_reviewer;
        $beranda    = 'rev_beranda';
        $logout     = 'rev_out';
    }
    
    
    
?>
<!-- Start Header -->
        <nav class="navbar nav-down" data-fullwidth="true" data-menu-style="light" data-animation="shrink"><!-- Styles: light, dark, transparent | Animation: hiding, shrink -->
            <div class="container">

                <div class="navbar-header">
                    <div class="container">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <a class="navbar-brand to-top" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/frontend/') ?>img/assets/logo-light.png" class="logo-light" alt="#"><img src="<?php echo base_url('assets/frontend/') ?>img/assets/logo-dark.png" class="logo-dark" alt="#"></a>
                    </div>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <div class="container">
                        <ul class="nav navbar-nav menu-right">
                            
                            <?php 
                                if($this->session->userdata('id_peserta')){ 
                                    require_once('header_part.php'); 
                                }else if($this->session->userdata('id_reviewer')){
                                    require_once('header_rev.php');
                                }else{ 
                            ?>
                            <!-- Each section must have corresponding ID ( #hero -> id="hero" ) -->
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url('payment_part') ?>">Payment</a></li>
                            <li><a href="<?php echo base_url('cek_status') ?>">Cek status</a></li>
                            <li><a href="<?php echo base_url('register') ?>">Daftar</a></li>
                            <li><a href="<?php echo base_url('frontend/home/download') ?>">Download</a></li>
                                <?php } ?>
                
                            <li class="nav-separator"></li>
                            
                            
                            <?php 
                                if(($this->session->userdata('email')=="")&& $this->session->userdata('id_peserta')==""){ ?>
                                   <li  class="nav-icon"><a href="<?php echo base_url('login_participant') ?>"><i class="fa fa-sign-in-alt"></i></a></li>
                                   <li  class="nav-icon"><a href="<?php echo base_url('register') ?>"><i class="fa fa-user-plus"></i></a></li>
                             <?php   }else{ ?>
                                   <li  class="nav-icon"><a href="<?php echo base_url($beranda) ?>"><i class="fa fa-user"></i> <?= $nama_akun ?></a></li>
                                    <li  class="nav-icon"><a href="<?php echo base_url($logout) ?>"><i class="fa fa-sign-out-alt"></i></a></li>
                             <?php } ?>
                            
                        </ul>

                    </div>
                </div>
            </div>
        </nav>
        <!-- End Header -->
                            <
