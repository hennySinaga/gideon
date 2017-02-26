<?php
/* @var $this GdJawabanController */
/* @var $model GdJawaban */

$this->breadcrumbs=array(
	'Gd Jawabans'=>array('index'),
	$model->id_jawaban,
);

$this->menu=array(
	array('label'=>'List GdJawaban', 'url'=>array('index')),
	array('label'=>'Create GdJawaban', 'url'=>array('create')),
	array('label'=>'Update GdJawaban', 'url'=>array('update', 'id'=>$model->id_jawaban)),
	array('label'=>'Delete GdJawaban', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jawaban),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdJawaban', 'url'=>array('admin')),
);
?>

<h1>View GdJawaban #<?php echo $model->id_jawaban; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jawaban',
		'id_murid',
		'tipe_soal',
		'id_soal',
		'file_jawaban',
	),
)); ?>
