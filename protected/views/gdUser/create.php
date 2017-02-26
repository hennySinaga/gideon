<?php
/* @var $this GdUserController */
/* @var $model GdUser */

$this->breadcrumbs=array(
	'Gd Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdUser', 'url'=>array('index')),
	array('label'=>'Manage GdUser', 'url'=>array('admin')),
);
?>

<h1>Create GdUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>