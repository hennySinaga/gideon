<?php
/* @var $this GdKelasController */
/* @var $model GdKelas */

$this->breadcrumbs=array(
	'Gd Kelases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdKelas', 'url'=>array('index')),
	array('label'=>'Manage GdKelas', 'url'=>array('admin')),
);
?>

<h1>Create GdKelas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>