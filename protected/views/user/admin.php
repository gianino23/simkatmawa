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
    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
        <div class="d-flex mt-2 justify-content-end">
            <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal"
                data-target="#tambahData">Tambah Data</button>
        </div>
    </div>
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
		<div class="col-12">
		<div class="card">
			<div class="card-header bg-success">
            <h3 class="card-title text-white">Halaman Pengguna</h3>
</div>
			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="mytable" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th>Username</th>
										<th>Nama</th>
										<th width="120px">Level</th>
										<th width="50px"></th>
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
													echo "Superadmin";
												}elseif(($u->level)==2){
													echo "Ormawa";
												}
										?>
										</td>
										<?php
										if(($u->level)!=1){
										$e=1;
										?>
										<td align="center">
											<a href="javascript:void(0)" class='open_modal' id='<?php echo  $u->kd_user; ?>'><i class="fas fa-edit text-warning"></i></a>
											<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $u->kd_user; ?>'><i class="fas fa-trash-alt text-danger"></i></a>
										</td>
										<?php
										}else{
										?>
										<td align="center">
										<a href="javascript:void(0)" class='open_modal' id='<?php echo  $u->kd_user; ?>'><i class="fas fa-edit text-warning"></i></a>
										</td>
										<?php
										}
										?>
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
</div>
							<div id="tambahData" class="modal fade" role="dialog" aria-labelledby="myModalLabel"
							  aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h4 class="modal-title" id="myModalLabel">Tambah Data Pengguna</h4>
							        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							      </div>
							      <div class="modal-body">
							        <form id="form-save" class="form-horizontal r-separator" name="modal_popup" action="?r=user/tambah"
							          method="POST">
							            <div class="form-group">
							              <label>Username</label>
							              <input type="text" class="form-control" name="modal_username" id="modal-username"
							                placeholder="Username" required>
							            </div>
							            <div class="form-group">
							              <label>Password</label>
							              <input type="password" class="form-control" name="modal_password" id="modal-password"
							                placeholder="Password" required>
							            </div>
							            <div class="form-group">
							              <label>Nama</label>
							              <input type="text" class="form-control" name="modal_nama" id="modal-nama" placeholder="Nama"
							                required>
							            </div>

							            <div class="form-group">
							              <label>Level</label>
							              <select name="modal_level" id="modal-level" class="select2 form-control costum-select"
							                style="width: 100%;" required>
							                <option value="" selected="selected">-- Pilih Satu --</option>
							                <option value=2>Ormawa</option>
							              </select>
							            </div>
							            <div class="form-group">
							              <label>Ormawa</label>
							              <select name="modal_ormawa" id="modal-ormawa" class="form-control select2" style="width: 100%;"
							                required>
							                <option value="" selected="selected">-- Pilih Satu --</option>
							                <?php
												$periode=Ormawa::model()->findAll();
												foreach($periode as $per){
												?>
							                <option value=<?php echo $per->id_ormawa;?>><?php echo $per->nama_ormawa;?></option>
							                <?php
												}
												?>
							              </select>
							            </div>
							  <div class="modal-footer">
							    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
							    <button type="submit" class="btn btn-primary">Simpan</button>
							  </div>
							  </form>
							</div><!-- /.modal-content -->
							</div><!-- /.modal-content -->
							</div><!-- /.modal-content -->
							</div><!-- /.modal-content -->
<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
<script>
$(document).ready(function () {
  $('#mytable').on('click', '.open_modal', function (e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "?r=user/update",
      type: "GET",
      data: {
        kd_user: m,
      },
      success: function (ajaxData) {
        $("#ModalEdit").html(ajaxData);
        $("#ModalEdit").modal('show', {
          backdrop: 'true'
        });
      }
    });
  });

  $("#form-save").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        method: $(this).attr("method"), // untuk mendapatkan attribut method pada form
        url: $(this).attr("action"), // untuk mendapatkan attribut action pada form
        data: {
          modal_username: $('#modal-username').val(),
          modal_password: $('#modal-password').val(),
          modal_nama: $('#modal-nama').val(),
          modal_level: $('#modal-level').val(),
          modal_ormawa: $('#modal-ormawa').val(),

        },
        success: function (response) {
          //console.log(response);
          $("#modal-data").empty();
          $("#modal-data").html(response.data);
          $("#tambahData").modal('hide');
          $('#modal-username').val('');
          $('#modal-password').val('');
          $('#modal-nama').val('');
          $('#modal-ormawa').val('');
          $('#modal-level').val('').change();
          $('#mytable').DataTable();
		   location.reload();
        },
        error: function (e) {
          // Error function here
        },
        beforeSend: function (b) {
          // Before function here
        }
      })
      .done(function (d) {
        // When ajax finished

      });
  });

  $('body').on('submit', '#form-update', function (e) {
    e.preventDefault();
    $.ajax({
        method: $(this).attr("method"), // untuk mendapatkan attribut method pada form
        url: $(this).attr("action"), // untuk mendapatkan attribut action pada form
        data: {
          modal_kduser: $('#edit-id').val(),
          modal_username: $('#edit-username').val(),
          modal_password: $('#edit-password').val(),
          modal_nama: $('#edit-nama').val(),
          modal_level: $('#edit-level').val(),
          modal_ormawa: $('#edit-ormawa').val(),
        },
        success: function (response) {
          // console.log(response);
          $("#modal-data").empty();
          $("#modal-data").html(response.data);
          $("#ModalEdit").modal('hide');
		   location.reload();
        },
        error: function (e) {
          // Error function here
        },
        beforeSend: function (b) {
          // Before function here
        }
      })
      .done(function (d) {
        // When ajax finished
      });
  });

  $('body').on('click', '.delete_modal', function (e) {
    let kd_user = $(this).data('id');
    $('#modal_delete').modal('show', {
      backdrop: 'static'
    });
    $("#delete_link").on("click", function () {
      e.preventDefault();
      $.ajax({
          method: 'POST', // untuk mendapatkan attribut method pada form
          url: '?r=user/hapus', // untuk mendapatkan attribut action pada form
          data: {
            kd_user: kd_user
          },
          success: function (response) {
            //console.log(response);
            $("#modal-data").empty();
            $("#modal-data").html(response.data);
            $("#modal_delete").modal('hide');
			 location.reload();
          },
          error: function (e) {
            // Error function here
          },
          beforeSend: function (b) {
            // Before function here
          }
        })
        .done(function (d) {
          // When ajax finished

        });
    });
  });
});
</script>
		