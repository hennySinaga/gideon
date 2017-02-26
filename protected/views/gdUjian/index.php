<?php
/* @var $this GdUjianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Ujians',
);

$this->menu=array(
	array('label'=>'Create GdUjian', 'url'=>array('create')),
	array('label'=>'Manage GdUjian', 'url'=>array('admin')),
);
?>

<h1>Gd Ujians</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
