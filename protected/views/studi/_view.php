<?php
/* @var $this StudiController */
/* @var $data Studi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_studi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_studi), array('view', 'id'=>$data->id_studi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_program')); ?>:</b>
	<?php echo CHtml::encode($data->nama_program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_sosmed')); ?>:</b>
	<?php echo CHtml::encode($data->link_sosmed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_mhs')); ?>:</b>
	<?php echo CHtml::encode($data->jml_mhs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_dosen')); ?>:</b>
	<?php echo CHtml::encode($data->jml_dosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luaran_kegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->luaran_kegiatan); ?>
	<br />


</div>