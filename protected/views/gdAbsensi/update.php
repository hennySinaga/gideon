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

<h1>Update Absensi <?php echo $modelKelas->kelas; ?></h1>

<?php $this->renderPartial('_formUpdate', array('model'=>$model,'modelKelas'=> $modelKelas,)); ?>