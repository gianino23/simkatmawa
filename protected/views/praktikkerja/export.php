<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Praktik_Kerja.xls");
	?>
<center>
		<h1>Data Praktik Kerja</h1>
</center>
<table border="1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Program Magang/Praktik Kerja</th>
										<th>Lokasi Magang/Praktik Kerja</th>
										<th>Waktu Pelaksanaan Magang/Praktik Kerja</th>
										<th>Jumlah mahasiswa Magang/Praktik Kerja</th>
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
									$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Praktikkerja::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_praktikkerja ASC'));
											$i=0;
											 foreach ($praker as $p) {
												 $i++;
										 ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->lokasi; ?></td>
										<td><?php echo Yii::app()->dateFormatter->format("dd MMMM y",$p->tanggal);?></td>
										<td><?= $p->jml_mhs_magang." Orang"; ?></td>
										
									</tr>
									<?php } ?>
								</tbody>
							</table>	