<?php
										 	$praker = Ormawa::model()->findAll(array('order'=>'id_ormawa ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->nama_ormawa; ?></td>
										
										<td align="center">
										<a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id_ormawa; ?>'><i class="fas fa-edit"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_ormawa; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>