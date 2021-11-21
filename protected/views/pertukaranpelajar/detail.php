
<?php
	$p = Pertukaranpelajar::model()->findByAttributes(array('id_perpel'=>$id),array('order'=>'id_perpel ASC'));
?>
<div class="row page-titles">
	<div class="col-md-5 col-12 align-self-center">
		<h3 class="text-themecolor mb-0">SIMKATMAWA</h3>
		<ol class="breadcrumb mb-0">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item active">Pertukaran Pelajar</li>
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
							<h3 class="card-title">Halaman Detail Pertukaran Pelajar</h3>
							<h6 class="card-subtitle">Deskripsi Halaman Detail Pertukaran Pelajar</h6>
						</div>
						<div class="float-right">
						<!--
							<?= CHtml::link('Hapus', array(''),array('class'=>'btn waves-effect waves-light btn-danger')); ?>
							<?= CHtml::link('Tambah', array('pertukaranpelajar/create'),array('class'=>'btn waves-effect waves-light btn-success')); ?>
						-->
						<button type="button" class="btn btn-sm btn-block btn-danger waves-effect waves-light" onclick="history.back();"><i class="mdi mdi-arrow-left mr-2"></i>Kembali</button>
						
						</div>
					</div>
					
					
					<div class="col-4">
					<h4>Nama Program</h4>
					<p><?= $p->nama_program; ?></p>
					</div>
					<div class="col-2">
					<h4>Level</h4>
					<p><?= $p->level; ?></p>
					</div>
					<div class="col-2">
					<h4>Status</h4>
					<p><?= $p->status; ?></p>
					</div>
					<div class="col-4">
					<h4>Jumlah Mahasiswa</h4>
					<p><?= $p->jml_mhs." Orang"; ?></p>
					</div>
					
					<div class="col-12">
						<div class="table-responsive">
							<table id="mytable" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama File</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
									$i=0;
										 	$perjar = Filepertukaranpelajar::model()->findAllByAttributes(array('pertukaranpelajar_id'=>$id));
											 foreach ($perjar as $p) {
												 $i++;
										 ?>
									<tr>
									<td><?php echo $i;?></td>
										<td><?= $p->isi; ?></td>
										<td align="center">
										<a target="_BLANK" href="/uploaddokumen/<?php echo $p->isi;?>"><i class="fas fa-download"></i></a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
							
