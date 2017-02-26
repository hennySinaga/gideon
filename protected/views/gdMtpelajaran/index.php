<?php
/* @var $this GdMtpelajaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Mtpelajarans',
);

$this->menu=array(
	array('label'=>'Create GdMtpelajaran', 'url'=>array('create')),
	array('label'=>'Manage GdMtpelajaran', 'url'=>array('admin')),
);
?>

<h1>Gd Mtpelajarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
