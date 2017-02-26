<?php
/* @var $this GdKelasController */
/* @var $model GdKelas */

$this->breadcrumbs=array(
	'Gd Kelases'=>array('index'),
	$model->id_kelas=>array('view','id'=>$model->id_kelas),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdKelas', 'url'=>array('index')),
	array('label'=>'Create GdKelas', 'url'=>array('create')),
	array('label'=>'View GdKelas', 'url'=>array('view', 'id'=>$model->id_kelas)),
	array('label'=>'Manage GdKelas', 'url'=>array('admin')),
);
?>

<h1>Ubah Kelas <?php echo $model->kelas; ?></h1>

<?php $this->renderPartial('_formUpdate', array('model'=>$model,'id'=>$id)); ?>