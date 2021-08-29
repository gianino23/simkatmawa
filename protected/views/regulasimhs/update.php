<?php
/* @var $this PertukaranpelajarController */
/* @var $model Pertukaranpelajar */

$this->breadcrumbs=array(
	'Pertukaranpelajars'=>array('index'),
	$model->id_perpel=>array('view','id'=>$model->id_perpel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pertukaranpelajar', 'url'=>array('index')),
	array('label'=>'Create Pertukaranpelajar', 'url'=>array('create')),
	array('label'=>'View Pertukaranpelajar', 'url'=>array('view', 'id'=>$model->id_perpel)),
	array('label'=>'Manage Pertukaranpelajar', 'url'=>array('admin')),
);
?>

<h1>Update Pertukaranpelajar <?php echo $model->id_perpel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>