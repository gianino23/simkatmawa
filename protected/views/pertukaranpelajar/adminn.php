<?php
										 	$perjar = Pertukaranpelajar::model()->findAll(array('order'=>'id_perpel ASC'));
											 foreach ($perjar as $p) {
										 ?>
									<tr>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->level; ?></td>
										<td><?= $p->status; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td align="center">
											<a href="?r=pertukaranpelajar/detail&id=<?php echo  $p->id_perpel; ?>"><i class="fas fa-eye"></i></a>
											<!--<a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id_perpel; ?>'><i class="fas fa-edit"></i></a>-->
											<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_perpel; ?>'><i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>
									<?php } ?>