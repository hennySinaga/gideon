<?php
/* @var $this GdMateriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Materis',
);

$this->menu=array(
	array('label'=>'Create GdMateri', 'url'=>array('create')),
	array('label'=>'Manage GdMateri', 'url'=>array('admin')),
);
?>

<h1>Gd Materis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
