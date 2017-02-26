<?php
/* @var $this GdMtpelajaranController */
/* @var $model GdMtpelajaran */

$this->breadcrumbs=array(
	'Gd Mtpelajarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GdMtpelajaran', 'url'=>array('index')),
	array('label'=>'Manage GdMtpelajaran', 'url'=>array('admin')),
);
?>

<h1>Buat Mata Pelajaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>