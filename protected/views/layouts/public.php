<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
    <!-- Full Calendar files -->
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/plugins/fullcalendar/fullcalendar.min.css' rel='stylesheet' /> 
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/css/plugins.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html">
                            <span class="logo-default">SIMKIMAHAL</span>
                            <span class="logo-dark">SIMKIMAHAL</span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras" style="display:none">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Profil</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="widgets.html">Tentang Pusbinpres</a></li>
                                            <li><a href="widgets.html">Struktur Organisasi</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="dropdown"><a href="#">Ormawa</a>
                                        <ul class="dropdown-menu">
                                            <?php
                                                $ormawa = Ormawa::model()->findAll();
                                                foreach ($ormawa as $o) {
                                            ?>
                                            <li class="dropdown-submenu"><a href="#"><?= $o->nama_ormawa; ?></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Profil</a></li>
                                                    <li><a href="slider-inspiro-slider.html">Struktur Organisasi</a></li>
                                                    <li><a href="slider-static-media-image.html">Visi dan Misi</a></li>
                                                    <li><a href="slider-static-media-parallax.html">Kalender Proker</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html">Luaran Kinerja</a></li>
                                                </ul>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="index.html">Galeri</a></li>
                                    <li class="dropdown"><a href="#">Regulasi Bid. Kemahasiswaan</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="widgets.html">Tentang Pusbinpres</a></li>
                                            <li><a href="widgets.html">Struktur Organisasi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.html">SIMKIMAHAL</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
            <!-- Slide 1 -->
            <div class="slide kenburns" data-bg-image="https://images.pexels.com/photos/4778611/pexels-photo-4778611.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <h1 data-caption-animate="zoom-out">WELCOME TO THE WORLD OF POLO</h1>
                        <p>Say hello to the smartest and most flexible bootstrap template. Polo is an powerful template that can build any type of websites, and quite possibly the only one you will ever need.</p>
                        <div><a href="#welcome" class="btn btn-primary scroll-to">Explore more</a></div>
                        </span>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->
            <!-- Slide 2 -->
            <div class="slide" data-bg-video="https://cdn.videvo.net/videvo_files/video/free/2015-02/large_watermarked/New_Chapter_001_Videvo_preview.mp4">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-start text-light">
                        <!-- Captions -->
                        <h1>220+ Laytout Demos</h1>
                        <p class="text-small">POLO is packed with 220+ pre-made layouts that allow you to quickly jumpstart your project. Completely customizable for creating your own designs.</p>
                        <div><a href="#welcome" class="btn btn-primary scroll-to">Explore more</a></div>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <!-- Calendar -->
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h4>Basic veiws</h4>
                    </div>
                    <!-- <div class="col-lg-6"><button type="button" class="btn btn-light btn-shadow float-right"><i class="icon-calendar"></i>
                            Add Event</button></div> -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="calendar"></div>
                    </div>
                </div>
                <!-- end: Calendar -->
            </div>
        </section>
        <!-- WELCOME -->
        <section id="welcome" class="p-b-0" style="display:none">
            <div class="container">
                <div class="heading-text heading-section text-center m-b-40" data-animate="animate__fadeInUp">
                    <h2>WELCOME TO THE WORLD OF POLO</h2>
                    <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                </div>
                <div class="row" data-animate="animate__fadeInUp">
                    <div class="col-lg-12">
                        <img class="img-fluid" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/other/responsive-1.jpg" alt="Welcome to POLO">
                    </div>
                </div>
            </div>
        </section>
        <!-- end: WELCOME -->
        <!-- WHAT WE DO -->
        <section class="background-grey" style="display:none">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>WHAT WE DO</h2>
                    <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="0">
                            <h4>Modern Design</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="200">
                            <h4>Loaded with Features</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="400">
                            <h4>Completely Customizable</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="600">
                            <h4>100% Responsive Layout</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="800">
                            <h4>Clean Modern Code</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="animate__fadeInUp" data-animate-delay="1000">
                            <h4>Free Updates & Support</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WHAT WE DO -->
        <!-- PORTFOLIO -->
        <section class="p-b-0" style="display:none">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>Recent Work</h2>
                    <span class="lead">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                        consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</span>
                </div>
            </div>
            <div class="portfolio">
                <!-- Portfolio Items -->
                <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">
                    <!-- portfolio item -->
                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/64.jpg" alt=""></a>
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/70.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/60.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="image" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/83l.jpg"><i class="icon-maximize"></i></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/61.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Let's Go Outside</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/65.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/81l.jpg" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/82l.jpg" class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/66.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Last Iceland Sunshine</h3>
                                    <span>Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/67.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/68.jpg" alt=""></a>
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/71.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/69.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Luxury Wine</h3>
                                    <span>Graphics / Branding</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                </div>
                <!-- end: Portfolio Items -->
            </div>
        </section>
        <!-- end: PORTFOLIO -->
        <!-- SERVICES -->
        <section style="display:none">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>SERVICES</h2>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="0">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-plug"></i></a>
                            </div>
                            <h3>Powerful template</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="200">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>Flexible Layouts</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="400">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-cloud"></i></a>
                            </div>
                            <h3>Retina Ready</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="600">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="far fa-lightbulb"></i></a>
                            </div>
                            <h3>Fast processing</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="800">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-trophy"></i></a>
                            </div>
                            <h3>Unlimited Colors</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="1000">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-thumbs-up"></i></a>
                            </div>
                            <h3>Premium Sliders</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="1200">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-rocket"></i></a>
                            </div>
                            <h3>Modern Design</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="1400">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-flask"></i></a>
                            </div>
                            <h3>Clean Modern Code</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="animate__fadeInUp" data-animate-delay="1600">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-umbrella"></i></a>
                            </div>
                            <h3>Free Updates & Support</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: SERVICES -->
        <!-- COUNTERS -->
        <section class="text-light p-t-150 p-b-150 " data-bg-parallax="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/parallax/12.jpg" style="display:none">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-code"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>LINES OF CODE</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                            <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>CUPS OF COFFEE</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>FINISHED PROJECTS</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
                            <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>SATISFIED CLIENTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: COUNTERS -->
        <!-- BLOG -->
        <section class="content background-grey" style="display:none">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>OUR BLOG</h2>
                    <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,
                        orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id
                        molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare
                        orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>
                </div>
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/blog/12.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/blog/17.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/blog/18.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                </div>
            </div>
        </section>
        <!-- end: BLOG -->
        <!-- CLIENTS -->
        <section class="p-t-60" style="display:none">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>CLIENTS</h2>
                    <span class="lead">Our awesome clients we've had the pleasure to work with! </span>
                </div>
                <div class="carousel client-logos" data-items="6" data-items-sm="4" data-items-xs="3" data-items-xxs="2" data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay="3000" data-loop="true">
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/1.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/2.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/3.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/4.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/5.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/6.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/7.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/8.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/clients/9.png"> </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: CLIENTS -->
        <!-- TEAM -->
        <section class="background-grey" style="display:none">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>MEET OUR TEAM</h2>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
                <div class="row team-members">
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/team/6.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Alea Smith</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/team/7.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Ariol Doe</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/team/8.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Emma Ross</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/team/9.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Victor Loda</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: TEAM -->
        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Polo HTML5 Template</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br> All rights reserved. Copyright © 2021. INSPIRO.</p>
                                <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted" target="_blank">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Discover</div>
                                        <ul class="list">
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Updates</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Customers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Footers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Pages</div>
                                        <ul class="list">
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="#">Help Desk</a></li>
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2021 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="https://www.inspiro-media.com" target="_blank" rel="noopener"> INSPIRO</a> </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/js/jquery.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/js/plugins.js"></script>
    <!--Template functions-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/js/functions.js"></script>
    <script src='<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/plugins/moment/moment.min.js'></script>
    <script src='<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/plugins/fullcalendar/fullcalendar.min.js'></script>
    <script>
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '2021-01-12',
            navLinks: false, // can click day/week names to navigate views
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events: [{
                title: 'All Day Event',
                start: '2021-01-01',
            }, {
                title: 'Long Event',
                start: '2021-01-07',
                end: '2021-01-10',
                className: 'fc-event-primary'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: '2021-01-09T16:00:00'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: '2021-01-16T16:00:00'
            }, {
                title: 'Conference',
                start: '2021-01-11',
                end: '2021-01-13',
                className: 'fc-event-warning',
                description: "Lorem ipsum dolor sit incid idunt ut",
            }, {
                title: 'Meeting',
                start: '2021-01-12T10:30:00',
                end: '2021-01-12T12:30:00'
            }, {
                title: 'Lunch',
                start: '2021-01-12T12:00:00'
            }, {
                title: 'Meeting',
                start: '2021-01-12T14:30:00'
            }, {
                title: 'Happy Hour',
                start: '2021-01-12T17:30:00'
            }, {
                title: 'Dinner',
                start: '2021-01-12T20:00:00'
            }, {
                title: 'Birthday Party',
                start: '2021-01-13T07:00:00',
                className: 'fc-event-danger'
            }, {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2021-01-28',
                className: 'fc-event-info'
            }]
        });
    </script>
</body>

</html>