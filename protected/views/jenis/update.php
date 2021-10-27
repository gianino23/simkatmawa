<?php
$id_jenis=$_GET['id_jenis'];
$users=Jenis::model()->findByAttributes(array('id_jenis'=>$id_jenis));

?>
								<div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Edit Data Jenis</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
											
                                <div class="modal-body">
                                <form id="form-update" class="form-horizontal r-separator" name="modal_popup" action="?r=jenis/edit" method="POST">
                                <div class="card-body">
                                    <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Nama Jenis</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
										 <input type="hidden" name="modal_idjenis" id="edit-idjenis"  class="form-control" value="<?php echo $users->id_jenis; ?>" />
										 <input type="text" value="<?php echo $users->nama; ?>" name="modal_nama" id="edit-nama" class="form-control">
                                           
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Menu</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <select name="modal_tabel" id="edit-tabel" class="form-control select2" style="width: 100%;" required>
												<option value="" selected="selected">-- Pilih Satu --</option>
												<option value="profil" >Profil</option>
												<option value="regulasi" >Regulasi</option>
												
										   </select>
                                        </div>
                                    </div>
																		
                                </div>
                                            <div class="modal-footer">
											<button class="btn btn-success" type="submit">Update</button>
											<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">Cancel</button>	
                                            </div>
								</form>
								 </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
