<?php
/* @var $this GdForumDetailController */
/* @var $model GdForumDetail */

$this->breadcrumbs=array(
	'Gd Forum Details'=>array('index'),
	$model->id_forum_detail=>array('view','id'=>$model->id_forum_detail),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdForumDetail', 'url'=>array('index')),
	array('label'=>'Create GdForumDetail', 'url'=>array('create')),
	array('label'=>'View GdForumDetail', 'url'=>array('view', 'id'=>$model->id_forum_detail)),
	array('label'=>'Manage GdForumDetail', 'url'=>array('admin')),
);
?>

<h1>Update GdForumDetail <?php echo $model->id_forum_detail; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>