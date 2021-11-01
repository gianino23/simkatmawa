<?php
$id_regulasimhs=$_GET['id_regulasimhs'];
$regulasi=Regulasimhs::model()->findByAttributes(array('id_regulasimhs'=>$id_regulasimhs));
?>
								<div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">View Dokumen</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
											<form id="form-update" class="form-horizontal r-separator" name="modal_popup" action="#">
                                <div class="modal-body">
                                
                                <div class="card-body">
                                    <embed src="<?= Yii::app()->request->baseUrl.'/upload/'.$regulasi->isi; ?>" height="350px" width="100%" />
											
                                </div>
                            
                                </div>
                                            <div class="modal-footer">
										
											<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">Kembali</button>	
                                            </div>
								</form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->