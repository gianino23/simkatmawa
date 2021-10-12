<?php
$id_profil=$_GET['id_profil'];
$users=Profil::model()->findByAttributes(array('id_profil'=>$id_profil));
?>
								<div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Edit Data Profil</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
											<form id="form-update" class="form-horizontal r-separator" name="modal_popup" action="?r=profil/edit" method="POST">
                                <div class="modal-body">
                                
                                <div class="card-body">
                                    <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Nama Profil</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
										 <input type="hidden" name="modal_idprofil" id="edit-idprofil"  class="form-control" value="<?php echo $users->id_profil; ?>" />
                                            <input type="text" class="form-control" name="modal_nama" id="edit-nama"
                                                value="<?php echo $users->nama; ?>" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputPassword3"
                                            class="col-md-3 text-right control-label col-form-label">Isi Profil</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <textarea cols="3" rows="3" class="form-control" name="modal_isi" id="edit-isi"
                                                 required><?php echo $users->isi; ?></textarea>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Periode</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <select name="modal_periode" id="edit-periode" class="form-control select2" style="width: 100%;" required>
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
											<button class="btn btn-success" type="submit">Update</button>
											<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">Cancel</button>	
                                            </div>
								</form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->