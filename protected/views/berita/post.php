<?php
    $berita = Berita::model()->findByAttributes(['id_berita'=>$id]);
?>

<section id="page-title"
    data-bg-parallax="<?php echo Yii::app()->request->baseUrl; ?>/upload/berita/<?= $berita->cover; ?>">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="page-title">
            <h1>BERITA</h1>
        </div>
    </div>
</section>
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- content -->
            <div class="content col-lg-9">
                <!-- Blog -->
                <div id="blog" class="single-post">
                    <!-- Post single item-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-item-description">
                                <h2><?= $berita->judul; ?></h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="icon-calendar"></i><?= date('d F Y', strtotime($berita->tgl_entry)); ?></span>
                                    <!-- <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                            Comments</a></span> -->
                                    <span class="post-meta-category"><i class="icon-user"></i><?php if($berita->author == 0) echo "Admin"; else {$ormawa = Ormawa::model()->findByAttributes(['id_ormawa'=>$berita->author]);echo $ormawa->nama_ormawa;} ?></span>
                                    <!-- <div class="post-meta-share">
                                        <a class="btn btn-xs btn-slide btn-facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div> -->
                                </div>
                                <?= $berita->isi; ?>
                            </div>
                            <!-- <div class="post-tags">
                                <a href="#">Life</a>
                                <a href="#">Sport</a>
                                <a href="#">Tech</a>
                                <a href="#">Travel</a>
                            </div>
                            <div class="post-navigation">
                                <a href="blog-single-slider.html" class="post-prev">
                                    <div class="post-prev-title"><span>Previous Post</span>Post with a slider and
                                        lightbox</div>
                                </a>
                                <a href="blog-masonry-3.html" class="post-all">
                                    <i class="icon-grid"> </i>
                                </a>
                                <a href="blog-single-video.html" class="post-next">
                                    <div class="post-next-title"><span>Next Post</span>Post with YouTube Video</div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <!-- end: Post single item-->
                </div>
            </div>
            <!-- end: content -->
            <!-- Sidebar-->
            <div class="sidebar sticky-sidebar col-lg-3">
                <!--Tabs with Posts-->
                <div class="widget">
                    <h4 class="widget-title">Berita Terbaru</h4>
                    <div class="post-thumbnail-list">
                        <?php
                            $news = Berita::model()->findAll(['order'=>'tgl_entry DESC'],['limit'=>3]);
                            foreach ($news as $n) {
                        ?>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/upload/berita/<?= $n->cover; ?>">
                            <div class="post-thumbnail-content">
                                <a href="<?= $this->createAbsoluteUrl('berita/post',array('id'=>$n->id_berita)) ?>"><?= $n->judul ?></a>
                                <span class="post-date"><i class="icon-calendar"></i> <?= date('d M y', strtotime($n->tgl_entry)); ?></span>
                                <span class="post-category"><i class="fa fa-user"></i> <?php if($n->author == 0) echo "Admin"; else {$ormawa = Ormawa::model()->findByAttributes(['id_ormawa'=>$n->author]);echo $ormawa->nama_ormawa;} ?></span>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!--End: Tabs with Posts-->
            </div>
            <!-- end: Sidebar-->
        </div>
    </div>
</section>