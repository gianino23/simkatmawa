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
				aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

		<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">Web Profil</span></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('slide/admin')?>"
				aria-expanded="false"><i class="mdi mdi-image-filter"></i><span class="hide-menu">
					Slider
				</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('profil/admin')?>"
				aria-expanded="false"><i class="mdi mdi-information-outline"></i><span class="hide-menu">Profil</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('regulasimhs/admin')?>"
				aria-expanded="false"><i class="mdi mdi-folder-outline"></i><span class="hide-menu">
					Regulasi
				</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('folder/admin')?>"
				aria-expanded="false"><i class="mdi mdi-image"></i><span class="hide-menu">
					Galeri
				</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('berita/admin')?>"
				aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu">
					Berita
				</span></a></li>
		<!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('periode/admin')?>"
				aria-expanded="false"><i class="mdi mdi-arrange-bring-forward"></i><span class="hide-menu">
					Periode
				</span></a></li> -->
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('ormawa/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">
					Ormawa
				</span></a></li>
		<!--
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('jenis/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">
					Jenis
				</span></a></li>
		-->
		<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">DATA</span></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('user/admin')?>"
				aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Data Pengguna</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
				href="<?= Yii::app()->createAbsoluteUrl('simkatmawa/menu')?>" aria-expanded="false"><i class="mdi mdi-view-grid"></i><span
					class="hide-menu">SIMKATMAWA</span></a></li>
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
		<!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?r=site/index"
				aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
-->
		<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">Profil</span></li> 
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('childormawa/admin')?>"
				aria-expanded="false"><i class="mdi mdi-information"></i><span class="hide-menu">Profil Ormawa</span></a></li>
				<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
			<span class="hide-menu">Konten Web</span></li> 
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('proker/admin')?>"
				aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">Kalender Proker</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('luarankinerja/admin')?>"
				aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Luaran Kinerja</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('berita/admin')?>"
				aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu">Berita</span></a></li>
		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= Yii::app()->createAbsoluteUrl('folder/admin')?>"
				aria-expanded="false"><i class="mdi mdi-image"></i><span class="hide-menu">
					Galeri
				</span></a></li>
		
	</ul>
</nav>
<?php
	}
?>
