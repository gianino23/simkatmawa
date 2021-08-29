<?php
/* @var $this PertukaranpelajarController */
/* @var $model Pertukaranpelajar */

$this->breadcrumbs=array(
	'Pertukaranpelajars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pertukaranpelajar', 'url'=>array('index')),
	array('label'=>'Manage Pertukaranpelajar', 'url'=>array('admin')),
);
?>

<h1>Create Pertukaranpelajar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>