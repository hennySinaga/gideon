<?php
/* @var $this GdForumController */
/* @var $model GdForum */

$this->breadcrumbs=array(
	'Gd Forums'=>array('index'),
	$model->id_forum=>array('view','id'=>$model->id_forum),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdForum', 'url'=>array('index')),
	array('label'=>'Create GdForum', 'url'=>array('create')),
	array('label'=>'View GdForum', 'url'=>array('view', 'id'=>$model->id_forum)),
	array('label'=>'Manage GdForum', 'url'=>array('admin')),
);
?>

<h1>Update GdForum <?php echo $model->id_forum; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>