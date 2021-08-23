<div class="row page-titles">
	<div class="col-md-5 col-12 align-self-center">
		<h3 class="text-themecolor mb-0">SIMKATMAWA</h3>
		<ol class="breadcrumb mb-0">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item active"> Data Pengguna</li>
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
							<h3 class="card-title">Halaman Pengguna</h3>
							<h6 class="card-subtitle">Deskripsi Halaman Pengguna</h6>
						</div>
						<div class="float-right">
							<?= CHtml::link('Hapus', array(''),array('class'=>'btn waves-effect waves-light btn-danger')); ?>
							<?= CHtml::link('Tambah', array('user/create'),array('class'=>'btn waves-effect waves-light btn-success')); ?>
						</div>
					</div>
					<div class="col-12">
						<div class="table-responsive">
							<table id="show_hide_col" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th>Username</th>
										<th>Nama</th>
										<th width="15%">Level</th>
										<th width="10%"></th>
									</tr>
								</thead>
								<tbody>
									<?php
										 	$user = User::model()->findAll();
											 foreach ($user as $u) {
										 ?>
									<tr>
										<td><?= $u->username; ?></td>
										<td><?= $u->nama; ?></td>
										<td><?= $u->level; ?></td>
										<td align="center">
											<?= CHtml::link('<i class="fas fa-edit"></i>', $this->createAbsoluteUrl('user/update',array('id'=>$u->kd_user)),array('class'=>'text-warning')); ?>
											<?= CHtml::link('<i class="fas fa-trash-alt"></i>', $this->createAbsoluteUrl('user/delete',array('id'=>$u->kd_user)),array('class'=>'text-danger')); ?>
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