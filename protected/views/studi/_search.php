<?php
/* @var $this StudiController */
/* @var $model Studi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_studi'); ?>
		<?php echo $form->textField($model,'id_studi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_program'); ?>
		<?php echo $form->textField($model,'nama_program',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link_sosmed'); ?>
		<?php echo $form->textArea($model,'link_sosmed',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_mhs'); ?>
		<?php echo $form->textField($model,'jml_mhs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_dosen'); ?>
		<?php echo $form->textField($model,'jml_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luaran_kegiatan'); ?>
		<?php echo $form->textField($model,'luaran_kegiatan',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->