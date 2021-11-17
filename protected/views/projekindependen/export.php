<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Projek_Independen.xls");
	?>
<center>
		<h1>Data Projek Independen</h1>
</center>
<table border="1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Program Projek Independen</th>
										<th>Produk yang dihasilkan</th>
										<th>Link Sosmed Kegiatan</th>
										<th>Jumlah Mahasiswa Terlibat</th>
										<th>Jumlah Dosen Terlibat</th>
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
										 	$praker = Projekindependen::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_independen ASC'));
											$i=0;
											 foreach ($praker as $p) {
												 $i++;
										 ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $p->program; ?></td>
										<td><?= $p->produk; ?></td>
										<td><?= $p->link_sosmed; ?></td>
										<td><?= $p->jml_mhs." Orang"; ?></td>
										<td><?= $p->jml_dosen." Orang"; ?></td>
										<td><?= $p->luaran_kegiatan; ?></td>
										
									</tr>
									<?php } ?>
								</tbody>
							</table>	