<?php
/* @var $this GdPengumumanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Pengumumen',
);

$this->menu=array(
	array('label'=>'Create GdPengumuman', 'url'=>array('create')),
	array('label'=>'Manage GdPengumuman', 'url'=>array('admin')),
);
?>

<h1>Gd Pengumumen</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
