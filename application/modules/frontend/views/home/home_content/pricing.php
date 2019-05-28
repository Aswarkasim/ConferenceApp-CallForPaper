
<!-- Start Price List -->
<section class="pt100 pb100 pricing-1">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2>Pick Some of<br><strong>Our Latest Offers</strong></h2>
                <p class="lead">Try for <span class="color">free</span> - Start paying when you're ready.</p>
            </div>

            <div class="col-lg-10 col-md-12 mr-auto">


            <?php  foreach($pricing as $row){ ?>
                <div class="col-md-4 price-table">
                    <div class="price-box">
                        <!-- <h5><strong>Starter</strong></h5> -->
                        <h3 class="bold price-price">
                            <span><?= $row->nama_pricing ?></span>
                        </h3>
                        <div class="price-features">
                            <p class="lead">Rp. <?= $row->pricing ?></p>
                            <p>Limited Email Support</p>
                            <p><i class="ion-close-round"></i></p>
                            <p><i class="ion-close-round"></i></p>
                            <p><i class="ion-close-round"></i></p>
                        </div>
                        <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                    </div>
                </div>

            <?php } ?>

                <!-- <div class="col-md-4 price-table-featured">
                    <div class="price-box">
                        <h5><strong>Growth</strong></h5>
                        <h1 class="bold price-price">
                            <sup>$</sup>
                            <span>19</span>
                        </h1>
                        <div class="price-features">
                            <p class="lead">75,000 Visits</p>
                            <p>Email Support</p>
                            <p>24/7 Free Support</p>
                            <p>5GB Bandwidth</p>
                            <p>100GB Storage</p>
                            <p>Free Upgrades</p>
                        </div>
                        <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                    </div>
                </div>

                <div class="col-md-4 price-table">
                    <div class="price-box">
                        <h5><strong>Premium</strong></h5>
                        <h1 class="bold price-price">
                            <sup>$</sup>
                            <span>59</span>
                        </h1>
                        <div class="price-features">
                            <p class="lead">225,000 Visits</p>
                            <p>Phone Support</p>
                            <p>24/7 Free Support</p>
                            <p>900GB Bandwidth</p>
                            <p>1000TB Storage</p>
                        </div>
                        <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                    </div>
                </div> -->

            </div>

        </div>
    </div>
</section>
<!-- End Price List -->
