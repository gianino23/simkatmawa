<?php
$kd_user=$_GET['kd_user'];
$users=User::model()->findByAttributes(array('kd_user'=>$kd_user));
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Data Pengguna</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <form id="form-update" class="form-horizontal r-separator" name="modal_popup" action="?r=user/edit"
            enctype="multipart/form-data" method="POST">
            <div class="modal-body">

                <div class="form-group">
                    <label>Username</label>
                    <input type="hidden" name="modal_kduser" id="edit-id" class="form-control"
                            value="<?php echo $users->kd_user; ?>" />
                        <input type="text" class="form-control" name="modal_username" id="edit-username"
                            value="<?php echo $users->username; ?>" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="modal_password" id="edit-password" value=""
                            required>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="modal_nama" id="edit-nama"
                            value="<?php echo $users->nama; ?>" required>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="modal_level" id="edit-level" class="select2 form-control costum-select"
                            style="width: 100%;" required>
                            <option value="" selected="selected">-- Pilih Satu --</option>
                            <option value=2>Ormawa</option>
                        </select>
                </div>
                <div class="form-group">
                    <label>Ormawa</label>
                    <select name="modal_ormawa" id="edit-ormawa" class="select2 form-control costum-select"
                            style="width: 100%;" required>
                            <option value="" selected="selected">-- Pilih Satu --</option>
                            <?php
												$periode=Ormawa::model()->findAll();
												foreach($periode as $per){
												?>
                            <option value=<?php echo $per->id_ormawa;?>><?php echo $per->nama_ormawa;?></option>
                            <?php
												}
												?>
                        </select>
                </div>


            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->