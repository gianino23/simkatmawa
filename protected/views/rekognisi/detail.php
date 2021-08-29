
<?php
	$p = Rekognisi::model()->findByAttributes(array('id_rekognisi'=>$id),array('order'=>'id_rekognisi ASC'));
?>
<div class="row page-titles">
	<div class="col-md-5 col-12 align-self-center">
		<h3 class="text-themecolor mb-0">SIMKATMAWA</h3>
		<ol class="breadcrumb mb-0">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item active">Rekognisi / Non Lomba</li>
		</ol>
	</div>
	<!--
                <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                    <div class="d-flex mt-2 justify-content-end">
                        <div class="d-flex mr-3 ml-2">
                            <div class="chart-text mr-2">
                                <h6 class="mb-0"><small>THIS MONTH</small></h6>
                                <h4 class="mt-0 text-info">$58,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="monthchart"></div>
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <div class="chart-text mr-2">
                                <h6 class="mb-0"><small>LAST MONTH</small></h6>
                                <h4 class="mt-0 text-primary">$48,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="lastmonthchart"></div>
                            </div>
                        </div>
                    </div>
                </div>
				-->
</div>

<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
	<!-- Row -->
	<div class="row">
		<!-- Column -->
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<div class="float-left">
							<h3 class="card-title">Halaman Detail Rekognisi / Non Lomba</h3>
							<h6 class="card-subtitle">Deskripsi Halaman Detail Rekognisi / Non Lomba</h6>
						</div>
						<div class="float-right">
						<!--
							<?= CHtml::link('Hapus', array(''),array('class'=>'btn waves-effect waves-light btn-danger')); ?>
							<?= CHtml::link('Tambah', array('pertukaranpelajar/create'),array('class'=>'btn waves-effect waves-light btn-success')); ?>
						-->
						<button type="button" class="btn btn-sm btn-block btn-danger waves-effect waves-light" onclick="history.back();"><i class="mdi mdi-arrow-left mr-2"></i>Kembali</button>
						
						</div>
					</div>
					
					
					<div class="col-6">
					<h4>Jenis Rekognisi</h4>
					<p><?= $p->jenis; ?></p>
					</div>
					<div class="col-6">
					<h4>Identitas Rekognisi</h4>
					<p><?= $p->identitas; ?></p>
					</div>
					<div class="col-4">
					<h4>Institusi</h4>
					<p><?= $p->institusi; ?></p>
					</div>
					<div class="col-4">
					<h4>Jumlah Mahasiswa yang Terlibat</h4>
					<p><?= $p->jml_mhs." Orang"; ?></p>
					</div>
					<div class="col-4">
					<h4>Jumlah Dosen Terlibat</h4>
					<p><?= $p->jml_dosen." Orang"; ?></p>
					</div>
					<div class="col-4">
					<h4>Luaran Kegiatan</h4>
					<p><?= $p->luaran_kegiatan; ?></p>
					</div>
					<div class="col-4">
					<h4>Link Sosial Media Kegiatan</h4>
					<p><?= $p->link_sosmed; ?></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
							