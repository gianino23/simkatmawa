<?php
$id=$_GET['id'];
$folder = Folder::model()->findByAttributes(array('id_folder'=>$id));
?>
<div class="row page-titles">
	<div class="col-md-5 col-12 align-self-center">
		<h3 class="text-themecolor mb-0">SIMKATMAWA</h3>
		<ol class="breadcrumb mb-0">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item"><a href="?r=folder/admin">Galery</a></li>
			<li class="breadcrumb-item active"> <?php echo $folder->nama_folder;?></li>
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
							<h3 class="card-title">Halaman Galery <?php echo $folder->nama_folder;?></h3>
							<h6 class="card-subtitle">Deskripsi Halaman Galery <?php echo $folder->nama_folder;?></h6>
						</div>
						<div class="float-right">
						 <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#tambahData">Tambah Data</button>
						 <a href="?r=folder/admin" type="button" class="btn waves-effect waves-light btn-danger" >Kembali</a>
						</div>
					</div>
					
					<div id="tambahData" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Tambah Data Galery</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                               
                                <div class="card-body">
                                   <form action="?r=galery/tambah" class="dropzone" id="dropzoneFrom" method="POST">
								    <input type="text" class="form-control" name="modal_namafolder" id="modal-namafolder" value="<?php echo $folder->nama_folder;?>" hidden>
                                </div>
                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" id="submit-all">Upload</button>
                                            </div>
											</form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
								
					<div class="col-12">
						
					<?php
					
						$folder_name = 'upload/'.$folder->nama_folder.'/';
						$result = array();
						$files = scandir('upload/'.$folder->nama_folder);
						$output = '<div class="row">';

						if(false !== $files){
						 foreach($files as $file){
						  if('.' !=  $file && '..' != $file){
						   $output .= '
						   <div class="col-md-3">
							<img src="'.$folder_name.$file.'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
							<button type="button" class="btn btn-link remove_image" id="'.$file.'">Hapus Gambar</button>
						   </div>
						   ';
						  }
						 }
						}
						$output .= '</div>';
						echo $output;
					?>	 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>

$(document).ready(function(){
 
 Dropzone.options.dropzoneFrom = {
  parallelUploads: 50,
   maxFiles : 500,
  autoProcessQueue : false,
  autoQueue : true,
  autoProcessQueue: false,
   dictDefaultMessage: "Letakan File Disini | File Maksimal 50 File",
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
  init: function(){
   var submitButton = document.querySelector('#submit-all');
   myDropzone = this;
   submitButton.addEventListener("click", function(){
    myDropzone.processQueue();
	
   });
   this.on("complete", function (file) {
                if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                    location.reload();
                }
                else {
                    Dropzone.forElement("#dropzoneFrom").processQueue();
                }               
            });
  },
 };



 $(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"?r=galery/tambah",
   method:"POST",
   data:{name:name},
   success:function(data)
   {
   //window.location = "?r=galery/admin";
	  location.reload();
   }
  })
 });
 
});
</script>

<script type="text/javascript">
 $("#form-save").on('submit', function(e){
  e.preventDefault();
  $.ajax({
   method:  $(this).attr("method"), // untuk mendapatkan attribut method pada form
   url: $(this).attr("action"),  // untuk mendapatkan attribut action pada form
   data: { 
    modal_namafolder: $('#modal-namafolder').val(),
   
   },
   success:function(response){
    //console.log(response);
  $("#modal-data").empty();
    $("#modal-data").html(response.data);
    $("#tambahData").modal('hide');
    $('#modal-namafolder').val('');
	$('#mytable').DataTable();
   
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
							


