<?php
$id_profil=$_GET['id_profil'];
$users=Profil::model()->findByAttributes(array('id_profil'=>$id_profil));
?>
<div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Data Profil</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>

        <form id="form-update" class="form-horizontal r-separator" name="modal_popup" action="?r=profil/edit"
            method="POST">
            <div class="modal-body">
                <input type="hidden" name="modal_idprofil" id="edit-idprofil" class="form-control"
                    value="<?php echo $users->id_profil; ?>" />
                <div class="form-group">
                    <label>Profil</label>
                    <textarea cols="3" height="200px" class="summernote" name="modal_isi" id="edit-isi"
                        required><?php echo $users->isi; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Periode</label>
                    <select name="modal_periode" id="edit-periode" class="form-control select2" style="width: 100%;"
                        required>
                        <option value="" selected="selected">Pilih..</option>
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
            </div> <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<script>
    /************************************/
    //default editor
    /************************************/
    $('.summernote').summernote({
        height: 350, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false // set focus to editable area after initializing summernote
    });

    /************************************/
    //inline-editor
    /************************************/
    $('.inline-editor').summernote({
        airMode: true
    });

    /************************************/
    //edit and save mode
    /************************************/
    window.edit = function () {
            $(".click2edit").summernote()
        },
        window.save = function () {
            $(".click2edit").summernote('destroy');
        }

    var edit = function () {
        $('.click2edit').summernote({
            focus: true
        });
    };

    var save = function () {
        var markup = $('.click2edit').summernote('code');
        $('.click2edit').summernote('destroy');
    };

    /************************************/
    //airmode editor
    /************************************/
    $('.airmode-summer').summernote({
        airMode: true
    });
</script>