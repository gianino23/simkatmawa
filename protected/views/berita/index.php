
        
        <section id="page-title" data-bg-parallax="https://images.pexels.com/photos/4185957/pexels-photo-4185957.jpeg?cs=srgb&dl=pexels-alleksana-4185957.jpg&fm=jpg">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="page-title">
                    <h1>BERITA</h1>
                    <!-- <h1>Struktur Organisasi</h1> -->
                </div>
            </div>
        </section>
        
				
        <section id="page-content">
            <div class="container">
                <!-- post content -->
                <!-- Blog -->
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
									
								<?php
										$berita = Berita::model()->findAll(['order'=>'tgl_entry DESC']);
										foreach ($berita as $b) {
									?>
									<div class="post-item border">
											<div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/images/blog/12.jpg">
                                </a>
                                <span class="post-meta-category"><a href=""><?= $b->author; ?></a></span>
                            </div>
													<div class="post-item-description">
															<h2><a href="#"><?= $b->judul; ?></a></h2>
															<span class="post-meta-date"><i class="fa fa-calendar-o"></i><?= date('d F Y', strtotime($b->tgl_entry)); ?></span>
															<p><?= $b->isi; ?></p>
															<a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
													</div>
											</div>
									</div>
									<?php
										}
									?>
                </div>
                <!-- end: Blog -->
                <!-- Pagination -->
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- end: Pagination -->
            </div>
            <!-- end: post content -->
        </section>