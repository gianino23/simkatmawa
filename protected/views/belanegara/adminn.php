<?php
										 	$praker = Belanegara::model()->findAll(array('order'=>'id_belanegara ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->judul; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
										<td align="center">
										<a href="?r=belanegara/detail&id=<?php echo  $p->id_belanegara; ?>"><i class="fas fa-eye"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_belanegara; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>