<?php
/* @var $this GdNilaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Nilais',
);

$this->menu=array(
	array('label'=>'Create GdNilai', 'url'=>array('create')),
	array('label'=>'Manage GdNilai', 'url'=>array('admin')),
);
?>

<h1>Gd Nilais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
