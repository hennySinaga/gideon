<?php
/* @var $this GdGuruController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
	// 'Gd Gurus',
// );

$this->menu=array(
	// array('label'=>'Create GdGuru', 'url'=>array('create')),
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

<h1>Gd Gurus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
