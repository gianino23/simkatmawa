<?php
										 	$praker = Rekognisi::model()->findAll(array('order'=>'id_rekognisi ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->jenis; ?></td>
										<td><?= $p->identitas; ?></td>
										<td><?= $p->institusi; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
										<td><?= $p->link_sosmed; ?></td>
										<td align="center">
										<a href="?r=rekognisi/detail&id=<?php echo  $p->id_rekognisi; ?>"><i class="fas fa-eye"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_rekognisi; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>