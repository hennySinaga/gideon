<?php
/* @var $this GdUserController */
/* @var $model GdUser */

$this->breadcrumbs=array(
	'Gd Users'=>array('index'),
	$model->id_user,
);

$this->menu=array(
	array('label'=>'List GdUser', 'url'=>array('index')),
	array('label'=>'Create GdUser', 'url'=>array('create')),
	array('label'=>'Update GdUser', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete GdUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GdUser', 'url'=>array('admin')),
);
?>

<h1>View GdUser #<?php echo $model->id_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'username',
		'password',
		'role',
	),
)); ?>
