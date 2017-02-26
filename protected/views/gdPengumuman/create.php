<?php
/* @var $this GdPengumumanController */
/* @var $model GdPengumuman */

$this->breadcrumbs=array(
	'Gd Pengumumen'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdPengumuman', 'url'=>array('index')),
	array('label'=>'Manage GdPengumuman', 'url'=>array('admin')),
);
?>

<h1>Create GdPengumuman</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>