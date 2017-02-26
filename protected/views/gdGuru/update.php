<?php
/* @var $this GdGuruController */
/* @var $model GdGuru */

/* $this->breadcrumbs=array(
	'Gd Gurus'=>array('index'),
	$model->NIP=>array('view','id'=>$model->NIP),
	'Update',
); */

$this->menu=array(
	// array('label'=>'List GdGuru', 'url'=>array('index')),
	// array('label'=>'Create GdGuru', 'url'=>array('create')),
	// array('label'=>'View GdGuru', 'url'=>array('view', 'id'=>$model->NIP)),
	// array('label'=>'Manage GdGuru', 'url'=>array('admin')),
	//staff menu
	array('label'=>'Beranda', 'url'=>array('admin')),
	array('label'=>'Pengumuman', 'url'=>array('admin')),
	array('label'=>'Guru', 'url'=>array('admin')),
	array('label'=>'Murid', 'url'=>array('admin')),
	array('label'=>'Kelas', 'url'=>array('admin')),
	array('label'=>'Profil', 'url'=>array('admin')),
);
?>

<h1>Ubah Guru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>