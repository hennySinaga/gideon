<?php
/* @var $this GdTopikController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Topiks',
);

$this->menu=array(
	array('label'=>'Create GdTopik', 'url'=>array('create')),
	array('label'=>'Manage GdTopik', 'url'=>array('admin')),
);
?>

<h1>Gd Topiks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
