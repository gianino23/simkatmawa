<?php
$id_folder=$_GET['id_folder'];
$folders=Folder::model()->findByAttributes(array('id_folder'=>$id_folder));
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Data Folder</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <form id="form-update" class="form-horizontal r-separator" name="modal_popup" action="?r=folder/edit"
            enctype="multipart/form-data" method="POST">
            <div class="modal-body">
							            <div class="form-group">
							              <label>Username</label>
							              <input type="hidden" name="modal_idfolder" id="edit-id" class="form-control"
                                value="<?php echo $folders->id_folder; ?>" />
                            <input type="text" class="form-control" name="modal_namafolder" id="edit-namafolder"
                                value="<?php echo $folders->nama_folder; ?>" required>
							            </div>
							            <div class="form-group">
							              <label>Username</label>
                                          <textarea cols="3" rows="4" class="form-control" name="modal_deskripsi" id="edit-deskripsi"
                                required><?php echo $folders->deskripsi; ?></textarea>
							            </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->