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
			<li class="breadcrumb-item active">Slider</li>
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
                    <div class="col-12">
		<div class="card">
			<div class="card-header bg-success">
            <h3 class="card-title text-white">Halaman Slider</h3>
</div>
			<div class="card-body">
				<div class="row">
					<div class="col-12">
							
					</div>
					<div class="col-12">
						<div class="table-responsive">
							<table id="mytable" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th width="20px">#</th>
										<th>Teks</th>
										<th>File</th>
										<th>Status</th>
										<th width="50px">Aksi</th>
										
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
											
										 	$praker = Slide::model()->findAll(array('order'=>'id_slide ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->urutan; ?></td>
										<td><?= $p->judul.'<br>'.$p->subjudul; ?></td>
										<td><?= $p->file; ?></td>
										<td><?= $p->status; ?></td>
										
										<td align="center">
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_slide; ?>'><i class="fas fa-trash-alt"></i></a>	
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
							<div id="tambahData" class="modal fade" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Tambah Data Slider</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">??</button>
                                            </div>
                                            <form id="form-save" class="form-horizontal r-separator" name="modal_popup" action="?r=slide/tambah" method="POST" enctype='multipart/form-data'>
                                            <div class="modal-body">
                                <form id="form-save" class="form-horizontal r-separator" name="modal_popup" action="?r=slide/tambah" method="POST" enctype='multipart/form-data'>

							            <div class="form-group">
							              <label>Judul Slide</label>
							              <input type="text" class="form-control" name="modal_judul" id="modal-judul"
							                placeholder="Judul Slide" required>
							            </div>
							            <div class="form-group">
							              <label>Sub Judul Slide</label>
							              <input type="text" class="form-control" name="modal_modal_subjuduljudul" id="modal-subjudul"
							                placeholder="Sub Judul Slide" required>
							            </div>
							            <div class="form-group">
							              <label>Urutan</label>
							              <input type="number" class="form-control" name="modal_urutan" id="modal-urutan"
                                                placeholder="Urutan Slide" required>
							            </div>
							            <div class="form-group">
							              <label>Status</label>
							              <select name="modal_status" id="modal-status" class="form-control select2" style="width: 100%;" required>
												<option value="" selected="selected">Pilih..</option>
												<option value=1 >Aktif</option>
												<option value=0 >Tidak AKtif</option>
										   </select>
							            </div>
							            <div class="form-group">
							              <label>Upload File Background</label>
                                          <input type="file" name="files[]" id="files" class="form-control" required />
							            </div>
                                 <br>
											<div class="progress progress-lg mb-2" style="display:none">
												<div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: 0%">
													<span class="sr-only">0%</span>
												</div>
											</div> 
                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
											</form>
											
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
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

<script type="text/javascript">
 $(document).ready(function () {
   $('#mytable').on('click', '.open_modal', function(e){
       var m = $(this).attr("id");
     $.ajax({
          url: "?r=slide/update",
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
  formData.append('modal_judul', $('#modal-judul').val());
  formData.append('modal_subjudul', $('#modal-subjudul').val());
  formData.append('modal_urutan', $('#modal-urutan').val());
  formData.append('modal_status', $('#modal-status').val());
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
    $('#modal-judul').val('');
    $('#modal-subjudul').val('');
    $('#modal-urutan').val('');
    $('#modal-status').val('');
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
  let id_slide = $(this).data('id');
  $('#modal_delete').modal('show', {backdrop: 'static'});
  $("#delete_link").on("click", function(){
   e.preventDefault();
   $.ajax({
    method:  'POST', // untuk mendapatkan attribut method pada form
    url: '?r=slide/hapus',  // untuk mendapatkan attribut action pada form
    data: { 
     id_slide: id_slide
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
		