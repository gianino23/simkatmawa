<?php
/* @var $this StudiController */
/* @var $model Studi */

$this->breadcrumbs=array(
	'Studis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Studi', 'url'=>array('index')),
	array('label'=>'Manage Studi', 'url'=>array('admin')),
);
?>

<h1>Create Studi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>