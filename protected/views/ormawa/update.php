<?php
$id_ormawa=$_GET['id_ormawa'];
$users=Ormawa::model()->findByAttributes(array('id_ormawa'=>$id_ormawa));
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Data Ormawa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <form id="form-update" class="form-horizontal r-separator" name="modal_popup" action="?r=ormawa/edit"
            method="POST">
            <div class="modal-body">

                <div class="form-group">
                    <label>Nama Organisasi Mahasiswa</label>
                    <input type="hidden" name="modal_id" id="edit-id" class="form-control"
                        value="<?php echo $users->id_ormawa; ?>" />
                    <input type="text" class="form-control" name="modal_nama" id="edit-nama"
                        value="<?php echo $users->nama_ormawa; ?>" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->