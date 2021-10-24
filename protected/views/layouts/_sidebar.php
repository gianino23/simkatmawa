<?php
	if(Yii::app()->user->level==1){
?>
<nav class="sidebar-nav">
	<ul id="sidebarnav">
		<!-- <li class="nav-small-cap">
			<i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">Personal</span>
		</li> -->
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=site/index"
				aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>

		<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">Web Profil</span></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('profil/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Profil</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('regulasimhs/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">
					<marquee>Regulasi Bidang Kemahasiswaan</marquee>
				</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('folder/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">
					Galeri
				</span></a></li>
		<!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('galery/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">
					Galery
				</span></a></li> -->
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('periode/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">
					Periode
				</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('ormawa/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">
					Ormawa
				</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('slide/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">
					Slider
				</span></a></li>

		<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">DATA</span></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('user/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Data Pengguna</span></a></li>
		<!-- <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">SIMKATMAWA</span></li> -->
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
				href="<?= Yii::app()->createAbsoluteUrl('simkatmawa/menu')?>" aria-expanded="false"><i class="mdi mdi-view-grid"></i><span
					class="hide-menu">SIMKIMAHAL</span></a></li>
		<!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
				href="?r=pertukaranpelajar/admin" aria-expanded="false"><i class="mdi mdi-account-box"></i><span
					class="hide-menu">Pertukaran Pelajar</span></a></li> -->
		<!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=praktikkerja/admin"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Magang/Praktik Kerja</span></a>
		</li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
				href="?r=mengajarsekolah/admin" aria-expanded="false"><i class="mdi mdi-account-box"></i><span
					class="hide-menu">Mengajar di Sekolah</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=penelitian/admin"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Penelitian</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
				href="?r=projekkemanusian/admin" aria-expanded="false"><i class="mdi mdi-account-box"></i><span
					class="hide-menu">Projek Kemanusiaan</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=projekdesa/admin"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Projek di Desa</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=wirausaha/admin"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Wirausaha</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
				href="?r=projekindependen/admin" aria-expanded="false"><i class="mdi mdi-account-box"></i><span
					class="hide-menu">Studi/Projek Independen</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=rekognisi/admin"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Rekognisi/Non lomba</span></a>
		</li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=belanegara/admin"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Bela Negara</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=ikatanalumni/admin"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Ikatan Alumni</span></a></li> -->

		<!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=site/logout"
				aria-expanded="false"><i class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li> -->
	</ul>
</nav>
<?php
	}
?>
<?php
	if(Yii::app()->user->level==2){
?>
<nav class="sidebar-nav">
	<ul id="sidebarnav">
		<!-- <li class="nav-small-cap">
			<i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">Personal</span>
		</li> -->
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=site/index"
				aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>

		<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">Web Profil</span></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('childormawa/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Profil Ormawa</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('proker/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Kalender Proker</span></a></li>
		
	</ul>
</nav>
<?php
	}
?>