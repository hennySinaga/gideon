<?php
/* @var $this GdTopikController */
/* @var $model GdTopik */

$this->breadcrumbs=array(
	'Gd Topiks'=>array('index'),
	$model->id_topik=>array('view','id'=>$model->id_topik),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdTopik', 'url'=>array('index')),
	array('label'=>'Create GdTopik', 'url'=>array('create')),
	array('label'=>'View GdTopik', 'url'=>array('view', 'id'=>$model->id_topik)),
	array('label'=>'Manage GdTopik', 'url'=>array('admin')),
);
?>

<h1>Update GdTopik <?php echo $model->id_topik; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>