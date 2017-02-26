<?php
/* @var $this GdForumController */
/* @var $model GdForum */

$this->breadcrumbs=array(
	'Gd Forums'=>array('index'),
	$model->id_forum,
);

$this->menu=array(
	array('label'=>'List GdForum', 'url'=>array('index')),
	array('label'=>'Create GdForum', 'url'=>array('create')),
	array('label'=>'Update GdForum', 'url'=>array('update', 'id'=>$model->id_forum)),
	array('label'=>'Delete GdForum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_forum),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdForum', 'url'=>array('admin')),
);
?>

<h1>View GdForum #<?php echo $model->id_forum; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_forum',
		'tanggal',
		'id_user_pembuat',
		'id_mtpelajaran',
		'judul',
	),
)); ?>
