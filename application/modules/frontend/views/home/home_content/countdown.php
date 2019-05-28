<!-- CountDown -->
<section id="elements-countdown" class="pt100 pb100 bg-grey">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h1><strong>Countdown</strong></h1>
                <p class="lead">Menuju Seminar Nasional<br><?= $seminar->tema_seminar ?></p>
            </div>

            <div class="col-sm-12 text-center">

                <!-- <div data-date="December 29, 2022 12:00:00" id="countdown-timer">
                    <div><h2 id="months">08 ,</h2><h6>Months</h6></div>
                    <div><h2 id="days">26</h2><h6>Days</h6></div>
                    <div><h2 id="hours">01</h2><h6>Hours</h6></div>
                    <div><h2 id="minutes">55</h2><h6>Minutes</h6></div>
                    <div><h2 id="seconds">07</h2><h6>Seconds</h6></div>
                </div> -->

                <!-- <div class="clock" style="margin:2em;"></div>

                    <script type="text/javascript">
                        var clock;
                        
                        $(document).ready(function() {
                            clock = $('.clock').FlipClock({
                                clockFace: 'TwelveHourClock'
                            });
                        });
                    </script> -->
                    
                <!-- $(this).html(event.strftime('<b><h1>%m month %w weeks %d days %H:%M:%S </h1><b>')); -->
                <div id="getting-started"></div>
                <script type="text/javascript">
                    $('#getting-started').countdown('<?php echo $seminar->tanggal ?>', function(event) {
                        $(this).html(event.strftime('<h1><b>%m month %w week %d day  %H:%M:%S <b></h1>'));
                    });
                </script>
                <a href="#" target="_blank" class="btn btn-lg btn-primary btn-circle btn-appear mt40"><span>Daftar Sekarang <i class="ion-android-arrow-forward"></i></span></a>
            </div>

        </div>
    </div>
</section>
<!-- /CountDown -->