<?php
/* @var $this GdNilaiController */
/* @var $model GdNilai */

$this->breadcrumbs=array(
	'Gd Nilais'=>array('index'),
	$model->id_nilai,
);

$this->menu=array(
	array('label'=>'List GdNilai', 'url'=>array('index')),
	array('label'=>'Create GdNilai', 'url'=>array('create')),
	array('label'=>'Update GdNilai', 'url'=>array('update', 'id'=>$model->id_nilai)),
	array('label'=>'Delete GdNilai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_nilai),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdNilai', 'url'=>array('admin')),
);
?>

<h1>View GdNilai #<?php echo $model->id_nilai; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_nilai',
		'id_jawaban',
		'nilai',
	),
)); ?>
