<?php
/* @var $this GdJadwalController */
/* @var $model GdJadwal */

$this->breadcrumbs=array(
	'Gd Jadwals'=>array('index'),
	$model->id_jadwal=>array('view','id'=>$model->id_jadwal),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdJadwal', 'url'=>array('index')),
	array('label'=>'Create GdJadwal', 'url'=>array('create')),
	array('label'=>'View GdJadwal', 'url'=>array('view', 'id'=>$model->id_jadwal)),
	array('label'=>'Manage GdJadwal', 'url'=>array('admin')),
);
?>

<h1>Update GdJadwal <?php echo $model->id_jadwal; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>