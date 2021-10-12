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
			<li class="breadcrumb-item active">Kalender Proker</li>
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
							<h3 class="card-title">Halaman Kalender Proker</h3>
							<h6 class="card-subtitle">Deskripsi Halaman Kalender Proker</h6>
						</div>
						
						<div class="float-right">
						
						 <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#tambahData">Tambah Data</button>
						
						</div>
						
					</div>
					<div class="col-12">
						<div class="table-responsive">
							<table id="mytable" class="table table-striped table-bordered display" style="width:100%">
								<thead>
									<tr>
										<th>Agenda</th>
										<th>Waktu</th>
										<th>Jenis</th>
										<th>Status</th>
										<th>Keterangan</th>
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
										 	$praker = Proker::model()->findAllByAttributes(array('ormawa_id'=>Yii::app()->user->ormawa,'periode'=>$re),array('order'=>'id_proker ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->agenda; ?></td>
										<td><?= $p->waktu; ?></td>
										<td>
										<?php
												if(($p->jenis)==1){
													echo "Spesifik";
												}elseif(($p->jenis)==2){
													echo "Kondisional Bulan";
												}elseif(($p->jenis)==3){
													echo "Kondisional Semua";
												}
										?>
										</td>
										<td>
										<?php
												if(($p->status)==1){
													echo "aktif";
												}elseif(($p->status)==0){
													echo "Tidak Aktif";
												}
										?>
										</td>
										<td><?= $p->keterangan; ?></td>
										<td align="center">
										<a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id_proker; ?>'><i class="fas fa-edit"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_proker; ?>'><i class="fas fa-trash-alt"></i></a>	
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
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Tambah Data Kalender Proker</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                <form id="form-save" class="form-horizontal r-separator" name="modal_popup" action="?r=proker/tambah" method="POST" >
                                <div class="card-body">
                                    <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Agenda</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <textarea cols="3" rows="3" class="form-control" name="modal_agenda" id="modal-agenda"
                                                placeholder="Isi Agenda" required></textarea>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Jenis</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <select name="modal_jenis" id="modal-jenis" class="form-control select2" style="width: 100%;" required>
												<option value="" selected="selected">-- Pilih Satu --</option>
												<option value=1 >Spesifik</option>
												<option value=2 >Kondisional Bulan</option>
												<option value=3 >Kondisional Semua</option>
										   </select>
                                        </div>
                                    </div>
									 <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Waktu</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <input type="datetime-local" class="form-control" name="modal_waktu" id="modal-waktu"
                                                placeholder="" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <select name="modal_status" id="modal-status" class="form-control select2" style="width: 100%;" required>
												<option value="" selected="selected">-- Pilih Satu --</option>
												<option value=1 >Aktif</option>
												<option value=0 >Tidak Aktif</option>
										   </select>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Keterangan</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <input type="text" class="form-control" name="modal_keterangan" id="modal-keterangan"
                                                placeholder="Keterangan" required>
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
          url: "?r=proker/update",
          type: "GET",
          data : {id_proker: m,},
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
 
  
  let formData = new FormData();
 
  formData.append('modal_agenda', $('#modal-agenda').val());
  formData.append('modal_jenis', $('#modal-jenis').val());
  formData.append('modal_waktu', $('#modal-waktu').val());
  formData.append('modal_status', $('#modal-status').val());
  formData.append('modal_keterangan', $('#modal-keterangan').val());
  formData.append('modal_periode', $('#modal-periode').val());
  
  $.ajax({
	
			
   method:  $(this).attr("method"), // untuk mendapatkan attribut method pada form
   url: $(this).attr("action"),  // untuk mendapatkan attribut action pada form
   data: formData,
    processData: false,
    contentType: false,
    cache: false,
   success:function(response){
	   
    console.log(response);
  $("#modal-data").empty();
    $("#modal-data").html(response.data);
    $("#tambahData").modal('hide');
    $('#modal-agenda').val('');
    $('#modal-jenis').val('');
    $('#modal-waktu').val('');
    $('#modal-status').val('');
    $('#modal-keterangan').val('');
    $('#modal-periode').val('');
    location.reload();
   },
  error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
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
 
 <!-- Ajax untuk update data--> 
<script type="text/javascript">
    $('body').on('submit','#form-update', function(e){
  e.preventDefault();
  $.ajax({
   method:  $(this).attr("method"), // untuk mendapatkan attribut method pada form
   url: $(this).attr("action"),  // untuk mendapatkan attribut action pada form
   data: { 
    modal_idproker: $('#edit-idproker').val(),
    modal_agenda: $('#edit-agenda').val(),
    modal_jenis: $('#edit-jenis').val(),
    modal_waktu: $('#edit-waktu').val(),
    modal_status: $('#edit-status').val(),
    modal_keterangan: $('#edit-keterangan').val(),
    modal_periode: $('#edit-periode').val(),
   },
   success:function(response){
   // console.log(response);
    $("#modal-data").empty();
    $("#modal-data").html(response.data);
 $("#ModalEdit").modal('hide');
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
</script>
	
 <!-- Ajax untuk delete data--> 
<script type="text/javascript">
    $('body').on('click','.delete_modal', function(e){
  let id_proker = $(this).data('id');
  $('#modal_delete').modal('show', {backdrop: 'static'});
  $("#delete_link").on("click", function(){
   e.preventDefault();
   $.ajax({
    method:  'POST', // untuk mendapatkan attribut method pada form
    url: '?r=proker/hapus',  // untuk mendapatkan attribut action pada form
    data: { 
     id_proker: id_proker
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

		