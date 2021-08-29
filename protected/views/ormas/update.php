<?php
/* @var $this OrmasController */
/* @var $model Ormas */

$this->breadcrumbs=array(
	'Ormases'=>array('index'),
	$model->id_ormas=>array('view','id'=>$model->id_ormas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ormas', 'url'=>array('index')),
	array('label'=>'Create Ormas', 'url'=>array('create')),
	array('label'=>'View Ormas', 'url'=>array('view', 'id'=>$model->id_ormas)),
	array('label'=>'Manage Ormas', 'url'=>array('admin')),
);
?>

<h1>Update Ormas <?php echo $model->id_ormas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>