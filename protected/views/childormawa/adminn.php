<?php
											$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Childormawa::model()->findAllByAttributes(array('ormawa_id'=>Yii::app()->user->ormawa,'periode'=>$re),array('order'=>'id ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->profil; ?></td>
										<td><?= $p->struktur_organisasi; ?></td>
										<td><?= $p->visi_misi; ?></td>
										<td align="center">
										<a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id; ?>'><i class="fas fa-edit"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>