<?php
/* @var $this StudiController */
/* @var $model Studi */

$this->breadcrumbs=array(
	'Studis'=>array('index'),
	$model->id_studi=>array('view','id'=>$model->id_studi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Studi', 'url'=>array('index')),
	array('label'=>'Create Studi', 'url'=>array('create')),
	array('label'=>'View Studi', 'url'=>array('view', 'id'=>$model->id_studi)),
	array('label'=>'Manage Studi', 'url'=>array('admin')),
);
?>

<h1>Update Studi <?php echo $model->id_studi; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>