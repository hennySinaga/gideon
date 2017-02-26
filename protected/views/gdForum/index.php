<?php
/* @var $this GdForumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Forums',
);

$this->menu=array(
	array('label'=>'Create GdForum', 'url'=>array('create')),
	array('label'=>'Manage GdForum', 'url'=>array('admin')),
);
?>

<h1>Gd Forums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
