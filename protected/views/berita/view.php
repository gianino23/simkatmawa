<div class="row page-titles">
	<div class="col-md-5 col-12 align-self-center">
		<h3 class="text-themecolor mb-0">SIMKATMAWA</h3>
		<ol class="breadcrumb mb-0">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">Berita</a></li>
			<li class="breadcrumb-item active">View</li>
		</ol>
	</div>
	<!-- <div class="col-md-7 col-12 align-self-center d-none d-md-block">
		<div class="d-flex mt-2 justify-content-end">
			<div class="alert alert-danger" role="alert">masih dalam pengembangan
			</div>
		</div>
	</div> -->
</div>
<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<!-- Row -->
	<div class="row">
		<!-- Column -->
		<div class="col-lg-4 col-xlg-3 col-md-5">
			<div class="card">
				<div class="card-body">
					
					<center class="mt-2"><img src="<?php echo Yii::app()->request->baseUrl.'/upload/berita/'.$model->cover;?>" width="300" />
					</center>
				<hr>
					<small class="text-muted">Tanggal </small>
					<h6><?= date('d F y, H:i:s', strtotime($model->tgl_entry)); ?></h6>
					<small class="text-muted">Penulis </small>
					<h6><?php if($model->author == 0) echo "Admin"; else $ormawa = Ormawa::model()->findByAttributes(['id_ormawa'=>$model->author]);echo $ormawa->nama_ormawa; ?></h6>
					<small class="text-muted pt-4 db">Status</small>
					<h6><?php if($model->status == 1) echo "<span class='badge badge-success'>Publish</span>"; else echo "<span class='badge badge-danger'>Draft</span>"?></h6>
					<hr>
					<div class="row text-center justify-content-md-center">
					<div class="col-4"><?= CHtml::link('Kembali', array('berita/admin'),array('class'=>'btn btn-success btn-block')); ?></div>
						<div class="col-4"><?= CHtml::link('Edit', $this->createAbsoluteUrl('berita/update',array('id'=>$model->id_berita)),array('class'=>'btn btn-warning btn-block')); ?></div>
						
						<!-- <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div> -->
				</div>
				</div>
			</div>
		</div>
		<!-- Column -->
		<!-- Column -->
		<div class="col-lg-8 col-xlg-9 col-md-7">
			<div class="card">
			<div class="card-body">
							<h4 class="font-medium"><?= $model->judul; ?></h4>
							<hr>
							<?= $model->isi; ?>
						</div>
			</div>
		</div>
		<!-- Column -->
	</div>
	<!-- ============================================================== -->
</div>