<?php
/* @var $this GdForumController */
/* @var $model GdForum */

/* $this->breadcrumbs=array(
	'Gd Forums'=>array('index'),
	'Manage',
); */

$this->menu=array(
	// array('label'=>'List GdForum', 'url'=>array('index')),
	// array('label'=>'Create GdForum', 'url'=>array('create')),
	//murid
	array('label'=>'Beranda', 'url'=>array('admin')),
	array('label'=>'Mata Pelajaran', 'url'=>array('admin')),
	array('label'=>'Jadwal', 'url'=>array('admin')),
	array('label'=>'Profil', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gd-forum-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Daftar Forum Sosiologi X</h1>

<!--p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p-->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gd-forum-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_forum',
		//'tanggal',
		//'id_user_pembuat',
		//'id_mtpelajaran',
		'judul',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
