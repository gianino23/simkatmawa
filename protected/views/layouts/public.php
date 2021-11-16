<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="ULM" />
    <meta name="description" content="simkimahal">
    <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ulm.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
    <!-- Full Calendar files -->
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/plugins/fullcalendar/fullcalendar.min.css' rel='stylesheet' /> 
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/css/plugins.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/polo/css/style.css" rel="stylesheet">
    <style>
        #header .header-inner #logo a, #header .header-inner #logo a span, #header #header-wrap #logo a, #header #header-wrap #logo a span { font-size: 30px; }
        /* .fc-event .fc-content span{ display: block; } */
    </style>
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
                                    <li><?= CHtml::link('Home',array('site/index')) ?></li>
                                    <li class="dropdown"><a href="#">Profil</a>
                                        <ul class="dropdown-menu">
                                            <li><?= CHtml::link('Tentang Pusbinpres',array('profil/tentang')) ?></li>
                                            <li><?= CHtml::link('Struktur Organisasi',array('profil/strukturorganisasi')) ?></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="dropdown"><a href="#">Ormawa</a>
                                        <ul class="dropdown-menu">
                                            <?php
                                                $ormawa = Ormawa::model()->findAll();
                                                foreach ($ormawa as $o) {
                                                    $co = Childormawa::model()->findByAttributes(['ormawa_id'=>$o->id_ormawa,'periode'=>$this->periode->id]);
                                                    if(!empty($co)){
                                            ?>
                                            <li class="dropdown-submenu"><a href="#"><?= $o->nama_ormawa; ?></a>
                                                <ul class="dropdown-menu">
                                                    <li><?= CHtml::link('Profil', $this->createAbsoluteUrl('ormawa/profil',array('id'=>$co->id))); ?></li>
                                                    <li><?= CHtml::link('Struktur Organisasi', $this->createAbsoluteUrl('ormawa/strukturorganisasi',array('id'=>$co->id))); ?></li>
                                                    <li><?= CHtml::link('Visi Misi', $this->createAbsoluteUrl('ormawa/visimisi',array('id'=>$co->id))); ?></li>
                                                    <li><?= CHtml::link('Kalender Proker', $this->createAbsoluteUrl('ormawa/kalender',array('id'=>$co->ormawa_id))); ?></li>
                                                    <li><?= CHtml::link('Luaran Kinerja', $this->createAbsoluteUrl('ormawa/luarankinerja',array('id'=>$co->ormawa_id))); ?></li>
                                                </ul>
                                            </li>
                                            <?php }} ?>
                                        </ul>
                                    </li>
                                    <li><?= CHtml::link('Galeri',array('galery/folder')) ?></li>
                                    <li class="dropdown"><a href="#">Regulasi Bid. Kemahasiswaan</a>
                                        <ul class="dropdown-menu">
                                            <?php
                                                $jenis = Jenis::model()->findAllByAttributes(['tabel'=>'regulasi']);
                                                foreach ($jenis as $j) {
                                                    $regulasimhs = Regulasimhs::model()->findByAttributes(['jenis_id'=>$j->id_jenis,'periode'=>$this->periode->id]);
                                                    if(!empty($regulasimhs)) {
                                            ?>
                                            <li><?= CHtml::link($j->nama, $this->createAbsoluteUrl('regulasimhs/post',array('id'=>$regulasimhs->id_regulasimhs))); ?></li>
                                            <?php }} ?>
                                            <!-- <li><a href="#">SOP Peminjaman Fasum</a></li>
                                            <li><a href="#">Pedoman Etika</a></li>
                                            <li><a href="#">Pedoman SKPI</a></li>
                                            <li><a href="#">SOP Pengajuan Insentif Prestasi</a></li> -->
                                        </ul>
                                    </li>
                                            <li><?= CHtml::link('SIMKIMAHAL',array('site/login')) ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <?= $content; ?>                                                
        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content" style="display:none">
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
                    <div class="copyright-text text-center">&copy; 2021 SIMKIMAHAL - Ulahan Buhan<a href="https://borneomediateknologi.co.id" target="_blank" rel="noopener"> BMT</a> </div>
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
            defaultDate: '<?= date('Y-m-d'); ?>',
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events: [
                <?php
                    $proker = Proker::model()->findAllByAttributes(['periode'=>$this->periode->id]);
                    foreach ($proker as $pr) {
                        $ormawa = Ormawa::model()->findByAttributes(['id_ormawa'=>$pr->ormawa_id]);
                ?>
                {
                title: '<?=  '('.$ormawa->nama_ormawa.') '.$pr->agenda; ?>',
                start: '<?= $pr->waktu; ?>',
                description: "<?= $pr->ormawa_id; ?>",
                className: 'fc-event-info'
            },
            <?php } ?>],
        });
    </script>
</body>

</html>
<?php
// Jenis Browser
$browser = $_SERVER['HTTP_USER_AGENT'];
$chrome = '/Chrome/';
$firefox = '/Firefox/';
$ie = '/IE/';
$safari = '/Safari/';
$edge = '/Edge/';
if (preg_match($chrome, $browser))
    $data = "Chrome/Opera";
if (preg_match($firefox, $browser))
    $data = "Firefox";
if (preg_match($ie, $browser))
    $data = "IE";
if (preg_match($safari, $browser))
    $data = "Safari";
if (preg_match($edge, $browser))
    $data = "Edge";
 
// untuk mengambil informasi dari pengunjung
$ipaddress = $_SERVER['REMOTE_ADDR']."";
$browser = $data;
$tanggal = date('Y-m-d');
$kunjungan = 1;
if (!isset($_SESSION['counterdb'])){
$_SESSION['counterdb']=$ipaddress;
$model = new Visitor;
$model->tanggal=$tanggal;
$model->ip_address=$ipaddress;
$model->counter=$kunjungan;
$model->browser=$browser;
$model->save();
}
?>