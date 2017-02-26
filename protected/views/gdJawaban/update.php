<?php
/* @var $this GdJawabanController */
/* @var $model GdJawaban */

$this->breadcrumbs=array(
	'Gd Jawabans'=>array('index'),
	$model->id_jawaban=>array('view','id'=>$model->id_jawaban),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdJawaban', 'url'=>array('index')),
	array('label'=>'Create GdJawaban', 'url'=>array('create')),
	array('label'=>'View GdJawaban', 'url'=>array('view', 'id'=>$model->id_jawaban)),
	array('label'=>'Manage GdJawaban', 'url'=>array('admin')),
);
?>

<h1>Update GdJawaban <?php echo $model->id_jawaban; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>