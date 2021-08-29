<?php
/* @var $this OrmasController */
/* @var $model Ormas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ormas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'profil'); ?>
		<?php echo $form->textArea($model,'profil',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'profil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'struktur_organisasi'); ?>
		<?php echo $form->textArea($model,'struktur_organisasi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'struktur_organisasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visi_misi'); ?>
		<?php echo $form->textArea($model,'visi_misi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'visi_misi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kalender_proker'); ?>
		<?php echo $form->textArea($model,'kalender_proker',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'kalender_proker'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luaran_kinerja'); ?>
		<?php echo $form->textArea($model,'luaran_kinerja',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'luaran_kinerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->