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
                <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                    <div class="d-flex mt-2 justify-content-end">
						 <a href="?r=folder/admin" type="button" class="btn waves-effect waves-light btn-danger mr-2" >Kembali</a>
						 <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#tambahData">Tambah Data</button>
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
                                <!-- <div class="card-columns el-element-overlay"> -->

					<?php
					
                    $folder_name = 'upload/'.$folder->nama_folder.'/';
                    $result = array();
                    $files = scandir('upload/'.$folder->nama_folder);
                    $output = '<div class="card-columns el-element-overlay">';

                    if(false !== $files){
                     foreach($files as $file){
                      if('.' !=  $file && '..' != $file){
                       $output .= '
                       <div class="card">
                        <div class="el-card-item pb-3">
                            <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative text-center">
                                <a class="image-popup-vertical-fit" href="'.$folder_name.$file.'"> <img src="'.$folder_name.$file.'" class="d-block position-relative w-100" alt="user" /> </a>
                            </div>
                        </div>

                        <div class="el-card-content text-center pb-3">
                        <button type="button" class="btn btn-danger btn-sm remove_image" id="'.$file.'">Hapus Gambar</button>
                    </div>
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
<script>

$(document).ready(function(){
 
 Dropzone.options.dropzoneFrom = {
  parallelUploads: 10,
  maxFiles : 10,
  maxFilesize : 2,
  autoProcessQueue : false,
  autoQueue : true,
  autoProcessQueue: false,
   dictDefaultMessage: "Letakan File Disini | File Maksimal 10 File | Setiap File Maks 2MB",
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
  init: function(){
 this.on("error", function (file, message) {
                        alert(message);
                        this.removeFile(file);
                    }); 
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
							


