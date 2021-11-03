<style>
                  .note-content img {
                    width: -webkit-fill-available !important;
                  }
                </style>
<div class="row page-titles">
  <div class="col-md-5 col-12 align-self-center">
    <h3 class="text-themecolor mb-0">SIMKATMAWA</h3>
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Profil</li>
    </ol>
  </div>
  <div class="col-md-7 col-12 align-self-center d-none d-md-block">
    <div class="d-flex mt-2 justify-content-end">
      <?php
        $jenis = Jenis::model()->findByAttributes(['tabel'=>'profil']);
        $tentang = Profil::model()->findByAttributes(['jenis_id'=>1,'periode'=>$this->periode->id]);
        $struktur = Profil::model()->findByAttributes(['jenis_id'=>2,'periode'=>$this->periode->id]); 
        if((empty($tentang)) || (empty($struktur))) {
      ?>
      <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal"
        data-target="#tambahData">Tambah Data</button>
        <?php } ?>
    </div>
  </div>
</div>

<div class="container-fluid note-has-grid">
  <!-- <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active"
				id="all-category">
				<i class="icon-layers mr-1"></i><span class="d-none d-md-block">All Notes</span></a>
		</li>
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-business">
				<i class="icon-briefcase mr-1"></i><span class="d-none d-md-block">Business</span></a>
		</li>
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-social">
				<i class="icon-share-alt mr-1"></i><span class="d-none d-md-block">Social</span></a>
		</li>
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-important">
				<i class="icon-tag mr-1"></i><span class="d-none d-md-block">Important</span></a>
		</li>
		<li class="nav-item ml-auto"> <a href="javascript:void(0)"
				class="nav-link btn-primary rounded-pill d-flex align-items-center px-3" id="add-notes">
				<i class="icon-note m-1"></i><span class="d-none d-md-block font-14">Add Notes</span></a>
		</li>
	</ul> -->
  <!-- <div class="row">
		<div class="col-lg-3 col-md-6">
			<div class="card bg-white">
				<div class="card-body">
					<div id="myCarousel4" class="carousel vert slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item flex-column">
								<i class="ti-wordpress font-20"></i>
								<p>SIMKATMAWA</p>
								<h3>Dynamic website with responsive</h3>
								<div>
									<button class="btn btn-info justify-content-start waves-effect waves-light mt-3">Default</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
  <div class="tab-content">
    <div id="note-full-container" class="note-has-grid row">

      <?php
            
            $periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
            $re=0;
            foreach($periode as $per){
            $re=$per->id;
            }
                $praker = Profil::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_profil ASC'));
                foreach ($praker as $p) {
					 $jenis=Jenis::model()->findByAttributes(array('id_jenis'=>$p->jenis_id));
            ?>
      <div class="col-md-6 single-note-item all-category">
        <div class="card">
          <div class="card-body">
            <span class="side-stick"></span>
            <p class="note-date font-12 text-muted mb-0">Profile</p>
            <h5 class="note-title text-truncate w-75 mb-0"><?= $jenis->nama; ?>
            </h5>
            <div class="note-content">
              <p class="note-inner-content text-muted"
                data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">

                <?= $p->isi; ?></p>
            </div>
          </div>
          <div class="card-footer" id="mytable">
            <a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id_profil; ?>'><i
                class="fas fa-edit text-warning"></i></a>
            <a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_profil; ?>'><i
                class="fas fa-trash-alt text-danger"></i></a>

          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->

<div id="tambahData" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Tambah Data Profil</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <form id="form-save" class="form-horizontal r-separator" name="modal_popup" action="?r=profil/tambah"
          method="POST">
          <div class="card-body">
            <div class="form-group row align-items-center mb-0">
              <label for="inputUsername3" class="col-md-3 text-right control-label col-form-label">Nama Profil</label>
              <div class="col-md-9 border-left pb-2 pt-2">
                <select name="modal_nama" id="modal-nama" class="form-control select2" style="width: 100%;" required>
                  <option value="" selected="selected">-- Pilih Satu --</option>
                  <?php
												  $jeniss=Jenis::model()->findAllByAttributes(array('tabel'=>'profil'));
												foreach($jeniss as $jen){
                          $prof = Profil::model()->findByAttributes(['jenis_id'=>$jen->id_jenis,'periode'=>$this->periode->id]);
                                                    if(empty($prof)){
												?>
                  <option value=<?php echo $jen->id_jenis;?>><?php echo $jen->nama;?></option>
                  <?php
												}}
												?>
                </select>

              </div>
            </div>
            <div class="form-group row align-items-center mb-0">
              <label for="inputPassword3" class="col-md-3 text-right control-label col-form-label">Isi Profil</label>
              <div class="col-md-9 border-left pb-2 pt-2">
                <textarea cols="3" rows="3" class="summernote" name="modal_isi" id="modal-isi" placeholder="Isi Profil"
                  required></textarea>
              </div>
            </div>
            <div class="form-group row align-items-center mb-0">
              <label for="inputLevel3" class="col-md-3 text-right control-label col-form-label">Periode</label>
              <div class="col-md-9 border-left pb-2 pt-2">
                <select name="modal_periode" id="modal-periode" class="form-control select2" style="width: 100%;"
                  required>
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
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
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
        <button type="button" class="btn btn-danger" id="delete_link">Hapus</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('#mytable').on('click', '.open_modal', function (e) {
      var m = $(this).attr("id");
      $.ajax({
        url: "?r=profil/update",
        type: "GET",
        data: {
          id_profil: m,
        },
        success: function (ajaxData) {
          $("#ModalEdit").html(ajaxData);
          $("#ModalEdit").modal('show', {
            backdrop: 'true'
          });
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $("#form-save").on('submit', function (e) {
    e.preventDefault();


    let formData = new FormData();

    formData.append('modal_nama', $('#modal-nama').val());
    formData.append('modal_isi', $('#modal-isi').val());
    formData.append('modal_periode', $('#modal-periode').val());

    $.ajax({


        method: $(this).attr("method"), // untuk mendapatkan attribut method pada form
        url: $(this).attr("action"), // untuk mendapatkan attribut action pada form
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (response) {

          console.log(response);
          $("#modal-data").empty();
          $("#modal-data").html(response.data);
          $("#tambahData").modal('hide');
          $('#modal-nama').val('').change();
          $('#modal-isi').val('');
          $('#modal-periode').val('');
          location.reload();
        },
        error: function (xhr, ajaxOptions, thrownError) {
          console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        },
        beforeSend: function (b) {
          // Before function here

        }
      })
      .done(function (d) {
        // When ajax finished

      });
  });
</script>

<!-- Ajax untuk update data-->
<script type="text/javascript">
  $('body').on('submit', '#form-update', function (e) {
    e.preventDefault();
    $.ajax({
        method: $(this).attr("method"), // untuk mendapatkan attribut method pada form
        url: $(this).attr("action"), // untuk mendapatkan attribut action pada form
        data: {
          modal_idprofil: $('#edit-idprofil').val(),
          modal_nama: $('#edit-nama').val(),
          modal_isi: $('#edit-isi').val(),
          modal_periode: $('#edit-periode').val(),
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
</script>

<!-- Ajax untuk delete data-->
<script type="text/javascript">
  $('body').on('click', '.delete_modal', function (e) {
    let id_profil = $(this).data('id');
    $('#modal_delete').modal('show', {
      backdrop: 'static'
    });
    $("#delete_link").on("click", function () {
      e.preventDefault();
      $.ajax({
          method: 'POST', // untuk mendapatkan attribut method pada form
          url: '?r=profil/hapus', // untuk mendapatkan attribut action pada form
          data: {
            id_profil: id_profil
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
</script>
