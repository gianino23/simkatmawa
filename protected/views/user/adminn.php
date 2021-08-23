
									<?php
										 	$user = User::model()->findAll(array('order'=>'kd_user ASC'));
											 foreach ($user as $u) {
										 ?>
									<tr>
										<td><?= $u->username; ?></td>
										<td><?= $u->nama; ?></td>
										<td>
										<?php
												if(($u->level)==1){
													echo "Administrator";
												}elseif(($u->level)==2){
													echo "Operator";
												}elseif(($u->level)==3){
													echo "Non Operator";
												}
										?>
										</td>
										<td align="center">
											<a href="javascript:void(0)" class='open_modal' id='<?php echo  $u->kd_user; ?>'><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $u->kd_user; ?>'><i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>
									<?php } ?>
								