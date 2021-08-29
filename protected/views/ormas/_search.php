<?php
/* @var $this OrmasController */
/* @var $model Ormas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ormas'); ?>
		<?php echo $form->textField($model,'id_ormas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profil'); ?>
		<?php echo $form->textArea($model,'profil',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'struktur_organisasi'); ?>
		<?php echo $form->textArea($model,'struktur_organisasi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visi_misi'); ?>
		<?php echo $form->textArea($model,'visi_misi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kalender_proker'); ?>
		<?php echo $form->textArea($model,'kalender_proker',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luaran_kinerja'); ?>
		<?php echo $form->textArea($model,'luaran_kinerja',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->