<?php
/* @var $this GdTopikController */
/* @var $model GdTopik */

$this->breadcrumbs=array(
	'Gd Topiks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdTopik', 'url'=>array('index')),
	array('label'=>'Manage GdTopik', 'url'=>array('admin')),
);
?>

<h1>Buat Topik</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'mMateri'=>$mMateri)); ?>