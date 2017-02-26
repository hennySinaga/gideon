<?php
/* @var $this GdForumDetailController */
/* @var $model GdForumDetail */

$this->breadcrumbs=array(
	'Gd Forum Details'=>array('index'),
	$model->id_forum_detail,
);

$this->menu=array(
	array('label'=>'List GdForumDetail', 'url'=>array('index')),
	array('label'=>'Create GdForumDetail', 'url'=>array('create')),
	array('label'=>'Update GdForumDetail', 'url'=>array('update', 'id'=>$model->id_forum_detail)),
	array('label'=>'Delete GdForumDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_forum_detail),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdForumDetail', 'url'=>array('admin')),
);
?>

<h1>View GdForumDetail #<?php echo $model->id_forum_detail; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_forum_detail',
		'id_forum',
		'id_user',
		'postingan',
		'lampiran',
	),
)); ?>
