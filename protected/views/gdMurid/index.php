<?php
/* @var $this GdMuridController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Murids',
);

$this->menu=array(
	array('label'=>'Create GdMurid', 'url'=>array('create')),
	array('label'=>'Manage GdMurid', 'url'=>array('admin')),
);
?>

<h1>Gd Murids</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
