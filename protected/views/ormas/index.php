<?php
/* @var $this OrmasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ormases',
);

$this->menu=array(
	array('label'=>'Create Ormas', 'url'=>array('create')),
	array('label'=>'Manage Ormas', 'url'=>array('admin')),
);
?>

<h1>Ormases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
