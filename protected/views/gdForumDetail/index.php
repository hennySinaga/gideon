<?php
/* @var $this GdForumDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Forum Details',
);

$this->menu=array(
	array('label'=>'Create GdForumDetail', 'url'=>array('create')),
	array('label'=>'Manage GdForumDetail', 'url'=>array('admin')),
);
?>

<h1>Gd Forum Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
