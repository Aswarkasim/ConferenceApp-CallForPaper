
<!-- Team -->
<section id="team" class="hero-fullscreen2 pt100 pb90">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h2>Invited <br><strong>Speaker</strong></h2>
                <!-- <p class="lead">Interdisciplinary teams with <span class="color">big ideas</span>. Design and prototyping from day one.</p> -->
            </div>



            <div class="team-slider owl-carousel dark-pagination col-md-12">


            <?php foreach($speaker as $row){ ?>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/uploads/images/'.$row->foto) ?>" class="img-responsive" alt="#" />
                        </div>
                        
                    </div>
                    <h6><?php 
                            if($row->jenis_speaker=="2"){
                                echo "Keynote Speaker";
                            }else{
                                echo "Speaker";
                            } ?></h6>
                    <h5><?= $row->nama_speaker ?></h5>
                    <p><?= $row->deskripsi ?></p>
                </div>

            <?php } ?>

            
            </div>

        </div>
    </div>
</section>
<!-- End Team -->
