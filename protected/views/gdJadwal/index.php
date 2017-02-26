<?php
/* @var $this GdJadwalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Jadwals',
);

$this->menu=array(
	array('label'=>'Create GdJadwal', 'url'=>array('create')),
	array('label'=>'Manage GdJadwal', 'url'=>array('admin')),
);
?>

<h1>Gd Jadwals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
