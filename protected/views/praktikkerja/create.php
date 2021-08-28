<?php
/* @var $this PraktikkerjaController */
/* @var $model Praktikkerja */

$this->breadcrumbs=array(
	'Praktikkerjas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Praktikkerja', 'url'=>array('index')),
	array('label'=>'Manage Praktikkerja', 'url'=>array('admin')),
);
?>

<h1>Create Praktikkerja</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>