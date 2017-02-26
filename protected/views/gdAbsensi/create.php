<?php
/* @var $this GdAbsensiController */
/* @var $model GdAbsensi */

$this->breadcrumbs=array(
	'Gd Absensis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdAbsensi', 'url'=>array('index')),
	array('label'=>'Manage GdAbsensi', 'url'=>array('admin')),
);
?>

<h1>Create GdAbsensi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>