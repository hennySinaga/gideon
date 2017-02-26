<?php
/* @var $this GdMtpelajaranController */
/* @var $model GdMtpelajaran */

$this->breadcrumbs=array(
	'Gd Mtpelajarans'=>array('index'),
	$model->id_mtpelajaran=>array('view','id'=>$model->id_mtpelajaran),
	'Update',
);

$this->menu=array(
	array('label'=>'List GdMtpelajaran', 'url'=>array('index')),
	array('label'=>'Create GdMtpelajaran', 'url'=>array('create')),
	array('label'=>'View GdMtpelajaran', 'url'=>array('view', 'id'=>$model->id_mtpelajaran)),
	array('label'=>'Manage GdMtpelajaran', 'url'=>array('admin')),
);
?>

<h1>Update GdMtpelajaran <?php echo $model->id_mtpelajaran; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>