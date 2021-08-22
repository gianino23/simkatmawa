<?php
/* @var $this PertukaranpelajarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pertukaranpelajars',
);

$this->menu=array(
	array('label'=>'Create Pertukaranpelajar', 'url'=>array('create')),
	array('label'=>'Manage Pertukaranpelajar', 'url'=>array('admin')),
);
?>

<h1>Pertukaranpelajars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
