<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Rekognisi.xls");
	?>
<center>
		<h1>Data Rekognisi</h1>
</center>
<table border="1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Jenis Rekognisi</th>
										<th>Identitas Rekognisi</th>
										<th>Institusi Pemberi Rekognisi</th>
										<th>Jumlah Mahasiswa Terlibat</th>
										<th>Jumlah Dosen Terlibat</th>
										<th>Luaran Kegiatan (Sertifikat)</th>
										<th>Link Sosmed Kegiatan</th>
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
									$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Rekognisi::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_rekognisi ASC'));
											$i=0;
											 foreach ($praker as $p) {
												 $i++;
										 ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $p->jenis; ?></td>
										<td><?= $p->identitas; ?></td>
										<td><?= $p->institusi; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
										<td><?= $p->link_sosmed; ?></td>
										
									</tr>
									<?php } ?>
								</tbody>
							</table>	