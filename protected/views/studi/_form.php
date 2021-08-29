<?php
/* @var $this StudiController */
/* @var $model Studi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'studi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_program'); ?>
		<?php echo $form->textField($model,'nama_program',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nama_program'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_sosmed'); ?>
		<?php echo $form->textArea($model,'link_sosmed',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'link_sosmed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_mhs'); ?>
		<?php echo $form->textField($model,'jml_mhs'); ?>
		<?php echo $form->error($model,'jml_mhs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_dosen'); ?>
		<?php echo $form->textField($model,'jml_dosen'); ?>
		<?php echo $form->error($model,'jml_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luaran_kegiatan'); ?>
		<?php echo $form->textField($model,'luaran_kegiatan',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'luaran_kegiatan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->