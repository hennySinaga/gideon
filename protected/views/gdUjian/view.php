<?php
/* @var $this GdUjianController */
/* @var $model GdUjian */

$this->breadcrumbs=array(
	'Gd Ujians'=>array('index'),
	$model->id_ujian,
);

$this->menu=array(
	array('label'=>'List GdUjian', 'url'=>array('index')),
	array('label'=>'Create GdUjian', 'url'=>array('create')),
	array('label'=>'Update GdUjian', 'url'=>array('update', 'id'=>$model->id_ujian)),
	array('label'=>'Delete GdUjian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ujian),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdUjian', 'url'=>array('admin')),
);
?>

<h1>View GdUjian #<?php echo $model->id_ujian; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ujian',
		'tanggal',
		'id_mtpelajaran',
		'deskrispi',
		'file_soal_ujian',
	),
)); ?>
