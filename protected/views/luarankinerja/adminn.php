<?php
										 	$perjar = Luarankinerja::model()->findAll(array('order'=>'id DESC'));
											 foreach ($perjar as $p) {
										 ?>
									<tr>
										<td><?= $p->file; ?></td>
										<td align="center">
											<a href="upload/<?php echo $p->file;?>" onclick="return confirm('Apakah Anda ingin mendownload file ini ?');"><i class="fas fa-download"></i></a>
											<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $p->id; ?>'><i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>
									<?php } ?>