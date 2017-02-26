<?php
/* @var $this GdPengumumanController */
/* @var $model GdPengumuman */

$this->breadcrumbs=array(
	'Gd Pengumumen'=>array('index'),
	$model->id_pengumuman,
);

$this->menu=array(
	array('label'=>'List GdPengumuman', 'url'=>array('index')),
	array('label'=>'Create GdPengumuman', 'url'=>array('create')),
	array('label'=>'Update GdPengumuman', 'url'=>array('update', 'id'=>$model->id_pengumuman)),
	array('label'=>'Delete GdPengumuman', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengumuman),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdPengumuman', 'url'=>array('admin')),
);
?>

<h1>View GdPengumuman #<?php echo $model->id_pengumuman; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pengumuman',
		'id_user',
		'tanggal',
		'judul',
		'pengumuman',
	),
)); ?>
