<?php
/* @var $this GdTugasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Tugases',
);

$this->menu=array(
	array('label'=>'Create GdTugas', 'url'=>array('create')),
	array('label'=>'Manage GdTugas', 'url'=>array('admin')),
);
?>

<h1>Gd Tugases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
