<?php
/* @var $this GdJawabanController */
/* @var $model GdJawaban */

$this->breadcrumbs=array(
	'Gd Jawabans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdJawaban', 'url'=>array('index')),
	array('label'=>'Manage GdJawaban', 'url'=>array('admin')),
);
?>

<h1>Create GdJawaban</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>