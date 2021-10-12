<?php
$id=$_GET['id'];
$users=Periode::model()->findByAttributes(array('id'=>$id));
?>
								<div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Edit Data Periode</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
											<form id="form-update" class="form-horizontal r-separator" name="modal_popup" action="?r=periode/edit" method="POST">
                                <div class="modal-body">
                                
                                <div class="card-body">
                                    <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Nama Periode</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
										 <input type="hidden" name="modal_id" id="edit-id"  class="form-control" value="<?php echo $users->id; ?>" />
                                            <input type="text" class="form-control" name="modal_periode" id="edit-periode"
                                                value="<?php echo $users->periode; ?>" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <select name="modal_status" id="edit-status" class="form-control select2" style="width: 100%;" required>
												<option value="" selected="selected">-- Pilih Satu --</option>
												<option value=1>Aktif</option>
												<option value=0>Tidak Aktif</option>
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