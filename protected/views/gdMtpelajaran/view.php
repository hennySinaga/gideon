<?php
/* @var $this GdMtpelajaranController */
/* @var $model GdMtpelajaran */

$this->breadcrumbs=array(
	'Gd Mtpelajarans'=>array('index'),
	$model->id_mtpelajaran,
);

$this->menu=array(
	array('label'=>'List GdMtpelajaran', 'url'=>array('index')),
	array('label'=>'Create GdMtpelajaran', 'url'=>array('create')),
	array('label'=>'Update GdMtpelajaran', 'url'=>array('update', 'id'=>$model->id_mtpelajaran)),
	array('label'=>'Delete GdMtpelajaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mtpelajaran),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdMtpelajaran', 'url'=>array('admin')),
);
?>

<h1>View GdMtpelajaran #<?php echo $model->id_mtpelajaran; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mtpelajaran',
		'matapelajaran',
		'deskripsi',
	),
)); ?>
