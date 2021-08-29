<?php
/* @var $this OrmasController */
/* @var $data Ormas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ormas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ormas), array('view', 'id'=>$data->id_ormas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profil')); ?>:</b>
	<?php echo CHtml::encode($data->profil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('struktur_organisasi')); ?>:</b>
	<?php echo CHtml::encode($data->struktur_organisasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visi_misi')); ?>:</b>
	<?php echo CHtml::encode($data->visi_misi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kalender_proker')); ?>:</b>
	<?php echo CHtml::encode($data->kalender_proker); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luaran_kinerja')); ?>:</b>
	<?php echo CHtml::encode($data->luaran_kinerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>