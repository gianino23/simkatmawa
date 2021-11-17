<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Projek_Kemanusian.xls");
	?>
<center>
		<h1>Data Projek Kemanusian</h1>
</center>
<table border="1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Program/Projek Kemanusiaan</th>
										<th>Judul Kegiatan</th>
										<th>Jumlah Mahasiswa yang terlibat</th>
										<th>Jumlah Dosen yang terlibat</th>
										<th>Luaran Kegiatan</th>
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
									$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Projekkemanusian::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_projekkemanusian ASC'));
											$i=0;
											 foreach ($praker as $p) {
											$i++;
										 ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->judul_kegiatan; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
										
									</tr>
									<?php } ?>
								</tbody>
							</table>	