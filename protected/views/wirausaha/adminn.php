<?php
										 	$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
											$praker = Wirausaha::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_wirausaha ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->bidang_usaha; ?></td>
										<td><?= $p->jml_mhspelaksana." Orang"; ?></td>
										<td><?= $p->link_sosmed; ?></td>
										<td><?= $p->jml_mhsterlibat." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
										<td align="center">
										<a href="?r=wirausaha/detail&id=<?php echo  $p->id_wirausaha; ?>"><i class="fas fa-eye"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_wirausaha; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>