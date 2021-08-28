<?php
/* @var $this PraktikkerjaController */
/* @var $model Praktikkerja */

$this->breadcrumbs=array(
	'Praktikkerjas'=>array('index'),
	$model->id_praktikkerja=>array('view','id'=>$model->id_praktikkerja),
	'Update',
);

$this->menu=array(
	array('label'=>'List Praktikkerja', 'url'=>array('index')),
	array('label'=>'Create Praktikkerja', 'url'=>array('create')),
	array('label'=>'View Praktikkerja', 'url'=>array('view', 'id'=>$model->id_praktikkerja)),
	array('label'=>'Manage Praktikkerja', 'url'=>array('admin')),
);
?>

<h1>Update Praktikkerja <?php echo $model->id_praktikkerja; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>