<?php
/* @var $this StudiController */
/* @var $model Studi */

$this->breadcrumbs=array(
	'Studis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Studi', 'url'=>array('index')),
	array('label'=>'Create Studi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#studi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Studis</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'studi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_studi',
		'nama_program',
		'link_sosmed',
		'jml_mhs',
		'jml_dosen',
		'luaran_kegiatan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
