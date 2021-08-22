<?php
/* @var $this PertukaranpelajarController */
/* @var $model Pertukaranpelajar */

$this->breadcrumbs=array(
	'Pertukaranpelajars'=>array('index'),
	$model->id_perpel,
);

$this->menu=array(
	array('label'=>'List Pertukaranpelajar', 'url'=>array('index')),
	array('label'=>'Create Pertukaranpelajar', 'url'=>array('create')),
	array('label'=>'Update Pertukaranpelajar', 'url'=>array('update', 'id'=>$model->id_perpel)),
	array('label'=>'Delete Pertukaranpelajar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_perpel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pertukaranpelajar', 'url'=>array('admin')),
);
?>

<h1>View Pertukaranpelajar #<?php echo $model->id_perpel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_perpel',
		'nama_program',
		'level',
		'status',
		'jml_mhs',
	),
)); ?>
