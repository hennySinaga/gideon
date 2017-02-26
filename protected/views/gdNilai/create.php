<?php
/* @var $this GdNilaiController */
/* @var $model GdNilai */

$this->breadcrumbs=array(
	'Gd Nilais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdNilai', 'url'=>array('index')),
	array('label'=>'Manage GdNilai', 'url'=>array('admin')),
);
?>

<h1>Create GdNilai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>