<?php
/* @var $this GdGuruController */
/* @var $model GdGuru */

/* $this->breadcrumbs=array(
	'Gd Gurus'=>array('index'),
	$model->NIP,
); */

$this->menu=array(
	// array('label'=>'List GdGuru', 'url'=>array('index')),
	// array('label'=>'Create GdGuru', 'url'=>array('create')),
	// array('label'=>'Update GdGuru', 'url'=>array('update', 'id'=>$model->NIP)),
	// array('label'=>'Delete GdGuru', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NIP),'confirm'=>'Are you sure you want to delete this item?')),
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

<h1>Lihat Guru</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_user',
		'NIP',
		'nama',
		'alamat',
		'telepon',
		'jenis_kelamin',
		'agama',
		'tempat_lahir',
		'tanggal_lahir',
		'foto',
	),
)); ?>
