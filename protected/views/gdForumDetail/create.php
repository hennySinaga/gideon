<?php
/* @var $this GdForumDetailController */
/* @var $model GdForumDetail */

$this->breadcrumbs=array(
	'Gd Forum Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdForumDetail', 'url'=>array('index')),
	array('label'=>'Manage GdForumDetail', 'url'=>array('admin')),
);
?>

<h1>Create GdForumDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>