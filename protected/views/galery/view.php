
        <!-- Page title -->
        
        <section id="page-title" class="text-light" data-bg-parallax="https://images.pexels.com/photos/296649/pexels-photo-296649.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
        <!-- <section id="page-title" class="page-title-center text-light" style="background-image:url(https://images.pexels.com/photos/296649/pexels-photo-296649.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);"> -->
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="page-title">
                    <span>GALERI</span>
                    <h1><?php $folder = Folder::model()->findByAttributes(['id_folder'=>$id]); echo $folder->nama_folder; ?></h1>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- Content -->
        <section id="page-content">
            <div class="container">
                <!-- Portfolio -->
                <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="20">
                    <!-- portfolio item -->
                    <?php
                      $galeri = Galery::model()->findAllByAttributes(['folder'=>$id]);
                      $i = 0;
                      foreach ($galeri as $gal) {
                        $i++;
                        $folder = Folder::model()->findByAttributes(['id_folder'=>$id]);
                    ?>
                    <?php if($i == 4) { ?>
                    <div class="portfolio-item large-width  img-zoom ct-photography ct-media ct-branding ct-Media">
                    <?php } else { ?>  
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                      <?php } ?>
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl.'/images/thumbnail/'.$gal->file; ?>" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="" data-lightbox="image" href="<?php echo Yii::app()->request->baseUrl.'/upload/'.$folder->nama_folder.'/'.$gal->file; ?>"><i class="icon-maximize"></i></a>
                                <!-- <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item large-width  img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/61.jpg" alt=""></a>
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
                </div>
                <!-- end: Portfolio -->
            </div>
        </section>
        <!-- end: Content -->