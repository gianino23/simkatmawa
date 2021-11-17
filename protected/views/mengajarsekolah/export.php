<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Mengajar_Sekolah.xls");
	?>
<center>
		<h1>Data Mengajar Sekolah</h1>
</center>
<table border="1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Program Mengajar di Sekolah</th>
										<th>Lokasi Sekolah</th>
										<th>Waktu Pelaksanaan </th>
										<th>Jumlah mahasiswa Pelaksana</th>
									</tr>
								</thead>
								<tbody id="modal-data">
									<?php
											$periode=Periode::model()->findAllByAttributes(array('status'=>1),array('limit'=>1));														
											$re=0;
											foreach($periode as $per){
											$re=$per->id;
											}
										 	$praker = Mengajarsekolah::model()->findAllByAttributes(array('periode'=>$re),array('order'=>'id_mengajar ASC'));
											$i=0;
											 foreach ($praker as $p) {
												 $i++;
										 ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $p->nama_program; ?></td>
										<td><?= $p->lokasi; ?></td>
										<td><?php echo Yii::app()->dateFormatter->format("dd MMMM y",$p->tanggal);?></td>
										<td><?= $p->jml_mhs_pelaksana." Orang"; ?></td>
										
									</tr>
									<?php } ?>
								</tbody>
							</table>	