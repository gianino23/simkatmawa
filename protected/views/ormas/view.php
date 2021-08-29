<?php
/* @var $this OrmasController */
/* @var $model Ormas */

$this->breadcrumbs=array(
	'Ormases'=>array('index'),
	$model->id_ormas,
);

$this->menu=array(
	array('label'=>'List Ormas', 'url'=>array('index')),
	array('label'=>'Create Ormas', 'url'=>array('create')),
	array('label'=>'Update Ormas', 'url'=>array('update', 'id'=>$model->id_ormas)),
	array('label'=>'Delete Ormas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ormas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ormas', 'url'=>array('admin')),
);
?>

<h1>View Ormas #<?php echo $model->id_ormas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ormas',
		'profil',
		'struktur_organisasi',
		'visi_misi',
		'kalender_proker',
		'luaran_kinerja',
		'user_id',
	),
)); ?>
