<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	$model->id_berita,
);

$this->menu=array(
	array('label'=>'List Berita', 'url'=>array('index')),
	array('label'=>'Create Berita', 'url'=>array('create')),
	array('label'=>'Update Berita', 'url'=>array('update', 'id'=>$model->id_berita)),
	array('label'=>'Delete Berita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_berita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Berita', 'url'=>array('admin')),
);
?>

<h1>View Berita #<?php echo $model->id_berita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_berita',
		'judul',
		'isi',
		'author',
		'status',
		'tgl_entry',
	),
)); ?>
