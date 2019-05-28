 <!-- Clients Section -->
 <section class="pt70 pb70">
    <div class="container">
        <div class="row">

            <div class="clients-slider pb-4" data-autoplay="false" data-speed="4000">
                <?php  foreach($relat as $row) { ?>
                <div><img src="<?= base_url('assets/uploads/images/'.$row->logo) ?>" class="img-responsive pr30" alt="#"></div>

                <?php } ?>
            </div>

        </div>
    </div>
</section>
<!-- End Clients -->