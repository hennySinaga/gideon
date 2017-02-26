<?php
/* @var $this GdUjianController */
/* @var $model GdUjian */

$this->breadcrumbs=array(
	'Gd Ujians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdUjian', 'url'=>array('index')),
	array('label'=>'Manage GdUjian', 'url'=>array('admin')),
);
?>

<h1>Create GdUjian</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>