
        <!-- Page title -->
        <section id="page-title" class="text-light" data-bg-parallax="https://images.pexels.com/photos/296649/pexels-photo-296649.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
        <!-- <section id="page-title" class="page-title-center text-light" style="background-image:url(https://images.pexels.com/photos/296649/pexels-photo-296649.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);"> -->
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="page-title">
                    <h1>GALERI</h1>
                </div>
                <!-- <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">Portfolio</a>
                        </li>
                        <li class="active"><a href="#">Masonry</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </section>
        <!-- end: Page title -->
        <!-- Page Menu -->
        <!-- <div class="page-menu menu-outline style-1">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="portfolio-masonry-3.html">No space</a></li>
                        <li><a href="portfolio-masonry-3-space.html">With space</a></li>
                        <li class="active"><a href="portfolio-masonry-3-title.html">Title</a></li>
                        <li><a href="portfolio-masonry-3-title-desc.html">Title & Description</a></li>
                        <li><a href="portfolio-masonry-3-shadow.html">Shadow</a></li>
                        <li><a href="portfolio-masonry-3-shadow-outline.html">Outline</a></li>
                        <li><a href="portfolio-masonry-3-grey-bg.html">Grey background</a></li>
                    </ul>
                </nav>
                <div id="pageMenu-trigger">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div> -->
        <!-- end: Page Menu -->
        <!-- Content -->
        <section id="page-content">
            <div class="container">
                <!-- Portfolio Filter -->
                <!-- <nav class="grid-filter gf-outline" data-layout="#portfolio">
                    <ul>
                        <li class="active"><a href="#" data-category="*">Show All</a></li>
                        <li><a href="#" data-category=".ct-branding">Branding</a></li>
                        <li><a href="#" data-category=".ct-photography">Photography</a></li>
                        <li><a href="#" data-category=".ct-marketing">Marketing</a></li>
                        <li><a href="#" data-category=".ct-media">Media</a></li>
                        <li><a href="#" data-category=".ct-webdesign">Web design</a></li>
                    </ul>
                    <div class="grid-active-title">Show All</div>
                </nav> -->
                <!-- end: Portfolio Filter -->
                <!-- Portfolio -->
                <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="20">
                    <!-- portfolio item -->
                    <?php
                      $folder = Folder::model()->findAll();
                      foreach ($folder as $fol) {
                    ?>
                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <?php
                                        $galeri = Galery::model()->findAllByAttributes(['folder'=>$fol->id_folder],['limit'=>3]);
                                        if(!empty($galeri)) {
                                        foreach ($galeri as $gal) {
                                    ?>
                                    <a href="<?= Yii::app()->createAbsoluteUrl('galery/view',['id'=>$fol->id_folder])?>"><img src="<?php echo Yii::app()->request->baseUrl.'/images/thumbnail/'.$gal->file; ?>" alt=""></a>
                                    <?php }
                                    } else { ?>
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/22.jpg" alt=""></a>
                                    <?php } ?>
                                    <!-- <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/64.jpg" alt=""></a>
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/portfolio/70.jpg" alt=""></a> -->
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <a href="<?= Yii::app()->createAbsoluteUrl('galery/view',['id'=>$fol->id_folder])?>">
                                    <h3><?= $fol->nama_folder; ?></h3>
                                    <?php if($fol->ormas_id != 0) echo '<span>'.$fol->ormas_id.'</span>'; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- end: portfolio item -->
                </div>
                <!-- end: Portfolio -->
            </div>
        </section>
        <!-- end: Content -->