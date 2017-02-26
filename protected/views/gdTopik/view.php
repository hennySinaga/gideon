<?php
/* @var $this GdTopikController */
/* @var $model GdTopik */

$this->breadcrumbs=array(
	'Gd Topiks'=>array('index'),
	$model->id_topik,
);

$this->menu=array(
	array('label'=>'List GdTopik', 'url'=>array('index')),
	array('label'=>'Create GdTopik', 'url'=>array('create')),
	array('label'=>'Update GdTopik', 'url'=>array('update', 'id'=>$model->id_topik)),
	array('label'=>'Delete GdTopik', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_topik),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdTopik', 'url'=>array('admin')),
);
?>

<h1>View GdTopik #<?php echo $model->id_topik; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_topik',
		'id_matapelajaran',
		'topik',
	),
)); ?>
