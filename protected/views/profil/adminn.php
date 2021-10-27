<?php
											$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Profil::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_profil ASC'));
											 foreach ($praker as $p) {
												  $jenis=Jenis::model()->findByAttributes(array('id_jenis'=>$p->jenis_id));
										 ?>
									<tr>
										<td><?= $jenis->nama; ?></td>
										<td><?= $p->isi; ?></td>
										<td align="center">
										<a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id_profil; ?>'><i class="fas fa-edit"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_profil; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>