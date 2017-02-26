<?php
/* @var $this GdPengumumanController */
/* @var $model GdPengumuman */

$this->breadcrumbs=array(
	'Gd Pengumumen'=>array('index'),
	$model->id_pengumuman=>array('view','id'=>$model->id_pengumuman),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdPengumuman', 'url'=>array('index')),
	array('label'=>'Create GdPengumuman', 'url'=>array('create')),
	array('label'=>'View GdPengumuman', 'url'=>array('view', 'id'=>$model->id_pengumuman)),
	array('label'=>'Manage GdPengumuman', 'url'=>array('admin')),
);
?>

<h1>Update GdPengumuman <?php echo $model->id_pengumuman; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>