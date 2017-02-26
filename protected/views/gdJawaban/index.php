<?php
/* @var $this GdJawabanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Jawabans',
);

$this->menu=array(
	array('label'=>'Create GdJawaban', 'url'=>array('create')),
	array('label'=>'Manage GdJawaban', 'url'=>array('admin')),
);
?>

<h1>Gd Jawabans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
