<?php
/* @var $this GdKelasController */
/* @var $model GdKelas */

$this->breadcrumbs=array(
	'Gd Kelases'=>array('index'),
	$model->id_kelas,
);

$this->menu=array(
	array('label'=>'List GdKelas', 'url'=>array('index')),
	array('label'=>'Create GdKelas', 'url'=>array('create')),
	array('label'=>'Update GdKelas', 'url'=>array('update', 'id'=>$model->id_kelas)),
	array('label'=>'Delete GdKelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kelas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdKelas', 'url'=>array('admin')),
);
?>

<h1>View GdKelas #<?php echo $model->id_kelas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kelas',
		'kelas',
	),
)); ?>
