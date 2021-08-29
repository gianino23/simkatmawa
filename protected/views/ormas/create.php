<?php
/* @var $this OrmasController */
/* @var $model Ormas */

$this->breadcrumbs=array(
	'Ormases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ormas', 'url'=>array('index')),
	array('label'=>'Manage Ormas', 'url'=>array('admin')),
);
?>

<h1>Create Ormas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>