<!-- Hero -->
<section id="hero" class="hero-fullscreen parallax" data-overlay-dark="2">
    <div class="background-image">
        <img src="<?php echo base_url('assets/uploads/images/'.$seminar->banner) ?>" alt="#">
    </div>

    <div class="container">
        <div class="row">

            <div class="hero-content-slider mt20" data-autoplay="true" data-speed="4000">

                <div>
                    <h1>We Are Wunderkind<br><strong>Something You Love</strong></h1>
                    <p class="lead">We are digital agency that loves crafting beautiful websites with great functionality.</p>
                    <a href="#about" class="btn btn-lg btn-primary btn-scroll">We're Creative</a>
                </div>

                <div>
                    <h1>We Are Wunderkind<br><strong>We Make Brands Shine</strong></h1>
                    <p class="lead">We do innovation, creativity, effectiveness and all that with love.</p>
                    <a href="#about" class="btn btn-lg btn-primary btn-scroll">What we do</a>
                </div>

                <div>
                    <h1>We Are Wunderkind<br><strong>Best Digital Agency</strong></h1>
                    <p class="lead">Wunderkind was honored as best agency at EdAwards in New York.</p>
                    <a href="#about" class="btn btn-lg btn-primary btn-scroll">Made with <i class="ion-heart"></i></a>
                </div>

                <div>
                    <h1>We Are Wunderkind<br><strong>Nice to Meet You</strong></h1>
                    <p class="lead">Let's meet up and see if there's chemistry!</p>
                    <a href="#team" class="btn btn-lg btn-primary btn-scroll">Meet the Team</a>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Hero -->


<!-- CountDown -->
<section id="elements-countdown" class="pt100 pb100 bg-grey">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h1><strong>Countdown</strong></h1>
                <p class="lead">A simple JavaScript for producing an accurate count down to a specific<br>date or time. Control it by editing a single data attribute</p>
            </div>

            <div class="col-sm-12 text-center">

                <!-- <div data-date="December 29, 2022 12:00:00" id="countdown-timer"> -->
                    <!-- <div><h2 id="months">08 ,</h2><h6>Months</h6></div>
                    <div><h2 id="days">26</h2><h6>Days</h6></div>
                    <div><h2 id="hours">01</h2><h6>Hours</h6></div>
                    <div><h2 id="minutes">55</h2><h6>Minutes</h6></div>
                    <div><h2 id="seconds">07</h2><h6>Seconds</h6></div> -->
                <!-- </div> -->
                <!-- $(this).html(event.strftime('<b><h1>%m month %w weeks %d days %H:%M:%S </h1><b>')); -->
                <div id="getting-started"></div>
                <script type="text/javascript">
                    $('#getting-started').countdown('<?php echo $seminar->tanggal ?>', function(event) {
                        $(this).html(event.strftime('<div data-date="" id="countdown-timer"><div><h2 id="months">%m ,</h2><h6>Months</h6></div><div><h2 id="days">%w</h2><h6>Days</h6></div><div><h2 id="hours">%H</h2><h6>Hours</h6></div><div><h2 id="minutes">%M</h2><h6>Minutes</h6></div><div><h2 id="seconds">%S</h2><h6>Seconds</h6></div></div>'));
                    });
                </script>
                <a href="#" target="_blank" class="btn btn-lg btn-primary btn-circle btn-appear mt40"><span>Daftar Sekarang <i class="ion-android-arrow-forward"></i></span></a>
            </div>

        </div>
    </div>
</section>
<!-- /CountDown -->


<!-- About Us -->
<!-- <section id="about" class="pt100 pb90">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2>We Are Wunderkind<br><strong>Something You Love</strong></h2>
                <p class="lead">We create experiences that <span class="color">transform brands</span>, grow businesses<br>and make people’s lives better. Building brands and driving sales with powerful ideas.</p>
            </div>

            <div class="col-sm-6 feature-left">
                <i class="icon-telescope size-3x color"></i>
                <i class="icon-telescope back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>We're Creative</strong><br>Crafting With Love</h4>
                    <p>Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.</p>
                </div>
            </div>
            <div class="col-sm-6 feature-left">
                <i class="icon-circle-compass size-3x color"></i>
                <i class="icon-circle-compass back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>We're Cool Nerds</strong><br>Coding With Fun</h4>
                    <p>Duis vel est nec sapien suscipit gravida. Integer vitae tortor dui. Donec libero quam, euismod sit amet enim ac, varius dictum.</p>
                </div>
            </div>
            <div class="col-sm-6 feature-left">
                <i class="icon-genius size-3x color"></i>
                <i class="icon-genius back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>We're Passionate</strong><br>Available When You Need Us</h4>
                    <p>Maecenas sit amet eros luctus dui volutpat sollicitudin id vitae est. Vivamus laoreet adipiscing metus vel fermentum. Sed velit.</p>
                </div>
            </div>
            <div class="col-sm-6 feature-left">
                <i class="icon-layers size-3x color"></i>
                <i class="icon-layers back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>We're Professional</strong><br>New York Based</h4>
                    <p>Integer ornare, tellus eget lobortis cursus, metus enim ultricies eros, vitae porttitor elit sapien quis justo. Duis vitae.</p>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- End About Us -->

<!-- Who We Are -->
<!-- <section id="who-we-are" class="parallax pt40 pb40" data-overlay-dark="8">
    <div class="background-image">
        <img src="<?php echo base_url('assets/frontend/') ?>img/backgrounds/bg-2.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row vertical-align">

            <div class="col-md-6 pr30 mt40 mb40">
                <h2><strong>Our Skills</strong><br><span class="color">Crafting With Love</span></h2>
                <p>Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet. Praesent condimentum nulla at mauris ornare. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare.</p>
                <p>Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare. Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit.</p>
            </div>

            <div class="col-md-6 pt40 pb30">
                <div class="progress-bars standard transparent-bars" data-animate-on-scroll="on">
                    <h5 class="bold">Branding</h5>
                    <div class="progress" data-percent="85%">
                        <div class="progress-bar">
                            <span class="progress-bar-tooltip">85%</span>
                        </div>
                    </div>
                    <h5 class="bold">User Experience</h5>
                    <div class="progress" data-percent="100%">
                        <div class="progress-bar progress-bar-primary">
                            <span class="progress-bar-tooltip">100%</span>
                        </div>
                    </div>
                    <h5 class="bold">Web Design</h5>
                    <div class="progress" data-percent="70%">
                        <div class="progress-bar progress-bar-primary">
                            <span class="progress-bar-tooltip">70%</span>
                        </div>
                    </div>
                    <h5 class="bold">Fun</h5>
                    <div class="progress" data-percent="82%">
                        <div class="progress-bar progress-bar-primary">
                            <span class="progress-bar-tooltip">82%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- End Who We Are -->

<!-- Team -->
<section id="team" class="hero-fullscreen2 pt100 pb90">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h2>Our Creative <strong>Collective</strong></h2>
                <p class="lead">Interdisciplinary teams with <span class="color">big ideas</span>. Design and prototyping from day one.</p>
            </div>

            <div class="team-slider owl-carousel dark-pagination col-md-12">
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/frontend/') ?>img/team/1.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Founder / CEO</h6>
                    <h5>John Westbrook</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/frontend/') ?>img/team/2.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Developer</h6>
                    <h5>Kelly Swanson</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/frontend/') ?>img/team/3.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Designer</h6>
                    <h5>Chris Holland</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/frontend/') ?>img/team/4.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Art Director</h6>
                    <h5>Dave Harper</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/frontend/') ?>img/team/5.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Founder</h6>
                    <h5>Tracey Mathis</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/frontend/') ?>img/team/6.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Developer</h6>
                    <h5>William Beck</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
                <div class="team">
                    <div class="team-container">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/frontend/') ?>img/team/7.jpg" class="img-responsive" alt="#" />
                        </div>
                        <div class="team-caption">
                            <div>
                                <div>
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6>Designer</h6>
                    <h5>Steven Griffin</h5>
                    <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Team -->

<!-- Video Section -->
<section class="parallax pt40 pb40" data-overlay-light="9">
    <div class="background-image">
        <img src="<?php echo base_url('assets/frontend/') ?>img/backgrounds/bg-3.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row vertical-align">

            <div class="col-md-6 pr30 mt40 mb40">
                <h2><strong>We're Creative</strong><br>Crafting With Love</h2>
                <p>Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet. Praesent condimentum nulla at mauris ornare. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare.</p>
                <p>Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare. Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit.</p>
            </div>

            <div class="col-md-6 mt50 mb50">
                <div class="video-container">
                    <img src="<?php echo base_url('assets/frontend/') ?>img/video/thumbnail-youtube.jpg" />
                    <iframe data-video-embed="https://www.youtube.com/embed/B08iLAtS3AQ"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Video Section -->

<!-- Fun Facts -->
<section id="fun-facts" data-animate="true">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-3 counter">
                <h1 class="bold" data-count="4246"></h1>
                <h5>Happy Customers</h5>
            </div>
            <div class="col-sm-3 counter">
                <h1 class="bold" data-count="618"></h1>
                <h5>Finished Projects</h5>
            </div>
            <div class="col-sm-3 counter">
                <h1 class="bold" data-count="240"></h1>
                <h5>Tickets Solved</h5>
            </div>
            <div class="col-sm-3 counter">
                <h1 class="bold" data-count="96"></h1>
                <h5>Winning Awards</h5>
            </div>

        </div>
    </div>
</section>
<!-- End Fun Facts -->

<!-- Quotes -->
<section id="quotes" class="parallax pt100 pb90" data-overlay-dark="8">
    <div class="background-image">
        <img src="<?php echo base_url('assets/frontend/') ?>img/backgrounds/bg-4.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="quote-slider navigation-thin container white text-center" data-autoplay="true" data-speed="2000">
                    <div>
                        <h2>
                            <i class="vossen-quote color"></i>
                                A Perfect Design is <strong>Passion, Dedication,</strong><br>and a lots of Coffee
                            <i class="vossen-quote color"></i>
                        </h2>
                        <p class="label label-primary">Wunderkind Team</p>
                    </div>
                    <div>
                        <h2>
                            <i class="vossen-quote color"></i>
                                The Difference between ordinary and extraordinary<br>is <strong>just that little extra</strong>
                            <i class="vossen-quote color"></i>
                        </h2>
                        <p class="label label-primary">Albert Einstein</p>
                    </div>
                    <div>
                        <h2>
                            <i class="vossen-quote color"></i>
                                <strong>The Desire to Create</strong> is One of the Deepest Yearnings of the Human Soul
                            <i class="vossen-quote color"></i>
                        </h2>
                        <p class="label label-primary">Dieter F. Uchtdorf</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Quotes -->

<!-- Services -->
<section id="services" class="pt100 pb90">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2 class="">What We Do<br><strong>Our Capabilities</strong></h2>
                <p class="lead">A highly skilled professional service with a <span class="color">creative touch</span>.</p>
            </div>

            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-telescope size-3x color"></i>
                <i class="icon-telescope back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Graphic Design</strong><br>Crafting With Love</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-circle-compass size-3x color"></i>
                <i class="icon-circle-compass back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Modern Coding</strong><br>Crafting With Love</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-genius size-3x color"></i>
                <i class="icon-genius back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Web Optimization</strong><br>Lightning Fast</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-layers size-3x color"></i>
                <i class="icon-layers back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Brand Indentity</strong><br>Making a New You</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-gears size-3x color"></i>
                <i class="icon-gears back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>24/7 Free Support</strong><br>Free Support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-left">
                <i class="icon-globe size-3x color"></i>
                <i class="icon-globe back-icon"></i>
                <div class="feature-left-content">
                    <h4><strong>Having Fun</strong><br>Office Surfing</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services -->

<!-- Callout -->
<section class="parallax light bg-img-9" data-overlay-light="9">
    <div class="background-image">
        <img src="<?php echo base_url('assets/frontend/') ?>img/backgrounds/bg-5.jpg" alt="#">
    </div>
    <div class="container pt100 pb100">
        <div class="row pt20">

            <div class="col-md-12 text-center">
                <h2>Ready to <span class="bold">Kickstart</span> Your Project</h2>
                <p class="lead">Use Wunderkind to build <span class="color">amazing</span> new website</p>
                <a href="http://themeforest.net/user/vossendesign/portfolio?ref=VossenDesign" target="_blank" class="btn btn-md btn-primary btn-appear mt30"><span>Purchase Now <i class="ion-checkmark"></i></span></a>
            </div>

        </div>
    </div>
</section>
<!-- End Callout -->

<!-- Portfolio -->

<!-- End Portfolio -->

<!-- Testimonials -->

<!-- End Testimonials -->

<!-- Clients Section -->
<section class="pt70 pb70">
    <div class="container">
        <div class="row">

            <div class="clients-slider" data-autoplay="false" data-speed="4000">
                <div><img src="<?php echo base_url('assets/frontend/') ?>img/clients/1.png" class=" " alt="#"></div>
                <div><img src="<?php echo base_url('assets/frontend/') ?>img/clients/2.png" class="img-responsive" alt="#"></div>
                <div><img src="<?php echo base_url('assets/frontend/') ?>img/clients/3.png" class="img-responsive" alt="#"></div>
                <div><img src="<?php echo base_url('assets/frontend/') ?>img/clients/4.png" class="img-responsive" alt="#"></div>
                <div><img src="<?php echo base_url('assets/frontend/') ?>img/clients/5.png" class="img-responsive" alt="#"></div>
                <div><img src="<?php echo base_url('assets/frontend/') ?>img/clients/6.png" class="img-responsive" alt="#"></div>
                <div><img src="<?php echo base_url('assets/frontend/') ?>img/clients/7.png" class="img-responsive" alt="#"></div>
                <div><img src="<?php echo base_url('assets/frontend/') ?>img/clients/8.png" class="img-responsive" alt="#"></div>
                <div><img src="<?php echo base_url('assets/frontend/') ?>img/clients/9.png" class="img-responsive" alt="#"></div>
            </div>

        </div>
    </div>
</section>
<!-- End Clients -->

<!-- Get Connected -->
<section class="parallax pt100 pb100" data-overlay-dark="9">
    <div class="background-image">
        <img src="<?php echo base_url('assets/frontend/') ?>img/backgrounds/bg-7.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-sm-8 mr-auto text-center">
                <h2>Get Connected<br><strong>Follow Us</strong></h2>
                <p class="lead">Get connected with us on social networks!</p>
            </div>

            <div class="col-md-12">
                <ul class="connected-icons social-icons">

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-facebook"></i>
                            <h5>Facebook</h5>
                            <p>Be Our Friend</p>
                        </a>
                    </li>

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-youtube"></i>
                            <h5>Youtube</h5>
                            <p>Watch Our Videos</p>
                        </a>
                    </li>

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-twitter"></i>
                            <h5>Twitter</h5>
                            <p>Follow Us</p>
                        </a>
                    </li>

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-instagram"></i>
                            <h5>Instagram</h5>
                            <p>See Our Pictures</p>
                        </a>
                    </li>

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-googleplus"></i>
                            <h5>Google+</h5>
                            <p>Join Our Circle</p>
                        </a>
                    </li>

                    <li class="connected-icon">
                        <a target="_blank" href="#">
                            <i class="ion-social-skype"></i>
                            <h5>Skype</h5>
                            <p>Get in Touch</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Get Connected -->

<!-- Start Price List -->
<section class="pt100 pb100 pricing-1">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2>Pick Some of<br><strong>Our Latest Offers</strong></h2>
                <p class="lead">Try for <span class="color">free</span> - Start paying when you're ready.</p>
            </div>

            <div class="col-lg-10 col-md-12 mr-auto">

                <div class="col-md-4 price-table">
                    <div class="price-box">
                        <h5><strong>Starter</strong></h5>
                        <h1 class="bold price-price">
                            <span>Free</span>
                        </h1>
                        <div class="price-features">
                            <p class="lead">25,000 Visits</p>
                            <p>Limited Email Support</p>
                            <p><i class="ion-close-round"></i></p>
                            <p><i class="ion-close-round"></i></p>
                            <p><i class="ion-close-round"></i></p>
                        </div>
                        <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                    </div>
                </div>

                <div class="col-md-4 price-table-featured">
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
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Price List -->

<!-- Contact Info -->
<section class="parallax pt110 pb70" data-overlay-dark="8">
    <div class="background-image">
        <img src="<?php echo base_url('assets/frontend/') ?>img/backgrounds/bg-8.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 details white text-center">
                <div class="phone-number mb10">
                    <h1 class="bold">48-1516-2342</h1>
                </div>
                <div class="col-lg-12">
                    <h3>hello@<span class="color">domain.com</span></h3>
                    <h4>124 Central West, Manhattan, <span class="color">New York</span></h4>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact Info -->

<!-- Contact Form -->
<section id="contact" class="pt120 pb100">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2>Get In Touch<br><strong>Contact Us</strong></h2>
                <p class="lead">We would like to <span class="color">hear from you</span></p>
            </div>

            <div class="col-md-8 col-md-offset-2 contact box-style">
                <div id="message-info"></div>
                <!-- Forms can be functional only on server. Upload to your server when testing. -->
                <form id="contactform" method="post">

                    <div class="col-sm-12">
                        <input name="name" id="name" placeholder="Your Name *"/>
                    </div>
                    <div class="col-sm-6">
                        <input name="email" id="email" placeholder="Your Email *"/>
                    </div>
                    <div class="col-sm-6">
                        <input name="phone" id="phone" placeholder="Your Phone"/>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="message" rows="9" id="message" placeholder="Your Message *"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="submit btn btn-lg btn-primary" id="submit" value="Send Message"/>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
<!-- End Contact Form -->

<!-- Map -->
<section class="vossen-map">
    <!-- Paste your map iframe here -->
    <iframe height="550" src="https://maps.google.com/maps?q=Renaissance%20New%20York%20Hotel%2057%2C%20New%20York%2C%20USA&t=m&z=17&output=embed&iwloc=near" border="0" marginwidth="0" marginheight="0"></iframe>
</section>
<!-- End Map -->
