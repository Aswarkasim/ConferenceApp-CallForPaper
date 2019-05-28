
<!-- Services -->
<section id="services" class="pt100 pb90">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2 class="">Subtema<br><strong><?= $seminar->tema_seminar ?></strong></h2>
            </div>

        <?php foreach($subtema as $row){ ?>
            <div class="col-md-4 col-sm-6 feature-left">
                <i class="<?= $row->icon ?> size-3x color"></i>
                <i class="<?= $row->icon ?> back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong><?= $row->subtema ?></strong></h4>
                    <p><?= $row->deskripsi ?></p>
                </div>
            </div>

        <?php } ?>
            

        </div>
    </div>
</section>
<!-- End Services -->

