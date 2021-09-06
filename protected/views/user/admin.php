<script type="text/javascript">
$(document).ready(function() {
    $('#mytable').DataTable();
});
</script>
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
						<!--
							<?= CHtml::link('Hapus', array(''),array('class'=>'btn waves-effect waves-light btn-danger')); ?>
							<?= CHtml::link('Tambah', array('user/create'),array('class'=>'btn waves-effect waves-light btn-success')); ?>
						-->
						 <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#tambahData">Tambah Data</button>
						</div>
					</div>
					<div class="col-12">
						<div class="table-responsive">
							<table id="mytable" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th>Username</th>
										<th>Nama</th>
										<th width="15%">Level</th>
										<th width="10%"></th>
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
										 	$user = User::model()->findAll(array('order'=>'kd_user ASC'));
											 foreach ($user as $u) {
										 ?>
									<tr>
										<td><?= $u->username; ?></td>
										<td><?= $u->nama; ?></td>
										<td>
										<?php
												if(($u->level)==1){
													echo "Administrator";
												}elseif(($u->level)==2){
													echo "Operator";
												}elseif(($u->level)==3){
													echo "Non Operator";
												}
										?>
										</td>
										<td align="center">
											<a href="javascript:void(0)" class='open_modal' id='<?php echo  $u->kd_user; ?>'><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $u->kd_user; ?>'><i class="fas fa-trash-alt"></i></a>
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
							<div id="tambahData" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Tambah Data Pengguna</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                <form id="form-save" class="form-horizontal r-separator" name="modal_popup" action="?r=user/tambah" method="POST">
                                <div class="card-body">
                                    <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Username</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <input type="text" class="form-control" name="modal_username" id="modal-username"
                                                placeholder="Username" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputPassword3"
                                            class="col-md-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <input type="password" class="form-control" name="modal_password" id="modal-password"
                                                placeholder="Password" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputNama3"
                                            class="col-md-3 text-right control-label col-form-label">Nama</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <input type="text" class="form-control" name="modal_nama" id="modal-nama"
                                                placeholder="Nama" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Level</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <select name="modal_level" id="modal-level" class="select2 form-control costum-select" style="width: 100%;" required>
												<option value="" selected="selected">-- Pilih Satu --</option>
												<option value=1>Administrator</option>
												<option value=2>Operator</option>
												<option value=3>Non Operator</option>
										   </select>
                                        </div>
                                    </div>
                                  
                                </div>
                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
											</form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
   
   <div class="modal-header">
        <h5 class="modal-title">Apakah Yakin anda menghapus data ini ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <button type="button"class="btn btn-danger" id="delete_link">Hapus</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/user.js'); ?>
		