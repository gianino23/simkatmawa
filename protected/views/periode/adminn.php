<?php
										 	$praker = Periode::model()->findAll(array('order'=>'id ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->periode; ?></td>
										<td>
										<?php
												if(($p->status)==1){
													echo "Aktif";
												}elseif(($p->status)==0){
													echo "Tidak Aktif";
												}
										?>
										</td>
										<td align="center">
										<a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id; ?>'><i class="fas fa-edit"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>