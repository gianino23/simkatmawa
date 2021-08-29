<?php
/* @var $this StudiController */
/* @var $model Studi */

$this->breadcrumbs=array(
	'Studis'=>array('index'),
	$model->id_studi,
);

$this->menu=array(
	array('label'=>'List Studi', 'url'=>array('index')),
	array('label'=>'Create Studi', 'url'=>array('create')),
	array('label'=>'Update Studi', 'url'=>array('update', 'id'=>$model->id_studi)),
	array('label'=>'Delete Studi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_studi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Studi', 'url'=>array('admin')),
);
?>

<h1>View Studi #<?php echo $model->id_studi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_studi',
		'nama_program',
		'link_sosmed',
		'jml_mhs',
		'jml_dosen',
		'luaran_kegiatan',
	),
)); ?>
