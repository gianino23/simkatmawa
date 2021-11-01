<?php
										 	$perjar = Regulasimhs::model()->findAll(array('order'=>'id_regulasimhs ASC'));
											 foreach ($perjar as $p) {
												  $jenis=Jenis::model()->findByAttributes(array('id_jenis'=>$p->jenis_id));
										 ?>
									<tr>
										<td><?= $jenis->nama; ?></td>
										<td><?= $p->isi; ?></td>
										<td><?= $p->status; ?></td>
										<td align="center">
											<a href="upload/<?php echo $p->isi;?>" onclick="return confirm('Apakah Anda ingin mendownload file ini ?');"><i class="fas fa-download"></i></a>
											<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_regulasimhs; ?>'><i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>
									<?php } ?>