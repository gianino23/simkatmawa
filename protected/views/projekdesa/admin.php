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
			<li class="breadcrumb-item active">Projek di Desa</li>
		</ol>
	</div>
    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
        <div class="d-flex mt-2 justify-content-end">
        <?= CHtml::link('Export Excel',array('projekdesa/export'),array('class'=>'btn waves-effect waves-light btn-excel')) ?>
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
	<div class="col-12">
		<!-- Column -->
		<div class="card">
			<div class="card-header bg-success">
            <h3 class="card-title text-white">Halaman Projek di Desa</h3>
</div>
			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="mytable" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th>Nama Program/Projek Pembangunan di Desa</th>
										<th>Judul Program</th>
										<th>Jumlah Mahasiswa yang terlibat</th>
										<th>Jumlah Dosen yang terlibat</th>
										<th>Luaran Kegiatan</th>
										<th>Aksi</th>
										
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
									$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Projekdesa::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_projekdesa ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->judul_program; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
										<td align="center">
										<a href="?r=projekdesa/detail&id=<?php echo  $p->id_projekdesa; ?>"><i class="fas fa-eye"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_projekdesa; ?>'><i class="fas fa-trash-alt"></i></a>	
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
</div>
							<div id="tambahData" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Tambah Data Projek di Desa</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">??</button>
                                            </div>
                                            <div class="modal-body">
                                <form id="form-save" class="form-horizontal r-separator" name="modal_popup" action="?r=projekdesa/tambah" method="POST" enctype='multipart/form-data'>
                                <div class="card-body">
                                    <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Nama Program/</br>Projek Pembangunan</br>di Desa</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <input type="text" maxlength="200" class="form-control" name="modal_program" id="modal-program"
                                                placeholder="Nama Program " required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputPassword3"
                                            class="col-md-3 text-right control-label col-form-label">Judul Program</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <input type="text" maxlength="200" class="form-control" name="modal_judul" id="modal-judul"
                                                placeholder="Nama Judul Penelitian" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputNama3"
                                            class="col-md-3 text-right control-label col-form-label">Jumlah Mahasiswa yang terlibat</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                             <input type="text" class="form-control" name="modal_mhs" id="modal-mhs"
                                                placeholder="Jumlah Mahasiswa" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Jumlah Dosen yang terlibat</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <input type="number" class="form-control" name="modal_dosen" id="modal-dosen"
                                                placeholder="Jumlah Dosen" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Luaran Kegiatan</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <input type="text" maxlength="200" class="form-control" name="modal_luaran" id="modal-luaran"
                                                placeholder="Luaran Kegiatan" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Periode</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <select name="modal_periode" id="modal-periode" class="form-control select2" style="width: 100%;" required>
												<option value="" selected="selected">-- Pilih Satu --</option>
												<?php
												$periode=Periode::model()->findAllByAttributes(array('status'=>1));
												foreach($periode as $per){
												?>
												<option value=<?php echo $per->id;?>><?php echo $per->periode;?></option>
												<?php
												}
												?>
										   </select>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Upload File Pendukung</label>
                                        <div class="col-md-9 border-left pb-2 pt-2 ">
                                           <input type="file" name="files[]" id="files" class="form-control" multiple required />
                                        </div>
                                    </div>
                                 <br>
											<div class="progress progress-lg mb-2" style="display:none">
												<div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: 0%">
													<span class="sr-only">0%</span>
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

<script type="text/javascript">
 $(document).ready(function () {
   $('#mytable').on('click', '.open_modal', function(e){
       var m = $(this).attr("id");
     $.ajax({
          url: "?r=user/update",
          type: "GET",
          data : {kd_user: m,},
          success: function (ajaxData){
            $("#ModalEdit").html(ajaxData);
            $("#ModalEdit").modal('show',{backdrop: 'true'});
           }
         });
        });
    });
</script>

<script type="text/javascript">
 $("#form-save").on('submit', function(e){
  e.preventDefault();
  //const fileupload = $('#modal-fileupload').prop('files')[0];
  
  let formData = new FormData();
 // formData.append('modal_fileupload', fileupload);
  var totalfiles = document.getElementById('files').files.length;
   for (var index = 0; index < totalfiles; index++) {
      formData.append("files[]", document.getElementById('files').files[index]);
   }
  formData.append('modal_program', $('#modal-program').val());
  formData.append('modal_judul', $('#modal-judul').val());
  formData.append('modal_mhs', $('#modal-mhs').val());
  formData.append('modal_dosen', $('#modal-dosen').val());
  formData.append('modal_luaran', $('#modal-luaran').val());
  formData.append('modal_periode', $('#modal-periode').val());
  $('.progress').show();
  
  $.ajax({
	 xhr: function() {
                var xhr = new window.XMLHttpRequest();         
                xhr.upload.addEventListener("progress", function(element) {
                    if (element.lengthComputable) {
                        var percentComplete = ((element.loaded / element.total) * 100);
                        $("#progressBar").width(percentComplete + '%');
                        $("#progressBar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
			
   method:  $(this).attr("method"), // untuk mendapatkan attribut method pada form
   url: $(this).attr("action"),  // untuk mendapatkan attribut action pada form
    enctype: 'multipart/form-data',
   data: formData,
    processData: false,
    contentType: false,
    cache: false,
   success:function(response){
	   
    console.log(response);
  $("#modal-data").empty();
    $("#modal-data").html(response.data);
	 $('.progress').hide();
    $("#tambahData").modal('hide');
    $('#modal-program').val('');
    $('#modal-judul').val('');
    $('#modal-mhs').val('');
    $('#modal-dosen').val('');
    $('#modal-luaran').val('');
    $('#modal-periode').val('');
    $('#modal-fileupload').val('');
     location.reload();
   },
  error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                },
   beforeSend:function(b){
    // Before function here
	 $("#progressBar").width('0%');
   }
  })
  .done(function(d) {
   // When ajax finished
   
  });
 });
 </script>
 
 <!-- Ajax untuk update data--> 
<script type="text/javascript">
    $('body').on('submit','#form-update', function(e){
  e.preventDefault();
  $.ajax({
   method:  $(this).attr("method"), // untuk mendapatkan attribut method pada form
   url: $(this).attr("action"),  // untuk mendapatkan attribut action pada form
   data: { 
    modal_kduser: $('#edit-id').val(),
    modal_username: $('#edit-username').val(),
    modal_password: $('#edit-password').val(),
    modal_nama: $('#edit-nama').val(),
    modal_level: $('#edit-level').val(),
   },
   success:function(response){
   // console.log(response);
    $("#modal-data").empty();
    $("#modal-data").html(response.data);
 $("#ModalEdit").modal('hide');
   },
   error: function(e)
   {
    // Error function here
   },
   beforeSend:function(b){
    // Before function here
   }
  })
  .done(function(d) {
   // When ajax finished
  });
 });
</script>
	
 <!-- Ajax untuk delete data--> 
<script type="text/javascript">
    $('body').on('click','.delete_modal', function(e){
  let id_projekdesa = $(this).data('id');
  $('#modal_delete').modal('show', {backdrop: 'static'});
  $("#delete_link").on("click", function(){
   e.preventDefault();
   $.ajax({
    method:  'POST', // untuk mendapatkan attribut method pada form
    url: '?r=projekdesa/hapus',  // untuk mendapatkan attribut action pada form
    data: { 
     id_projekdesa: id_projekdesa
    },
    success:function(response){
	//console.log(response);
     $("#modal-data").empty();
     $("#modal-data").html(response.data);
     $("#modal_delete").modal('hide');
	  location.reload();
    },
    error: function(e)
    {
     // Error function here
    },
    beforeSend:function(b){
     // Before function here
    }
   })
   .done(function(d) {
    // When ajax finished
	
   });
  });
 });
</script>
		