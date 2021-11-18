
									<?php
										 	$berita = Berita::model()->findAll(array('order'=>'tgl_entry DESC'));
											 foreach ($berita as $p) {
										 ?>
									<tr>
										<td><?= $p->tgl_entry; ?></td>
										<td><?= $p->judul; ?></td>
										<td><?= $p->author; ?></td>
										
										<td align="center">
                                            <div class="btn-group">
										<a href="javascript:void(0)" class='btn btn-sm btn-warning open_modal' id='<?php echo  $p->id_berita; ?>'><i class="fas fa-edit"></i></a>
										<a href="javascript:void(0)" class="btn btn-sm btn-danger delete_modal" data-id='<?php echo  $p->id_berita; ?>'><i class="fas fa-trash-alt"></i></a>	
                                             </div>
                                    </td>
									</tr>
									<?php } ?>