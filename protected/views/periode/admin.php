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
			<li class="breadcrumb-item active">Periode</li>
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
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
				<div class="row">
					<div class="col-12">
						<div class="float-left">
							<h3 class="card-title">Halaman Periode</h3>
							<h6 class="card-subtitle">Deskripsi Halaman Periode | Hanya dapat mengaktifkan satu periode</h6>
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
										<th>Periode</th>
										<th>Status</th>
										<th width="100px">Aksi</th>
										
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
										 	$praker = Periode::model()->findAll(array('order'=>'id ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->periode; ?></td>
										<td>
										<?php
												if(($p->status)==1){
													echo "Aktif";
												}elseif(($p->status)==0){
													echo "Tidak Aktif";
												}
										?>
										</td>
										<td align="center">
                                            <div class="btn-group">
										<a href="javascript:void(0)" class='btn btn-sm btn-warning open_modal' id='<?php echo  $p->id; ?>'><i class="fas fa-edit"></i></a>
										<a href="javascript:void(0)" class="btn btn-sm btn-danger delete_modal" data-id='<?php echo  $p->id; ?>'><i class="fas fa-trash-alt"></i></a>	
                                            </div>
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
                                                <h4 class="modal-title" id="myModalLabel">Tambah Data Periode</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">??</button>
                                            </div>
                                            <div class="modal-body">
                                <form id="form-save" class="form-horizontal r-separator" name="modal_popup" action="?r=periode/tambah" method="POST" >
                                <div class="card-body">
                                    <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Tahun Periode</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <input type="number" min="<?php echo date('Y');?>" class="form-control" name="modal_periode" id="modal-periode"
                                                 required>
                                        </div>
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
          url: "?r=periode/update",
          type: "GET",
          data : {id: m,},
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
    modal_id: $('#edit-id').val(),
    modal_periode: $('#edit-periode').val(),
    modal_status: $('#edit-status').val(),
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
  let id = $(this).data('id');
  $('#modal_delete').modal('show', {backdrop: 'static'});
  $("#delete_link").on("click", function(){
   e.preventDefault();
   $.ajax({
    method:  'POST', // untuk mendapatkan attribut method pada form
    url: '?r=periode/hapus',  // untuk mendapatkan attribut action pada form
    data: { 
     id: id
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
		