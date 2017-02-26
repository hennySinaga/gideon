<?php
/* @var $this GdKelasController */
/* @var $model GdKelas */

/* $this->breadcrumbs=array(
	'Gd Kelases'=>array('index'),
	'Create',
); */

$this->menu=array(
	// array('label'=>'List GdKelas', 'url'=>array('index')),
	// array('label'=>'Manage GdKelas', 'url'=>array('admin')),
	array('label'=>'Beranda', 'url'=>array('admin')),
	array('label'=>'Pengumuman', 'url'=>array('admin')),
	array('label'=>'Guru', 'url'=>array('admin')),
	array('label'=>'Murid', 'url'=>array('admin')),
	array('label'=>'Kelas', 'url'=>array('admin')),
	array('label'=>'Profil', 'url'=>array('admin')),
);
?>

<h1>Buat Kelas</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'GdMurid'=>$GdMurid, 'bodat'=>$bodat)); ?>