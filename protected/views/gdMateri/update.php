<?php
/* @var $this GdMateriController */
/* @var $model GdMateri */

$this->breadcrumbs=array(
	'Gd Materis'=>array('index'),
	$model->id_materi=>array('view','id'=>$model->id_materi),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdMateri', 'url'=>array('index')),
	array('label'=>'Create GdMateri', 'url'=>array('create')),
	array('label'=>'View GdMateri', 'url'=>array('view', 'id'=>$model->id_materi)),
	array('label'=>'Manage GdMateri', 'url'=>array('admin')),
);
?>

<h1>Update GdMateri <?php echo $model->id_materi; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>