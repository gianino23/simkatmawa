<?php
$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}										 
										 $praker = Praktikkerja::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_praktikkerja ASC'));
											 foreach ($praker as $p) {
										 ?>
									<tr>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->lokasi; ?></td>
										<td><?php echo Yii::app()->dateFormatter->format("dd MMMM y",$p->tanggal);?></td>
										<td><?= $p->jml_mhs_magang." Orang"; ?></td>
										<td align="center">
										<a href="?r=praktikkerja/detail&id=<?php echo  $p->id_praktikkerja; ?>"><i class="fas fa-eye"></i></a>
											<!--<a href="javascript:void(0)" class='open_modal' id='<?php echo  $p->id_praktikkerja; ?>'><i class="fas fa-edit"></i></a>-->
											<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id_praktikkerja; ?>'><i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>
									<?php } ?>