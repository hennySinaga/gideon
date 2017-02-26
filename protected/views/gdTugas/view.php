<?php
/* @var $this GdTugasController */
/* @var $model GdTugas */

$this->breadcrumbs=array(
	'Gd Tugases'=>array('index'),
	$model->id_tugas,
);

$this->menu=array(
	array('label'=>'List GdTugas', 'url'=>array('index')),
	array('label'=>'Create GdTugas', 'url'=>array('create')),
	array('label'=>'Update GdTugas', 'url'=>array('update', 'id'=>$model->id_tugas)),
	array('label'=>'Delete GdTugas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tugas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdTugas', 'url'=>array('admin')),
);
?>

<h1>View GdTugas #<?php echo $model->id_tugas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tugas',
		'tanggal',
		'id_mtpelajaran',
		'deskrispi',
		'file_soal_tugas',
	),
)); ?>
