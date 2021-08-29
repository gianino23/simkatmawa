<?php
/* @var $this StudiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Studis',
);

$this->menu=array(
	array('label'=>'Create Studi', 'url'=>array('create')),
	array('label'=>'Manage Studi', 'url'=>array('admin')),
);
?>

<h1>Studis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
