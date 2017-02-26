<?php
/* @var $this GdTugasController */
/* @var $model GdTugas */

$this->breadcrumbs=array(
	'Gd Tugases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdTugas', 'url'=>array('index')),
	array('label'=>'Manage GdTugas', 'url'=>array('admin')),
);
?>

<h1>Create GdTugas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>