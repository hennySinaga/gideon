<?php
/* @var $this GdUjianController */
/* @var $model GdUjian */

$this->breadcrumbs=array(
	'Gd Ujians'=>array('index'),
	$model->id_ujian=>array('view','id'=>$model->id_ujian),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdUjian', 'url'=>array('index')),
	array('label'=>'Create GdUjian', 'url'=>array('create')),
	array('label'=>'View GdUjian', 'url'=>array('view', 'id'=>$model->id_ujian)),
	array('label'=>'Manage GdUjian', 'url'=>array('admin')),
);
?>

<h1>Update GdUjian <?php echo $model->id_ujian; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>