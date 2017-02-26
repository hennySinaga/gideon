<?php
/* @var $this GdMuridController */
/* @var $model GdMurid */

/* $this->breadcrumbs=array(
	'Gd Murids'=>array('index'),
	$model->NIS,
); */

$this->menu=array(
	// array('label'=>'List GdMurid', 'url'=>array('index')),
	// array('label'=>'Create GdMurid', 'url'=>array('create')),
	// array('label'=>'Update GdMurid', 'url'=>array('update', 'id'=>$model->NIS)),
	// array('label'=>'Delete GdMurid', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NIS),'confirm'=>'Are you sure you want to delete this item?')),
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

<h1>Lihat Murid</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIS',
		'nama',
		'alamat',
		'telepon',
		'jenis_kelamin',
		'agama',
		'tempat_lahir',
		'tanggal_lahir',
		//'foto',
	),
)); ?>
