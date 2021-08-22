<?php
/* @var $this PertukaranpelajarController */
/* @var $data Pertukaranpelajar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_perpel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_perpel), array('view', 'id'=>$data->id_perpel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_program')); ?>:</b>
	<?php echo CHtml::encode($data->nama_program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_mhs')); ?>:</b>
	<?php echo CHtml::encode($data->jml_mhs); ?>
	<br />


</div>