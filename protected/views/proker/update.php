<?php
$id_proker=$_GET['id_proker'];
$users=Proker::model()->findByAttributes(array('id_proker'=>$id_proker));
?>
								<div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Edit Data Kalender Proker</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
											<form id="form-update" class="form-horizontal r-separator" name="modal_popup" action="?r=proker/edit" method="POST">
                                <div class="modal-body">
                                
                                <div class="card-body">
                                    <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Nama Program Kerja</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
										 <input type="hidden" name="modal_idproker" id="edit-idproker"  class="form-control" value="<?php echo $users->id_proker; ?>" />
                                             <textarea cols="3" rows="3" class="form-control" name="modal_agenda" id="edit-agenda"
                                                 required><?php echo $users->agenda; ?></textarea>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Jenis</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <select name="modal_jenis" id="edit-jenis" class="form-control select2" style="width: 100%;" required>
												<option value="" selected="selected">-- Pilih Satu --</option>
												<option value=1 >Spesifik</option>
												<option value=2 >Kondisional Bulan</option>
												<option value=3 >Kondisional Semua</option>
										   </select>
                                        </div>
                                    </div>
									 <div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Waktu</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <input type="datetime-local" class="form-control" name="modal_waktu" id="edit-waktu"
                                                value="<?php echo $users->waktu; ?>" required>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputLevel3"
                                            class="col-md-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                           <select name="modal_status" id="edit-status" class="form-control select2" style="width: 100%;" required>
												<option value="" selected="selected">-- Pilih Satu --</option>
												<option value=1 >Aktif</option>
												<option value=0 >Tidak Aktif</option>
										   </select>
                                        </div>
                                    </div>
									<div class="form-group row align-items-center mb-0">
                                        <label for="inputUsername3"
                                            class="col-md-3 text-right control-label col-form-label">Keterangan</label>
                                        <div class="col-md-9 border-left pb-2 pt-2">
                                            <input type="text" class="form-control" name="modal_keterangan" id="edit-keterangan"
                                              value="<?php echo $users->keterangan; ?>" required>
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
	