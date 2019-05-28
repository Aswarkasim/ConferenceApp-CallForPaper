<?php
    $id_reviewer = $this->session->userdata('id_reviewer');
    $abstrak    = $this->Beranda_model->listingAbstrak($id_reviewer,'0');
    $abstrakDone    = $this->Beranda_model->listingAbstrak($id_reviewer,'1');
    $paper    = $this->Beranda_model->listingPaper($id_reviewer,'0');
    $paperDone    = $this->Beranda_model->listingPaper($id_reviewer,'1');

?>

<div class="row">
            
            <style>
                .box-aktif{
                    background-color: #4c51e0;
                }
                .icon-aktif{
                    color : #fff;
                }
                
            </style>
                <?php $u = $this->uri ?>
            <div class="col-md-3">
                <div class="price-box <?php if($u->segment(1)=="rev_beranda"){echo "box-aktif";} ?>">
                    <h5><strong>Abstrak</strong></h5>
                    <h3 class="<?php if($u->segment(1)=="rev_beranda"){echo "icon-aktif";} ?>"><?= count($abstrak) ?></h3>
                    <i class="fa fa-book <?php if($u->segment(1)=="rev_beranda"){echo "icon-aktif";} ?> size-4x"></i>
                    <a href="<?= base_url('rev_beranda') ?>" class="btn btn-primary mt20">More <i class="fa fa-arrow-circle-right"></i></a>
                    
                </div>
            </div>

            <div class="col-md-3">
                <div class="price-box <?php if($u->segment(1)=="rev_paperList"){echo "box-aktif";} ?>">
                    <h5><strong>Paper</strong></h5>
                    <h3 class="<?php if($u->segment(1)=="rev_paperList"){echo "icon-aktif";} ?>"><?= count($paper) ?></h3>
                    <i class="fa fa-cube <?php if($u->segment(1)=="rev_paperList"){echo "icon-aktif";} ?> size-4x"></i>
                    <a href="<?= base_url('rev_paperList') ?>" class="btn btn-primary mt20">More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="price-box <?php if($u->segment(1)=="abstrakDone"){echo "box-aktif";} ?>">
                    <h5><strong>Abstrak Done</strong></h5>
                    <h3 class="<?php if($u->segment(1)=="abstrakDone"){echo "icon-aktif";} ?>"><?= count($abstrakDone) ?></h3>
                    <i class="fa fa-file <?php if($u->segment(1)=="abstrakDone"){echo "icon-aktif";} ?> size-4x"></i>
                    <a href="<?= base_url('abstrakDone') ?>" class="btn btn-primary mt20">More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="price-box <?php if($u->segment(1)=="paperDone"){echo "box-aktif";} ?>">
                    <h5><strong>Paper Done</strong></h5>
                    <h3 class="<?php if($u->segment(1)=="paperDone"){echo "icon-aktif";} ?>"><?= count($paperDone) ?></h3>
                    <i class="fa fa-user <?php if($u->segment(1)=="paperDone"){echo "icon-aktif";} ?> size-4x"></i>
                    <a href="<?= base_url('paperDone') ?>" class="btn btn-primary mt20">More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-md-12 mt20">

            <?php 
                $percent=0; 
                // if($peserta){ 
                //     $percent = $percent+25;
                // }
                // if($payment){ 
                //     $percent = $percent+25;
                // }
                // if($paper){ 
                //     $percent = $percent+25;
                // }
                // if($abstrak){ 
                //     $percent = $percent+25;
                // }
            ?>
                <h5 class="bold">Progress</h5>
                <div class="progress" data-percent="<?= $percent ?>%">
                        <div class="progress-bar" style="width: <?= $percent ?>%;">
                            <span class="progress-bar-tooltip"><?= $percent ?>%</span>
                        </div>
                    </div>
                </div>
            

        </div>