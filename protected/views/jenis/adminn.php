<?php
											
										 	$jenis = Jenis::model()->findAll(array('order'=>'id_jenis ASC'));
											 foreach ($jenis as $p) {
										 ?>
									<tr>
										<td><?= $p->nama; ?></td>
										<td><?= $p->tabel; ?></td>
										<td align="center">
										<a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id_jenis; ?>'><i class="fas fa-edit"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_jenis; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>