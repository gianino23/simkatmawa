<?php
										 	$perjar = Regulasimhs::model()->findAll(array('order'=>'id_regulasimhs ASC'));
											 foreach ($perjar as $p) {
										 ?>
									<tr>
										<td><?= $p->nama; ?></td>
										<td><?= $p->isi; ?></td>
										<td><?= $p->status; ?></td>
										<td align="center">
											
											<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_regulasimhs; ?>'><i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>
									<?php } ?>