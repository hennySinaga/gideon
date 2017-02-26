<?php
/* @var $this GdKelasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Kelases',
);

$this->menu=array(
	array('label'=>'Create GdKelas', 'url'=>array('create')),
	array('label'=>'Manage GdKelas', 'url'=>array('admin')),
);
?>

<h1>Gd Kelases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
