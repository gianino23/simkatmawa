
									<?php
										 	$folder = Folder::model()->findAll(array('order'=>'id_folder ASC'));
											$i=0;
											 foreach ($folder as $f) {
												 $i++;
										 ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $f->nama_folder; ?></td>
										<td><?= "upload/".$f->nama_folder."/"; ?></td>
										<td align="center">
											<a href="javascript:void(0)" class='open_modal' id='<?php echo  $f->id_folder; ?>'><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $f->id_folder; ?>'><i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>
									<?php } ?>
								