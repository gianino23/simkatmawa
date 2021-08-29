<?php
										 	$praker = Profil::model()->findAll(array('order'=>'id_profil ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->nama; ?></td>
										<td><?= $p->isi; ?></td>
										<td>
										<?php
												if(($p->status)==1){
													echo "Aktif";
												}elseif(($p->status)==2){
													echo "Tidak Aktif";
												}
										?>
										</td>
										<td align="center">
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_profil; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>