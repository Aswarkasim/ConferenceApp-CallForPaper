<?php 
    $this->load->model('rev/Beranda_model');
    
    $abstrak    = $this->Beranda_model->listingAbstrak($id_reviewer,'0');
    $paper    = $this->Beranda_model->listingPaper($id_reviewer,'0');    
?>
<li><a href="<?php echo base_url(); ?>">Home</a></li>
<li><a href="<?= base_url('rev_beranda') ?>">Beranda</a></li>
<li>
    <span class="label label-primary"><?= count($abstrak) ?></span>
    <a href="<?= base_url('rev_beranda') ?>">Abstrak</a>
</li>
<li>
    <span class="label label-primary"><?= count($paper) ?></span>
    <a href="<?= base_url('rev_paper_list') ?>">Paper</a>
</li>
<li><a href="<?= base_url('abstrakDone') ?>">Abstrak Done</a></li>
<li><a href="<?= base_url('paperDone') ?>">Paper Done</a></li>
