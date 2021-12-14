<style>
	.note-editor.note-frame .note-editing-area .note-editable {
		height: 300px;
	}
</style>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'childormawa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<div class="row">
	<!-- Column -->
	<div class="col-12">
	<?php echo $form->errorSummary($model); ?>
		<div class="card">
			<div class="card-body">
				<div class="form-group">
					<label class="control-label">Periode</label>
					<?php 
									$per = CHtml::listData(Periode::model()->findAllByAttributes(['status'=>1]),'id','periode');
									echo $form->dropDownList($model,'periode',$per,
									array(
										'prompt'=>'Pilih..',
										'required'=>true,
										'class'=>'form-control'));
								?>
				</div>
				<div class="form-group">
					<label class="control-label">Profil</label>
					<?php echo $form->textArea($model,'profil',array('class'=>'form-control summernote')); ?>
				</div>
				<div class="form-group">
					<label class="control-label">Struktur Organisasi</label>
					<?php echo $form->textArea($model,'struktur_organisasi',array('class'=>'form-control summernote')); ?>
				</div>
				<div class="form-group">
					<label class="control-label">Visi Misi</label>
					<?php echo $form->textArea($model,'visi_misi',array('class'=>'form-control summernote')); ?>
				</div>
				<?= CHtml::link('Kembali',array('childormawa/admin'),array('class'=>'btn btn-warning')) ?>
				<?= CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save',array('class'=>'btn btn-success float-right')); ?>
			</div>
			</div>
		</div>
	</div>
	<!-- Column -->
	<!-- Column -->
</div>

<?php $this->endWidget(); ?>