	<?php
										 	$praker = Ikatanalumni::model()->findAll(array('order'=>'id_alumni ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->profil_ika; ?></td>
										<td><?= $p->program_kerja; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
										<td align="center">
										<a href="?r=ikatanalumni/detail&id=<?php echo  $p->id_alumni; ?>"><i class="fas fa-eye"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_alumni; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>