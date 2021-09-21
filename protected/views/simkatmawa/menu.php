<style>
	.card {
		height:135px;
	}
</style>
<div class="row page-titles">
	<div class="col-md-12 col-12 align-self-center">
		<h3 class="text-themecolor mb-0">Sistem Informasi Pemeringkatan Bidang Kemahasiswaan</h3>
		<ol class="breadcrumb mb-0">
			<li class="breadcrumb-item active">Menu</li>
		</ol>
	</div>
</div>
<div class="container-fluid note-has-grid">
	<!-- <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active"
				id="all-category">
				<i class="icon-layers mr-1"></i><span class="d-none d-md-block">All Notes</span></a>
		</li>
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-business">
				<i class="icon-briefcase mr-1"></i><span class="d-none d-md-block">Business</span></a>
		</li>
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-social">
				<i class="icon-share-alt mr-1"></i><span class="d-none d-md-block">Social</span></a>
		</li>
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-important">
				<i class="icon-tag mr-1"></i><span class="d-none d-md-block">Important</span></a>
		</li>
		<li class="nav-item ml-auto"> <a href="javascript:void(0)"
				class="nav-link btn-primary rounded-pill d-flex align-items-center px-3" id="add-notes">
				<i class="icon-note m-1"></i><span class="d-none d-md-block font-14">Add Notes</span></a>
		</li>
	</ul> -->
	<!-- <div class="row">
		<div class="col-lg-3 col-md-6">
			<div class="card bg-white">
				<div class="card-body">
					<div id="myCarousel4" class="carousel vert slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item flex-column">
								<i class="ti-wordpress font-20"></i>
								<p>SIMKATMAWA</p>
								<h3>Dynamic website with responsive</h3>
								<div>
									<button class="btn btn-info justify-content-start waves-effect waves-light mt-3">Default</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="tab-content">
		<div id="note-full-container" class="note-has-grid row">
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('pertukaranpelajar/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Pertukaran Pelajar
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('praktikkerja/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Magang/Praktik Kerja
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('mengajarsekolah/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Mengajar di Sekolah
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('penelitian/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Penelitian
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('projekkemanusian/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Proyek Kemanusiaan
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('projekdesa/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Proyek di Desa
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('wirausaha/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Wirausaha
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('projekindependen/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Studi/Proyek Independen
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('rekognisi/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Rekognisi/Non Lomba
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('belanegara/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Bela Negara
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 single-note-item all-category">
				<a href="<?= Yii::app()->createAbsoluteUrl('ikatanalumni/admin')?>">
					<div class="card card-body">
						<span class="side-stick"></span>
						<p class="note-date font-12 text-muted mb-0">SIMKATMAWA</p>
						<h5 class="note-title text-truncate w-75 mb-0">Ikatan Alumni
						</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Deskripsi singkat bla bla bla 2 baris cukup aja.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>