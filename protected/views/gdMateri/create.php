<?php
/* @var $this GdMateriController */
/* @var $model GdMateri */

$this->breadcrumbs=array(
	'Gd Materis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdMateri', 'url'=>array('index')),
	array('label'=>'Manage GdMateri', 'url'=>array('admin')),
);
?>

<h1>Create GdMateri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>