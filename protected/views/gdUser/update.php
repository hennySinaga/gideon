<?php
/* @var $this GdUserController */
/* @var $model GdUser */

$this->breadcrumbs=array(
	'Gd Users'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdUser', 'url'=>array('index')),
	array('label'=>'Create GdUser', 'url'=>array('create')),
	array('label'=>'View GdUser', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage GdUser', 'url'=>array('admin')),
);
?>

<h1>Update GdUser <?php echo $model->id_user; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>