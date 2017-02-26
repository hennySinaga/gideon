<?php
/* @var $this GdJadwalController */
/* @var $model GdJadwal */

$this->breadcrumbs=array(
	'Gd Jadwals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdJadwal', 'url'=>array('index')),
	array('label'=>'Manage GdJadwal', 'url'=>array('admin')),
);
?>

<h1>Create GdJadwal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>