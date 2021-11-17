<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Penelitian.xls");
	?>
<center>
		<h1>Data Penilitian</h1>
</center>
<table border="1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Program/Skim Penelitian/Riset Mahasiswa</th>
										<th>Judul Penelitian</th>
										<th>Jumlah Mahasiswa yang terlibat</th>
										<th>Jumlah Dosen yang terlibat</th>
										<th>Luaran Penelitian</th>
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
									$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Penelitian::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_penelitian ASC'));
											$i=0;
											 foreach ($praker as $p) {
												 $i++;
										 ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->judul_penelitian; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_penelitian; ?></td>
									
									</tr>
									<?php } ?>
								</tbody>
							</table>	