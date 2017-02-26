<?php
/* @var $this GdJadwalController */
/* @var $model GdJadwal */

$this->breadcrumbs=array(
	'Gd Jadwals'=>array('index'),
	$model->id_jadwal,
);

$this->menu=array(
	array('label'=>'List GdJadwal', 'url'=>array('index')),
	array('label'=>'Create GdJadwal', 'url'=>array('create')),
	array('label'=>'Update GdJadwal', 'url'=>array('update', 'id'=>$model->id_jadwal)),
	array('label'=>'Delete GdJadwal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jadwal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdJadwal', 'url'=>array('admin')),
);
?>

<h1>View GdJadwal #<?php echo $model->id_jadwal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jadwal',
		'hari',
		'waktu_mulai',
		'waktu_selesai',
		'lokasi_kelas',
		'NIP',
		'id_kelas',
		'id_mtpelajaran',
	),
)); ?>
