
<div class="row page-titles">
    <div class="col-md-5 col-12 align-self-center">
        <h3 class="text-themecolor mb-0">SIMKATMAWA</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active"> Galeri</li>
        </ol>
    </div>

    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
        <div class="d-flex mt-2 justify-content-end">
            <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal"
                data-target="#tambahData">Folder Baru</button>
        </div>
    </div>

</div>


<div class="container-fluid note-has-grid">

<div class="row el-element-overlay">

<?php
            foreach($models as $model):
                $pic = Galery::model()->findByAttributes(['folder'=>$model->id_folder]);
        ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item pb-3">
                                <div class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center"> <img src="<?php if(!empty($pic)) echo Yii::app()->request->baseUrl.'/upload/'.$model->nama_folder.'/'.$pic->file; else echo Yii::app()->request->baseUrl.'/themes/materialpro/material-pro/src/assets/images/big/img2.jpg' ?>" class="d-block position-relative w-100" alt="user" />
                                    <div class="el-overlay w-100 overflow-hidden">
                                        <ul class="list-style-none el-info text-white text-uppercase d-inline-block p-0">
                                        <div id="mytable">
                                        
                                            <li class="el-item d-inline-block my-0  mx-1"><a href="?r=galery/adminn&id=<?php echo $model->id_folder;?>" class="btn default btn-outline el-link text-white border-white""><i class="icon-magnifier"></i></a></li>
              <!--  <?= CHtml::link('<i class="fas fa-search text-info"></i>',['galery/admin']) ?>-->
                    
              <li class="el-item d-inline-block my-0  mx-1"><a href="javascript:void(0)" class='btn default btn-outline el-link text-white border-white open_modal' id='<?php echo $model->id_folder; ?>'><i class="icon-note"></i></a></li>
              <li class="el-item d-inline-block my-0  mx-1"><a href="javascript:void(0)" class="btn default btn-outline el-link text-white border-white delete_modal" data-id='<?php echo  $model->id_folder; ?>'><i class="icon-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0"><?= $model->nama_folder; ?></h4> <span class="text-muted"><?= $model->deskripsi; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

<?php $this->widget('CLinkPager', array(
    'pages' => $pages,
    'header'=>'',
    'prevPageLabel'=>'<',
    'nextPageLabel'=>'>',
    'maxButtonCount'=>3,
)) ?>
</div>
</div>
<div id="tambahData" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Data Folder</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
                <form id="form-save" class="form-horizontal r-separator" name="modal_popup" action="?r=folder/tambah"
                    method="POST">
            <div class="modal-body">
							            <div class="form-group">
							              <label>Nama Folder</label>
							              <input type="text" class="form-control" name="modal_namafolder" id="modal-namafolder"
                                    placeholder="Nama Folder" required>
							            </div>
							            <div class="form-group">
							              <label>Deskripsi</label>
                                          <textarea cols="3" rows="4" class="form-control" name="modal_deskripsi" id="modal-deskripsi"
                                    placeholder="Deskripsi" required></textarea>
							            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
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
                url: "?r=folder/update",
                type: "GET",
                data: {
                    id_folder: m,
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
        $.ajax({
                method: $(this).attr("method"), // untuk mendapatkan attribut method pada form
                url: $(this).attr("action"), // untuk mendapatkan attribut action pada form
                data: {
                    modal_namafolder: $('#modal-namafolder').val(),
                    modal_deskripsi: $('#modal-deskripsi').val(),

                },
                success: function (response) {
                    //console.log(response);
                    $("#modal-data").empty();
                    $("#modal-data").html(response.data);
                    $("#tambahData").modal('hide');
                    $('#modal-namafolder').val('');
                   
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

<!-- Ajax untuk update data-->
<script type="text/javascript">
    $('body').on('submit', '#form-update', function (e) {
        e.preventDefault();
        $.ajax({
                method: $(this).attr("method"), // untuk mendapatkan attribut method pada form
                url: $(this).attr("action"), // untuk mendapatkan attribut action pada form
                data: {
                    modal_idfolder: $('#edit-id').val(),
                    modal_namafolder: $('#edit-namafolder').val(),
                    modal_deskripsi: $('#edit-deskripsi').val(),
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
        let id_folder = $(this).data('id');
        $('#modal_delete').modal('show', {
            backdrop: 'static'
        });
        $("#delete_link").on("click", function () {
            e.preventDefault();
            $.ajax({
                    method: 'POST', // untuk mendapatkan attribut method pada form
                    url: '?r=folder/hapus', // untuk mendapatkan attribut action pada form
                    data: {
                        id_folder: id_folder
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