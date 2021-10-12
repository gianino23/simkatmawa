<?php
										 	$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
											$praker = Projekindependen::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_independen ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->program; ?></td>
										<td><?= $p->produk; ?></td>
										<td><?= $p->link_sosmed; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
										<td align="center">
										<a href="?r=projekindependen/detail&id=<?php echo  $p->id_independen; ?>"><i class="fas fa-eye"></i></a>
										<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_independen; ?>'><i class="fas fa-trash-alt"></i></a>	
										</td>
									</tr>
									<?php } ?>