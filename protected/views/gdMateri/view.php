<?php
/* @var $this GdMateriController */
/* @var $model GdMateri */

$this->breadcrumbs=array(
	'Gd Materis'=>array('index'),
	$model->id_materi,
);

$this->menu=array(
	array('label'=>'List GdMateri', 'url'=>array('index')),
	array('label'=>'Create GdMateri', 'url'=>array('create')),
	array('label'=>'Update GdMateri', 'url'=>array('update', 'id'=>$model->id_materi)),
	array('label'=>'Delete GdMateri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_materi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdMateri', 'url'=>array('admin')),
);
?>

<h1>View GdMateri #<?php echo $model->id_materi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_materi',
		'id_topik',
		'deskripsi',
		'file_materi',
	),
)); ?>
