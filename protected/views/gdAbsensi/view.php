<?php
/* @var $this GdAbsensiController */
/* @var $model GdAbsensi */

$this->breadcrumbs=array(
	'Gd Absensis'=>array('index'),
	$model->id_absen,
);

$this->menu=array(
	array('label'=>'List GdAbsensi', 'url'=>array('index')),
	array('label'=>'Create GdAbsensi', 'url'=>array('create')),
	array('label'=>'Update GdAbsensi', 'url'=>array('update', 'id'=>$model->id_absen)),
	array('label'=>'Delete GdAbsensi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_absen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdAbsensi', 'url'=>array('admin')),
);
?>

<h1>View GdAbsensi #<?php echo $model->id_absen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_absen',
		'tanggal',
		'NIS',
		'status_kehadiran',
	),
)); ?>
