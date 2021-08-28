<?php
										 	$praker = Mengajarsekolah::model()->findAll(array('order'=>'id_mengajar ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->lokasi; ?></td>
										<td><?php echo Yii::app()->dateFormatter->format("dd MMMM y",$p->tanggal);?></td>
										<td><?= $p->jml_mhs_pelaksana." Orang"; ?></td>
										<td align="center">
										<a href="?r=mengajarsekolah/detail&id=<?php echo  $p->id_mengajar; ?>"><i class="fas fa-eye"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_mengajar; ?>'><i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>
									<?php } ?>