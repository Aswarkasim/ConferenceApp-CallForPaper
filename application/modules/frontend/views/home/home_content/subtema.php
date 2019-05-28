
<!-- Quotes -->
<section id="quotes" class="parallax pt100 pb90" data-overlay-dark="8">
    <div class="background-image">
        <img src="<?php echo base_url('assets/frontend/') ?>img/backgrounds/bg-4.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="quote-slider navigation-thin container white text-center" data-autoplay="true" data-speed="10">

                <?php foreach($subtema as $row){ ?>
                    <div>
                        <h2>
                            <i class="vossen-quote color"></i>
                               <?= $row->subtema ?>
                            <i class="vossen-quote color"></i>
                        </h2>
                    </div>

                <?php } ?>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Quotes -->

