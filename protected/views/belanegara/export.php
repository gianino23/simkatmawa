<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Bela_Negara.xls");
	?>
<center>
		<h1>Data Bela Negara</h1>
</center>
<table border="1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Program Bela Negara</th>
										<th>Judul Kegiatan dan Topik Kegiatan</th>
										<th>Jumlah Mahasiswa Terlibat</th>
										<th>Jumlah Dosen Terlibat</th>
										<th>Luaran Kegiatan (Sertifikat)</th>
										
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
									$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Belanegara::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_belanegara ASC'));
											$i=0;
											 foreach ($praker as $p) {
												 $i++;
										 ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->judul; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>	