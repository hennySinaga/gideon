<?php
/* @var $this GdNilaiController */
/* @var $model GdNilai */

$this->breadcrumbs=array(
	'Gd Nilais'=>array('index'),
	$model->id_nilai=>array('view','id'=>$model->id_nilai),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdNilai', 'url'=>array('index')),
	array('label'=>'Create GdNilai', 'url'=>array('create')),
	array('label'=>'View GdNilai', 'url'=>array('view', 'id'=>$model->id_nilai)),
	array('label'=>'Manage GdNilai', 'url'=>array('admin')),
);
?>

<h1>Update GdNilai <?php echo $model->id_nilai; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>