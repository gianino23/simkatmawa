<?php
											$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Proker::model()->findAllByAttributes(array('ormawa_id'=>Yii::app()->user->ormawa,'periode'=>$re),array('order'=>'id_proker ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->agenda; ?></td>
										<td><?= $p->waktu; ?></td>
										<td>
										<?php
												if(($p->jenis)==1){
													echo "Spesifik";
												}elseif(($p->jenis)==2){
													echo "Kondisional Bulan";
												}elseif(($p->jenis)==3){
													echo "Kondisional Semua";
												}
										?>
										</td>
										<td>
										<?php
												if(($p->status)==1){
													echo "aktif";
												}elseif(($p->status)==0){
													echo "Tidak Aktif";
												}
										?>
										</td>
										<td><?= $p->keterangan; ?></td>
										<td align="center">
										<a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id_proker; ?>'><i class="fas fa-edit"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_proker; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>