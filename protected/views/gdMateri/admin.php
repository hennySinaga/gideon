<?php
/* @var $this GdMateriController */
/* @var $model GdMateri */

$this->breadcrumbs=array(
	'Gd Materis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GdMateri', 'url'=>array('index')),
	array('label'=>'Create GdMateri', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gd-materi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gd Materis</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gd-materi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_materi',
		'id_topik',
		'deskripsi',
		//'file_materi',
		array(
			'name'=>'file_materi',
			'type'=>'raw',
			'value'=>'CHtml::link($data->file_materi,Yii::app()->request->baseUrl.$data->file_materi)'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
