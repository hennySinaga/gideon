<?php
/* @var $this GdAbsensiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Absensis',
);

$this->menu=array(
	array('label'=>'Create GdAbsensi', 'url'=>array('create')),
	array('label'=>'Manage GdAbsensi', 'url'=>array('admin')),
);
?>

<h1>Gd Absensis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
