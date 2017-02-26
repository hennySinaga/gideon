<?php
/* @var $this GdUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Users',
);

$this->menu=array(
	array('label'=>'Create GdUser', 'url'=>array('create')),
	array('label'=>'Manage GdUser', 'url'=>array('admin')),
);
?>

<h1>Gd Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
