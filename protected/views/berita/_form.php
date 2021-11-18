<?php
/* @var $this BeritaController */
/* @var $model Berita */
/* @var $form CActiveForm */
?>
<style>
	.note-editor.note-frame .note-editing-area .note-editable {
		height: 300px;
	}
</style>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'berita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<div class="row">
	<!-- Column -->
	<div class="col-lg-8 col-xl-9 col-md-9">
	<?php echo $form->errorSummary($model); ?>
		<div class="card">
			<div class="card-body">
				<div class="form-group">
					<label class="control-label">Judul</label>
					<?php echo $form->textField($model,'judul',array('class'=>'form-control')); ?>
					<!-- <input type="text" id="firstName" class="form-control" placeholder="Rounded Chair"> -->
				</div>
				<div class="form-group">
					<label class="control-label">Isi</label>
					<?php echo $form->textArea($model,'isi',array('class'=>'form-control summernote')); ?>
					<!-- <textarea class="form-control summernote">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea> -->
				</div>
			</div>
		</div>
	</div>
	<!-- Column -->
	<!-- Column -->
	<div class="col-lg-4 col-xl-3 col-md-3">
		<div class="card">
			<div class="card-body">
				<label class="control-label">Cover/Thumbnail</label>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<?php echo $form->fileField($model,'cover',array('class'=>'custom-file-input')); ?>
						<!-- <input type="file" class="custom-file-input" id="inputGroupFile01"> -->
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
					</div>
				</div>
				<div class="form-group mb-4">
					<label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
					<?php 
																					echo $form->dropDownList($model,'status',array('1'=>'Publish','2'=>'Draft'),array('class'=>'custom-select mr-sm-2','empty'=>'Pilih..'));
																				?>
					<!-- <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected="">Pilih...</option>
                                            <option value="1">Publish</option>
                                            <option value="0">Draft</option>
                                        </select> -->
				</div>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save',array('class'=>'btn btn-success btn-block')); ?>
			</div>
		</div>
		<!-- Column -->
	</div>
</div>

<?php $this->endWidget(); ?>