<?php
/* @var $this GdMuridController */
/* @var $model GdMurid */

/* $this->breadcrumbs=array(
	'Gd Murids'=>array('index'),
	$model->NIS=>array('view','id'=>$model->NIS),
	'Update',
); */

$this->menu=array(
	// array('label'=>'List GdMurid', 'url'=>array('index')),
	// array('label'=>'Create GdMurid', 'url'=>array('create')),
	// array('label'=>'View GdMurid', 'url'=>array('view', 'id'=>$model->NIS)),
	// array('label'=>'Manage GdMurid', 'url'=>array('admin')),
	//staff menu
	array('label'=>'Beranda', 'url'=>array('admin')),
	array('label'=>'Pengumuman', 'url'=>array('admin')),
	array('label'=>'Guru', 'url'=>array('admin')),
	array('label'=>'Murid', 'url'=>array('admin')),
	array('label'=>'Kelas', 'url'=>array('admin')),
	array('label'=>'Profil', 'url'=>array('admin')),
);
?>

<h1>Ubah Murid</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>