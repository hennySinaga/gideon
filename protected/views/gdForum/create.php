<?php
/* @var $this GdForumController */
/* @var $model GdForum */

/* $this->breadcrumbs=array(
	'Gd Forums'=>array('index'),
	'Create',
); */

$this->menu=array(
	// array('label'=>'List GdForum', 'url'=>array('index')),
	// array('label'=>'Manage GdForum', 'url'=>array('admin')),
	//murid
	array('label'=>'Beranda', 'url'=>array('admin')),
	array('label'=>'Mata Pelajaran', 'url'=>array('admin')),
	array('label'=>'Jadwal', 'url'=>array('admin')),
	array('label'=>'Profil', 'url'=>array('admin')),
);
?>

<h1>Buat Forum Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>