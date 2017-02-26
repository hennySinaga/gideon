<?php
/* @var $this GdAbsensiController */
/* @var $model GdAbsensi */

$this->breadcrumbs=array(
	'Gd Absensis'=>array('index'),
	$model->id_absen=>array('view','id'=>$model->id_absen),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdAbsensi', 'url'=>array('index')),
	array('label'=>'Create GdAbsensi', 'url'=>array('create')),
	array('label'=>'View GdAbsensi', 'url'=>array('view', 'id'=>$model->id_absen)),
	array('label'=>'Manage GdAbsensi', 'url'=>array('admin')),
);
?>

<h1>Update GdAbsensi <?php echo $model->id_absen; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>