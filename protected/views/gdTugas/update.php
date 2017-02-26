<?php
/* @var $this GdTugasController */
/* @var $model GdTugas */

$this->breadcrumbs=array(
	'Gd Tugases'=>array('index'),
	$model->id_tugas=>array('view','id'=>$model->id_tugas),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdTugas', 'url'=>array('index')),
	array('label'=>'Create GdTugas', 'url'=>array('create')),
	array('label'=>'View GdTugas', 'url'=>array('view', 'id'=>$model->id_tugas)),
	array('label'=>'Manage GdTugas', 'url'=>array('admin')),
);
?>

<h1>Update GdTugas <?php echo $model->id_tugas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>