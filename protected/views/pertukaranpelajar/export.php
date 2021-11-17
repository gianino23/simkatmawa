<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Pertukaran_Pelajar.xls");
	?>
<center>
		<h1>Data Pertukaran Pelajar</h1>
</center>
<table border="1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Program</th>
										<th>Level</th>
										<th>Status</th>
										<th width="10%">Jumlah Mahasiswa</th>
										
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
											$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$perjar = Pertukaranpelajar::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_perpel ASC'));
											$i=0;
											 foreach ($perjar as $p) {
												 $i++;
										 ?>
									<tr>
										<td><center><?= $i; ?></td>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->level; ?></td>
										<td><?= $p->status; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										
									</tr>
									<?php } ?>
								</tbody>
							</table>	