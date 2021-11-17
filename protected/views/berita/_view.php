<?php
/* @var $this BeritaController */
/* @var $data Berita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_berita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_berita), array('view', 'id'=>$data->id_berita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi')); ?>:</b>
	<?php echo CHtml::encode($data->isi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_entry')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_entry); ?>
	<br />


</div>